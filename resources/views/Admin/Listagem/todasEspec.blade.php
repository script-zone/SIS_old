@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0 py-3 pb-2">Todas as Especialidades</h3>
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
                                                    <th>Nome da Especialidade</th> 
                                                    <th>Descrição</th> 
                                                    <th>Acção</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">1</span>
                                                    </td>
                                                    <td>
                                                       Alguma coisa
                                                    </td>
                                                    <td>
                                                        Uma pequena descrição asd ad asdas da da sdas dad as d
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <a href="{{route('admin.cadastro.editarEspec')}}" class="btn btn-outline-secondary" alt="Reagendar"><i class="icofont-edit text-success"></i></a>
                                                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#"><i class="icofont-ui-delete text-danger"></i></a>

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

    
@endsection