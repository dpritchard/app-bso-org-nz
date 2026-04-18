<?php

use Illuminate\Support\Facades\Route;

use App\Utilities\Hasher;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PageController;

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

Route::get('/admin', [AdminController::class, 'index']);
Route::resource('/admin/file', FileController::class)->except(['show'])->middleware('auth');
Route::resource('/admin/event', EventController::class)->except(['show'])->middleware('auth');
Route::resource('/admin/page', PageController::class)->except(['show'])->middleware('auth');

Route::get('/f/{file}/{name?}', [FileController::class, 'show']);
Route::get('/e/{event}', [EventController::class, 'show']);

Route::get('/diary', [EventController::class, 'indexFuture']);
Route::get('/past-events', [EventController::class, 'indexHistoric']);

Route::view('/photo-competition/2020', 'photo_competition.2020');
Route::view('/photo-competition/2021', 'photo_competition.2021');
Route::view('/photo-competition/2022', 'photo_competition.2022');
Route::view('/photo-competition/2023', 'photo_competition.2023');
Route::view('/photo-competition/2024', 'photo_competition.2024');
Route::view('/photo-competition/2025', 'photo_competition.2025');

Route::post('/api/render-md', [ApiController::class, 'renderMarkdown']);

Auth::routes(['register' => false]); // For now, we don't want this.

// Becuase of the wildcard, this MUST be last:
Route::get('/{uri?}', [PageController::class, 'show'])->where('uri', '.+');
