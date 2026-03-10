<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\LoginController;

Route::get('/',[admincontroller::class, 'inicio'])->name('inicio.admin');
Route::post('/guardar',[admincontroller::class, 'guardar'])->name('guardar.admin');
Route::post('/eliminar/{id}',[admincontroller::class, 'eliminar'])->name('eliminar.admin');
Route::get('/mostrar/{id}', [admincontroller::class, 'mostrar'])->name('mostrar.persona');
Route::post('/modifica/{id}', [admincontroller::class, 'modifica'])->name('modifica.persona');

Route::get('/mascotas', [MascotaController::class, 'index'])->name('mascotas.index');
Route::post('/mascotas/guardar', [MascotaController::class, 'guardar'])->name('mascotas.guardar');
Route::post('/mascotas/eliminar/{id}', [MascotaController::class, 'eliminar'])->name('mascotas.eliminar');
Route::get('/mascotas/editar/{id}', [MascotaController::class, 'editar'])->name('mascotas.editar');
Route::post('/mascotas/actualizar/{id}', [MascotaController::class, 'actualizar'])->name('mascotas.actualizar');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');