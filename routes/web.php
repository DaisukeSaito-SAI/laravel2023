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

Route::get('/sample', [\App\Http\Controllers\Sample\IndexController::class, 'show']);
Route::get('/sample/{id}', [\App\Http\Controllers\Sample\IndexController::class, 'showId']);

Route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class)->name('tweet.index');

Route::post('/tweet/create', \App\Http\Controllers\Tweet\CreateController::class)->name('tweet.create');

Route::post('/tweet/update/{tweetId}', \App\Http\Controllers\Tweet\Update\IndexController::class)->name('tweet.update.index')->where('tweetId', '[0-9]+');
Route::post('/tweet/update/{tweetId}', \App\Http\Controllers\Tweet\Update\PutController::class)->name('tweet.update.put')->where('tweetId', '[0-9]+');

Route::delete('/tweet/delete/{tweetId}', \App\Htpp\Controllers\Tweet\DeleteController::class)->name('tweet.delete');

