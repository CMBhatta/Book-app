<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;

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
Route::get('/book',[BookController::class,'index'])->name('book.index');
Route::get('/book/create',[BookController::class,'create'])->name('book.create');
Route::post('/book',[BookController::class,'store'])->name('book.store');
Route::get('/book/{id}',[BookController::class,'show'])->name('book.show');
Route::get('/book/{book}/edit',[BookController::class,'edit'])->name('book.edit');
Route::put('/book/{book}/update',[BookController::class,'update'])->name('book.update');
Route::delete('/book/{book}/destroy',[BookController::class,'destroy'])->name('book.destroy');
// Route for student folder
Route::get('/first',[StudentController::class,'first'])->name('school.home');
Route::get('/index',[StudentController::class,'index'])->name('school.index');
Route::get('/first/create',[StudentController::class,'create'])->name('school.create');
Route::post('/first',[StudentController::class,'store'])->name('school.store');
Route::get('/first/{school}/edit',[StudentController::class,'edit'])->name('school.edit');
Route::put('/first/{school}/update',[StudentController::class,'update'])->name('school.update');
Route::delete('/first/{school}/destroy',[StudentController::class,'destroy'])->name('school.destroy');
