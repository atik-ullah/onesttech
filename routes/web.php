<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\fees\GroupController;
use App\Http\Controllers\fees\TypeController;
use App\Http\Controllers\fees\MasterController;
use App\Http\Controllers\fees\AssignController;




Route::get('/', function () {
    return view('dashboard.master');
});


//Hefajt

Route::any('/create/student',[StudentController::class, 'create'])->name('create');
Route::get('/index/student',[StudentController::class, 'index'])->name('index');
Route::post('/store/student',[StudentController::class, 'store'])->name('student.store');

//Atik
Route::get('/groups/index',[GroupController::class, 'index'])->name('group.index');
Route::any('/groups/create',[GroupController::class, 'create']);
Route::post('/groups/store',[GroupController::class, 'store']);
Route::get('/groups/show',[GroupController::class, 'show']);
Route::get('/groups/edit/{id}',[GroupController::class, 'edit']);
Route::any('/groups/update/{id}',[GroupController::class, 'update']);
Route::get('/groups/delete/{id}',[GroupController::class, 'delete']);


Route::resource('/types',TypeController::class);
Route::any('/type/update/{id}',[TypeController::class, 'restore']);
Route::any('/type/delete/{id}',[TypeController::class, 'delete']);


Route::resource('/masters',MasterController::class);
Route::any('/master/update/{id}',[MasterController::class,'update']);
Route::any('/master/delete/{id}',[MasterController::class,'destroy']);


Route::resource('/assigns',AssignController::class);
Route::any('/assign/update/{id}',[AssignController::class,'update']);
Route::any('/assign/delete/{id}',[AssignController::class,'destroy']);
Route::get('/get-section-by-classId/{id}',[AssignController::class,'section']); //done
Route::any('/assign/collect',[AssignController::class,'collect']);
Route::any('/collectSearch',[AssignController::class,'searchCollect']);