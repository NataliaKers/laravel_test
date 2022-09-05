<?php

use App\Http\Controllers\UserController;
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

Route::get('/user', [UserController::class, 'show_form'])->name('show_form');
Route::post('/user', [UserController::class, 'create_user'])->name('create_user');
Route::get('/users', [UserController::class, 'show_users'])->name('show_users');
