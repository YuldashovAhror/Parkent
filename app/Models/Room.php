<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'name_uz',
        'name_ru',
        'name_en',
        'room_area',
    ];

    public function plans()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }
}
