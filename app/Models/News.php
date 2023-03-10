<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'title_uz',
        'title_ru',
        'title_en',
        'discription_uz',
        'discription_ru',
        'discription_en',
    ];
}
