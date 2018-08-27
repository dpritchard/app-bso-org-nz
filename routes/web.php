<?php

use App\Utilities\Hasher;

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

Route::bind('file', function ($hashid) {
    return Hasher::decode($hashid);
});

Route::bind('page', function ($hashid) {
    return Hasher::decode($hashid);
});

Route::bind('event', function ($hashid) {
    return Hasher::decode($hashid);
});

Route::get('/admin', 'AdminController@index');
Route::resource('/admin/file', 'FileController')->except(['show']);
Route::resource('/admin/event', 'EventController')->except(['show']);
Route::resource('/admin/page', 'PageController')->except(['show']);

Route::get('/f/{file}/{name?}', 'FileController@show');
Route::get('/e/{event}', 'EventController@show');

Route::get('/diary', 'EventController@indexFuture');
Route::get('/past-events', 'EventController@indexHistoric');

Route::post('/api/render-md', 'ApiController@renderMarkdown');

// Auth::routes();
// Instead of the above, lets use manual routing (using v. 5.6 code)

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Becuase of the wildcard, this MUST be last:
Route::get('/{uri?}', 'PageController@show')->where('uri', '.+');
