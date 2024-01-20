<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('Paciente.index');
})->name('login');

Route::get('/criar-conta', function () {
    return view('createAccount');
})->name('user.createAcount');

Route::get('/user/profile', function () {
    return view('Profile.index');
})->name('user.profile');
