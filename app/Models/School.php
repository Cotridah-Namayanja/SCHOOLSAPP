<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public $fillable=[
        'name', 
        'location',
        // 'email',
    ];
}
