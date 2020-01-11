<?php


Auth::routes();
Route::get('/','BaseController@getIndex');
Route::get('category/{id}','CategoryController@getIndex');
Route::get('search','SearchController@getIndex');
Route::get('basket','BasketController@getIndex');
Route::get('basket/delete/{id}', 'BasketController@getDelete');
Route::post('order', 'OrderController@postIndex');
//home
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home','HomeController@postIndex');
Route::get('/home/edit/{id}', 'HomeController@getEdit');
Route::get('/home/delete/{id}', 'HomeController@getDelete');
Route::post('/home/edit/{id}', 'HomeController@postEdit');
//ajax
Route::post('/ajax/product', 'AjaxController@postIndex');

// всегда последний должен быть
Route::get('{url}','MaintextController@getIndex');
