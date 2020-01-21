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
Route::get('/', 'frontend\HomeController@index');
Route::get('/post/{slug}', 'frontend\PostController@show')->name('post.detail');
Route::get('/post/category/{slug}', 'frontend\PostController@postByCategory')->name('post.category');
Route::get('/post/tag/{slug}', 'frontend\PostController@postByTag')->name('post.tag');

Auth::routes();
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'],function(){
	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('/category', 'CategoryController');
	Route::get('/category/{id}/delete', 'CategoryController@destroy');

	// Post
	Route::get('/posts', 'PostController@index');
	Route::get('/post/create' ,'PostController@create');
	Route::post('/post/create', 'PostController@store');
	Route::get('/post/{id}/edit', 'PostController@edit');
	Route::post("/post/{id}/edit","PostController@update");
	Route::get('/post/{id}/delete', 'PostController@destroy');
	Route::get("/post/{id}", "PostController@show");

	// Tag

	Route::resource('/tags' , 'TagController');
	Route::get('/tag/{id}/delete', 'TagController@destroy');

	// User Edit Profile
	Route::get('user/edit/{id}', 'UserController@edit');
	Route::post('user/edit/{id}', 'UserController@update');
	Route::get('users', 'UserController@index');
	Route::get('user/add/new', 'UserController@create')->name('user.create');
	Route::post('user/add/new', 'UserController@store')->name('store.user');
	Route::get('user/role/edit/{permission}/{user_id}', 'UserController@editRole')->name('user.edit.role')->middleware('Admin');
	

});

