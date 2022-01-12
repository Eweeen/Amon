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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [AmonController::class, 'index'])->name('home');
Route::get('/team', [AmonController::class, 'team'])->name('team');
Route::get('/competition', [AmonController::class, 'competition'])->name('competition');
Route::get('/chat', [AmonController::class, 'chat'])->name('chat');
Route::get('/profil', [AmonController::class, 'profil'])->name('profil');
Route::get('/compte', [AmonController::class, 'compte'])->name('compte');
Route::get('/login', [AmonController::class, 'login'])->name('login');
Route::get('/register', [AmonController::class, 'register'])->name('register');
