<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AmonController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AdminController;
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

    Route::get('/compte', [UserController::class, 'index']);
    Route::post('/update/links/{id}', [UserController::class, 'updateLinks'])->name('updateLinks');
    Route::post('/update/password/{id}', [UserController::class, 'updatePassword'])->name('updatePassword');

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::post('/admin/slide', [AdminController::class, 'add_slide']);
        Route::delete('/admin/delete/slide/{id}', [AdminController::class, 'delete_slide']);

        Route::get('/admin/team', [AdminController::class, 'admin_membres'])->name('admin.team');
        Route::post('/admin/team/create', [AdminController::class, 'add_membres']);
        Route::delete('/admin/team/delete/{id}', [AdminController::class, 'delete_membres']);

        Route::get('/admin/actus', [AdminController::class, 'admin_actus'])->name('actus');
        Route::post('/admin/actus/create', [AdminController::class, 'add_actus']);
        Route::delete('/admin/actus/delete/{id}', [AdminController::class, 'delete_actus']);
    });

});

require __DIR__.'/auth.php';

Route::get('/', [AmonController::class, 'index'])->name('home');
Route::get('/team', [AmonController::class, 'team'])->name('team');
Route::get('/competition', [AmonController::class, 'competition'])->name('competition');

Route::resource('/chat', ChatController::class);

Route::get('/profil/{id}', [AmonController::class, 'profil'])->name('profil');

Route::get('/articles', [AmonController::class, 'articles'])->name('articles');
Route::get('/article/{id}', [AmonController::class, 'article']);