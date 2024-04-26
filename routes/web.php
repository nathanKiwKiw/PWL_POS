<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;


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
    return view('welcome');
});

Route::get('/level',[LevelController::class,'index']);
Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/user',[UserController::class,'index'])->name('/user');
Route::get('/user/tambah',[UserController::class,'tambah'])->name('/user/tambah');
Route::get('/user/ubah/{id}',[UserController::class,'ubah'])->name('/user/ubah');
Route::get('/user/hapus{id}',[UserController::class,'hapus'])->name('/user/hapus');
Route::get('/user/tambah_simpan',[UserController::class,'tambah_simpan'])->name('/user/tambah_simpan');
Route::get('/kategori', [KategoriCOntroller::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');;
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::put('/kategori/update_save/{id}', [KategoriController::class, 'update_save'])->name('kategori.update_save');
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');