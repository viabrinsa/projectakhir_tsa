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

//admin
Route::get('/berandaadmin', [AdminController::class, 'index']);
Route::get('/profiladmin', [AdminController::class, 'profiladmin']);

Route::get('/datapetugas', [AdminController::class, 'datapetugas']);
Route::get('/datapenyewa', [AdminController::class, 'datapenyewa']);
Route::get('/datareservasijrk', [AdminController::class, 'datareservasijrk']);
Route::get('/datareservasiapl', [AdminController::class, 'datareservasiapl']);
Route::get('/datareservasistr', [AdminController::class, 'datareservasistr']);
Route::get('/datajenispaket', [AdminController::class, 'datajenispaket']);
Route::get('/dataartikel', [AdminController::class, 'dataartikel']);
Route::get('/datapromo', [AdminController::class, 'datapromo']);
Route::get('/datalaporan', [AdminController::class, 'datalaporan']);
Route::get('/datagaleri', [AdminController::class, 'datagaleri']);

Route::get('/tambahjenispaket', [AdminController::class, 'tambahjenispaket']);
Route::get('/tambahpromo', [AdminController::class, 'tambahpromo']);
Route::get('/tambahartikel', [AdminController::class, 'tambahartikel']);
Route::get('/tambahpetugas', [AdminController::class, 'createpetugas']);
Route::get('/tambahgaleri', [AdminController::class, 'tambahgaleri']);

Route::get('/ubahpwadmin', [AdminController::class, 'ubahpw']);
Route::get('/editprofiladmin', [AdminController::class, 'editprofil']);
Route::get('/editpetugas', [AdminController::class, 'editpetugas']);
Route::get('/editjenispaket', [AdminController::class, 'editjenispaket']);
Route::get('/editpromo', [AdminController::class, 'editpromo']);
Route::get('/editartikel', [AdminController::class, 'editartikel']);
Route::get('/editgaleri', [AdminController::class, 'editgaleri']);

//pengunjung
Route::get('/berandapengunjung', [PengunjungController::class, 'index']);

//pengunjung
Route::get('/berandapetugas', [PetugasController::class, 'index']);
