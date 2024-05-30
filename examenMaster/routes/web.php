<?php

use App\Http\Controllers\MyModelController;
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


// Route::get('/', function () {
//     return view('layout.index');
// })->name('home');

Route::get('/', [MyModelController::class,'index'])->name('home');
Route::get('/add', [MyModelController::class,'add'])->name('add');
Route::post('/store', [MyModelController::class,'store'])->name('store');
Route::get('/show/{id}', [MyModelController::class,'show'])->name('show');
Route::delete('/destroy/{id}', [MyModelController::class,'destroy'])->name('destroy');
Route::get('/edit/{id}', [MyModelController::class,'edit'])->name('edit');
Route::post('/update/{id}', [MyModelController::class,'update'])->name('update');
