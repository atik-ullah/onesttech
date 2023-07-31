<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;





Route::get('/', function () {
    return view('dashboard.master');
});

//Hefajt

Route::get('/create/student',[StudentController::class, 'create'])->name('create');
Route::get('/index/student',[StudentController::class, 'index'])->name('index');
Route::post('/store/student',[StudentController::class, 'store'])->name('store');








//-----    Staff Manager Routes    ----->

Route::get('/department', [DepartmentController::class, 'showDept'])->name('showDept');

Route::get('/department/create', [DepartmentController::class, 'createDeptForm'])->name('createDeptForm');

Route::post('/department/create', [DepartmentController::class, 'createDept'])->name('createDept');














 

//-----    End Staff Manager Routes    ----->