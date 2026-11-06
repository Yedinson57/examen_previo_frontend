<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\AlumnoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('home'); })->name('home');

Route::get('profesors', [ProfesorController::class, 'index'])->name('profesor.index');
Route::get('profesor/create',[ProfesorController::class,'create'])->name('profesor.create');
Route::post('profesor', [ProfesorController::class, 'store'])->name('profesor.store');
Route::get('profesor/{profesor}', [ProfesorController::class, 'show'])->name('profesor.show');
Route::get('profesor/{profesor}/editar',[ProfesorController::class,'edit'])->name('profesor.edit');
Route::put('profesor/{profesor}', [ProfesorController::class, 'update'])->name('profesor.update');
Route::delete('profesor/{profesor}', [ProfesorController::class, 'destroy'])->name('profesor.destroy');

Route::get('modulos', [ModuloController::class, 'index'])->name('modulo.index');
Route::get('modulo/create',[ModuloController::class,'create'])->name('modulo.create');
Route::post('modulo', [ModuloController::class, 'store'])->name('modulo.store');
Route::get('modulo/{modulo}', [ModuloController::class, 'show'])->name('modulo.show');
Route::get('modulo/{modulo}/editar',[ModuloController::class,'edit'])->name('modulo.edit');
Route::put('modulo/{modulo}', [ModuloController::class, 'update'])->name('modulo.update');
Route::delete('modulo/{modulo}', [ModuloController::class, 'destroy'])->name('modulo.destroy');

Route::get('alumnos', [AlumnoController::class, 'index'])->name('alumno.index');
Route::get('alumno/create',[AlumnoController::class,'create'])->name('alumno.create');
Route::post('alumno', [AlumnoController::class, 'store'])->name('alumno.store');
Route::get('alumno/{alumno}', [AlumnoController::class, 'show'])->name('alumno.show');
Route::get('alumno/{alumno}/editar',[AlumnoController::class,'edit'])->name('alumno.edit');
Route::put('alumno/{alumno}', [AlumnoController::class, 'update'])->name('alumno.update');
Route::delete('alumno/{alumno}', [AlumnoController::class, 'destroy'])->name('alumno.destroy');