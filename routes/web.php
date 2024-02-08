<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\P_clinicController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\ExameController;
use App\Http\Controllers\ProcedimentoController;

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
Route::post('/paciente/sign_up', [UserController::class, 'createAccountUser'])->name('paciente.criar_conta');
Route::get('/paciente/criar-conta',[SiteController::class, 'createAccount'])->name('paciente.createAcount');


Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin', function () {
        return view('Admin.dashboard');
    })->name('dashboard');

        ////////// dOCTORES //////////////
    Route::get('/admin/user/doctor/listar-doctores', function () {
        return view('Admin.Listagem.todosDotores');
    })->name('admin.doctor.todosDoctores');

    Route::get('/admin/user/doctor/listar-pacientes', function () {
        return view('Admin.listarPaciente');
    })->name('admin.listarPaciente');

    Route::get('/admin/user/doctor/perfil-Doctor', function () {
        return view('Admin.Doctor.perfil');
    })->name('admin.doctor.pefil');

    Route::get('/admin/user/doctor/perfil/editar-perfil', function () {
        return view('Admin.Doctor.edit_Perfil');
    })->name('admin.doctor.edit_Perfil');

    Route::get('/admin/user/doctor/agenda-medica', function () {
        return view('Admin.Doctor.agendaMedica');
    })->name('admin.doctor.agendaMedica');

    ////////// PACIENTE //////////////
    Route::get('/admin/user/paciente/perfil-paciente', function () {
        return view('Admin.Paciente.perfil');
    })->name('admin.paciente.perfil');

    Route::get('/admin/user/paciente/perfil/editar-perfil', function () {
        return view('Admin.Paciente.edit_Perfil');
    })->name('admin.paciente.edit_Perfil');

    Route::get('/admin/user/paciente/agenda/agenda-medica', function () {
        return view('Admin.Paciente.minhaAgenda');
    })->name('admin.paciente.minhaAgenda');


    ////////// Laboratorio //////////////
    Route::get('/admin/user/tecnico_lab/resultados/pendentes', function () {
        return view('Admin.Lab.examesLab');
    })->name('admin.lab.listaDeExameEmEspera');

    Route::get('/admin/user/tecnico_lab/resultados/lancar-resulado', function () {
        return view('Admin.Lab.resultadoExame');
    })->name('admin.lab.resultadoExame');


    ////////// Cadastros //////////////
    // pacientes
    Route::get('/admin/cadastro/paciente', [PacienteController::class, 'formAccountUserPaciente'])->name('admin.cadastro.cadastroPaciente');
    Route::post('/admin/store/paciente', [PacienteController::class, 'createAccountUserPaciente'])->name('admin.store.paciente');

    // pessoal clinico
    Route::get('/admin/cadastro/p_clinic', [P_clinicController::class, 'formCreateAccountP_clinic'])->name('admin.cadastro.p_clinic');
    Route::post('/admin/store/p_clinic', [P_clinicController::class, 'createAccountUserP_clinic'])->name('admin.cadastro.store.p_clinic');

    // Especialidades
    Route::get('/admin/cadastro/especialidade', [EspecialidadeController::class, 'formCreateEspecialidade'])->name('admin.cadastro.cadastroEspecialidade');
    Route::post('/admin/store/especialidade', [EspecialidadeController::class, 'createEspecialidade'])->name('admin.store.especialidade');

    Route::get('/admin/especialidade/editar', function () {
        return view('Admin.Cadastro.editarEspec');
    })->name('admin.cadastro.editarEspec');

    Route::get('/admin/especialidade/listar', function () {
        return view('Admin.Listagem.todasEspec');
    })->name('admin.listagem.todasEspec');


    ////////// Marcação //////////////
    Route::get('/admin/consulta/marcar', [ConsultaController::class, 'formMarcacaoConsulta'])->name('admin.marcacao.consulta');
    Route::post('/admin/store/consulta/marcar', [ConsultaController::class, 'storeMarcacaoConsulta'])->name('admin.store.marcacao.consulta');
    
    Route::get('/admin/exame/marcar', [ExameController::class, 'formMarcacaoExame'])->name('admin.marcacao.exame');
    Route::post('/admin/store/exame/marcar', [ExameController::class, 'storeMarcacaoExame'])->name('admin.store.marcacao.exame');
    
    Route::get('/admin/procedimento/marcar', [ProcedimentoController::class, 'formMarcacaoProcedimento'])->name('admin.marcacao.procedimento');
    Route::post('/admin/store/procedimento/marcar', [ProcedimentoController::class, 'storeMarcacaoProcedimento'])->name('admin.store.marcacao.procedimento');

    ////////////// REAGENDAR OU EDITAR Marcação ////////////////////
    Route::get('/admin/user/doctor/procedimento/reagendar-procedimento', function () {
        return view('Admin.Doctor.reagendarProcedimento');
    })->name('admin.doctor.reagendarProcedimento');

    Route::get('/admin/user/doctor/exame/reagendar-exame', function () {
        return view('Admin.Marcacao.reagendarExame');
    })->name('admin.marcacao.reagendarExame');

    Route::get('/admin/user/doctor/consulta/reagendar-consulta', function () {
        return view('Admin.Marcacao.reagendarConsulta');
    })->name('admin.marcacao.reagendarConsulta');


    ////////// CONFIG //////////////
    Route::get('/admin/add-user', [AdminController::class, 'formCreateUserAdmin'])->name('admin.config.user');
    Route::post('/admin/store/user_admin', [AdminController::class, 'createAccountUserAdmin'])->name('admin.config.store.user.admin');

    Route::get('/admin/add-papel-permissoes', [AccessController::class, 'getPapelPermissoes'] )->name('admin.config.papeis');
    Route::post('/admin/store/papel_permissoes', [AccessController::class, 'storePapelPermissoes'])->name('admin.config.store.papeis');

    Route::get('/admin/user/listar', function () {
        return view('Admin.Config.listarUsers');
    })->name('admin.config.listarUsers');

    Route::get('/admin/user/permissoes', function () {
        return view('Admin.Config.permissoes');
    })->name('admin.config.permissoes');

    Route::get('/admin/user/editar', function () {
        return view('Admin.Config.editarUser');
    })->name('admin.config.editarUser');

});
