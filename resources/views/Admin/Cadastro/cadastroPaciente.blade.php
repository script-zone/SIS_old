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
                        <form id="form_store_full_paciente" method="post" >
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input required type="text" name="nome" class="form-control" id="nome">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname" class="form-label">Sobrenome</label>
                                    <input required type="text" name="sobrenome" class="form-control" id="sobreNome">
                                </div>
                                <div class="col-md-6">
                                    <label for="telefone" class="form-label">Telefone</label>
                                    <input required type="number" name="telefone" class="form-control" id="telefone">
                                </div>
                                <div class="col-md-6">
                                    <label for="telefoneEmergencia" class="form-label">Telefone de Emergência</label>
                                    <input type="number" class="form-control" name="telefoneEmergencia" id="telefoneEmergencia">
                                </div>
                                <div class="col-md-6">
                                    <label for="dataNascimento" class="form-label">Data Nascimento</label>
                                    <input required type="date" name="dataNascimento" class="form-control" id="dataNascimento">
                                </div>
                                <div class="col-md-6">
                                    <label for="bi" class="form-label">Nº Bilhete</label>
                                    <input required type="text" name="bi" class="form-control" id="bi">
                                </div>
                                <div class="col-md-6">
                                    <label for="morada" class="form-label">Morada</label>
                                    <input type="text" class="form-control" name="morada" id="morada">
                                </div>
                                <div class="col-md-6">
                                    <label for="localidade" class="form-label">Localidade</label>
                                    <input type="text" class="form-control" name="localidade" id="localidade">
                                </div>
                                <div class="col-md-6">
                                    <label for="codigoPostal" class="form-label">Código Postal</label>
                                    <input type="text" class="form-control" name="codigoPostal" id="codigoPostal">
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Gênero</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Sexo" id="SexoRadio1" value="M" checked>
                                                <label class="form-check-label" for="exampleRadios11">
                                                    Masculino
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Sexo" id="SexoRadio2" value="F">
                                                <label class="form-check-label" for="exampleRadios22">
                                                    Femenino
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="fileFoto" class="form-label">Carregar Foto</label>
                                    <input class="form-control" name="fileFoto" type="file" id="fileFoto" multiple>
                                </div>
                                <div class="col-md-12">
                                    <label for="addNote" class="form-label">Adicionar Bio</label>
                                    <textarea name="addNote" class="form-control" id="addNote" rows="3"></textarea> 
                                </div>

                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Informações Médicas</h6>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Tem uma deficiencia?</label>
                                    <select class="form-select" name="deficiencia" id="deficiencia" aria-label="Default select example">
                                        <option selected>Seleccione uma</option>
                                        <option value="1">Deficiencia Visual</option>
                                        <option value="1">Deficiência Auditiva</option>
                                        <option value="2">Fisico Motor</option>
                                        <option value="3">Outro</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Grupo Sanguineo</label>
                                    <select class="form-select" name="grupo_sanguineo" id="grupo_sanguineo" aria-label="Default select example">
                                        <option selected>Seleccione o Grupo Sanguineo</option>
                                        <option value="1">O+</option>
                                        <option value="2">O-</option>
                                        <option value="3">A-</option>
                                        <option value="4">A+</option>
                                        <option value="5">B-</option>
                                        <option value="6">B+</option>
                                        <option value="7">AB-</option>
                                        <option value="8">AB+</option>
                                        <option value="9">Desconhecido</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Alergia</label>
                                    <select class="form-select" name="alergia" id="alergia" aria-label="Default select example">
                                        <option selected>Seleccione uma</option>
                                        <option value="1">Lactose</option>
                                        <option value="2">Outro</option>
                                        <option value="3">Desconhecido</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Doença Familiar</label>
                                    <select class="form-select" name="doenca_familiar" id="doenca_familiar" aria-label="Default select example">
                                        <option selected>Seleccione uma</option>
                                        <option value="1">Alzaimer</option>
                                        <option value="2">Diabete</option>
                                        <option value="3">Ataque Cardio Vascular</option>
                                        <option value="4">Outro</option>
                                        <option value="9">Desconhecido</option>
                                    </select>
                                </div>
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Login Registro</h6>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" name="email" class="form-control" id="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Senha</label>
                                        <input type="text" name="password" class="form-control" id="password">
                                    </div>

                                    <!--<div class="col-md-6">
                                        <label  class="form-label">Seleccionar Doctor</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Seleccione um Doctor</option>
                                            <option value="1">Vanessa Miller</option>
                                            <option value="2">Rebecca Hunter</option>
                                            <option value="3">Matt Clark</option>
                                        </select>
                                    </div>-->

                                    <div class="col-md-6">
                                        <label for="re_password" class="form-label">Confirmar Senha</label>
                                        <input type="text" name="re_password" class="form-control" id="re_password">
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

<script src="{{asset('js/Admin/conta_paciente.js')}}"></script>

@endsection