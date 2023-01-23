<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributePlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'atribute_id',
        'size',
    ];

    public function plans()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function atributs()
    {
        return $this->belongsTo(Attribute::class, 'atribute_id');
    }
}
