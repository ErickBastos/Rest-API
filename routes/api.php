<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api as Api;

Route::get('/dogs', [Api\DogController::class, 'index']);

Route::post('/create_dogs', [Api\DogController::class, 'store']);

Route::get('/dogs/{id}', [Api\DogController::class, 'show']);

Route::post('/update_dogs/{id}', [Api\DogController::class, 'update']);

Route::delete('/delete_dogs/{id}', [Api\DogController::class, 'destroy']);
