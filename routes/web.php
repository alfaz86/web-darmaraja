<?php

use App\Http\Controllers\HomePageController;
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
    return view('homepage.index');
})->name('homepage.index');

// Route::get('/login', function () {
//     return view('homepage.login');
// })->name('homepage.login');

// group profil-kecamatan
Route::group(['prefix' => 'profil-kecamatan'], function () {
    Route::get('/sejarah', [HomePageController::class, 'sejarah'])->name('profil-kecamatan.sejarah');

    Route::get('/luas-wilayah', [HomePageController::class, 'luasWilayah'])->name('profil-kecamatan.luas-wilayah');

    Route::get('/struktur-organisasi', [HomePageController::class, 'strukturOrganisasi'])->name('profil-kecamatan.struktur-organisasi');

    Route::get('/tupoksi', [HomePageController::class, 'tupoksi'])->name('profil-kecamatan.tupoksi');

    Route::get('/visi-misi', [HomePageController::class, 'visimisi'])->name('profil-kecamatan.visi-misi');
});

// group layanan-publik
Route::group(['prefix' => 'layanan-publik'], function () {
    
});

// group potensi-dan-wisata
Route::group(['prefix' => 'potensi-dan-wisata'], function () {
    Route::get('/wisata', function () {
        return view('homepage.potensi-dan-wisata.wisata');
    })->name('potensi-dan-wisata.wisata');
});