<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\LandingController;


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

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('/landing/home');
    });
    Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
});






Route::get('/landing/home', [LandingController::class, 'home'])->name('landing.home');



Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
    Route::get('/landing/inputberita', [LandingController::class, 'inputberita'])->name('landing.inputberita');
    Route::get('/landing/inputdosen', [LandingController::class, 'inputdosen'])->name('landing.inputdosen');
    Route::get('/landing/inputkelulusan', [LandingController::class, 'inputkelulusan'])->name('landing.inputkelulusan');

    Route::get('/admin/tambah', [AdminController::class, 'tambah'])->name('admin.tambah');
    Route::get('/admin/editAdmin/{id}', [AdminController::class, 'editAdmin'])->name('admin.editAdmin');
    Route::get('/admin/deleteAdmin/{id}', [AdminController::class, 'deleteAdmin'])->name('admin.deleteAdmin');

    Route::get('/admin/buku', [AdminController::class, 'adminBuku'])->name('admin.buku');
    Route::get('/admin/tambahBuku', [AdminController::class, 'tambahBuku'])->name('admin.tambahBuku');
    Route::get('/admin/editBuku/{id}', [AdminController::class, 'editBuku'])->name('admin.editBuku');
    Route::get('/admin/deleteBuku/{id}', [AdminController::class, 'deleteBuku'])->name('admin.deleteBuku');

    Route::get('/admin/peminjaman/{id}', [AdminController::class, 'adminPeminjaman'])->name('admin.peminjaman');
    Route::get('/admin/tambahpeminjaman/{id}', [AdminController::class, 'tambahpeminjaman'])->name('admin.tambahpeminjaman');
    Route::get('/admin/editpeminjaman/{id}', [AdminController::class, 'editpeminjaman'])->name('admin.editpeminjaman');
    Route::get('/admin/deletepeminjaman/{id}', [AdminController::class, 'deletepeminjaman'])->name('admin.deletpeminjaman');
    Route::get('/admin/detailpeminjaman/{id}', [AdminController::class, 'detailpeminjaman'])->name('admin.detailpeminjaman');
    Route::get('/admin/cetakPeminjaman', [AdminController::class, 'cetakDataPeminjaman'])->name('admin.cetakDataPeminjaman');
    Route::get('/admin/dataadmin', [AdminController::class, 'dataadmin'])->name('admin.dataadmin');
});


Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
    Route::get('/landing/berita_rpl', [LandingController::class, 'berita_rpl'])->name('landing.berita_rpl');
    Route::get('/landing/profile_dosen', [LandingController::class, 'profile_dosen'])->name('landing.profile_dosen');
    Route::get('/landing/profile_kelulusan_rpl', [LandingController::class, 'profile_kelulusan_rpl'])->name('landing.profile_kelulusan_rpl');
    Route::get('/biodata', [LandingController::class, 'biodata'])->name('landing.biodata');
});

Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postBerita', [LandingController::class, 'postBerita'])->name('postBerita');
Route::post('/postDosen', [LandingController::class, 'postDosen'])->name('postDosen');
Route::post('/postKelulusan', [LandingController::class, 'postKelulusan'])->name('postKelulusan');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::post('/tambahAdmin', [AdminController::class, 'postTambahAdmin'])->name('postTambahAdmin');
Route::post('/postEditAdmin/{id}', [AdminController::class, 'postEditAdmin'])->name('postEditAdmin');

Route::post('/postTambahBuku', [AdminController::class, 'postTambahBuku'])->name('postTambahBuku');
Route::post('/postEditBuku/{id}', [AdminController::class, 'postEditBuku'])->name('postEditBuku');
Route::post('/postTambahpeminjaman/{id}', [AdminController::class, 'postTambahpeminjaman'])->name('postTambahPeminjaman');
Route::post('/postEditpeminjaman/{id}', [AdminController::class, 'postEditpeminjaman'])->name('postEditpeminjaman');
