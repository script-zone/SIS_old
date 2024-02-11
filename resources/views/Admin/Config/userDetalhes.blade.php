@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Detalhes</h3>
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
                                    <label for="nome" class="form-label">Nome Completo</label>
                                    <input required type="text" name="nome" class="form-control" id="nome" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname" class="form-label">Gênero</label>
                                    <input required type="text" name="sobrenome" class="form-control" id="sobreNome" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefone" class="form-label">Telefone</label>
                                    <input required type="number" name="telefone" class="form-control" id="telefone" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefoneEmergencia" class="form-label">Telefone de Emergência</label>
                                    <input type="number" class="form-control" name="telefoneEmergencia" id="telefoneEmergencia" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="dataNascimento" class="form-label">Data Nascimento</label>
                                    <input required type="date" name="dataNascimento" class="form-control" id="dataNascimento" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="bi" class="form-label">Nº Bilhete</label>
                                    <input type="text" name="bi" class="form-control" id="bi" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="morada" class="form-label">Morada</label>
                                    <input type="text" class="form-control" name="morada" id="morada" disabled>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="papel" class="form-label">Papel</label>
                                    <select class="form-select" name="papel" id="papel" aria-label="Default select example" disabled>
                                        <option selected>Seleccione um papel </option>
                                    </select>
                                </div>

                            <div class="table-responsive">
                                <table class="table table-striped custom-table">
                                    <thead>
                                        <tr>
                                            <th class="">Permissão</th>
                                            <th class="text-center">Autorizadas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="">Alguma coisa</td>
                                            <td class="text-center">
                                                <input class="permissao" name="" type="checkbox" disabled>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection