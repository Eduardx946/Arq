<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('publicacao', 'TextoController',[ 
	'names' => [
		'index' => 'texto.inicio',
		'create'=> 'texto.criar',
		'store' => 'texto.salvar',
		'show' => 'texto.mostrar',
		'update'=> 'texto.atualizar',
		'destroy'=> 'texto.remover',
		'edit' => 'texto.editar'
	]
]);

Route::resource('foto', 'FotoController',[ 
	'names' => [
		'index' => 'foto.inicio',
		'create'=> 'foto.criar',
		'store' => 'foto.salvar',
		'show' => 'foto.mostrar',
		'update'=> 'foto.atualizar',
		'destroy'=> 'foto.remover',
		'edit' => 'foto.editar'
	]
]);

Route::resource('contato', 'ContatoController',[ 
	'names' => [
		'index' => 'contato.inicio',
		'create'=> 'contato.criar',
		'store' => 'contato.salvar',
		'show' => 'contato.mostrar',
		'update'=> 'contato.atualizar',
		'destroy'=> 'contato.remover',
		'edit' => 'contato.editar'
	]
]);

Route::resource('feed', 'FeedController',[ 
	'names' => [
		'index' => 'feed.inicio',
		'create'=> 'feed.criar',
		'store' => 'feed.salvar',
		'show' => 'feed.mostrar',
		'update'=> 'feed.atualizar',
		'destroy'=> 'feed.remover',
		'edit' => 'feed.editar'
	]
]);

Route::resource('perfil', 'PerfilController',[ 
	'names' => [
		'index' => 'perfil.inicio',
		'create'=> 'perfil.criar',
		'store' => 'perfil.salvar',
		'show' => 'perfil.mostrar',
		'update'=> 'perfil.atualizar',
		'destroy'=> 'perfil.remover',
		'edit' => 'perfil.editar'
	]
]);

Route::resource('galeria', 'GaleriaController',[ 
	'names' => [
		'index' => 'galeria.inicio',
		'create'=> 'galeria.criar',
		'store' => 'galeria.salvar',
		'show' => 'galeria.mostrar',
		'update'=> 'galeria.atualizar',
		'destroy'=> 'galeria.remover',
		'edit' => 'galeria.editar'
	]
]);

Route::resource('home', 'HomeController',[ 
	'names' => [
		'index' => 'home.inicio',
		'create'=> 'home.criar',
		'store' => 'home.salvar',
		'show' => 'home.mostrar',
		'update'=> 'home.atualizar',
		'destroy'=> 'home.remover',
		'edit' => 'home.editar'
	]
]);

Route::resource('dev', 'DevController',[ 
	'names' => [
		'index' => 'dev',
		'create'=> 'dev.criar',
		'store' => 'dev.salvar',
		'show' => 'dev.mostrar',
		'update'=> 'dev.atualizar',
		'destroy'=> 'dev.remover',
		'edit' => 'dev.editar'
	]
]);




Route::auth();


Route::get('/img/{nome}', 'FotoController@img')->name('img');


//Route::get('/perfil', 'PerfilController@index')->name('perfil');


//Route::get('/feed', 'FeedController@index')->name('feed');

//Route::get('/galeria', 'GaleriaController@index')->name('galeria');

//Route::get('/postarfoto', 'FotoController@index')->name('postarfoto');


//Route::get('/postartexto', 'TextoController@index')->name('postartexto');

//Route::get('/exibirtexto', 'TextoController@index')->name('exibirtexto');


//Route::get('/contato', 'ContatoController@index')->name('contato');

//Route::post('/adicionartexto', 'TextoController@store')->name('addtexto');

//Route::post('/adicionarfoto', 'FotoController@store')->name('addfoto');