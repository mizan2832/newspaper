<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('news', 'NewsController');
    Route::resource('category', 'CategoryController');
    Route::resource('tag', 'TagController'); 
});

Route::group(['as' => 'author.', 'prefix' => 'author', 'namespace' => 'Author', 'middleware' => ['auth', 'author']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::get('news/{category}/{slug}/{id}','singleNewsController@getSingle');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');

Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');