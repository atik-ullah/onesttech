<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;





Route::get('/', function () {
    return view('dashboard.master');
});

Route::get('/create/student',[StudentController::class, 'create'])->name('create');
Route::get('/index/student',[StudentController::class, 'index'])->name('index');
Route::post('/store/student',[StudentController::class, 'store'])->name('student.store');