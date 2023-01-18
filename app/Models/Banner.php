<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo_day',
        'photo_night',
        'title_uz',
        'title_ru',
        'title_en',
        'title2_uz',
        'title2_ru',
        'title2_en',
        'discription_uz',
        'discription_ru',
        'discription_en',
    ];
}
