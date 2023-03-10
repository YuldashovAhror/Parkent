<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Svg;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function svgs()
    {
        return $this->hasMany(Svg::class);
    }

}
