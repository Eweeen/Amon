<?php

use App\Http\Controllers\AmonController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/compte', '\App\Http\Controllers\UserController@data')->name('compte');
    Route::post('/update/links/{id}', '\App\Http\Controllers\UserController@updateLinks')->name('updateLinks');
    Route::post('/update/password/{id}', '\App\Http\Controllers\UserController@updatePassword')->name('updatePassword');

});

require __DIR__.'/auth.php';

Route::get('/', [AmonController::class, 'index'])->name('home');
Route::get('/team', [AmonController::class, 'team'])->name('team');
Route::get('/competition', [AmonController::class, 'competition'])->name('competition');
Route::get('/chat', '\App\Http\Controllers\ChatController@chat')->name('chat');
Route::get('/profil/{id}', [AmonController::class, 'profil'])->name('profil');
Route::get('/profil', [AmonController::class, 'profilNotFound'])->name('profilNotFound');

// Route::get('/login', [AmonController::class, 'login'])->name('login');
// Route::get('/register', [AmonController::class, 'register'])->name('register');
