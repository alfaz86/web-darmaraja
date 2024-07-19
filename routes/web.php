<?php

use App\Http\Controllers\Admin\PublicComplaintCrudController;
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
    Route::get('produk-layanan', [HomePageController::class, 'produkLayanan'])->name('layanan-publik.produk-layanan');
    Route::get('pengaduan-publik', [HomePageController::class, 'pengaduanPublik'])->name('layanan-publik.pengaduan-publik');
    Route::post('pengaduan-publik', [PublicComplaintCrudController::class, 'store'])->name('layanan-publik.pengaduan-publik');
});

// group potensi-dan-wisata
Route::group(['prefix' => 'potensi-dan-wisata'], function () {
    Route::get('/komoditas-unggulan', [HomePageController::class, 'komoditasUnggulan'])->name('potensi-dan-wisata.komoditas-unggulan');
    Route::get('/wisata', [HomePageController::class, 'wisata'])->name('potensi-dan-wisata.wisata');
});