<?php
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
Route::get('/', 'HomeController@index');

Route::resource('entrenadores', 'EntrenadoresController');
 
/*
Route::get('equipos', function () {
    return 'Listado de equipos';
});
Route::get('equipos/show/{id}', function($id) {
    return "detalle del equipo $id";
});
Route::get('equipos/create', function($id) {
    return "Crear equipo";
});
Route::get('equipos/edit/{id}', function($id) {
    return "Modificar equipo {id}";
});
Route::get('jugadores', function() {
    return "Listado de jugadores";
});
Route::get('jugadores/show/{id}', function($id) {
    return "Detalle de jugador {id}";
});
Route::get('jugadores/create', function() {
    return "Crear jugador";
});
Route::get('jugadores/edit/{id}', function() {
    return "Modificar jugador {id}";
});
Route::get('entrenadores', function() {
    return view('entrenadores/listaEntrenadores');
});
Route::get('deportistas', function() {
    return view('deportistas/listaDeportistas');
});
*/

/*
Route::get('deportistas/crear', function() {
    return view('deportistas.create');
});

Route::get('entrenadores/crear', function() {
    return view('entrenadores.create');
});
*/