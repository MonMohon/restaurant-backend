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
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
/*
Route::group(['prefix' => 'resturants', 'as' => 'resturants.'], function () {
	Route::group(['middleware' => ['auth']], function () {
        Route::get('/', 'ResturantController@index')->name('index');
        Route::get('/create', 'ResturantController@create')->name('create');
		Route::post('/store', 'ResturantController@store')->name('store');
		Route::get('/show{id}', 'ResturantController@show')->name('show');
	});
});
*/

Route::group(['prefix' => 'comments', 'as' => 'comment.'], function () {
	Route::group(['middleware' => ['auth']], function () {
        Route::get('/', 'CommentController@index')->name('comments');
		Route::post('/store', 'CommentController@store')->name('store');
	});
});

Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

Route::get('/file-upload', 'FileUploadController@index')->name('image.index');
Route::post('/file-upload/upload', 'FileUploadController@upload')->name('image.upload');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('resturants','ResturantController');
});