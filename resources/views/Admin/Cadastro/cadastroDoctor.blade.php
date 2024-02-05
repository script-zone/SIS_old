@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Cadastrar Pessoal Clinico</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Login Registro</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="firstname" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname" class="form-label">Sobrenome</label>
                                    <input type="text" class="form-control" id="lastname">
                                </div>
                                <div class="col-md-6">
                                    <label for="insinfo" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="insinfo">
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Especialidade</label>
                                    <select class="form-select" name="especialidade" id="especialidade" aria-label="Default select example">
                                        <option selected>Seleccione uma</option>
                                        <option value="1">Outro</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Dias de Trabalho</label>
                                    <select class="form-select" name="d_trabalho" id="d_trabalho" aria-label="Default select example">
                                        <option selected>Seleccione...</option>
                                        <option value="1">Outro</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="roominfo" class="form-label">Senha</label>
                                    <input type="text" class="form-control" id="roominfo">
                                </div>
                                <div class="col-md-6">
                                    <label for="advancepayment" class="form-label">Confirmar Senha</label>
                                    <input type="text" class="form-control" id="advancepayment">
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-4">Registrar</button>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection