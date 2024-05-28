<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Auth;
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
    return view('main');
});

Route::get('/characters', [CharacterController::class, 'show']);
Route::get('/character-page/{id}', [CharacterController::class, 'showchar']);

Route::get('/music-page', [MusicController::class, 'show']);



Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login-post', [AuthController::class, 'customLogin'])->name('login');

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin-panel', [AuthController::class, 'admin_index'])->name('admin-panel');
});

Route::group(['middleware' => ['verified']], function() {
    Route::get('/admin-panel/characters', [\App\Http\Controllers\Admin\CharacterController::class, 'index'])->name('chars');
    Route::get('/admin-panel', [AuthController::class, 'admin_index'])->name('admin-panel');
});
