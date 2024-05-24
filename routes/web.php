<?php

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

Route::get('/admin/admin-auth', []);
