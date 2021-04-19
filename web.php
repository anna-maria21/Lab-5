<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');

Route::get('/info', 'DogsController@show_info')->name('info');

Route::post('/feedback/submit', 'FeedbackController@submit')->name('feedback-form');

Route::get('/info/{id}', 'DogsController@delete')->name('deleting');