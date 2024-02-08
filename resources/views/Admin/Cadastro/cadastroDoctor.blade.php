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
                        <form id="form_store_full_p_clinico">
                        @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input required type="text" name="nome" class="form-control" id="nome">
                                </div>
                                <div class="col-md-6">
                                    <label for="sobreNome" class="form-label">Sobrenome</label>
                                    <input required type="text" name="sobreNome" class="form-control" id="sobreNome">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input required type="email" name="email" class="form-control" id="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="CRM" class="form-label">CRM</label>
                                    <input required type="text" name="CRM" class="form-control" id="CRM">
                                </div>
                                <div class="col-md-6">
                                    <label for="bi" class="form-label">Bilhete de Identidade</label>
                                    <input required type="text" name="bi" class="form-control" id="bi">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Especialidade</label>
                                    <select required class="form-select" name="especialidade" id="especialidade" aria-label="Default select example">
                                        <option selected value="-1">Seleccione uma</option>
                                        @foreach ( $especialidades as $especialidade )
                                        <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label  class="form-label">Dias de Trabalho</label>
                                    <div class="row">
                                        @foreach($dias as $dia)
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input dia" type="checkbox" name="{{ $dia->id }}" id="{{ $dia->dia_semanal }}">
                                                <label class="form-check-label" for="{{ $dia->id }}">{{ $dia->dia_semanal }}</label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Senha</label>
                                    <input required type="password" name="password" class="form-control" id="password">
                                </div>
                                <div class="col-md-6">
                                    <label for="re_password" class="form-label">Confirmar Senha</label>
                                    <input required type="password" name="re_password" class="form-control" id="re_password">
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

<script src="{{asset('js/Admin/cadastro/conta_p_clinico.js')}}"></script>

@endsection