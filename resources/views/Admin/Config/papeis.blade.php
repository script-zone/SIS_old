@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Papeis e Permissões</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Informações</h6>
                    </div>
                    <div class="card-body">
                        <form action="#" id="formPapelPermissoes" method="#">
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Papel</label>
                                    <input required type="text" name="name" class="form-control" id="name">
                                </div>
                            </div>

                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold "></h6>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped custom-table">
                                    <thead>
                                        <tr>
                                            <th class="">Permissão</th>
                                            <th class="text-center">seleccionar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($permissoes as $permissao)
                                        <tr>
                                            <td class="">{{$permissao->name}}</td>
                                            <td class="text-center">
                                                <input class="permissao" name="{{$permissao->id}}" type="checkbox">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-4">Adicionar</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/Admin/papel_permissoes.js') }}"></script>


@endsection