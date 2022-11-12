<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
});

//auth 

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);

//admin
Route::get('/berandaadmin', [AdminController::class, 'index']);
Route::get('/profiladmin', [AdminController::class, 'profiladmin']);
Route::get('/editprofiladmin', [AdminController::class, 'editprofil']);
Route::get('/ubahpwadmin', [AdminController::class, 'ubahpw']);
Route::get('/datapetugas', [AdminController::class, 'tampilpetugas']);
Route::get('/createpetugas', [AdminController::class, 'createpetugas'])->name("createpetugas");
Route::post('/tambahpetugas', [AdminController::class, 'storepetugas'])->name("tambahpetugas");
Route::get('/editpetugas/{id?}', [AdminController::class, 'editpetugas'])->name("editpetugas");
Route::post('/editpetugas/{id}', [AdminController::class, 'updatepetugas']);
Route::post('/destroypetugas/{id}', [AdminController::class, 'destroypetugas']);

//paket
Route::get('/datajenispaket', [AdminController::class, 'tampilpaket']);
Route::get('/createpaket', [AdminController::class, 'createpaket'])->name("createpaket");
Route::post('/tambahpaket', [AdminController::class, 'storepaket'])->name("tambahpaket");
Route::get('/editpaket/{id?}', [AdminController::class, 'editpaket'])->name("editpaket");
Route::post('/editpaket/{id}', [AdminController::class, 'updatepaket']);
Route::post('/destroypaket/{id}', [AdminController::class, 'destroypaket']);

//promo 
Route::get('/datapromo', [AdminController::class, 'tampilpromo']);
Route::get('/createpromo', [AdminController::class, 'createpromo'])->name("createpromo");;
Route::post('/tambahpromo', [AdminController::class, 'storepromo'])->name("tambahpromo");
Route::get('/editpromo/{id?}', [AdminController::class, 'editpromo'])->name("editpromo");
Route::post('/editpromo/{id}', [AdminController::class, 'updatepromo']);
Route::post('/destroypromo/{id}', [AdminController::class, 'destroypromo']);

//artikel
Route::get('/dataartikel', [AdminController::class, 'tampilartikel']);
Route::get('/createartikel', [AdminController::class, 'createartikel'])->name("createartikel");;
Route::post('/tambahartikel', [AdminController::class, 'storeartikel'])->name("tambahartikel");
Route::get('/editartikel/{id?}', [AdminController::class, 'editartikel'])->name("editartikel");
Route::post('/editartikel/{id}', [AdminController::class, 'updateartikel']);
Route::post('/destroyartikel/{id}', [AdminController::class, 'destroyartikel']);

//galeri
Route::get('/datagaleri', [AdminController::class, 'tampilgaleri']);
Route::get('/creategaleri', [AdminController::class, 'creategaleri'])->name("creategaleri");;
Route::post('/tambahgaleri', [AdminController::class, 'storegaleri'])->name("tambahgaleri");
Route::get('/editgaleri/{id?}', [AdminController::class, 'editgaleri'])->name("editgaleri");
Route::post('/editgaleri/{id}', [AdminController::class, 'updategaleri']);
Route::post('/destroygaleri/{id}', [AdminController::class, 'destroygaleri']);

Route::get('/datapenyewa', [AdminController::class, 'datapenyewa']);
Route::get('/datareservasiall', [AdminController::class, 'reservasiadm']);
Route::get('/detailreservasi/{id_reservasi}', [AdminController::class, 'detailreservasi']);
Route::get('/reservasi/cari',[AdminController::class, 'cari']);

Route::get('/laporan/carilaporan',[AdminController::class, 'carilaporan']);


Route::get('/datalaporan', [AdminController::class, 'datalaporan']);

Route::get('/ubahpwadmin', [AdminController::class, 'ubahpw']);
Route::get('/editprofiladmin', [AdminController::class, 'editprofil']);

//pengunjung
Route::get('/berandapengunjung', [PengunjungController::class, 'index']);
Route::get('/artikelpengunjung', [PengunjungController::class, 'artikel']);
Route::get('/detailartikel/{id_artikel}', [PengunjungController::class, 'detailartikel']);
Route::get('/detailartikellgn/{id_artikel}', [PengunjungController::class, 'detailartikellgn']);
Route::get('/galeripengunjung', [PengunjungController::class, 'galeri']);
Route::get('/jenispaketpengunjung', [PengunjungController::class, 'jenispaket']);
Route::get('/berandapengunjunglgn', [PengunjungController::class, 'beranda']);
Route::get('/artikelpengunjunglgn', [PengunjungController::class, 'artikellgn']);
Route::get('/galeripengunjunglgn', [PengunjungController::class, 'galerilgn']);
Route::get('/jenispaketpengunjunglgn', [PengunjungController::class, 'jenispaketlgn']);
Route::get('/reservasi', [PengunjungController::class, 'reservasi']);
Route::post('/reservasi', [PengunjungController::class, 'storereservasi']);
Route::get('/history', [PengunjungController::class, 'history']);
Route::get('/editreservasi/{id?}', [PengunjungController::class, 'editreservasi'])->name("editreservasi");

//petugas
Route::get('/berandapetugas', [PetugasController::class, 'index']);
Route::get('/datareservasipetugas', [PetugasController::class, 'reservasipetugas']);
Route::get('/tambahreservasipetugas', [PetugasController::class, 'tambahreservasipetugas']);
Route::get('/registersewa', [PetugasController::class, 'registersewa']);
Route::get('/detailreservasipetugas/{id_reservasi}', [PetugasController::class, 'detailreservasipetugas']);
Route::get('/reservasipetugas/cari',[PetugasController::class, 'carireservasiptg']);