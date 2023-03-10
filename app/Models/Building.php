<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable = [
        'svg_id',
        'name_uz',
        'name_ru',
        'name_en',
    ];

    public function plans()
    {
        return $this->hasMany(Plan::class, 'building_id');
    }

    public function svgs()
    {
        return $this->hasMany(Svg::class,);
    }
}
