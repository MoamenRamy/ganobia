<?php

namespace App\Imports;

use Throwable;
use App\Models\Volunteer;
use Illuminate\Database\Eloquent\Model;
use App\Imports\Lookup\LookupCache;
use App\Imports\Lookup\ExistingVolunteersCache;
use App\Imports\Mappers\VolunteerExcelMapper;
use App\Imports\Services\ImportStatistics;
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

class VolunteersImport implements
    ToModel,
    WithHeadingRow,
    WithChunkReading,
    WithBatchInserts,
    WithUpserts,
    SkipsOnFailure,
    SkipsOnError,
    SkipsEmptyRows
{
    use SkipsFailures, SkipsErrors;

    protected VolunteerExcelMapper $mapper;

    protected ImportStatistics $statistics;

    protected ExistingVolunteersCache $existing;

    public function __construct()
    {
        $this->statistics = new ImportStatistics();

        $lookup = new LookupCache();

        $this->mapper = new VolunteerExcelMapper(
            $lookup,
            $this->statistics
        );

        $this->existing = new ExistingVolunteersCache();
    }

    /**
     * معالجة صف واحد
     */
    public function model(array $row): Model|array|null
    {
        try {

            // عد الصف مرة واحدة فقط
            $this->statistics->rowRead();

            $data = $this->mapper->map(
                $row,
                $this->statistics->totalRows()
            );

            if (!$data) {
                return null;
            }

            if ($this->existing->exists($data['military_number'])) {

                $this->statistics->updated();

            } else {

                $this->statistics->inserted();

                $this->existing->add($data['military_number']);
            }

            return new Volunteer($data);

        } catch (Throwable $e) {

            $this->statistics->database(
                $this->statistics->totalRows(),
                $e->getMessage()
            );

            logger()->error(
                'Volunteer Import Error: ' . $e->getMessage()
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
     * الإحصائيات
     */
    public function statistics(): ImportStatistics
    {
        $this->statistics->finish();

        return $this->statistics;
    }
}
