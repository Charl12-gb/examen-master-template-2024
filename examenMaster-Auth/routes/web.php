<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ModelController;

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

});

Route::get('/', [ModelController::class,'index'])->name('home');
Route::get('/add', [ModelController::class,'add'])->name('add');
Route::post('/store', [ModelController::class,'store'])->name('store');
