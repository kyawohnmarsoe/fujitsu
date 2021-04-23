<?php

use Illuminate\Support\Facades\Route;

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
    $user = null;
    return view('welcome', ['user' => $user]);
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/export', 'SocialLoginController@export');
Route::get('/google', 'SocialLoginController@redirectGoogle');
Route::get('/callback', 'SocialLoginController@googleCallback');
Route::get('/facebook', 'SocialLoginController@redirectFacebook');
Route::get('/fbcallback', 'SocialLoginController@facebookCallback');
Route::post('/submitinfo', 'SocialLoginController@submitinfo');



