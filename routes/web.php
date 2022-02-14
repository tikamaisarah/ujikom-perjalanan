<?php

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
    return view('welcome');
});
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
// });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboarduser', [App\Http\Controllers\DashboardUserController::class, 'index'])->name('dashboarduser');
Route::get('/lokasi', [App\Http\Controllers\LokasiController::class, 'index'])->name('lokasi');
Route::get('/masyarakat', [App\Http\Controllers\MasyarakatController::class, 'index'])->name('masyarakat');
Route::get('/datatransaksi', [App\Http\Controllers\DataTransaksiController::class, 'index'])->name('datatransaksi');
Route::get('/laporan', [App\Http\Controllers\LaporanController::class, 'index'])->name('laporan');
Route::get('/isiperjalanan', [App\Http\Controllers\IsiPerjalananController::class, 'index'])->name('isiperjalanan');
Route::get('/catatan', [App\Http\Controllers\CatatanController::class, 'index'])->name('catatan');
