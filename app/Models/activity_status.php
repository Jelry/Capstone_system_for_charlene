<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_status extends Model
{
    use HasFactory;
    protected $fillable= [
        'acti_id',
        'status'
    ];
}

