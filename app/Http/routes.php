<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/',[
    'middleware' => 'auth',
    'uses' => 'HomeController@index']);
    Route::get('/home',[
    'middleware' => 'auth',
    'uses' => 'HomeController@index']);
    Route::match(['get', 'post'],'/search',[
    'middleware' => 'auth',
    'uses' => 'SearchController@search']);
    Route::match(['get', 'post'],'/genre',[
    'middleware' => 'auth',
    'uses' => 'SearchController@genre']);
    Route::get('/movie',[
    'middleware' => 'auth',
    'uses' => 'SearchController@info']);
    Route::get('/upload',['middleware' => 'auth', function () {
      return view('upload');
    }]);
    Route::post('apply/upload', 'UploadController@upload');
});
