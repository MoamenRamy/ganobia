<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'enlistment_date' => 'date',
        'discharge_date' => 'date',
        'birth_date' => 'date',
        'supply_date' => 'date',
        'attendance' => 'boolean',
        'height' => 'decimal:2',
        'weight' => 'decimal:2',
    ];

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
