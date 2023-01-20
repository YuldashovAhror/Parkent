<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'name',
        'photo',
        'svg',
    ];

    public function svgs()
    {
        return $this->hasMany(Svg::class, 'svg_id');
    }

}
