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
                                    <input type="text" name="nome" class="form-control" placeholder="Ex: Fridson" maxlength="25" id="nome" required>
                                    <span id="nomeAviso" class="text-danger d-none">Por favor informe um nome válido...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="sobrenome" class="form-label">Nome</label>
                                    <input type="text" name="sobrenome" class="form-control" placeholder="Ex: Firmino" maxlength="25" id="sobrenome" required>
                                    <span id="sobrenomeAviso" class="text-danger d-none">Por favor informe um nome válido...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefone" class="form-label">Telefone</label>
                                    <input type="number" name="telefone" class="form-control" placeholder="Ex: 9XXXXXXXX" id="telefone" required>
                                    <span id="telefoneAviso" class="text-danger d-none">Por favor informe um número de telefone válido...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefoneEmergencia" class="form-label">Telefone de Emergência</label>
                                    <input type="number" class="form-control" name="telefoneEmergencia" placeholder="Ex: 9XXXXXXXX" id="telefoneEmergencia" required>
                                    <span id="telefoneEmergenciaAviso" class="text-danger d-none">Por favor informe um número de telefone válido...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="dataNascimento" class="form-label">Data Nascimento</label>
                                    <input type="date" name="dataNascimento" class="form-control" id="dataNascimento" required>
                                    <span id="dataNascimentoAviso" class="text-danger d-none">Por favor informe uma data de nascimento válido...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="bi" class="form-label">Nº Bilhete</label>
                                    <input type="text" name="bi" class="form-control" placeholder="Ex: XXXXXXXXXYYXXX" maxlength="14" id="bi" required>
                                    <span id="biAviso" class="text-danger d-none">Por favor informe um número do Bilhete válido...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="morada" class="form-label">Morada</label>
                                    <input type="text" class="form-control" name="morada" placeholder="Ex: XXXX XXXX" maxlength="25" id="morada" required>
                                    <span id="moradaAviso" class="text-danger d-none">Por favor informe uma morada válida...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="localidade" class="form-label">Localidade</label>
                                    <input type="text" class="form-control" name="localidade" placeholder="Ex: XXXXXXX" maxlength="25" id="localidade">
                                    <span id="localidadeAviso" class="text-danger d-none">Por favor informe uma localidade válida...</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="codigoPostal" class="form-label">Código Postal</label>
                                    <input type="text" class="form-control" name="codigoPostal" placeholder="Ex: 0000000" maxlength="10" id="codigoPostal" required>
                                    <span id="codigoPostalAviso" class="text-danger d-none">Por favor informe um codigo válida...</span>
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
                                    <input class="form-control" name="fileFoto" type="file" id="fileFoto" required>
                                    <span id="fileFotoAviso" class="text-danger d-none">Por favor seleccione uma imagem válida...</span>
                                </div>
                                <div class="col-md-12">
                                    <label for="addNote" class="form-label">Adicionar Bio</label>
                                    <textarea name="addNoteAviso" class="form-control" id="addNote" placeholder="Descrição..." maxlength="100" rows="3" required></textarea>
                                    <span id="addNoteAviso" class="text-danger d-none">Por favor informe conteúdo válida...</span> 
                                </div>

                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Informações Médicas</h6>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Tem uma deficiencia?</label>
                                    <select class="form-control" name="deficiencia" id="deficiencia" aria-label="Default select example" required>
                                        <option selected disabled value="">Seleccione uma</option>
                                        <option value="1">Deficiencia Visual</option>
                                        <option value="1">Deficiência Auditiva</option>
                                        <option value="2">Fisico Motor</option>
                                        <option value="3">Outro</option>
                                    </select>
                                    <span id="deficienciaAviso" class="text-danger d-none">Seleccione uma opção...</span>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Grupo Sanguineo</label>
                                    <select class="form-control" name="grupo_sanguineo" id="grupo_sanguineo" aria-label="Default select example" required>
                                        <option selected disabled value="">Seleccione o Grupo Sanguineo</option>
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
                                    <span id="grupo_sanguineoAviso" class="text-danger d-none">Seleccione uma opção...</span>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Alergia</label>
                                    <select class="form-control" name="alergia" id="alergia" aria-label="Default select example" required>
                                        <option selected disabled value="">Seleccione uma</option>
                                        <option value="1">Lactose</option>
                                        <option value="2">Outro</option>
                                        <option value="3">Desconhecido</option>
                                    </select>
                                    <span id="alergiaAviso" class="text-danger d-none">Seleccione uma opção...</span>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Doença Familiar</label>
                                    <select class="form-control" name="doenca_familiar" id="doenca_familiar" aria-label="Default select example" required>
                                        <option selected disabled value="">Seleccione uma</option>
                                        <option value="1">Alzaimer</option>
                                        <option value="2">Diabete</option>
                                        <option value="3">Ataque Cardio Vascular</option>
                                        <option value="4">Outro</option>
                                        <option value="9">Desconhecido</option>
                                    </select>
                                    <span id="doenca_familiarAviso" class="text-danger d-none">Seleccione uma opção...</span>
                                </div>
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Login Registro</h6>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="Digite o seu email" maxlength="30" id="email" required>
                                        <span id="emailAviso" class="text-danger d-none">Por favor informe um Email válida...</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Senha</label>
                                        <input type="password" name="password" class="form-control" placeholder="Digite a sua senha" maxlength="15" id="password" required>
                                        <span id="passwordAviso" class="text-danger d-none">Por favor informe uma senha válida, tamanho minimo 8...</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="re_password" class="form-label">Confirmar Senha</label>
                                        <input type="password" name="re_password" class="form-control" placeholder="Repita a sua senha " maxlength="15" id="re_password" required>
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

<script src="{{asset('js/Admin/cadastro/conta_paciente.js')}}">

</script>

@endsection