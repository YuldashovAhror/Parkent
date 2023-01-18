<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondAbout extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'text_uz',
        'text_ru',
        'text_en'
    ];
}
