<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\VisimisiController;
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
    return view('user.index');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/visimisi', function () {
    return view('admin.crud_Visimisi');
});
Route::get('/admin/visimisi', [VisimisiController::class, 'index'])->name('visimisi');
Route::post('/visimisi/create', [VisimisiController::class, 'create'])->name('visimisi.create');

Route::get('/tentang', function () {
    return view('user.tentang');
});
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login/proses', [LoginController::class, 'login'])->name('proses.login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

