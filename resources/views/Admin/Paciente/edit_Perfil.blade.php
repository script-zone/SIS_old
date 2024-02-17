@extends('Admin.index')

@section('conteudo')

@if (session('mgs'))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading font-weight-semi-bold">Sucesso!</h4>
        <p>{{ session('mgs') }}</p>
    </div>
@endif

@if ($errors->all())
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading font-weight-semi-bold">Erros!</h4>
        @foreach ($errors->all() as $error)
            <p><i class="fa fa-times-circle"></i> {{ $error }} </p>
        @endforeach
    </div>
@endif

<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Editar Dados do Paciente</h3>
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
                        <form id="form_store_full_paciente" action="{{ route('admin.paciente.update_Perfil', [Crypt::encryptString(auth()->user()->id), Crypt::encryptString($paciente->rcp)]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome</label>
                                    <!-- @if( $paciente->rcp==null ) {{ 'rcp é nulo' }} @endif -->
                                    <input required type="text" name="nome" class="form-control" id="nome" value="{{ $paciente->nome }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname" class="form-label">Sobrenome</label>
                                    <input required type="text" name="sobreNome" class="form-control" id="sobreNome" value="{{ $paciente->sobreNome }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="telefone" class="form-label">Telefone</label>
                                    <input required type="number" name="telefone" class="form-control" id="telefone" value="{{ $paciente->telefone }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="telefoneEmergencia" class="form-label">Telefone de Emergência</label>
                                    <input type="number" class="form-control" name="telefoneEmergencia" id="telefoneEmergencia" value="{{ $paciente->contacto_emergencia }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="dataNascimento" class="form-label">Data Nascimento</label>
                                    <input required type="date" name="dataNascimento" class="form-control" id="dataNascimento" value="{{ $paciente->data_nascimento }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="bi" class="form-label">Nº Bilhete</label>
                                    <input required type="text" name="bi" class="form-control" id="bi" value="{{ $paciente->bi }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="morada" class="form-label">Morada</label>
                                    <input type="text" class="form-control" name="morada" id="morada" value="{{ $paciente->morada }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="localidade" class="form-label">Localidade</label>
                                    <input type="text" class="form-control" name="localidade" id="localidade" value="{{ $paciente->localidade }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="codigoPostal" class="form-label">Código Postal</label>
                                    <input type="text" class="form-control" name="codigoPostal" id="codigoPostal" value="{{ $paciente->codigoPostal }}">
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Gênero</label>
                                    @if ( $paciente->sexo == 'M' )
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
                                    @elseif ( $paciente == 'F') 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Sexo" id="SexoRadio1" value="M">
                                                <label class="form-check-label" for="exampleRadios11">
                                                    Masculino
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Sexo" id="SexoRadio2" value="F" checked>
                                                <label class="form-check-label" for="exampleRadios22">
                                                    Femenino
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Sexo" id="SexoRadio1" value="M">
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
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="fileFoto" class="form-label">Carregar Foto</label>
                                    <input class="form-control" name="fileFoto" type="file" id="fileFoto" value="{{ $paciente->foto }}" multiple>
                                </div>
                                <div class="col-md-12">
                                    <label for="addNote" class="form-label">Adicionar Bio</label>
                                    <textarea name="addNote" class="form-control" id="addNote" value="{{ $paciente->terapeutica }}" rows="3"></textarea> 
                                </div>

                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Informações Médicas</h6>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Tem uma deficiencia?</label>
                                    <select class="form-select" name="deficiencia" id="deficiencia" aria-label="Default select example">
                                        <option disabled selected>Seleccione uma</option>
                                        @if ($paciente->deficiencia == 'Deficiência Auditiva')
                                            <option selected value="Deficiência Auditiva">Deficiência Auditiva</option>
                                        @else
                                            <option value="Deficiência Auditiva">Deficiência Auditiva</option>
                                        @endif 
                                        @if ($paciente->deficiencia == 'Fisico Motor')
                                            <option selected value="Fisico Motor">Fisico Motor</option>
                                        @else
                                            <option value="Fisico Motor">Fisico Motor</option>
                                        @endif
                                        @if ($paciente->deficiencia == 'Outra')
                                            <option selected value="Outra">Outra</option>
                                        @else
                                            <option value="Outra">Outra</option>
                                        @endif
                                        @if ($paciente->deficiencia == 'Nenhuma')
                                            <option selected value="Nenhuma">Nenhuma</option>
                                        @else
                                            <option value="Nenhuma">Nenhuma</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Grupo Sanguineo</label>
                                    <select required class="form-select" name="grupo_sanguineo" id="grupo_sanguineo" aria-label="Default select example">
                                        @if ($paciente->grupo_sanguineo == 'O-')
                                            <option selected value="O-">O-</option>
                                        @else
                                            <option value="O-">O-</option>
                                        @endif 

                                        @if ($paciente->grupo_sanguineo == 'O+')
                                            <option selected value="O+">O+</option>
                                        @else
                                            <option value="O+">O+</option>
                                        @endif 

                                        @if ($paciente->grupo_sanguineo == 'A-')
                                            <option selected value="A-">A-</option>
                                        @else
                                            <option value="A-">A-</option>
                                        @endif 

                                        @if ($paciente->grupo_sanguineo == 'A+')
                                            <option selected value="A+">A+</option>
                                        @else
                                            <option value="A+">A+</option>
                                        @endif 

                                        @if ($paciente->grupo_sanguineo == 'B-')
                                            <option selected value="B-">B-</option>
                                        @else
                                            <option value="B-">B-</option>
                                        @endif 

                                        @if ($paciente->grupo_sanguineo == 'B+')
                                            <option selected value="B+">B+</option>
                                        @else
                                            <option value="B+">B+</option>
                                        @endif 

                                        @if ($paciente->grupo_sanguineo == 'AB-')
                                            <option selected value="AB-">AB-</option>
                                        @else
                                            <option value="AB-">AB-</option>
                                        @endif 

                                        @if ($paciente->grupo_sanguineo == 'AB+')
                                            <option selected value="AB+">AB+</option>
                                        @else
                                            <option value="AB+">AB+</option>
                                        @endif 
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Alergia</label>
                                    <select class="form-select" name="alergia" id="alergia" aria-label="Default select example">
                                        @if ($paciente->alergias == 'Nenhuma')
                                            <option selected value="Nenhuma">Nenhuma</option>
                                        @else
                                            <option value="Nenhuma">Nenhuma</option>
                                        @endif 
                                        @if ($paciente->alergias == 'Lactose')
                                            <option selected value="Lactose">Lactose</option>
                                        @else
                                            <option value="Lactose">Lactose</option>
                                        @endif 
                                        @if ($paciente->alergias == 'Desconhecida')
                                            <option selected value="Desconhecida">Desconhecida</option>
                                        @else
                                            <option value="Desconhecida">Desconhecida</option>
                                        @endif 
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Doença Familiar</label>
                                    <select class="form-select" name="doenca_familiar" id="doenca_familiar" aria-label="Default select example">
                                        @if ($paciente->historico_familiar == 'Nenhuma')
                                            <option selected value="Nenhuma">Nenhuma</option>
                                        @else
                                            <option value="Nenhuma">Nenhuma</option>
                                        @endif 
                                        @if ($paciente->historico_familiar == 'Alzaimer')
                                            <option selected value="Alzaimer">Alzaimer</option>
                                        @else
                                            <option value="Alzaimer">Alzaimer</option>
                                        @endif 
                                        @if ($paciente->historico_familiar == 'Diabete')
                                            <option selected value="Diabete">Diabete</option>
                                        @else
                                            <option value="Diabete">Diabete</option>
                                        @endif 
                                        @if ($paciente->historico_familiar == 'Ataque Cardio Vascular')
                                            <option selected value="Ataque Cardio Vascular">Ataque Cardio Vascular</option>
                                        @else
                                            <option value="Ataque Cardio Vascular">Ataque Cardio Vascular</option>
                                        @endif 
                                        @if ($paciente->historico_familiar == 'Desconhecida')
                                            <option selected value="Desconhecida">Desconhecida</option>
                                        @else
                                            <option value="Desconhecida">Desconhecida</option>
                                        @endif 
                                    </select>
                                </div>
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Login Registro</h6>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" name="email" class="form-control" id="email" value="{{ $paciente->email }}">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Salvar Alterações</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection