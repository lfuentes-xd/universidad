<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alumnoController;
use App\Http\Controllers\carrerasController;
use App\Http\Controllers\materiasController;
use App\Http\Controllers\alumnos_materiasController;

Route::get('/', function () {
    return view('principal');
});

Route::resource('/alumnos', alumnoController::class);
Route::resource('/materias', materiasController::class);
Route::resource('/carreras', carrerasController::class);
Route::resource('/alumnos_materias', alumnos_materiasController::class);

