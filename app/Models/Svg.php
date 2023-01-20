<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Svg extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'cordinates',
        'viewBox',
    ];

    public function projects()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function buildings()
    {
        return $this->hasMany(Building::class, 'svg_id');
    }
}
