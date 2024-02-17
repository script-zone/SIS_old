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
                                                @foreach ($exames as $exame)
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{ $count1++ }}</span>
                                                    </td>
                                                    <td>
                                                        <img class="avatar rounded-circle" src="{{asset('Style/images/xs/avatar1.jpg')}}" alt="">
                                                        <span class="fw-bold ms-1">{{ $exame->nome }} {{ $exame->sobrenome }}</span>
                                                    </td>
                                                    <td>
                                                        {{ $exame->tipo }} tipo de exame, valor provisorio
                                                    </td>
                                                    <td>
                                                        {{ $exame->data }}
                                                    </td>
                                                    <td>
                                                        {{ $exame->hora }}
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <button id="confirmar-exame" class="btn btn-outline-secondary" alt="Reagendar"><i class="text-success">Confirmar Exame</i></button>

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
                    </div> <!-- tab end  -->

                    <div class="tab-pane fade" id="Invoice-Simple">
                        <div class="row clearfix g-3">
                            <div class="col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <table id="myProjectTable2" class="table table-hover align-middle mb-0" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Nome do Paciente</th> 
                                                    <th>Tipo da Consulta</th>
                                                    <th>Data</th>  
                                                    <th>Hora</th>  
                                                    <th>Estado</th>  
                                                    <th>Acção</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($consultas as $consulta)
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{ $count2++ }}</span>
                                                    </td>
                                                    <td>
                                                        <img class="avatar rounded-circle" src="{{asset('Style/images/xs/avatar1.jpg')}}" alt="">
                                                        <span class="fw-bold ms-1">{{ $consulta->nome }} {{ $consulta->sobrenome }}</span>
                                                    </td>
                                                    <td>
                                                        {{ $consulta->tipo }} tipo de consulta, valor provisorio
                                                    </td>
                                                    <td>
                                                        {{ $consulta->data }}
                                                    </td>
                                                    <td>
                                                        {{ $consulta->hora }}
                                                    </td>
                                                    <td>
                                                        @if ( $consulta->estado == 0 )
                                                        <span class="text-danger ms-1">
                                                            Pendente
                                                        </span>
                                                        @elseif ( $consulta->estado == 1 )
                                                        <span class="text-primary ms-1">
                                                            Pendente
                                                        </span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#atendarConsulta"><i class="text-success">Atender</i></button>
                                                            <a href="{{route('admin.marcacao.reagendarConsulta', Crypt::encryptString($consulta->id))}}" class="btn btn-outline-secondary" alt="Reagendar"><i class="icofont-edit text-success"></i></a>
                                                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#cancelarConsulta"><i class="icofont-ui-delete text-danger"></i></a>

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
                                                    <th>Tipo de Procedimento</th>   
                                                    <th>Data</th>  
                                                    <th>Hora</th>  
                                                    <th>Estado</th>  
                                                    <th>Acção</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($procedimentos as $procedimento)
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{ $count1++ }}</span>
                                                    </td>
                                                    <td>
                                                        <img class="avatar rounded-circle" src="{{asset('Style/images/xs/avatar1.jpg')}}" alt="">
                                                        <span class="fw-bold ms-1">{{ $procedimento->nome }} {{ $procedimento->sobrenome }}</span>
                                                    </td>
                                                    <td>
                                                        {{ $procedimento->tipo }}
                                                    </td>
                                                    <td>
                                                        {{ $procedimento->data }}
                                                    </td>
                                                    <td>
                                                        {{ $procedimento->hora }}
                                                    </td>
                                                    <td>
                                                        @if ( $procedimento->estado == 0 )
                                                        <span class="text-danger ms-1">
                                                            Pendente
                                                        </span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <a href="{{route('admin.marcacao.reagendarProcedimento', Crypt::encryptString($procedimento->id))}}" class="btn btn-outline-secondary" alt="Reagendar"><i class="icofont-edit text-success"></i></a>
                                                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#cancelarProcedi"><i class="icofont-ui-delete text-danger"></i></a>
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


<!-- Modal- Cancelar Procedimento-->
<div class="modal fade" id="cancelarProcedi" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="{{asset('img/sent.png')}}" alt="" width="80" height="76">
            </div>
            <div class="modal-body text-center">
                <div class="deadline-form">
                <h4>Tem certeza que deseja cancelar o Procedimento?</h4>
                </div>
                <div class="mb-3">
                </div>
            </div>
            <div class="modal-body g-5 text-center">
                <button type="button" class="btn btn-secundary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-danger text-white">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal- Cancelar Exame-->
<div class="modal fade" id="cancelarExame" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="{{asset('img/sent.png')}}" alt="" width="80" height="76">
            </div>
            <div class="modal-body text-center">
                <div class="deadline-form">
                <h4>Tem certeza que deseja cancelar o Exame?</h4>
                </div>
                <div class="mb-3">
                </div>
            </div>
            <div class="modal-body g-5 text-center">
                <button type="button" class="btn btn-secundary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-danger text-white">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal- Cancelar Consulta-->
<div class="modal fade" id="cancelarConsulta" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="{{asset('img/sent.png')}}" alt="" width="80" height="76">
            </div>
            <div class="modal-body text-center">
                <div class="deadline-form">
                <h4>Tem certeza que deseja cancelar a Consulta?</h4>
                </div>
                <div class="mb-3">
                </div>
            </div>
            <div class="modal-body g-5 text-center">
                <button type="button" class="btn btn-secundary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-danger text-white">Cancelar</button>
            </div>
        </div>
    </div>
</div>


@endsection