<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/user', [DataController::class, 'index']);
Route::get('/user/{id}', [DataController::class, 'details']);

require __DIR__ . '/auth.php';
