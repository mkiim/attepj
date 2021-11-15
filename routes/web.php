<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtteController;

Route::get('/', [AtteController::class,'index']);
Route::get('/register', [AtteController::class, 'register']);
