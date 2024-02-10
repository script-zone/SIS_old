@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0 py-3 pb-2">Agenda Médica</h3>
                    <div class="col-auto py-2 w-sm-100">
                        <ul class="nav nav-tabs tab-body-header rounded invoice-set" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Invoice-list" role="tab">Exames</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Invoice-Simple" role="tab">Consultas</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Invoice-Simple2" role="tab">Procedimentos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Invoice-list">
                        <div class="row clearfix g-3">
                            <div class="col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome do Paciente</th> 
                                                    <th>Tipo do Exame</th> 
                                                    <th>Data</th>  
                                                    <th>Hora</th>  
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
                                                        Uma pequena descrição asd ad asdas da da sdas dad as d
                                                    </td>
                                                    <td>
                                                        29/01/2024
                                                    </td>
                                                    <td>
                                                        10:30
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <a href="#" class="btn btn-outline-secondary" alt="Reagendar"><i class="text-success">Confirmar Exame</i></a>

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
                                                        Uma pequena descrição
                                                    </td>
                                                    <td>
                                                        29/01/2024
                                                    </td>
                                                    <td>
                                                        10:30
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <a href="#" class="btn btn-outline-secondary" alt="Reagendar"><i class="text-success">Confirmar Exame</i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row End -->
                    </div> <!-- tab end  -->
                    <div class="tab-pane fade" id="Invoice-Simple">
                        <div class="row clearfix g-3">
                            <div class="col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <table id="myProjectTable2" class="table table-hover align-middle mb-0" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome do Paciente</th> 
                                                    <th>Tipo da Consulta</th>
                                                    <th>Data</th>  
                                                    <th>Hora</th>  
                                                    <th>Estado</th>  
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
                                                        Uma pequena descrição asd ad asdas da da sdas dad as d
                                                    </td>
                                                    <td>
                                                        29/01/2024
                                                    </td>
                                                    <td>
                                                        10:30
                                                    </td>
                                                    <td>
                                                        <span class="text-danger ms-1">Pendente</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#atendarConsulta"><i class="text-success">Atender</i></button>
                                                            <a href="{{route('admin.marcacao.reagendarConsulta')}}" class="btn btn-outline-secondary" alt="Reagendar"><i class="icofont-edit text-success"></i></a>
                                                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#cancelarConsulta"><i class="icofont-ui-delete text-danger"></i></a>

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
                                                        Uma pequena descrição
                                                    </td>
                                                    <td>
                                                        29/01/2024
                                                    </td>
                                                    <td>
                                                        10:30
                                                    </td>
                                                    <td>
                                                        <span class="text-danger ms-1">Pendente</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#atendarConsulta"><i class="text-success">Atender</i></button>
                                                            <a href="{{route('admin.marcacao.reagendarConsulta')}}" class="btn btn-outline-secondary" alt="Reagendar"><i class="icofont-edit text-success"></i></a>
                                                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#cancelarConsulta"><i class="icofont-ui-delete text-danger"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row End -->
                    </div> <!-- tab end  -->
                    <div class="tab-pane fade" id="Invoice-Simple2">
                        <div class="row clearfix g-3">
                            <div class="col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <table id="myProjectTable3" class="table table-hover align-middle mb-0" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome do Paciente</th> 
                                                    <th>Descrição</th> 
                                                    <th>Procedimento</th>   
                                                    <th>Data</th>  
                                                    <th>Hora</th>  
                                                    <th>Estado</th>  
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
                                                        Uma pequena descrição asd ad asdas da da sdas dad as d
                                                    </td>
                                                    <td>
                                                        Sirurgia Plastica
                                                    </td>
                                                    <td>
                                                        29/01/2024
                                                    </td>
                                                    <td>
                                                        10:30
                                                    </td>
                                                    <td>
                                                        <span class="text-danger ms-1">Pendente</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <a href="{{route('admin.doctor.reagendarProcedimento')}}" class="btn btn-outline-secondary" alt="Reagendar"><i class="icofont-edit text-success"></i></a>
                                                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#cancelarProcedi"><i class="icofont-ui-delete text-danger"></i></a>
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
                                                        Uma pequena descrição
                                                    </td>
                                                    <td>
                                                        Sirurgia Plastica
                                                    </td>
                                                    <td>
                                                        29/01/2024
                                                    </td>
                                                    <td>
                                                        10:30
                                                    </td>
                                                    <td>
                                                        <span class="text-danger ms-1">Pendente</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <a href="{{route('admin.doctor.reagendarProcedimento')}}" class="btn btn-outline-secondary" ><i class="icofont-edit text-success"></i></a>
                                                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#cancelarProcedi"><i class="icofont-ui-delete text-danger"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row End -->
                    </div> <!-- tab end  -->
                </div>
            </div>

        </div> <!-- Row end  -->
    </div>
</div>

<!-- Edit Department-->
<div class="modal fade" id="atendarConsulta" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="depeditLabel"> Atendimento de Consulta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" >
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="deptwo48" class="form-label ">Nome do Paciente</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label for="deptwo48" class="form-label">Tipo de Consulta</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="sintomas" class="form-label">Descreva os Sintomas</label>
                            <textarea  class="form-control" name="sintomas" id="sintomas" rows="2"></textarea> 
                        </div>
                        <div class="col-md-12">
                            <label for="descricao" class="form-label">Descreva o Diagnostico</label>
                            <textarea  class="form-control" name="descricao" id="descricao" rows="5"></textarea> 
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Concluir Consulta</button>
            </div>
        </div>
        </div>
    </div> 
</div>  
@endsection