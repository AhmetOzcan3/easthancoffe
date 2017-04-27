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
    return view('homepage.index');
});

Auth::routes();




Route::get('/admin', 'HomeController@index');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::group(['middleware'=>'admin'], function(){

	Route::resource('admin/users', 'AdminUsersController');

});

Route::resource('admin/posts', 'AdminPostsController');	
Route::resource('admin/categories', 'AdminCategoriesController');
Route::resource('admin/media', 'AdminMediaController');


