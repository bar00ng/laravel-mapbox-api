<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapboxController;

Route::get('/',[MapboxController::class,'index'])->name('index');
Route::post('/save',[MapboxController::class,'store_location'])->name('store.loc');
Route::delete('/del/{id}',[MapboxController::class,'remove_location'])->name('del.loc');
Route::get('/get/{id}',[MapboxController::class,'get_location'])->name('get.loc');
Route::patch('/patch/{id}',[MapboxController::class,'edit_location'])->name('edit.loc');