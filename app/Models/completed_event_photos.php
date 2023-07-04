<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class completed_event_photos extends Model
{
    use HasFactory;
    protected $fillable=[
        'acti_id',
        'photo'
    ];
}
