<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\AngsuranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

/*P
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Authenticate Page
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']); //->middleware('auth') 
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth') ;



// Simpanan Page
Route::get('/simpanan', [SimpananController::class, 'index'])->middleware('auth');
Route::get('/tambah-simpanan', [SimpananController::class, 'create'])->middleware('auth');




// Pinjaman Page
Route::get('/pinjaman', [PinjamanController::class, 'index'])->middleware('auth');
Route::get('/tambah-pinjaman', [PinjamanController::class, 'create'])->middleware('auth');



// Angsuran Page
Route::get('/angsuran', [AngsuranController::class, 'index'])->middleware('auth');
Route::get('/tambah-angsuran', [AngsuranController::class, 'create'])->middleware('auth');



// Profile Page
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/edit-profile', [ProfileController::class, 'index'])->middleware('auth');




// User Page
Route::get('/user-list', [UserController::class, 'index'])->middleware('auth');
Route::get('/tambah-user', [UserController::class, 'create'])->middleware('auth');
Route::post('/tambah-user', [UserController::class, 'store'])->middleware('auth');