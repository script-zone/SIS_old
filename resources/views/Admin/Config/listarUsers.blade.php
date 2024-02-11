@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Todos os Utilizadores</h3>
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
                                    <th>Papel</th>
                                    <th>Detalhes</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>usr-{{ $user->id }}</td>
                                    <td>{{ $user->nome }} {{ $user->sobreNome }}</td>
                                    <td>{{ $user->papel }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href="{{route('admin.config.permissoes', [$user->id, $user->papel_id] )}}" class="btn btn-outline-secondary" ><i class="text-success"> Ver Detalhes</i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href="{{route('admin.config.editarUser')}}" class="btn btn-outline-secondary" ><i class="icofont-edit text-success"></i></a>
                                            <a href="#" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#"><i class="icofont-ui-delete text-danger"></i></a>
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