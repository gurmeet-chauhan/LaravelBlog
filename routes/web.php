<?php
use Illuminate\Http\Request;

Auth::routes();
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/home',function() {
    return redirect('/');
});

Route::get('/', 'PostsController@index');
Route::get('/create', 'PostsController@create');
Route::post('/create', 'PostsController@store');

Route::get('/{post}', 'PostsController@show');

Route::post('/delete', 'PostsController@destroy');

Route::get('/edit/{id}', 'PostsController@edit');

Route::post('/edit', 'PostsController@update');
Route::post('/comment','CommentsController@create');