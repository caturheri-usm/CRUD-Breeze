<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matkul;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    $mhs        = Mahasiswa::count();
    $dosen      = Dosen::count();
    $matkul     = Matkul::count();
    return view('dashboard', compact('mhs','dosen','matkul'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('mahasiswa', 'index')->middleware('auth');
    Route::get('tambah-mahasiswa', 'create')->middleware('auth');
    Route::post('tambah-mahasiswa', 'store')->middleware('auth');
    Route::get('edit/{nim}', 'edit')->middleware('auth');
    Route::put('update/{nim}', 'update')->middleware('auth');
    Route::get('delete/{nim}', 'destroy')->middleware('auth');
});

Route::controller(DosenController::class)->group(function(){
    Route::get('dosen', 'index')->middleware('auth');
    Route::get('tambah-dosen', 'create')->middleware('auth');
    Route::post('tambah-dosen', 'store')->middleware('auth');
    Route::get('edit-dosen/{nidn}', 'edit')->middleware('auth');
    Route::put('update-dosen/{nidn}', 'update')->middleware('auth');
    Route::get('delete-dosen/{nidn}', 'destroy')->middleware('auth');
});

Route::controller(MatkulController::class)->group(function(){
    Route::get('matkul', 'index')->middleware('auth');
    Route::get('tambah-matkul', 'create')->middleware('auth');
    Route::post('tambah-matkul', 'store')->middleware('auth');
    Route::get('ubah/{kode}', 'edit')->middleware('auth');
    Route::put('update-matkul/{kode}', 'update')->middleware('auth');
    Route::get('delete-matkul/{kode}', 'destroy')->middleware('auth');
});
