<?php

use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;

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
    return view('main');
});

Route::post('/', [PublicationController::class, 'save']);


Route::get('/about', function () {
    return view('about');
});

Route::get('/news', [PublicationController::class, 'showNews']);

Route::get('news/remove/{id}', [PublicationController::class, 'removeNews']);

Route::get('news/edit/{id}', [PublicationController::class, 'editNews']);

Route::post('news/edit/{id}', [PublicationController::class, 'updateNews']);

Route::get('/news/{id}', [PublicationController::class, 'revealNews']);



Route::get('/events', [PublicationController::class, 'showEvents']);

Route::get('events/remove/{id}', [PublicationController::class, 'removeEvents']);

Route::get('events/edit/{id}', [PublicationController::class, 'editEvents']);

Route::post('events/edit/{id}', [PublicationController::class, 'updateEvents']);

Route::get('/events/{id}', [PublicationController::class, 'revealEvents']);


Route::get('/add', function () {
    return view('add');
});

Route::post('{id}/addComment', [CommentsController::class, 'store']);

Route::get('comments/remove/{id}', [CommentsController::class, 'destroy']);