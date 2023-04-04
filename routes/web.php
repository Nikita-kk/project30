<?php

use App\Http\Controllers\createController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 Route::get('category/create',[createController::class,'create'])->name('category.create');
 Route::post('category/store',[createController::class,'store'])->name('category.store');
 Route::get('category/table',[createController::class,'table'])->name('category.table');
 Route::get('category/edit/{id}',[createController::class,'edit'])->name('category.edit');
 Route::post('category/update/{id}',[createController::class,'update'])->name('category.update');
 Route::get('category/delete/{id}',[createController::class,'delete'])->name('category.delete');
