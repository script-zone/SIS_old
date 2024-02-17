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
                    <h3 class="fw-bold mb-0">Editar Dados do Doctor</h3>
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
                        <form id="#" action="{{ route('admin.doctor.update_Perfil', Crypt::encryptString(auth()->user()->id)) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input required type="text" name="nome" class="form-control" id="nome" value="{{ $doctor->nome }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname" class="form-label">Sobrenome</label>
                                    <input required type="text" name="sobreNome" class="form-control" id="sobreNome" value="{{ $doctor->sobreNome }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="telefone" class="form-label">Telefone</label>
                                    <input required type="number" name="telefone" class="form-control" id="telefone" value="{{ $doctor->telefone }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="dataNascimento" class="form-label">Data Nascimento</label>
                                    <input required type="date" name="dataNascimento" class="form-control" id="dataNascimento" value="{{ $doctor->data_nascimento }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="bi" class="form-label">Nº Bilhete</label>
                                    <input required type="text" name="bi" class="form-control" id="bi" value="{{ $doctor->bi }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="morada" class="form-label">Morada</label>
                                    <input type="text" class="form-control" name="morada" id="morada" value="{{ $doctor->morada }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="localidade" class="form-label">Localidade</label>
                                    <input type="text" class="form-control" name="localidade" id="localidade" value="{{ $doctor->localidade }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="codigoPostal" class="form-label">Código Postal</label>
                                    <input type="text" class="form-control" name="codigoPostal" id="codigoPostal" value="{{ $doctor->codigoPostal }}">
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Especialidade</label>
                                    <select class="form-select" name="especialidade" id="especialidade" aria-label="Default select example">
                                        <option disabled>Seleccione uma</option>
                                        @foreach ($especialidades as $especialidade)
                                        @if ( $especialidade->id == $doctor->especialidade)
                                            <option selected value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                                        @else
                                            <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                                        @endif
                                        @endforeach
                                        <option value="0">Outro</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="codigoPostal" class="form-label">CRM</label>
                                    <input type="text" class="form-control" name="CRM" id="codigoPostal" value="{{ $doctor->CRM }}">
                                </div>
                                <div class="col-md-12">
                                    <label for="addNote" class="form-label">Adicionar Bio</label>
                                    <textarea name="addNote" class="form-control" id="addNote" sapi_windows_cp_conv rows="3"></textarea> 
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Gênero</label>
                                    @if ( $doctor->sexo == 'M' )
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
                                    @elseif ( $doctor == 'F') 
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
                                    <input class="form-control" name="fileFoto" type="file" id="fileFoto" value="{{ $doctor->foto }}" multiple>
                                </div>
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Login Registro</h6>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6">
                                        <label for="insinfo" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" name="email" id="insinfo" value="{{ $doctor->email }}">
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