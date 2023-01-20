<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;
    protected $fillable = [
        'building_id',
        'room_number',
    ];

    public function buildings()
    {
        return $this->belongsTo(Building::class, 'building_id');
    }

    public function plans()
    {
        return $this->hasMany(Plan::class, 'plan_id');
    }
}
