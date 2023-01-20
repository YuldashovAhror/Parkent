<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'apartment_id',
        'photo',
        'area',
        'price',
    ];

    public function apartments()
    {
        return $this->belongsTo(Apartment::class, 'apartment_id');
    }

    public function rooms()
    {
        return $this->hasMany(Room::class, 'plan_id');
    }

}
