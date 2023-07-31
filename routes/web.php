<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;





Route::get('/', function () {
    return view('dashboard.master');
});

<<<<<<< HEAD
//Hefajt

Route::any('/create/student',[StudentController::class, 'create'])->name('create');

=======
Route::get('/create/student',[StudentController::class, 'create'])->name('create');
>>>>>>> c262d8913cd2f90fee841256148e65a5e6e0d122
Route::get('/index/student',[StudentController::class, 'index'])->name('index');
Route::post('/store/student',[StudentController::class, 'store'])->name('student.store');

