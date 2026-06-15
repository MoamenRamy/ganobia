<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function attachmentPlace()
    {
        return $this->belongsTo(AttachmentPlace::class);
    }

    public function soldiers()
    {
        return $this->hasMany(Soldier::class);
    }

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }
}
