<?php

use Illuminate\Http\Request;

//tambahkan ini
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');


Route::middleware(['jwt.verify'])->group(function(){
	Route::get('/book', 'BookController@index');
	Route::get('/book/{id}', 'BookController@show');
	Route::post('/book', 'BookController@store');
	Route::put('/book/{id}', 'BookController@update');
	Route::delete('/book/{id}', 'BookController@destroy');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
