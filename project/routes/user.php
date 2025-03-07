<?php
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return 'Hello World';
});

Route::get('/users/{id}', function (string $id) {
    return 'Hello World' + $id;
})->where('id', '[0-9]+');
