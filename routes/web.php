<?php

use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\KatalogController;
use App\Http\Controllers\Admin\PeminjamanController;


Route::get('/', function () {
    return view('welcome');
});

// Dashboard User (Siswa)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard',[KatalogController::class,'index'])->name('dashboard');
    Route::post('/dashboard/pinjam',[KatalogController::class, 'store'])->name('user.pinjam');
});

// Dashboard Admin
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/dashboard', function () {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::middleware(['auth', 'verified'])->group(function (){
        Route::resource('/admin/user', UserController::class, ['as'=> 'admin']);
    });

    Route::resource('/admin/peminjaman', PeminjamanController::class,['as'=>'admin']);
    Route::patch('/admin/peminjaman/{peminjaman}/kembali',
    [PeminjamanController::class, 'updateStatus'])->name('admin.peminjaman.kembali');
});

// Route Peminjaman
Route::resource('peminjaman', PeminjamanController::class)->middleware('auth');

// Route Profile bawaan Breeze
Route::middleware('auth')->group(function () {
    Route::resource("/admin/buku", BukuController::class)->names("admin.buku");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';