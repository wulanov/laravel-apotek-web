<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\view;
use Illuminate\Routing\ViewController;
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

// 
Route::get('/', [ObatController::class, 'home']);

Route::get('/tampil', [ObatController::class,'tampil']);

Route::get('/add', [ObatController::class, 'tampiltambah']);
Route::post('/addd', [ObatController::class, 'tambahObat']);
Route::get('/search', [ObatController::class, 'search']);

Route::get('/tedit/{id}', [ObatController::class, 'tampiledit']);
Route::post('/edit/{id}', [ObatController::class, 'edit']);

Route::get('/deskripsi/{id}',[ObatController::class, 'deskripsi']);
Route::get('/delete/{id}',[ObatController::class, 'delete']);

Route::get('/tampilt', [TransaksiController::class,'tampiltransaksi']);

Route::get('/beli/{id}', [TransaksiController::class, 'beli']);
Route::post('/cart/{id}', [TransaksiController::class, 'addtocart']);

Route::get('/riwayat', [TransaksiController::class, 'riwayat']);
Route::get('/multi/{id}',[TransaksiController::class, 'multi']);
