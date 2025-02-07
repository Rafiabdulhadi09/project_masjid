<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\PengurusController;
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
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/visimisi', function () {
    return view('admin.crud_Visimisi');
});
Route::get('/admin/pengurus', [PengurusController::class, 'index'])->name('crud.pengurus');
Route::get('/edit/pengurus', [PengurusController::class, 'edit'])->name('edit.pengurus');
Route::post('/admin/pengurus/create', [PengurusController::class, 'create'])->name('create.pengurus');

Route::get('/admin/visimisi', [VisimisiController::class, 'index'])->name('visimisi');
Route::post('/visimisi/create', [VisimisiController::class, 'create'])->name('visimisi.create');
Route::put('/update/{id}/data', [VisimisiController::class, 'update'])->name('update.data');

Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login/proses', [LoginController::class, 'login'])->name('proses.login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

