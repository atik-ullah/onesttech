<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('dashboard.master');
});

//-----    Staff Manager Routes    ----->

Route::get('/department', [DepartmentController::class, 'showDept'])->name('showDept');

Route::get('/department/create', [DepartmentController::class, 'createDeptForm'])->name('createDeptForm');

Route::post('/department/create', [DepartmentController::class, 'createDept'])->name('createDept');


