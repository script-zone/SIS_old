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
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/criar-conta', function () {
    return view('createAccount');
})->name('user.createAcount');

Route::get('/user/profile', function () {
    return view('Paciente.index');
})->name('user.profile');

Route::get('/admin', function () {
    return view('Admin.dashboard');
})->name('dashboard');


Route::get('/admin/agenda-doctores', function () {
    return view('Admin.agendaDoctor');
})->name('admin.agendaDoctor');

Route::get('/admin/perfil-doctor', function () {
    return view('Admin.perfilDoctor');
})->name('admin.perfilDoctor');


// ROTAS DA AREA ADMINISTRATIVA PARA CADASTROS
Route::get('/admin/cadastrar-doctor', function () {
    return view('Admin.Cadastro.addDoctor');
})->name('admin.addDoctor');

Route::get('/admin/cadastrar-paciente', function () {
    return view('Admin.Cadastro.addPaciente');
})->name('admin.addPaciente');

Route::get('/admin/cadastrar-especialidade', function () {
    return view('Admin.Cadastro.addEspecialidade');
})->name('admin.addEspecialidade');

// ROTAS DA AREA ADMINISTRATIVA PARA CONSULTAS
Route::get('/admin/listagem-doctores', function () {
    return view('Admin.Listagem.listarDoctores');
})->name('admin.listagemDoctores');

Route::get('/admin/listagem-pacientes', function () {
    return view('Admin.Listagem.listarPaciente');
})->name('admin.listagemPaciente');

Route::get('/admin/listagem-especialidades', function () {
    return view('Admin.Listagem.listarEspecialidade');
})->name('admin.listagemEspecialidade');


// ROTAS DA AREA ADMINISTRATIVA PARA MARCACAO
Route::get('/admin/marcar-exame', function () {
    return view('Admin.Marcacao.exame');
})->name('admin.marcarExame');

Route::get('/admin/marcar-consulta', function () {
    return view('Admin.Marcacao.consulta');
})->name('admin.marcarConsulta');

Route::get('/admin/marcar-procedimento', function () {
    return view('Admin.Marcacao.procedimento');
})->name('admin.marcarProcedimento');