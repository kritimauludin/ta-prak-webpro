<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GovandaController;

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



Route::get('/' ,[GovandaController::class, 'index'] )->name('pegawai');

Route::get('/tambahpegawai' ,[GovandaController::class, 'tambahpegawai'] )->name('tambahpegawai');
Route::post('/insertdata' ,[GovandaController::class, 'insertdata'] )->name('insertdata');

Route::get('/tampilkandata/{id}' ,[GovandaController::class, 'tampilkandata'] )->name('tampilkandata');
Route::post('/updatedata/{id}' ,[GovandaController::class, 'updatedata'] )->name('updatedata');

Route::get('/delete/{id}' ,[GovandaController::class, 'delete'] )->name('delete');
