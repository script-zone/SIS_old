@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Meus exames Agendados</h3>
                    <div class="col-auto d-flex w-sm-100">
                        <a href="#" class="btn btn-primary btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i>Add Exame</a>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix g-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome do Paciente</th> 
                                    <th>Tipo de Exame</th> 
                                    <th>Resultado</th>   
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
                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
    </div>
</div>
        
@endsection