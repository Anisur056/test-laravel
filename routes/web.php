<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/students',[UserController::class,'showUsers']);
Route::get('/student/{id}',[UserController::class,'singleUser'])->name('student');
