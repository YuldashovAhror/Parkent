<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'building_id',
        'photo',
        'area',
        'room',
        'price',
    ];

    public function buildings()
    {
        return $this->belongsTo(Building::class, 'building_id');
    }

    public function atributeplans()
    {
        return $this->hasMany(AttributePlan::class);
    }

}
