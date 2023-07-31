<?php

use App\Http\Controllers\AnggotaCoontroller;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('index');
});

// Route Login Start
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login-proses', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// Route Login End

Route::get('/anggota', [AnggotaCoontroller::class, 'index']);
Route::get('/cetak-all', [AnggotaCoontroller::class, 'cetak']);
