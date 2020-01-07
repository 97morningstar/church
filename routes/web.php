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
Route::get('test', function(){
	$user = new App\User;
	$user->name = 'Elisa';
	$user->email = '97morningstar@gmail.com';
	$user->password = bcrypt('elisa1997');
	$user->save();

	return $user;
});

Route::get('/', function () {
    return view('templates.menu');
});

Route::get('/eventos', function(){
	return view('layout.eventos');
});

Route::get('/horarios', function(){
	return view('templates.horarios');
});

Route::get('/quienessomos', function(){
	return view('layout.quienessomos');
});

Route::get('/nuestros_principios', function(){
	return view('layout.nuestrosprincipios');
});

Route::get('/vision', function(){
	return view('layout.vision');
});

Route::get('/mision', function(){
	return view('layout.mision');
});

Route::get('/valores', function(){
	return view('layout.valores');
});

Route::get('/en_que_creemos', function(){
	return view('layout.en_que_creemos');
});

Route::get('/lideres', function(){
	return view('layout.lideres');
});

Route::get('/contactos', ['as' => 'contacto', 'uses' => 'ContactController@index']);

Route::post('/contactos/store', ['as' => 'contacto.store', 'uses' => 'ContactController@store']);



Route::get('/galeria', function(){
	return view('templates.galeria');
});

Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);

Route::post('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/panel', ['as' => 'panel', 'uses' => 'EventsController@index']);

Route::get('/panel/show_events', ['as' => 'panel.show_events', 'uses' => 'EventsController@showAll']);
Route::get('/panel/create_event', ['as' => 'panel.create_event', 'uses' => 'EventsController@create']);
Route::post('/panel/store_event', ['as' => 'panel.store_event', 'uses' => 'EventsController@store']);
Route::get('/panel/event/{id}/edit', ['as' => 'panel.event_edit', 'uses' => 'EventsController@edit']);
Route::put('/panel/event/{id}', ['as' => 'panel.event_update', 'uses' => 'EventsController@update']);
Route::delete('/panel/event/{id}', ['as' => 'panel.event_destroy', 'uses' => 'EventsController@destroy']);



Route::get('/contactos/googlee6e038e50dee42fb.html', function(){
	return view('templates.googlee6e038e50dee42fb');
});