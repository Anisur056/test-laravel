<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

Route::controller(PageController::class)->group(function(){
    Route::get('/','welcomePage')->name('home');
    Route::get('/user/{id}','showUser')->name('user');
});

Route::get('/test',TestingController::class)->name('test');
