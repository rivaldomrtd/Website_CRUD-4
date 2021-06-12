<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PasienController;

use Illuminate\Support\Facades\Route;

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
    return view('0135home');
});
Route::get('/dokter/cari', [DokterController::class, 'cari']);
Route::get('/pasien/cari', [PasienController::class, 'cari']);
Route::get('/kamar/cari', [KamarController::class, 'cari']);
Route::get('/exportdokter', [DokterController::class, 'dokterexport'])->name('exportdokter');
Route::get('/exportpasien', [PasienController::class, 'pasienexport'])->name('exportpasien');
Route::get('/exportkamar', [KamarController::class, 'kamarexport'])->name('exportkamar');

Route::resource('dokter', DokterController::class);
Route::resource('pasien', PasienController::class);
Route::resource('kamar', KamarController::class);
