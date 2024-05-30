<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MediaController;

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

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/form-user', [AuthController::class, 'add'])->name('register-form');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [MediaController::class, 'medias'])->name('home');
    Route::get('/form-media', [MediaController::class, 'add'])->name('media-form');
    Route::post('/store-media', [MediaController::class, 'store'])->name('store-media');
});
