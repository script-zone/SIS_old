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
                                <label  class="form-label">Dias de Trabalho</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="dias" id="domingo" value="domingo">
                                                <label class="form-check-label" for="exampleRadios11">
                                                    Domingo
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="dias" id="segunda-feira" value="segunda-feira">
                                                <label class="form-check-label" for="exampleRadios22">
                                                    Segunda-Feira
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="dias" id="terca-feira" value="terca-feira">
                                                <label class="form-check-label" for="exampleRadios11">
                                                    Terça-Feira
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="dias" id="quarta-feira" value="quarta-feira">
                                                <label class="form-check-label" for="exampleRadios22">
                                                    Quarta-Feira
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="dias" id="quinta-feira" value="quinta-feira">
                                                <label class="form-check-label" for="exampleRadios11">
                                                    Quinta-Feira
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="dias" id="sexta-feira" value="sexta-feira">
                                                <label class="form-check-label" for="exampleRadios22">
                                                    Sexta-Feira
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="dias" id="sabado" value="sabado">
                                                <label class="form-check-label" for="exampleRadios22">
                                                    Sábado
                                                </label>
                                            </div>
                                        </div>
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