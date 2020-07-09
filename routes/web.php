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
    return view('welcome');
});

// Route::get('/fujisu-user', function () {
//     return $fujisu_user = DB::table('fujisu_users')->get();
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// facebook 
// Route::get('/redirect', 'SocialAuthFacebookController@redirect');
// Route::get('/callback', 'SocialAuthFacebookController@callback');

// google 
// Route::get('/google', 'Auth\LoginController@redirectToProvider');
// Route::get('/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/google', 'SocialLoginController@redirectGoogle');
Route::get('/callback', 'SocialLoginController@googleCallback');

// Route::get('/facebook', 'SocialLoginController@redirectFacebook');
// Route::get('/callback', 'SocialLoginController@facebookCallback');

Route::get('/thankyou', function () {
    return view('thankyou');
});
Route::post('/submitinfo', 'SocialLoginController@submitinfo');



