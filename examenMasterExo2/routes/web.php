<?php

use App\Http\Controllers\MissionController;
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

Route::get('/', [MissionController::class,'index'])->name('home');
Route::get('/add', [MissionController::class,'add'])->name('add');
Route::post('/store', [MissionController::class,'store'])->name('store');
