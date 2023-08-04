<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DeatailController;
use App\Http\Controllers\SchoolclassController;
use App\Http\Controllers\SchoolstudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileController;

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
// Route for schoolfolder
Route::get('/first',[StudentController::class,'first'])->name('school.home');
Route::get('/index',[StudentController::class,'index'])->name('school.index');
Route::get('/first/create',[StudentController::class,'create'])->name('school.create');
Route::post('/first',[StudentController::class,'store'])->name('school.store');
Route::get('/first/{school}/edit',[StudentController::class,'edit'])->name('school.edit');
Route::put('/first/{school}/update',[StudentController::class,'update'])->name('school.update');
Route::delete('/first/{school}/destroy',[StudentController::class,'destroy'])->name('school.destroy');
// routes for students folder
Route::get('/details',[DeatailController::class,'index'])->name('students.index');
Route::get('/details/create',[DeatailController::class,'create'])->name('students.create');
Route::post('/details',[DeatailController::class,'store'])->name('students.store');
Route::get('/details/{details}/edit',[DeatailController::class,'edit'])->name('students.edit');
Route::put('/details/{details}/update',[DeatailController::class,'update'])->name('students.update');
Route::delete('/details/{details}/destroy',[DeatailController::class,'destroy'])->name('students.destroy');

Route::resources(['schoolclass'=>SchoolclassController::class]);
Route::resources(['schoolstudents'=>SchoolstudentController::class]);

// rote for mobiles and customer
Route::get('add-customer', [CustomerController::class, 'add_customer']);
Route::get('show-mobile/{id}', [CustomerController::class, 'show_mobile']);
Route::get('show-customer/{id}', [MobileController::class, 'show_customer']);


