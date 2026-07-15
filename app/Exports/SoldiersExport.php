<?php

namespace App\Exports;

use App\Models\Soldier;
use Illuminate\Database\Query\Builder;
use App\Exports\Mappers\SoldierExportMapper;
use App\Exports\Queries\SoldiersExportQuery;
use App\Exports\Styles\SoldiersExportStyle;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SoldiersExport implements
    FromQuery,
    WithHeadings,
    WithMapping,
    WithEvents,
    WithChunkReading,
    ShouldQueue
{
    use Exportable;

    protected SoldierExportMapper $mapper;

    protected SoldiersExportQuery $query;

    public function __construct()
    {
        $this->mapper = new SoldierExportMapper();

        $this->query = new SoldiersExportQuery();
    }

    /**
     * Query
     */
    public function query(): Builder
    {
        return $this->query->query();
    }

    /**
     * Mapping
     */
    public function map($row): array
    {
        return $this->mapper->map($row);
    }

    /**
     * Headings
     */
    public function headings(): array
    {
        return $this->mapper->headings();
    }

    /**
     * Register Events
     */
    public function registerEvents(): array
    {
        return SoldiersExportStyle::events();
    }

    /**
     * Chunk Size
     */
    public function chunkSize(): int
    {
        return 5000;
    }
}
