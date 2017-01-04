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
//});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'BookController@display');
Route::post('/books', 'BookController@store');

Route::get('/books/mybooks', 'BookController@mybooks');

Route::get('/account', [
    'uses' => 'UserController@getAccount',
    'as' => 'account'
]);

Route::post('/updateAccount', [
    'uses' => 'UserController@updateAccount',
    'as' => 'account.save'
]);

Route::post('/like', [
    'uses' => 'BookController@addBookRequest',
    'as' => 'like'
]);

