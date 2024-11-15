<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-log', function () {
    Log::info('this example send log', [
        'status' => true
    ]);
});
