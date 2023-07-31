<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\fees\GroupController;





Route::get('/', function () {
    return view('dashboard.master');
});

//Hefajt

Route::any('/create/student',[StudentController::class, 'create'])->name('create');

Route::get('/index/student',[StudentController::class, 'index'])->name('index');

Route::post('/store/student',[StudentController::class, 'store'])->name('store');