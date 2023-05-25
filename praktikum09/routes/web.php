<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;


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

Route::get('/salam', function () {
    return "Halo Semua";
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai'); 
});

Route::get('/pasien', function () {
    return view('pasien');
});

// Route form
Route::get('/form', [FormController::class, 'index']);
// Route hasil
Route::post('/hasil', [FormController::class, 'hasil'])->name('hasil');
// Route skill
Route::get('/skill', [SkillController::class, 'index']);
// Route hasil
Route::post('/skillhasil', [SkillController::class, 'skillhasil'])->name('skillhasil');