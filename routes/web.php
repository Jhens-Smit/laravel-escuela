<?php

use App\Http\Controllers\alumnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\asignaturaController;
use App\Http\Controllers\inscripcionController;
use App\Http\Controllers\profesorController;

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
//Route::get('/', [asignaturaController::class, 'index']);
Route::get('/', function () {
    return view('auth.login');
});
Route::resource('/asignaturas', asignaturaController::class)->names('asignatura')->middleware('auth');
Route::resource('/profesores', profesorController::class)->names('profesor')->middleware('auth');
Route::resource('/alumnos', alumnoController::class)->names('alumno')->middleware('auth');
Route::resource('/inscripciones', inscripcionController::class)->names('inscripcion')->middleware('auth');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>'auth'],function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

