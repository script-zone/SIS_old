@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row g-3">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card teacher-card  mb-3">
                    <div class="card-body d-flex teacher-fulldeatil">
                        <div class="profile-teacher pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                            <a href="#">
                                <img src="assets/images/lg/avatar3.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                            </a>
                            <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                <span class="fw-bold small">PEDIATRIA</span>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <a href="#"  class="btn btn-outline-secondary text-danger">Eliminar</a>
                                    <a href="{{route('admin.doctor.edit_Perfil')}}"  class="btn btn-outline-secondary text-success">Editar</a>
                                </div>
                            </div>
                        </div>
                        <div class="teacher-info border-start ps-xl-4 ps-md-4 ps-sm-4 ps-4 w-100">
                            <h6  class="mb-0 mt-2  fw-bold d-block fs-6">Dr. Doctor Teste</h6>
                            <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Vila de Viana, Angola/Luanda</span>
                            <p class="mt-2">No bio yet.</p>
                            <div class="row g-2 pt-2">
                                <div class="col-xl-5">
                                    <div class="d-flex align-items-center">
                                        <i class="icofont-ui-touch-phone"></i>
                                        <span class="ms-2">924145786</span>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="d-flex align-items-center">
                                        <i class="icofont-email"></i>
                                        <span class="ms-2">doctorteste@gmail.com</span>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="d-flex align-items-center">
                                        <i class="icofont-birthday-cake"></i>
                                        <span class="ms-2">DD/MM/YYYY</span>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="d-flex align-items-center">
                                        <i class="icofont-address-book"></i>
                                        <span class="ms-2">Casa S/N</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->

        <div class="container-fluid ">
            <div class="row">
                <div class="card col-xl mb-3">
                    <div class="card-body ">
                        <i class="icofont-doctor fs-3 color-light-orange"></i>
                        <h6 class="mt-3 mb-0 fw-bold small-14">Total de Pacientes</h6>
                        <span class="text-muted">16</span>
                    </div>
                </div>
                <div class="card col-xl mb-3">
                    <div class="card-body ">
                        <i class="icofont-patient-file fs-3 color-light-orange"></i>
                        <h6 class="mt-3 mb-0 fw-bold small-14">Procedimentos</h6>
                        <h5 class="mt-3 mb-0 text-muted small-14">Realizados: <span class="text-muted">16</span></h5>
                        <h5 class="mt-3 mb-0 text-muted small-14">Pendentes: <span class="text-muted">16</span></h5>
                        
                    </div>
                </div>
                <div class="card col-xl mb-3">
                    <div class="card-body ">
                        <i class="icofont-patient-file fs-3 color-light-orange"></i>
                        <h6 class="mt-3 mb-0 fw-bold small-14">Exames</h6>
                        <h5 class="mt-3 mb-0 text-muted small-14">Realizados: <span class="text-muted">16</span></h5>
                        <h5 class="mt-3 mb-0 text-muted small-14">Pendentes: <span class="text-muted">16</span></h5>
                        
                    </div>
                </div>
                <div class="card col-xl mb-3">
                    <div class="card-body ">
                        <i class="icofont-patient-file fs-3 color-light-orange"></i>
                        <h6 class="mt-3 mb-0 fw-bold small-14">Consultas</h6>
                        <h5 class="mt-3 mb-0 text-muted small-14">Realizadas: <span class="text-muted">16</span></h5>
                        <h5 class="mt-3 mb-0 text-muted small-14">Pendentes: <span class="text-muted">16</span></h5>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="">
                <div class="card">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Mensagens Recebidas</h6>
                    </div>
                    <div class="card-body">
                        <div class="row clearfix g-3">
                            <!-- .Card End -->
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome do Paciente</th> 
                                                <th>Mensagem Enviada</th> 
                                                <th>Resposta</th>   
                                                <th>Data</th>  
                                                <th>Acção</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">1</span>
                                                </td>
                                                <td>
                                                    <img class="avatar rounded-circle" src="{{asset('Style/images/xs/avatar1.jpg')}}" alt="">
                                                    <span class="fw-bold ms-1">Paciente Teste</span>
                                                </td>
                                                <td>
                                                    Conteudo enviado
                                                </td>
                                                <td>
                                                    Conteudo recebido
                                                </td>
                                                <td>
                                                    29/01/2024
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">2</span>
                                                </td>
                                                <td>
                                                    <img class="avatar rounded-circle" src="{{asset('Style/images/xs/avatar1.jpg')}}" alt="">
                                                    <span class="fw-bold ms-1">Paciente Teste 2</span>
                                                </td>
                                                <td>
                                                    Conteudo enviado
                                                </td>
                                                <td>
                                                    Conteudo recebido
                                                </td>
                                                <td>
                                                    29/01/2024
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">3</span>
                                                </td>
                                                <td>
                                                    <img class="avatar rounded-circle" src="{{asset('Style/images/xs/avatar1.jpg')}}" alt="">
                                                    <span class="fw-bold ms-1">Paciente Teste 3</span>
                                                </td>
                                                <td>
                                                    Conteudo enviado
                                                </td>
                                                <td>
                                                    Conteudo recebido
                                                </td>
                                                <td>
                                                    29/01/2024
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                    <!-- .Card End -->
                        </div><!-- Row End -->
                    </div>
                </div>
            </div>
            
        </div><!-- Row End -->
    </div>
</div>
@endsection