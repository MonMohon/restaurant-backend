<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
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

Route::group(['middleware' => ['auth']], function() {
    Route::resource('admin/roles','Admin\RoleController');
    Route::resource('admin/users','Admin\UserController');
    Route::resource('admin/resturants','Admin\ResturantController');
    Route::get('/admin', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('admin/file-upload', 'Admin\FileUploadController@index')->name('image.index');
    Route::post('admin/file-upload/upload', 'Admin\FileUploadController@upload')->name('image.upload');
});