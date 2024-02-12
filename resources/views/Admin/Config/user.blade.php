@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Cadastrar Utilizador</h3>
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
                        <form id="form_store_full_admin" method="#" >
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input  type="text" name="nome" class="form-control" id="nome" required>
                                    <span id="nomeAviso" class="text-danger d-none">Por favor informe um nome válido...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="sobrenome" class="form-label">Sobrenome</label>
                                    <input  type="text" name="sobrenome" class="form-control" id="sobrenome" required>
                                    <span id="sobrenomeAviso" class="text-danger d-none">Por favor informe um nome válido...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefone" class="form-label">Telefone</label>
                                    <input  type="number" name="telefone" class="form-control" id="telefone" required>
                                    <span id="telefoneAviso" class="text-danger d-none">Por favor informe um número de telefone válido...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefoneEmergencia" class="form-label">Telefone de Emergência</label>
                                    <input type="number" class="form-control" name="telefoneEmergencia" id="telefoneEmergencia" required>
                                    <span id="telefoneEmergenciaAviso" class="text-danger d-none">Por favor informe um número de telefone válido...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="dataNascimento" class="form-label">Data Nascimento</label>
                                    <input type="date" name="dataNascimento" class="form-control" id="dataNascimento" required>
                                    <span id="dataNascimentoAviso" class="text-danger d-none">Por favor informe uma data de nascimento válido...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="bi" class="form-label">Nº Bilhete</label>
                                    <input type="text" name="bi" class="form-control"  id="bi" maxlength="14" required>
                                    <span id="biAviso" class="text-danger d-none">Por favor informe um número do Bilhete válido...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="morada" class="form-label">Morada</label>
                                    <input type="text" class="form-control" name="morada" id="morada" required>
                                    <span id="moradaAviso" class="text-danger d-none">Por favor informe uma morada válida...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="localidade" class="form-label">Localidade</label>
                                    <input type="text" class="form-control" name="localidade" id="localidade" required>
                                    <span id="localidadeAviso" class="text-danger d-none">Por favor informe uma localidade válida...</span>
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
                                    <label for="papel" class="form-label">Papel</label>
                                    <select class="form-select" name="papel" id="papel" aria-label="Default select example" required>
                                        <option selected disabled value="">Seleccione um papel </option>
                                        @foreach($papeis as $papel)
                                            @if($papel->tipo == 'admin')
                                            <option value="{{ $papel->id }}">{{ $papel->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Login Registro</h6>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" name="email" class="form-control" id="email" required>
                                        <span id="emailAviso" class="text-danger d-none">Por favor informe um Email válida...</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Senha</label>
                                        <input type="password" name="password" class="form-control" id="password" required>
                                        <span id="passwordAviso" class="text-danger d-none">Por favor informe uma senha válida, tamanho minimo 8...</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="re_password" class="form-label">Confirmar Senha</label>
                                        <input type="password" name="re_password" class="form-control" id="re_password" required>
                                        <span id="re_passwordAviso" class="text-danger d-none">Por favor, as senhas devem ser iguais...</span>
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

<script src="{{ asset('js/Admin/cadastro/conta_admin.js') }}"></script>

@endsection