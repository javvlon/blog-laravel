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

Route::group(['domain' => '{account}.blog-laravel.test'], function () {
    Route::get('/', function ($account) {
        return $account;
    });
    Route::get('users/{id}', function ($account, $id) {

    });
});

Route::get('/', 'TasksController@home');

Route::get('about', function () {
    return 's';
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', function () {
    return view('dashboard'); });
    Route::get('account', function () { return view('account');
    });
});