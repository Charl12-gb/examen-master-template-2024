<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [AuthController::class, 'index'])->name('login-index');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/form-user', [AuthController::class, 'add'])->name('register-form');
    Route::get('/users', [AuthController::class, 'users'])->name('users');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::get('/form-menu', [MenuController::class, 'add'])->name('menu-form');
    Route::get('/menus', [MenuController::class, 'menus'])->name('menus');
    Route::post('/store-menu', [MenuController::class, 'store'])->name('store-menu');


    Route::get('/home', [OrderController::class,'index'])->name('home');
    Route::get('/add', [OrderController::class,'add'])->name('add');
    Route::post('/store', [OrderController::class,'store'])->name('store');
});
