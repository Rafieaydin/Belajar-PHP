<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PertanyaanController;
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

Route::get('/', function () {
    return view('table.table');
});
Route::get('/data-tables', function () {
    return view('table.data');
});

// Route::get('/user', [UserController::class, 'index']);
Route::get('/pertanyaan', [PertanyaanController::class, 'index']);

// tambah
Route::get('/pertanyaan/create', [PertanyaanController::class, 'create']);
Route::post('/pertanyaan', [PertanyaanController::class, 'store']);

// detail
Route::get('/pertanyaan/{pertanyaan_id}', [PertanyaanController::class, 'show']);

// edit
Route::get('/pertanyaan/{pertanyaan_id}/edit', [PertanyaanController::class, 'edit']);
Route::put('/pertanyaan/{pertanyaan_id}', [PertanyaanController::class, 'update']);

// hapus
Route::delete('/pertanyaan/{pertanyaan_id}', [PertanyaanController::class, 'destroy']);
