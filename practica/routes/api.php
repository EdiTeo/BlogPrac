<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\estudianteController;
use App\Models\Estudiante;

Route::get('/estudiante',[estudianteController::class,'llamando']);

//para crearlos acutializarlo eliminarlos 
Route::post('/estudiante', [estudianteController::class, 'Creando']);

  Route::get('/estudiante/{id}', function(){
    return "Obteniendo estudiante";
  });

Route::put('/estudiante/{id}', function(){
    return "Actualizando estudiante";
  });

  Route::delete('/estudiante/{id}', function(){
    return "Eliminando estudiante";
  });