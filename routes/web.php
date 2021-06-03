<?php

Route::get('/', function () {
    return view('welcome');
});

//Route::get('hello', function () {
//    echo 'Hello World !';
//});

Route::get('hello', 'PostsController@hello');
Route::get('index', 'PostsController@index');
Route::get('createForm', 'PostsController@createForm');
Route::post('post/create', 'PostsController@create');
Route::get('post/{id}/update-form', 'PostsController@updateForm');
Route::post('/post/update', 'PostsController@update');
Route::get('/post/{id}/delete', 'PostsController@delete');
