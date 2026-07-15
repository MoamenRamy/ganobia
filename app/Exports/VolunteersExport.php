<?php

namespace App\Exports;

use Illuminate\Database\Query\Builder;
use App\Exports\Mappers\VolunteerExportMapper;
use App\Exports\Queries\VolunteersExportQuery;
use App\Exports\Styles\VolunteersExportStyle;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class VolunteersExport implements
    FromQuery,
    WithHeadings,
    WithMapping,
    WithEvents,
    WithChunkReading,
    ShouldQueue
{
    use Exportable;

    protected VolunteerExportMapper $mapper;

    protected VolunteersExportQuery $query;

    public function __construct()
    {
        $this->mapper = new VolunteerExportMapper();
        $this->query = new VolunteersExportQuery();
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
    public function map(mixed $row): array
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
        return VolunteersExportStyle::events();
    }

    /**
     * Chunk Size
     */
    public function chunkSize(): int
    {
        return 5000;
    }
}
