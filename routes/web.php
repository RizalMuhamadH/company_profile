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
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/p','PostController@store')->name('post.store');
Route::get('/p/create','PostController@create')->name('post.create');
Route::get('/p/{id}/edit','PostController@edit')->name('post.edit');
Route::patch('/p/{id}','PostController@update')->name('post.update');
Route::get('/p_delete/{id}','PostController@destroy')->name('post.destroy');
Route::get('/p/read-all','PostController@getPosts');
Route::get('/post','PostController@index')->name('post');

Route::get('/home', 'HomeController@index')->name('home');
