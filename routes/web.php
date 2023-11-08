<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\BeritaLulusanDosenController;
use App\Http\Controllers\InputBeritaController;
use App\Http\Controllers\InputDosenController;
use App\Http\Controllers\AdminController;


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
    return view('home');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
});

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
    Route::get('/ksi/berita', [BeritaLulusanDosenController::class, 'berita'])->name('ksi.berita');
    Route::get('/ksi/lulusan', [BeritaLulusanDosenController::class, 'lulusan'])->name('ksi.lulusan');
    Route::get('/ksi/dosen', [BeritaLulusanDosenController::class, 'dosen'])->name('ksi.dosen');

});

Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');


Route::get('/input/berita', [InputBeritaController::class, 'berita'])->name('input.berita');
Route::get('/input/dosen', [InputDosenController::class, 'dosen'])->name('input.dosen');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
