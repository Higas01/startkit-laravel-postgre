<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users', UserController::class . '@getAll');

Route::get('/users/{id}', function (string $id) {
    return 'Hello World' + $id;
})->where('id', '[0-9]+');
