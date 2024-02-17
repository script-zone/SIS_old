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
                    <h3 class="fw-bold mb-0">Reagendar Procedimento</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Informações Básicas </h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.marcacao.updateProcedimento', [Crypt::encryptString($dadosProcedimento->id), Crypt::encryptString($dadosProcedimento->rcp_id)]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label  class="form-label">Paciente</label>
                                    <select class="form-select" name="paciente" aria-label="Default select example">
                                        <option value="{{ $paciente->id }}" selected>{{ $paciente->nome }} {{ $paciente->sobreNome }}</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">O Procedimento é Urgente?</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1" >
                                                <label class="form-check-label" for="exampleRadios11">
                                                Sim
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios22" value="option2" checked>
                                                <label class="form-check-label" for="exampleRadios22">
                                                Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="admitdate" class="form-label">Data</label>
                                    <input type="date" name="data_agendada" class="form-control" id="admitdate" value="{{ $dadosProcedimento->data }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="admittime" class="form-label">Hora</label>
                                    <input type="time" name="hora" class="form-control" id="admittime" value="{{ $dadosProcedimento->hora }}">
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Tipo de Procedimento</label>
                                    <select class="form-select" name="tipo" aria-label="Default select example">
                                        <option selected>Selecione o tipo de Procedimento</option>
                                    @foreach ( $tipoProcedimentos as $pro )
                                        @if ( $pro->id == $dadosProcedimento->tipo )
                                            <option selected value="{{ $pro->id }}">{{ $pro->nome }}</option>
                                        @else
                                            <option value="{{ $pro->id }}">{{ $pro->nome }}</option>
                                        @endif
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Doctor</label>
                                    <select class="form-select" name="p_clinic" aria-label="Default select example">
                                        <option selected disabled>Selecione o Doctor</option>
                                    @foreach ( $doctores as $doctor )
                                        @if ( $doctor->id == $dadosProcedimento->medico_id )
                                            <option selected value="{{ $doctor->id }}">{{ $doctor->nome }} {{ $doctor->sobreNome }}</option>
                                        @else
                                            <option value="{{ $doctor->id }}">{{ $doctor->nome }} {{ $doctor->sobreNome }}</option>
                                        @endif
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-4">Reagendar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection