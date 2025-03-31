<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolsController;
use App\Http\Controllers\StudentController;

Route::get('/', [SchoolsController::class,'index'])->name('schoollist');

Route::get('/new-sch', [SchoolsController::class,'create'])->name('newschool');
Route::post('/new-sch', [SchoolsController::class,'store'])->name('schools.store');

Route::resource('/students', StudentController::class);

