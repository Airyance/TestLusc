<?php

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

Route::get('/', function () {
    
    return view('login');
});



Route::get('/login', function () {
    return view('login');
});
  Route::post('welcome','testController@test2');
  Route::post('test2','testController@test');
  Route::post('test','gestionPacienteController@validar');
  Route::get('welcome', 'viewsController@welcome'); 
  Route::get('login', 'viewsController@login'); 
  Route::get('realizarTest', 'viewsController@realizarTest'); 
  Route::get('paciente', 'viewsController@paciente');
  Route::get('gestion', 'viewsController@gestion'); 
  Route::get('test', 'viewsController@test');
  Route::get('test2', 'viewsController@test2');
  Route::get('usuario','viewsController@usuario');
  Route::post('gestion','sessionController@inicio');
  Route::post('diagnosticodetall','adminController@diagnostico');
  Route::get('editarPsicologo','viewsController@editarPsicologo');
  Route::post('editarPsicologo','adminController@editarPsicologo');
