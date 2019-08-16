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

Auth::routes();
Auth::routes(['verify' => true]);
/*
Route::get('/resturant/{slug}', function($slug){
    $post = \App\Models\Resturant::where('slug', $slug)->firstOrFail(); 
});
*/
Route::get('/', 'HomeController@index')->name('home');
Route::get('/resturant/{slug}', 'HomeController@show');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::group(['prefix' => 'comments', 'as' => 'comment.'], function () {
	Route::group(['middleware' => ['auth']], function () {
        Route::get('/', 'CommentController@index')->name('comments');
		Route::post('/store', 'CommentController@store')->name('store');
	});
});

Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');