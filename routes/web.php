<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::post('/login/autenticacao', [SiteController::class, 'authLogin'])->name('login_auth');
Route::get('/logout', [SiteController::class, 'fazerLogout'])->name('logout');
Route::post('/paciente/sign_up', [UserController::class, 'createAccountSite'])->name('paciente.criar_conta');
Route::get('/criar-conta',[SiteController::class, 'createAccount'])->name('paciente.createAcount');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', function () {
        return view('Admin.dashboard');
    })->name('dashboard');

        ////////// dOCTORES //////////////
    Route::get('/admin/listar-doctores', function () {
        return view('Admin.Listagem.todosDotores');
    })->name('admin.doctor.todosDoctores');

    Route::get('/admin/agendar-procedimento', function () {
        return view('Admin.Doctor.agendarProcedimento');
    })->name('admin.doctor.agendarProcedimento');

    Route::get('/admin/listar-pacientes', function () {
        return view('Admin.listarPaciente');
    })->name('admin.listarPaciente');

    Route::get('/admin/perfil-Doctor', function () {
        return view('Admin.Doctor.perfil');
    })->name('admin.doctor.pefil');

    Route::get('/admin/editar-Doctor', function () {
        return view('Admin.Doctor.edit_Perfil');
    })->name('admin.doctor.edit_Perfil');

    Route::get('/admin/agenda-medica', function () {
        return view('Admin.Doctor.agendaMedica');
    })->name('admin.doctor.agendaMedica');

    ////////////// REAGENDAR OU EDITAR ////////////////////
    Route::get('/admin/reagendar-procedimento', function () {
        return view('Admin.Doctor.reagendarProcedimento');
    })->name('admin.doctor.reagendarProcedimento');

    Route::get('/admin/reagendar-exame', function () {
        return view('Admin.Marcacao.reagendarExame');
    })->name('admin.marcacao.reagendarExame');

    Route::get('/admin/reagendar-consulta', function () {
        return view('Admin.Marcacao.reagendarConsulta');
    })->name('admin.marcacao.reagendarConsulta');


    ////////// PACIENTE //////////////

    Route::get('/admin/perfil-paciente', function () {
        return view('Admin.Paciente.perfil');
    })->name('admin.paciente.perfil');

    Route::get('/admin/editar-paciente', function () {
        return view('Admin.Paciente.edit_Perfil');
    })->name('admin.paciente.edit_Perfil');

    Route::get('/admin/exames-paciente', function () {
        return view('Admin.Paciente.meusExames');
    })->name('admin.paciente.meusExames');

    Route::get('/admin/consultas-paciente', function () {
        return view('Admin.Paciente.minhasConsultas');
    })->name('admin.paciente.minhasConsultas');


        ////////// Laboratorio //////////////
    Route::get('/admin/resultado-exame-Lab', function () {
        return view('Admin.Lab.examesLab');
    })->name('admin.lab.listaDeExameEmEspera');

    Route::get('/admin/lancar-resulado-exame', function () {
        return view('Admin.Lab.resultadoExame');
    })->name('admin.lab.resultadoExame');


    ////////// Cadastros //////////////
    // pacientes
    Route::get('/admin/cadastro-paciente', function () {
        return view('Admin.Cadastro.cadastroPaciente');
    })->name('admin.cadastro.cadastroPaciente');
    
    Route::post('/admin/store/paciente', 
    [PacienteController::class, 'createAccountUserPaciente'])
    ->name('admin.store.paciente');

    // pessoal clinico
    Route::get('/admin/cadastro-doctor', function () {
        return view('Admin.Cadastro.cadastroDoctor');
    })->name('admin.cadastro.cadastroDoctor');

    // Especialidades
    Route::get('/admin/cadastro-especialidade', function () {
        return view('Admin.Cadastro.cadastroEspec');
    })->name('admin.cadastro.cadastroEspecialidade');

    Route::post('/admin/store/especialidade', 
    [EspecialidadeController::class, 'createEspecialidade'])
    ->name('admin.store.especialidade');


    ////////// Marcação //////////////
    Route::get('/admin/marcar-exame', function () {
        return view('Admin.Marcacao.exame');
    })->name('admin.marcacao.exame');

    Route::get('/admin/marcar-consulta', function () {
        return view('Admin.Marcacao.consulta');
    })->name('admin.marcacao.consulta');


    ////////// CONFIG //////////////
    Route::get('/admin/add-user', [AdminController::class, 'formCreateUserAdmin'])->name('admin.config.user');
    Route::post('/admin/store/user_admin', [AdminController::class, 'createAccountUserAdmin'])->name('admin.config.store.user.admin');

    Route::get('/admin/add-papel-permissoes', [AccessController::class, 'getPapelPermissoes'] )->name('admin.config.papeis');
    Route::post('/admin/store/papel_permissoes', [AccessController::class, 'storePapelPermissoes'])->name('admin.config.store.papeis');


});
