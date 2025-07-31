<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::controller(UserController::class)->group(function(){
    // Read Student Data
    Route::get('/students','showUsers')->name('students');
    Route::get('/student/{id}','singleUser')->name('student');

    // Create Student Data
    Route::post('/student-add','addStudent')->name('student-add');

    // Update Student Data
    Route::post('/student-update/{id}','updateStudent')->name('student-update');
    Route::get('/student-update-form/{id}','updateStudentForm')->name('student-update-form');

    // Delete Student Data
    Route::get('/student-delete/{id}','deleteStudent')->name('student-deleter');
});

Route::view('/student-add-form','student-add-form')->name('student-add-form');
