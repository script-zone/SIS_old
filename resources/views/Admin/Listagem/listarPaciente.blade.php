@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Todos os Pacientes</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix g-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Endereço</th>
                                    <th>Genero</th>
                                    <th>Telefone</th>
                                    <th>Nº Bilhete</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pacientes as $paciente)
                                <tr>
                                    <td>PAC-{{ $paciente->id_paciente }}</td>
                                    <td><img src="{{asset('Style/images/xs/avatar3.jpg')}}" class="avatar  rounded-circle me-2" alt="profile-image"><span>{{ $paciente->nome }} {{ $paciente->sobreNome }}</span></td>
                                    <td>{{ $paciente->data_nascimento }}</td>
                                    <td>{{ $paciente->localidade }} {{ $paciente->morada }}</td>
                                    <td>
                                        @if ($paciente->sexo=='M')
                                        Masculino
                                        @else
                                        Feminino
                                        @endif
                                    </td>
                                    <td>{{ $paciente->telefone }}</td>
                                    <td>{{ $paciente->bi }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-eye text-success"> RCU</i></button>
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