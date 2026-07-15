<?php

namespace App\Imports;

use Throwable;
use App\Models\Soldier;
use Illuminate\Database\Eloquent\Model;
use App\Imports\Lookup\LookupCache;
use App\Imports\Lookup\ExistingSoldiersCache;
use App\Imports\Mappers\SoldierExcelMapper;
use App\Imports\Services\ImportStatistics;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class SoldiersImport implements
    ToModel,
    WithHeadingRow,
    WithChunkReading,
    WithBatchInserts,
    WithUpserts,
    SkipsOnFailure,
    SkipsOnError,
    SkipsEmptyRows
    // ShouldQueue
{
    use SkipsFailures, SkipsErrors;

    protected SoldierExcelMapper $mapper;

    protected ImportStatistics $statistics;

    protected ExistingSoldiersCache $existing;

    public function __construct()
    {
        $this->statistics = new ImportStatistics();

        $lookup = new LookupCache();

        $this->mapper = new SoldierExcelMapper(
            $lookup,
            $this->statistics
        );

        $this->existing = new ExistingSoldiersCache();
    }

    /**
     * معالجة صف واحد
     */
    public function model(array $row): Model|array|null
    {
        try {

            // زيادة عدد الصفوف المقروءة
            $this->statistics->rowRead();

            // تحويل بيانات الإكسيل
            $data = $this->mapper->map(
                $row,
                $this->statistics->totalRows()
            );

            if (!$data) {
                return null;
            }

            /*
            |--------------------------------------------------------------------------
            | هل السجل موجود؟
            |--------------------------------------------------------------------------
            */

            if (
                $this->existing->exists(
                    $data['military_number']
                )
            ) {

                $this->statistics->updated();

            } else {

                $this->statistics->inserted();

                $this->existing->add(
                    $data['military_number']
                );

            }

            return new Soldier($data);

        } catch (Throwable $e) {

            $this->statistics->database(

                $this->statistics->totalRows(),

                $e->getMessage()

            );

            return null;
        }
    }

    /**
     * مفتاح الـ Upsert
     */
    public function uniqueBy(): string
    {
        return 'military_number';
    }

    /**
     * Batch Size
     */
    public function batchSize(): int
    {
        return 1000;
    }

    /**
     * Chunk Size
     */
    public function chunkSize(): int
    {
        return 1000;
    }

    /**
     * الحصول على الإحصائيات
     */
    public function statistics(): ImportStatistics
    {
        $this->statistics->finish();

        return $this->statistics;
    }
}
