<?php

use Illuminate\Support\Facades\Route;

function getUsers() {
    return [
    1=> ['name'=>'anis','phone'=>'000','city'=>'ctg'],
    2=> ['name'=>'anis-1','phone'=>'000-1','city'=>'ctg-1'],
    3=> ['name'=>'anis-2','phone'=>'000-2','city'=>'ctg-2'],
    4=> ['name'=>'anis-3','phone'=>'000-3','city'=>'ctg-3'],
    ];
}

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/users', function () {
    $names = getUsers();
    return view('users',['user'=>$names]);
})->name('users');

Route::get('/user/{id}', function ($id) {
    $users = getUsers();
    abort_if(!isset($users[$id]),404);
    $user = $users[$id];
    return view('user',['id'=>$user]);
})->name('single-user');;