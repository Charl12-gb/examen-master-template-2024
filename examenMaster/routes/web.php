<?php

use App\Http\Controllers\ModelController;
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

Route::get('/', [ModelController::class,'index'])->name('home');
Route::get('/add', [ModelController::class,'add'])->name('add');
Route::post('/store', [ModelController::class,'store'])->name('store');
