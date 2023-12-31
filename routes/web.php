<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ReportPenjualanController;
use App\Http\Controllers\PersediaanBarangController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\DataPemesanController;
use App\Models\DataPemesan;

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

# ------ Unauthenticated routes ------ #
Route::get('/', [AuthenticatedSessionController::class, 'create']);
require __DIR__.'/auth.php';


# ------ Authenticated routes ------ #
Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [RouteController::class, 'dashboard'])->name('home'); # dashboard

    Route::prefix('profile')->group(function(){
        Route::get('/', [ProfileController::class, 'myProfile'])->name('profile');
        Route::put('/change-ava', [ProfileController::class, 'changeFotoProfile'])->name('change-ava');
        Route::put('/change-profile', [ProfileController::class, 'changeProfile'])->name('change-profile');
    }); # profile group

    Route::resource('users', UserController::class);
    Route::resource('report-penjualan', ReportPenjualanController::class);
    Route::resource('persediaan-barang', PersediaanBarangController::class);
    Route::resource('pengeluaran', PengeluaranController::class);
    Route::resource('pendapatan', PendapatanController::class);
    Route::resource('data-pemesan', DataPemesanController::class);
});
