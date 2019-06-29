<?php

use Illuminate\Http\Request;
use App\Usuario;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::middleware('api')->get('/user', function (Request $request) {
	return response()->json(Usuario::all());
});

Route::middleware('api')->post('/pessoa', function (Request $request) {
	$registro = json_decode($request->getContent(), true);
    return response()->json($registro);
});

Route::middleware('api')->post('/moradia', function (Request $request) {
	$registro = json_decode($request->getContent(), true);
    return response()->json($registro);
});
*/

Route::group(['middleware'=> 'api'],function(){
  //Route::resource('user','\App\Http\Controllers\API\ApiController');
  Route::get('user','\App\Http\Controllers\API\ApiController@user');
  Route::post('pessoa','\App\Http\Controllers\API\ApiController@pessoa');
  Route::post('moradia','\App\Http\Controllers\API\ApiController@moradia');
});
