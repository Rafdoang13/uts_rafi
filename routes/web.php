<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NimController;

Route::get('/', function () {
    return redirect('/nims');
});

Route::get('/nims', [NimController::class, 'index']);
Route::post('/nims', [NimController::class, 'store']);
Route::delete('/nims/{id}', [NimController::class, 'destroy']);
