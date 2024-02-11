@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Exames com Resultado em Espera</h3>
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
                                @foreach ($exames as $exame)
                                <tr>
                                    <td>
                                        <span class="fw-bold">{{ $count++ }}</span>
                                    </td>
                                    <td>
                                        <img class="avatar rounded-circle" src="{{asset('Style/images/xs/avatar1.jpg')}}" alt="">
                                        <span class="fw-bold ms-1">{{ $exame->nome }} {{ $exame->sobrenome }}</span>
                                    </td>
                                    <td>
                                        {{ $exame->tipo }}
                                    </td>
                                    <td>
                                        {{ $exame->resultado }}
                                    </td>
                                    <td>
                                        {{ $exame->data }}
                                    </td>
                                    <td>
                                        {{ $exame->hora }}
                                    </td>
                                    <td>
                                        <span class="text-danger ms-1">Pendente</span>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href="{{route('admin.lab.resultadoExame')}}" class="btn btn-outline-secondary" ><i class="icofont-edit text-success"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
    </div>
</div>
        
@endsection