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

    Route::get('/admin', [SiteController::class, 'getDashAdmin'])->name('dashboard');

    ////////// dOCTORES //////////////
    Route::get('/admin/user/doctor/listar-doctores', [P_clinicController::class, 'showP_clinic'])->name('admin.doctor.todosDoctores');
    Route::get('/admin/user/doctor/perfil-Doctor', [P_clinicController::class, 'showP_clinic_Perfil'])->name('admin.doctor.pefil');
    Route::get('/admin/user/doctor/agenda-medica/{id_medico}', [P_clinicController::class, 'getAgendaMedica'])->name('admin.doctor.agendaMedica');

    ////////// PACIENTE //////////////
    Route::get('/admin/user/doctor/listar-pacientes', [PacienteController::class, 'showPaciente'])->name('admin.listarPaciente');
    Route::get('/admin/user/paciente/perfil-paciente/{id_paciente}', [PacienteController::class, 'showPacientePerfil'])->name('admin.paciente.perfil');
    Route::get('/admin/user/paciente/agenda/agenda-medica/{id_paciente}', [PacienteController::class, 'getAgendaMedica'])->name('admin.paciente.minhaAgenda');


    ////////// Laboratorio //////////////
    Route::get('/admin/user/tecnico_lab/resultados/pendentes',[P_clinicController::class, 'listarExameslab'])->name('admin.lab.listaDeExameEmEspera');

    Route::get('/admin/user/tecnico_lab/resultados/lancar-resultado', function () {
        return view('Admin.Lab.resultadoExame');
    })->name('admin.lab.resultadoExame');


    ////////// Cadastros //////////////
    // pacientes
    Route::get('/admin/cadastro/paciente', [PacienteController::class, 'formAccountUserPaciente'])->name('admin.cadastro.cadastroPaciente');
    Route::post('/admin/store/paciente', [PacienteController::class, 'createAccountUserPaciente'])->name('admin.store.paciente');
    Route::get('/admin/user/paciente/perfil/editar-perfil/{id_paciente}', [PacienteController::class, 'editarPerfilPaciente'])->name('admin.paciente.edit_Perfil');
    Route::put('/admin/user/paciente/perfil/editar-perfil/update/{id_user_paciente}/{id_rcp}', [PacienteController::class, 'UpdateAccountUserPaciente'])->name('admin.paciente.update_Perfil');

    // pessoal clinico
    Route::get('/admin/cadastro/p_clinic', [P_clinicController::class, 'formCreateAccountP_clinic'])->name('admin.cadastro.p_clinic');
    Route::post('/admin/store/p_clinic', [P_clinicController::class, 'createAccountUserP_clinic'])->name('admin.cadastro.store.p_clinic');
    Route::get('/admin/user/doctor/perfil/editar-perfil/{id_user_doctor}', [P_clinicController::class, 'editarPerfilDoctor'])->name('admin.doctor.edit_Perfil');
    Route::put('/admin/user/doctor/perfil/editar-perfil/update/{id_user_doctor}', [P_clinicController::class, 'UpdateAccountUserDoctor'])->name('admin.doctor.update_Perfil');

    // Especialidades
    Route::get('/admin/especialidade/listar', [EspecialidadeController::class, 'showAllEspecialidades'])->name('admin.listagem.todasEspec');
    Route::get('/admin/cadastro/especialidade', [EspecialidadeController::class, 'formCreateEspecialidade'])->name('admin.cadastro.cadastroEspecialidade');
    Route::post('/admin/store/especialidade', [EspecialidadeController::class, 'createEspecialidade'])->name('admin.store.especialidade');
    Route::get('/admin/especialidade/editar/{id_especialidade}', [EspecialidadeController::class, 'editarEspecialidade'])->name('admin.cadastro.editarEspec');
    Route::put('/admin/especialidade/update/{id_especialidade}', [EspecialidadeController::class, 'updateEspecialidade'])->name('admin.cadastro.updateEspec');

    Route::get('/admin/cadastro/exame', [EspecialidadeController::class, 'formCreateExame'])->name('admin.cadastro.exame');
    Route::post('/admin/store/exame_especialidade', [EspecialidadeController::class, 'storeTipoExame'])->name('admin.store.exame_especialidade');
    Route::get('/admin/cadastro/consulta', [EspecialidadeController::class, 'formCreateConsulta'])->name('admin.cadastro.consulta');
    Route::post('/admin/store/consulta_especialidade', [EspecialidadeController::class, 'storeTipoConsulta'])->name('admin.store.consulta_especialidade');




    ////////// Marcação //////////////
    Route::get('/admin/consulta/marcar', [ConsultaController::class, 'formMarcacaoConsulta'])->name('admin.marcacao.consulta');
    Route::post('/admin/store/consulta/marcar', [ConsultaController::class, 'storeMarcacaoConsulta'])->name('admin.store.marcacao.consulta');
    
    Route::get('/admin/exame/marcar', [ExameController::class, 'formMarcacaoExame'])->name('admin.marcacao.exame');
    Route::post('/admin/store/exame/marcar', [ExameController::class, 'storeMarcacaoExame'])->name('admin.store.marcacao.exame');
    
    Route::get('/admin/procedimento/marcar', [ProcedimentoController::class, 'formMarcacaoProcedimento'])->name('admin.marcacao.procedimento');
    Route::post('/admin/store/procedimento/marcar', [ProcedimentoController::class, 'storeMarcacaoProcedimento'])->name('admin.store.marcacao.procedimento');

    ////////////// REAGENDAR OU EDITAR Marcação ////////////////////
    Route::get('/admin/consulta/reagendar-consulta/{id_consulta}', [ConsultaController::class, 'reagendarConsulta'])->name('admin.marcacao.reagendarConsulta');
    Route::put('/admin/consulta/update-consulta/{id_consulta}/{rcp}', [ConsultaController::class, 'updateMarcacaoConsulta'])->name('admin.marcacao.updateConsulta');

    Route::get('/admin/exame/reagendar-exame/{id_exame}', [ExameController::class, 'reagendarExame'])->name('admin.marcacao.reagendarExame');
    Route::put('/admin/exame/update-exame/{id_exame}/{rcp}', [ExameController::class, 'updateMarcacaoExame'])->name('admin.marcacao.updateExame');

    Route::get('/admin/procedimento/reagendar-procedimento/{id_procedimento}', [ProcedimentoController::class, 'reagendarProcedimento'])->name('admin.marcacao.reagendarProcedimento');
    Route::put('/admin/procedimento/update-procedimento/{id_procedimento}/{rcp}', [ProcedimentoController::class, 'updateMarcacaoPrecedimento'])->name('admin.marcacao.updateProcedimento');




    ////////// CONFIG //////////////
    Route::get('/admin/add-user', [AdminController::class, 'formCreateUserAdmin'])->name('admin.config.user');
    Route::post('/admin/store/user_admin', [AdminController::class, 'createAccountUserAdmin'])->name('admin.config.store.user.admin');
    Route::get('/admin/user/listar', [AdminController::class, 'getAllUsers'])->name('admin.config.listarUsers');
    Route::get('/admin/user/permissoes/{id_user_admin}/{id_papel}', [AdminController::class, 'getDetalhesUserAdmin'])->name('admin.config.permissoes');

    Route::get('/admin/add-papel-permissoes', [AccessController::class, 'getPapelPermissoes'] )->name('admin.config.papeis');
    Route::post('/admin/store/papel_permissoes', [AccessController::class, 'storePapelPermissoes'])->name('admin.config.store.papeis');


    Route::get('/admin/user/editar', function () {
        return view('Admin.Config.editarUser');
    })->name('admin.config.editarUser');

});
