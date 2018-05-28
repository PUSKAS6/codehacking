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

//Route::get('/', function () {
//    return view('welcome');
    Route::get('/', 'HomeController@index');
//});

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'HomeController@post']);

    Route::get('/admin', 'AdminController@index');
//        return view('admin.index');
//    });

//Route::group(['middleware'=>'admin'], function() {


Route::get('/admin', 'AdminController@index');

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

Route::resource('admin/media', 'AdminMediasController', ['names' => [

    'index'=>'admin.media.index',
    'create'=>'admin.media.create',
    'store'=>'admin.media.store',
    'edit'=>'admin.media.edit',


]]);

Route::delete('admin/delete/media', 'AdminMediasController@deleteMedia');

Route::resource('admin/comments', 'PostCommentsController', ['names' => [

    'index'=>'admin.comments.index',
    'create'=>'admin.comments.create',
    'store'=>'admin.comments.store',
    'edit'=>'admin.comments.edit',
'show' =>'admin.comments.show'

]]);

//Route::post('/admin/comment/reply', 'CommentRepliesController@createReply');

Route::resource('admin/comment/replies', 'CommentRepliesController',['names'=>[
    'index'=>'admin.comment.replies.index',
    'create'=>'admin.comment.replies.create',
    'store'=>'admin.comment.replies.store',
    'edit'=>'admin.comment.replies.edit',
    'show'=>'admin.comment.replies.show',
    'update'=>'admin.comment.replies.update',
]]);

Route::get('admin/media/upload',['as'=>'admin.media.upload', 'uses'=> 'AdminMediasController@store']);

//Route::group(['middleware'=>'auth'], function() {

//    Route::post('/admin/comment/reply', 'CommentRepliesController@createReply');

























