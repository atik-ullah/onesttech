<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GaurdianController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\SectionController;





Route::get('/', function () {
    return view('dashboard.master');
});

//Hefajt
//Students Route
Route::any('/create/student',[StudentController::class, 'create'])->name('create');
Route::get('/index/student',[StudentController::class, 'index'])->name('index');
Route::post('/store/student',[StudentController::class, 'store'])->name('store');
Route::get('/show/student',[StudentController::class, 'show'])->name('show');
Route::get('/edit/student/{id}',[StudentController::class, 'edit'])->name('edit');
Route::post('/update/student/{id}',[StudentController::class, 'update'])->name('update');
Route::get('/destroy/student/{id}',[StudentController::class, 'destroy'])->name('destroy');

Route::get('/disable/student',[StudentController::class, 'disable'])->name('disable');
Route::get('/getSection/{id}',[StudentController::class,'section'])->name('section');

Route::post('/search/student',[StudentController::class, 'search'])->name('search');

//Students Category Route

Route::get('/category/student',[StudentController::class, 'StudentCategory'])->name('StudentCategory');



//Guardians
Route::get('/index/gardian',[GaurdianController::class, 'gardianIndex'])->name('gardianIndex');
Route::any('/create/gardian',[GaurdianController::class, 'gardianCreate'])->name('gardianCreate');
Route::post('/store/gardian',[GaurdianController::class, 'gardianStore'])->name('gardianStore');
Route::get('/show/gardian',[GaurdianController::class, 'gardianShow'])->name('gardianShow');
Route::get('/edit/gardian/{id}',[GaurdianController::class, 'gardianEdit'])->name('gardianEdit');
Route::post('/update/gardian/{id}',[GaurdianController::class, 'gardianUpdate'])->name('gardianUpdate');
Route::get('/destroy/gardian/{id}',[GaurdianController::class, 'gardianDestroy'])->name('gardianDestroy');

//Class
Route::get('/index/class',[ClassesController::class, 'classIndex'])->name('classIndex');
Route::any('/create/class',[ClassesController::class, 'classCreate'])->name('classCreate');
Route::post('/store/class',[ClassesController::class, 'classStore'])->name('classStore');
Route::get('/show/class',[ClassesController::class, 'classShow'])->name('classShow');
Route::get('/edit/class/{id}',[ClassesController::class, 'classEdit'])->name('classEdit');
Route::post('/update/class/{id}',[ClassesController::class, 'classUpdate'])->name('classUpdate');
Route::get('/destroy/class/{id}',[ClassesController::class, 'classDestroy'])->name('classDestroy');


//section
Route::get('/index/section',[SectionController::class, 'sectionIndex'])->name('sectionIndex');
Route::any('/create/section',[SectionController::class, 'sectionCreate'])->name('sectionCreate');
Route::post('/store/section',[SectionController::class, 'sectionStore'])->name('sectionStore');
Route::get('/show/section',[SectionController::class, 'sectionShow'])->name('sectionShow');
Route::get('/edit/section/{id}',[SectionController::class, 'sectionEdit'])->name('sectionEdit');
Route::post('/update/section/{id}',[SectionController::class, 'sectionUpdate'])->name('sectionUpdate');
Route::get('/destroy/section/{id}',[SectionController::class, 'sectionDestroy'])->name('sectionDestroy');

Route::get('/getSection/{id}',[SectionController::class,'section'])->name('section');

//shift
Route::get('/index/shift',[ShiftController::class, 'shiftIndex'])->name('shiftIndex');
Route::any('/create/shift',[ShiftController::class, 'shiftCreate'])->name('shiftCreate');
Route::post('/store/shift',[ShiftController::class, 'shiftStore'])->name('shiftStore');
Route::get('/show/shift',[ShiftController::class, 'shiftShow'])->name('shiftShow');
Route::get('/edit/shift/{id}',[ShiftController::class, 'shiftEdit'])->name('shiftEdit');
Route::post('/update/shift/{id}',[ShiftController::class, 'shiftUpdate'])->name('shiftUpdate');
Route::get('/destroy/shift/{id}',[ShiftController::class, 'shiftDestroy'])->name('shiftDestroy');