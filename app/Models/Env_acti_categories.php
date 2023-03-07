<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Env_acti_categories extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_name',
        'category_desc',
    ];
}
