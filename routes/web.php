<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('mahasiswa', 'index')->middleware('auth');
    Route::get('tambah-mahasiswa', 'create')->middleware('auth');;
    Route::post('tambah-mahasiswa', 'store')->middleware('auth');;
    Route::get('edit/{nim}', 'edit')->middleware('auth');;
    Route::put('update/{nim}', 'update')->middleware('auth');;
    Route::get('delete/{nim}', 'destroy')->middleware('auth');;
});
