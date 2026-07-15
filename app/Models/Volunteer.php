<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [

        'enlistment_date'      => 'date',
        'high_salary_date'     => 'date',
        'current_rank_date'    => 'date',
        'unit_join_date'       => 'date',
        'birth_date'           => 'date',

        'southern_region'      => 'boolean',
        'qualified'            => 'boolean',
        'not_qualified'        => 'boolean',
        'travel'               => 'string',
        'reviewed'             => 'boolean',

        'weight'              => 'decimal:2',
        'height'              => 'decimal:2',
        'weight_difference'   => 'decimal:2',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function weapon()
    {
        return $this->belongsTo(Weapon::class);
    }

    public function specialization()
    {
        return $this->belongsTo(Specialtie::class, 'specialization_id');
    }

    public function governorate()
    {
        return $this->belongsTo(Government::class, 'governorate_id');
    }

    public function attachment_place()
    {
        return $this->belongsTo(Place::class, 'attachment_id');
    }
}
