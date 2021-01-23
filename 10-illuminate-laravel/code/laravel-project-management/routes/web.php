<?php

use Illuminate\Support\Facades\Route;


Route::get('home', [\App\Http\Controllers\PageController::class, 'home']);
