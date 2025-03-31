<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $fillable=[
        'name',
        'gender',
        'parent',
        'class',
        'house',
        'report_on',
        'deadline_date',
    ];
}
