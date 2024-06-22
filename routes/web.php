<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Profile id Routing
Route::get('/profile/{id}', [ProfileController:: class, "index"] );



