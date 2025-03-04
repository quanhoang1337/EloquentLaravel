<?php

use App\Http\Controllers\ThucTapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/nsx', [ThucTapController::class, 'get_all']);
