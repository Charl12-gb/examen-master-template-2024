<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocumentController;

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

Route::get('/login', [AuthController::class, 'index'])->name('login-index');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/form', [AuthController::class, 'add'])->name('register-form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DocumentController::class,'index'])->name('home');
    Route::get('/add', [DocumentController::class,'add'])->name('add');
    Route::post('/store', [DocumentController::class,'store'])->name('store');
});

