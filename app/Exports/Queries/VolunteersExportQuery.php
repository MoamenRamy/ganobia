<?php

namespace App\Exports\Queries;

use Illuminate\Support\Facades\DB;

class VolunteersExportQuery
{
    public function query()
    {
        return DB::table('volunteers')

            ->leftJoin(
                'sectors',
                'volunteers.sector_id',
                '=',
                'sectors.id'
            )

            ->leftJoin(
                'units',
                'volunteers.unit_id',
                '=',
                'units.id'
            )

            ->leftJoin(
                'weapons',
                'volunteers.weapon_id',
                '=',
                'weapons.id'
            )

            ->leftJoin(
                'specialties',
                'volunteers.specialization_id',
                '=',
                'specialties.id'
            )

            ->leftJoin(
                'governments',
                'volunteers.governorate_id',
                '=',
                'governments.id'
            )

            ->leftJoin(
                'places',
                'volunteers.attachment_id',
                '=',
                'places.id'
            )

            ->select([

                /*
                |--------------------------------------------------------------------------
                | مهم للـ Chunk
                |--------------------------------------------------------------------------
                */

                'volunteers.id',

                /*
                |--------------------------------------------------------------------------
                | Volunteer Data
                |--------------------------------------------------------------------------
                */

                'volunteers.military_number',

                'volunteers.rank',

                'volunteers.name',

                'sectors.name as sector',

                'units.name as unit',

                'volunteers.batch_number',

                'volunteers.enlistment_date',

                'volunteers.high_salary_date',

                'volunteers.current_rank_date',

                'volunteers.southern_region_join_date',

                'volunteers.unit_join_date',

                'volunteers.educational_qualification',

                'weapons.name as weapon',

                'volunteers.category',

                'specialties.name as specialization',

                'volunteers.qualified',

                'volunteers.not_qualified',

                'volunteers.detention_count',

                'volunteers.imprisonment_count',

                'volunteers.court_cases_count',

                'volunteers.phone_number',

                'volunteers.relative_phone_number',

                'volunteers.national_id',

                'volunteers.birth_date',

                'volunteers.marital_status',

                'volunteers.children_count',

                'volunteers.male_children_count',

                'volunteers.female_children_count',

                'volunteers.village',

                'volunteers.center',

                'governments.name as governorate',

                'volunteers.weight',

                'volunteers.height',

                'volunteers.weight_difference',

                'places.name as attachment',

                'volunteers.previous_units',

                'volunteers.travel',

                'volunteers.medical_status',

                'volunteers.notes',

                'volunteers.reviewer',

            ])

            ->orderBy('volunteers.id');
    }
}