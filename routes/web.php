<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\fees\GroupController;





Route::get('/', function () {
    return view('dashboard.master');
});

//Hefajt

Route::get('/create/student',[StudentController::class, 'create'])->name('create');
<<<<<<< HEAD
Route::get('/index/student',[StudentController::class, 'index'])->name('index');
=======
Route::get('/index/student',[StudentController::class, 'index'])->name('index');
Route::post('/store/student',[StudentController::class, 'store'])->name('store');























 

//-----    End Staff Manager Routes    ----->
>>>>>>> ee8de7ff6616b582fec102cafaea0458e68370be
