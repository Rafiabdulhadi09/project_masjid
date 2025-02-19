<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisimisiController;

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
    return view('user.index');
});

Route::get('/', [UserController::class, 'index'])->name('user');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/admin/visimisi', function () {
    return view('admin.crud_Visimisi');
});
Route::get('/admin/pengurus', [PengurusController::class, 'index'])->name('crud.pengurus');
Route::get('/edit/{id}/pengurus', [PengurusController::class, 'edit'])->name('edit.pengurus');
Route::post('/admin/pengurus/create', [PengurusController::class, 'create'])->name('create.pengurus');
Route::put('/admin/pengurus/{id}/update', [PengurusController::class, 'update'])->name('update.pengurus');

Route::get('/admin/visimisi', [VisimisiController::class, 'index'])->name('visimisi');
Route::post('/visimisi/create', [VisimisiController::class, 'create'])->name('visimisi.create');
Route::put('/update/{id}/data', [VisimisiController::class, 'update'])->name('update.data');

Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login/proses', [LoginController::class, 'login'])->name('proses.login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/admin/profile', [ProfileController::class, 'index'])->name('admin.profile');
    Route::get('/admin/pemasukan', [PemasukanController::class, 'index'])->name('admin.pemasukan');
    Route::post('/admin/transaksi', [PemasukanController::class, 'create'])->name('admin.transaksi');

    Route::get('pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran');
    Route::post('pengeluaran', [PengeluaranController::class, 'create'])->name('create.pengeluaran');
    Route::get('berita', [BeritaController::class, 'index'])->name('admin.berita');
    Route::get('tambah/berita', [BeritaController::class, 'tambah'])->name('tambah.berita');