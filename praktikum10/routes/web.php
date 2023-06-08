<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
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
    return view('welcome');
});

// Bikin routing ke dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/home', [FrontendController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/produk/create', [ProdukController::class, 'create']);

Route::post('/produk/store', [ProdukController::class, 'store']);

Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);

Route::put('/produk/update/{id}', [ProdukController::class, 'update']);

Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);