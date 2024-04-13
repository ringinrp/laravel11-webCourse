<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseStudent extends Model
{
    use HasFactory, SoftDeletes;

    protected $fileable = [
        'user_id',
        'course_id',
    ];

    //course student menjadi pivot table jadi tidak usah diatur relasinya
}
