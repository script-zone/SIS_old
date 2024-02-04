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
                        <form action="#" id="form" method="#">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Papel</label>
                                    <input type="text" name="nome" class="form-control" id="nome">
                                </div>
                            </div>
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold "></h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped custom-table">
                                    <thead>
                                        <tr>
                                            <th>Modulos e Permissões</th>
                                            <th class="text-center">Read</th>
                                            <th class="text-center">Write</th>
                                            <th class="text-center">Create</th>
                                            <th class="text-center">Delete</th>
                                            <th class="text-center">Import</th>
                                            <th class="text-center">Export</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Doctor</td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Paciente</td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Laborátorio</td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cadastro</td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Listagem</td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Marcação</td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Configurações</td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" checked="">
                                            </td>
                                        </tr>
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


@endsection