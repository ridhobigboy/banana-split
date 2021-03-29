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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/jawaban', [App\Http\Controllers\JawabanController::class, 'index'])->name('jawaban.index');

Route::get('/pertanyaan', [App\Http\Controllers\KuisionerController::class, 'index'])->name('pertanyaan.index');

Route::get('kelas', [App\Http\Controllers\KelasController::class, 'index'])->name('kelas.index');

Route::get('dosen', [App\Http\Controllers\DosenController::class, 'index'])->name('dosen.index');

Route::get('prodi', [App\Http\Controllers\ProdiController::class, 'index'])->name('prodi.index');

Route::get('matkul', [App\Http\Controllers\MatakuliahController::class, 'index'])->name('matakuliah.index');