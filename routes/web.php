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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'web'],function(){
});

//usuario Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('usuario','\App\Http\Controllers\UsuarioController');
  Route::post('usuario/{id}/update','\App\Http\Controllers\UsuarioController@update');
  Route::get('usuario/{id}/delete','\App\Http\Controllers\UsuarioController@destroy');
  Route::get('usuario/{id}/deleteMsg','\App\Http\Controllers\UsuarioController@DeleteMsg');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//pessoa Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('pessoa','\App\Http\Controllers\PessoaController');
  Route::post('pessoa/{id}/update','\App\Http\Controllers\PessoaController@update');
  Route::get('pessoa/{id}/delete','\App\Http\Controllers\PessoaController@destroy');
  Route::get('pessoa/{id}/deleteMsg','\App\Http\Controllers\PessoaController@DeleteMsg');
});

//moradium Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('moradium','\App\Http\Controllers\MoradiumController');
  Route::post('moradium/{id}/update','\App\Http\Controllers\MoradiumController@update');
  Route::get('moradium/{id}/delete','\App\Http\Controllers\MoradiumController@destroy');
  Route::get('moradium/{id}/deleteMsg','\App\Http\Controllers\MoradiumController@DeleteMsg');
});
