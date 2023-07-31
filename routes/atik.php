<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fees\GroupController;


///Atik///
Route::get('/groups/index',[GroupController::class, 'index'])->name('group.index');
Route::get('/groups/create',[GroupController::class, 'create']);
// Route::post('/groups',[GroupController::class, 'store'])->name('group.store');
// Route::get('/groups',[GroupController::class, 'edit'])->name('group.edit');
// Route::get('/groups',[GroupController::class, 'update'])->name('group.update');
// Route::get('/groups',[GroupController::class, 'delete'])->name('group.delete');