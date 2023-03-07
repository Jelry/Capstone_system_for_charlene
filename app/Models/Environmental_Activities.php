<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environmental_Activities extends Model
{
    use HasFactory;
    protected $fillable = [
        'act_name',
        'act_date',
        'act_category',
        'act_desc',
        'latlang',
        'lat',
        'lang',
    ];
}
