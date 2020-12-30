<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\jawabanController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', [AuthController::class, 'home']);
// Login
Route::get('/login', [AuthController::class, 'login']);
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/postregister', [AuthController::class, 'postregister']);
Route::get('/logout', [AuthController::class, 'logout']);

// untuk user
Route::middleware(['auth', 'role:users'])->group(function(){
    Route::get('/', [profileController::class, 'dashboard1']);
});

//middleware untuk role admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [profileController::class, 'dashboard']);
    // table pertanyaan
    Route::resource('Pertanyaan', PertanyaanController::class);
    Route::get('/pertanyaan/{show}', [profileController::class, 'ShowPertanyaan']); // show admin untuk pertanyaan user
    Route::get('/jawaban/{show}', [profileController::class, 'ShowJawaban']); // show admin untuk jawaban user
    Route::resource('profile', profileController::class);
    Route::delete('/hapus/{hapus}', [jawabanController::class, 'Destroy']);
    Route::resource('jawaban', jawabanController::class);
});


