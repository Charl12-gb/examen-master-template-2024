<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\CompetenceController;

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

Route::get('/form-competence', [CompetenceController::class, 'add'])->name('competence-form');
Route::get('/competences', [CompetenceController::class, 'competences'])->name('competences');
Route::post('/store-competence', [CompetenceController::class, 'store'])->name('store-competence');
