<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TampilanController::class, 'index']);

// Bikin routing ke dashboard

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    // Buat route untuk peran admin dan manager
    Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
    });

    // Buat route untuk after_registrasi
    Route::get('/after_register', function () {
        return view('after_register');
    });
});

Route::get('/front', [FrontendController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
