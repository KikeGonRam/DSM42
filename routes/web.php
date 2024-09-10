<?php

use App\Http\Controllers\CrudController;
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

Route::get("/",[CrudController::class,"index"])->name("crud.index");

// Ruta para añadir alumno

Route::post('/registrar-alumno', [CrudController::class, 'create'])->name('crud.create');
