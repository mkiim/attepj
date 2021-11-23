<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtteController;

Route::get('/', [AtteController::class,'index']);
Route::post('/',[AtteController::class,'post']);

Route::post('/confirm', [AtteController::class, 'confirm']);
Route::post('/process',[AtteController::class,'process']);
Route::get('/stamp',[AtteController::class,'complete']);




Route::get('/attendance',[AtteController::class,'date']);
