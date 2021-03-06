<?php

use Illuminate\Http\Request;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['serializer:array', 'bindings']
],function($api) {
    //user register
    $api->post('users', 'UsersController@store')->name('api.users.store');
    //cinemas list
    $api->get('cinemas', 'CinemasController@index')->name('api.cinemas.index');
    //movies list
    $api->get('movies', 'MoviesController@index')->name('api.movies.index');
    //post session
    $api->post('sessions', 'SessionsController@store')->name('api.sessions.store');
    //update session
    $api->patch('sessions/{session}', 'SessionsController@update')->name('api.sessions.update');
    //delete session
    $api->delete('sessions/{session}', 'SessionsController@destroy')
    ->name('api.sessions.delete');
});
