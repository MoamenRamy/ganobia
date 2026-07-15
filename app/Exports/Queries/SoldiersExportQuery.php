<?php

namespace App\Exports\Queries;

use Illuminate\Support\Facades\DB;

class SoldiersExportQuery
{
    public function query()
    {
        return DB::table('soldiers')

            ->leftJoin('sectors', 'soldiers.sector_id', '=', 'sectors.id')

            ->leftJoin('units', 'soldiers.unit_id', '=', 'units.id')

            ->leftJoin('weapons', 'soldiers.weapon_id', '=', 'weapons.id')

            ->leftJoin(
                'specialties',
                'soldiers.specialization_id',
                '=',
                'specialties.id'
            )

            ->leftJoin(
                'governments',
                'soldiers.governorate_id',
                '=',
                'governments.id'
            )

            ->leftJoin(
                'places',
                'soldiers.attachment_id',
                '=',
                'places.id'
            )

            ->select([

                'soldiers.id', // مهم للـ Chunk

                'soldiers.military_number',

                'soldiers.rank',

                'soldiers.name',

                'sectors.name as sector',

                'units.name as unit',

                'weapons.name as weapon',

                'specialties.name as specialization',

                'soldiers.category',

                'soldiers.enlistment_date',

                'soldiers.discharge_date',

                'soldiers.birth_date',

                'soldiers.national_id',

                'soldiers.driving_license_grade',

                'soldiers.qualification',

                'soldiers.job_before_service',

                'soldiers.marital_status',

                'soldiers.male_children_count',

                'soldiers.female_children_count',

                'soldiers.mother_name',

                'soldiers.mother_job',

                'soldiers.father_job',

                'soldiers.phone_number',

                'soldiers.nearest_relative',

                'soldiers.nearest_relative_phone',

                'governments.name as governorate',

                'soldiers.address',

                'soldiers.height',

                'soldiers.weight',

                'soldiers.supply_date',

                'soldiers.notes',

                'soldiers.attendance',

                'places.name as attachment',

            ])

            ->orderBy('soldiers.id');
    }
}
