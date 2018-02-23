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
    return view('welcome');
});

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/admin', function () {
        return view('admin.index');
    });

//Route::group(['middleware'=>'admin'], function() {


    Route::resource('admin/users', 'AdminUsersController', ['names' => [

        'index' => 'admin.users.index',
        'create' => 'admin.users.create',
        'store' => 'admin.users.store',
        'edit' => 'admin.users.edit'


    ]]);


    Route::resource('admin/posts', 'AdminPostsController', ['names' => [

        'index' => 'admin.posts.index',
        'create' => 'admin.posts.create',
        'store' => 'admin.posts.store',
        'edit' => 'admin.posts.edit',


    ]]);

Route::resource('admin/categories', 'AdminCategoriesController', ['names' => [

    'index' => 'admin.categories.index',
    'create' => 'admin.categories.create',
    'store' => 'admin.categories.store',
    'edit' => 'admin.categories.edit',


]]);































