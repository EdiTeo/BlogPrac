<?php

use Illuminate\Support\Facades\Route;
//necesitamos importar la carpeta controller
use App\Http\Controllers\Api\estudianteController;
use App\Http\Controllers\PostController;
//Route::get('/', function () {
  //  return view('welcome');
//});
 

//Route::resource('/', PostController::class) -> names([
  //  'index' => 'posts.index',
    //'create' => 'posts.create',
    //'store' => 'posts.store',
    //'show' => 'posts.show',
//]);
Route::get('/', function(){
  return view('layouts.index');
});//esta parte para muestra 
