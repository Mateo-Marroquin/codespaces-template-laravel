<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;

Route::get('/',[admincontroller::class, 'inicio'])->name('inicio.admin');
Route::post('/guardar',[admincontroller::class, 'guardar'])->name('guardar.admin');
Route::post('/eliminar/{id}',[admincontroller::class, 'eliminar'])->name('eliminar.admin');
Route::get('/mostrar/{id}', [admincontroller::class, 'mostrar'])->name('mostrar.persona');
Route::post('/modifica/{id}', [admincontroller::class, 'modifica'])->name('modifica.persona');