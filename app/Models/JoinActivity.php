<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'activity_id',
        'type_of_volunteer',
        'phone_number',
        'email',
        'org_name',
        'participants',
        'point_person_phone_number',
        'point_person_email',
    ];
}
