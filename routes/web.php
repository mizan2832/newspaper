<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/search', 'HomeController@search')->name('search');
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin','middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('news', 'NewsController');
    Route::resource('category', 'CategoryController');
    Route::resource('tag', 'TagController'); 
    Route::post('search/{search}','DashboardController@news_search')->name('search');

    Route::get('/subcriber/', 'TaskController@index')->name('task.index');
    Route::get('/subcriber/task/edit/{id}', 'TaskController@edit')->name('task.edit');
    Route::post('/subcriber/task/store', 'TaskController@store')->name('task.store');
    Route::post('/subcriber/task/update/{id}', 'TaskController@update')->name('task.update');
    Route::post('/subcriber/task/delete/{id}', 'TaskController@destroy')->name('task.destroy');
});
Route::group(['as' => 'author.', 'prefix' => 'author', 'namespace' => 'Author', 'middleware' => ['auth', 'author']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
Route::get('details/{category_name}/{title}/{id}', 'singleNewsController@getSingle');
Route::prefix('news')->group(function () {
    Route::get('/bangladesh', 'CategoryNewsController@category');
    Route::get('/business', 'CategoryNewsController@category');
    Route::get('/opinion ', 'CategoryNewsController@category');
    Route::get('/sports ', 'CategoryNewsController@category');
    Route::get('/entertainment ', 'CategoryNewsController@category');
    Route::get('/lifestyle ', 'CategoryNewsController@category');
    Route::get('/health ', 'CategoryNewsController@category');
    Route::get('/breaking ', 'CategoryNewsController@category');

});
Route::resource('subcribe','SubcriberController');

Route::group(['as' => 'editor.', 'prefix' => 'editor', 'namespace' => 'Editor', 'middleware' => ['auth', 'editor']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
Route::post('/newsletter', 'NewsletterController@store');


