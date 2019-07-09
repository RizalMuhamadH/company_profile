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
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Auth::routes();

Route::get('/', 'WelcomeController@index');

Route::get('/blog', 'BlogController@index');
Route::get('/b/{id}', 'BlogController@show');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:Super Admin']], function () {
        Route::resource('/role', 'RoleController')->except([
            'create', 'show', 'edit', 'update',
        ]);

        Route::get('/role/{id}', 'RoleController@destroy');
        Route::get('/r/all', 'RoleController@getRoles');

        Route::resource('/users', 'UserController')->except([
            'show',
        ]);

        Route::get('/users/roles/{id}', 'UserController@roles')->name('users.roles');
        Route::patch('/users/roles/{id}', 'UserController@setRole')->name('users.set_role');
        Route::post('/users/permission', 'UserController@addPermission')->name('users.add_permission');
        Route::get('/users/role-permission', 'UserController@rolePermission')->name('users.roles_permission');
        Route::put('/users/permission/{role}', 'UserController@setRolePermission')->name('users.setRolePermission');
        Route::get('/u/all', 'UserController@getUsers');
        Route::patch('/users/{id}/edit', 'UserController@edit')->name('users.edit');
        Route::get('/users/{id}', 'UserController@destroy')->name('users.destroy');
    });

    Route::group(['middleware' => ['permission:show articles|create articles|delete article|edit articles']], function () {
        Route::post('/p', 'PostController@store')->name('post.store');
        Route::get('/p/create', 'PostController@create')->name('post.create');
        Route::get('/p/{id}/edit', 'PostController@edit')->name('post.edit');
        Route::patch('/p/{id}', 'PostController@update')->name('post.update');
        Route::get('/p_delete/{id}', 'PostController@destroy')->name('post.destroy');
        Route::get('/p/read-all', 'PostController@getPosts');
        Route::get('/p/allPost', 'PostController@allPost');
        Route::get('/post', 'PostController@index')->name('post.show');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
