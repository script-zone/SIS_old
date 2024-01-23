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
return view('Site.index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/criar-conta', function () {
    return view('createAccount');
})->name('paciente.createAcount');


Route::get('/admin', function () {
    return view('Admin.dashboard');
})->name('dashboard');


//////////

Route::get('/admin/listar-doctores', function () {
    return view('Admin.Doctor.todosDotores');
})->name('admin.doctor.todosDoctores');

Route::get('/admin/agendar-procedimento', function () {
    return view('Admin.Doctor.agendarProcedimento');
})->name('admin.doctor.agendarProcedimento');

