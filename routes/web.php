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

/*
Route::get('/users/{id}', function ($id) {
    return $id;
});
*/

/*Route::group(['middleware' => ['auth']], function(){
    Route::get('/user', 'DemoController@userDemo')->name('user');

});*/

Route::get('/admin', function(){
    return 'you are admin';
})->middleware(['auth', 'auth.admin']);

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware(['auth', 'auth.admin'])->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Route::resource('projects', 'ProjectsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/profile', 'ProfilesController@index');
