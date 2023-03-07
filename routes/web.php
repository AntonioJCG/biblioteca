<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MetodosController;

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

Route::get('resultados', [BibliotecaController::class, 'show']) ->name('biblioteca.show');

Route::get('perfil', [PerfilController::class, 'showUsuario']) ->name('perfil');

Route::get('agregarLibro', [AdminController::class, 'create']) ->name('admin.create');

Route::get('modLibro', [AdminController::class, 'update']) ->name('admin.update');

Route::get('borrarLibro', [AdminController::class, 'delete']) ->name('admin.delete');

Route::post('metodo/create', [MetodosController::class, 'store']) ->name('metodo.store');

Route::put('metodo/{libro}', [MetodosController::class, 'update']) ->name('metodo.update');

Route::delete('metodo/{id}', [MetodosController::class, 'destroy']) ->name('metodo.destroy');