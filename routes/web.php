<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ArtikelController,
    KategoriController,
    AuthController
};

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

Route::get('/', function () {return view('auth/login');})->name('login');
Route::get('/login', function () {return view('auth/login');})->name('login2');
Route::post('/register', function () {return view('auth/register');})->name('register');
Route::post('/login', [AuthController::class, "login"])->name('loginProses');

Route::group(['auth:sanctum'], function(){
    Route::middleware('role:admin')->prefix('admin')->group(function () {

        Route::get('/dashboard', [ArtikelController::class, "isi"])->name('dashboard');
        Route::get('/logout', [AuthController::class, "logout"])->name('logout');
        
        Route::get('/artikel', [ArtikelController::class, "index"])->name('artikel');
        Route::get('/addartikel', function () { return view('addartikel'); })->name('addartikel');
        Route::post('/saveartikel', [ArtikelController::class, "store"])->name('saveartikel');
        Route::get('/editartikel/{id}', [ArtikelController::class, "show"])->name('editartikel');
        Route::post('/updateartikel/{id}', [ArtikelController::class, "update"])->name('updateartikel');
        Route::get('/deleteartikel/{id}', [ArtikelController::class, "destroy"])->name('deleteartikel');
        
        Route::get('/kategori', [KategoriController::class, "index"])->name('kategori');
        Route::get('/addkategori', function () { return view('addkategori'); })->name('addkategori');
        Route::post('/savekategori', [KategoriController::class, "store"])->name('savekategori');
        Route::get('/editkategori/{id}', [KategoriController::class, "show"])->name('editkategori');
        Route::post('/updatekategori/{id}', [KategoriController::class, "update"])->name('updatekategori');
        Route::get('/deletekategori/{id}', [KategoriController::class, "destroy"])->name('deletekategori');

    });
});



