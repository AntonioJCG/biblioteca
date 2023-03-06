<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\PerfilController;

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

Route::get('/', LoginController::class) ->name('login');

Route::get('registro', RegistroController::class) ->name('registro');

Route::get('home', HomeController::class) ->name('home');

Route::get('biblioteca', [BibliotecaController::class, 'index']) ->name('biblioteca.index');

Route::get('biblioteca/{libro}', [BibliotecaController::class, 'show']) ->name('biblioteca.show');

Route::get('perfil', PerfilController::class) ->name('perfil');