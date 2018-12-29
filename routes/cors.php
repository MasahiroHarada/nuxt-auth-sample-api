<?php

Route::get('/user', function () {
    return Auth::user();
});

Route::get('/message', function () {
    return ['text' => 'Hello, ' . Auth::user()->name];
})->middleware('auth');

Auth::routes();
