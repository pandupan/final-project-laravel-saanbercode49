<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\KomentarController;

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





Route::group(['middleware' => ['auth']], function () {
    
    //CRUD Kategori
    Route::get('/kategori/create',[KategoriController::class, 'create']);
    Route::post('/kategori',[KategoriController::class, 'store']);
    Route::get('/kategori/{id}', [KategoriController::class, 'show']);
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/kategori/{id}', [KategoriController::class, 'update']);
    Route::delete('/kategori/{id}', [KategoriController::class, 'destroy']);

    route::get('/', [ProfileController::class, 'index']);
    Route::get('/profile/{id}/edit', [ProfileController::class, 'edit']);
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

    
    
    
    //CRUD Pertanyaan
    Route::resource('pertanyaan', PertanyaanController::class);
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    route::post('/komentar/{pertanyaan_id}', [KomentarController::class, 'create'] );

    
});

Route::get('/kategori',[KategoriController::class, 'index']);
Auth::routes();