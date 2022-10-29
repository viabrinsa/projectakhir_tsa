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
Route::get('/editprofiladmin', [AdminController::class, 'editprofil']);
Route::get('/ubahpwadmin', [AdminController::class, 'ubahpw']);
Route::get('/datapetugas', [AdminController::class, 'datapetugas']);
Route::get('/tambahpetugas', [AdminController::class, 'createpetugas']);
Route::get('/editpetugas', [AdminController::class, 'editpetugas']);
Route::get('/datapenyewa', [AdminController::class, 'datapenyewa']);
Route::get('/datareservasijrk', [AdminController::class, 'datareservasijrk']);
Route::get('/datareservasiapl', [AdminController::class, 'datareservasiapl']);
Route::get('/datareservasistr', [AdminController::class, 'datareservasistr']);
Route::get('/datajenispaket', [AdminController::class, 'datajenispaket']);
Route::get('/datapromo', [AdminController::class, 'datapromo']);
Route::get('/tambahjenispaket', [AdminController::class, 'tambahjenispaket']);
Route::get('/tambahpromo', [AdminController::class, 'tambahpromo']);

//pengunjung
Route::get('/berandapengunjung', [PengunjungController::class, 'index']);

//pengunjung
Route::get('/berandapetugas', [PetugasController::class, 'index']);
