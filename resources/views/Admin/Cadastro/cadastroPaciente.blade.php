@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Cadastrar Paciente</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Informações Pessoais</h6>
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
                                    <label for="phonenumber" class="form-label">Telefone</label>
                                    <input type="number" class="form-control" id="phonenumber">
                                </div>
                                <div class="col-md-6">
                                    <label for="emailaddress" class="form-label">Telefone de Emergência</label>
                                    <input type="number" class="form-control" id="emailaddress">
                                </div>
                                <div class="col-md-6">
                                    <label for="admitdate" class="form-label">Data Nascimento</label>
                                    <input type="date" class="form-control" id="admitdate">
                                </div>
                                <div class="col-md-6">
                                    <label for="admittime" class="form-label">Nº Bilhete</label>
                                    <input type="text" class="form-control" id="admittime">
                                </div>
                                <div class="col-md-6">
                                    <label for="admittime" class="form-label">Morada</label>
                                    <input type="text" class="form-control" id="admittime">
                                </div>
                                <div class="col-md-6">
                                    <label for="admittime" class="form-label">Localidade</label>
                                    <input type="text" class="form-control" id="admittime">
                                </div>
                                <div class="col-md-6">
                                    <label for="admittime" class="form-label">Código Postal</label>
                                    <input type="text" class="form-control" id="admittime">
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Gênero</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios11">
                                                    Masculino
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios22" value="option2">
                                                <label class="form-check-label" for="exampleRadios22">
                                                    Femenino
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="formFileMultiple" class="form-label">Carregar Foto</label>
                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                </div>
                                <div class="col-md-12">
                                    <label for="addnote" class="form-label">Adicionar Bio</label>
                                    <textarea  class="form-control" id="addnote" rows="3"></textarea> 
                                </div>

                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Informações Médicas</h6>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Tem uma deficiencia?</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Seleccione uma</option>
                                        <option value="1">Deficiencia Visual</option>
                                        <option value="2">Fisico Motor</option>
                                        <option value="3">Outro</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Grupo Sanguineo</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Seleccione o Grupo Sanguineo</option>
                                        <option value="1">O+</option>
                                        <option value="2">O-</option>
                                        <option value="3">Desconhecido</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Alergia</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Seleccione uma</option>
                                        <option value="1">Lactose</option>
                                        <option value="2">Outro</option>
                                        <option value="3">Desconhecido</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Doença Familiar</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Seleccione uma</option>
                                        <option value="1">Alzaimer</option>
                                        <option value="2">Outro</option>
                                        <option value="3">Desconhecido</option>
                                    </select>
                                </div>
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Login Registro</h6>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6">
                                        <label for="insinfo" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="insinfo">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="roominfo" class="form-label">Senha</label>
                                        <input type="text" class="form-control" id="roominfo">
                                    </div>
                                    <div class="col-md-6">
                                        <label  class="form-label">Seleccionar Doctor</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Seleccione um Doctor</option>
                                            <option value="1">Vanessa Miller</option>
                                            <option value="2">Rebecca Hunter</option>
                                            <option value="3">Matt Clark</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="advancepayment" class="form-label">Confirmar Senha</label>
                                        <input type="text" class="form-control" id="advancepayment">
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection