<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/photo-competition/2020', 'photo_competition.2020');
Route::view('/photo-competition/2021', 'photo_competition.2021');

Route::post('/api/render-md', 'ApiController@renderMarkdown');

Auth::routes(['register' => false]); // For now, we don't want this.

// Becuase of the wildcard, this MUST be last:
Route::get('/{uri?}', 'PageController@show')->where('uri', '.+');