@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Agendar Exame</h3>
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
                        <form id="form_marcar_exame">
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label  class="form-label">Paciente</label>
                                    <select class="form-select" name="paciente" aria-label="Default select example">
                                        <option selected>Selecione o Paciente</option>
                                        @foreach ($pacientes as $paciente)
                                        <option value="{{ $paciente->id }}">{{ $paciente->nome }} {{ $paciente->sobreNome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">A Consulta é Urgente?</label>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="SIM" id="urgencia1" value="option1" >
                                                <label class="form-check-label" for="SIM">
                                                Sim
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="NAO" id="urgencia2" value="option2" checked>
                                                <label class="form-check-label" for="NAO">
                                                Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="data_agendada" class="form-label">Data</label>
                                    <input type="date" name="data_agendada" class="form-control" id="data_agendada">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Hora</label>
                                    <select class="form-select" name="hora" aria-label="Default select example">
                                        <option selected>Selecione um horário</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:30">20:30</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Tipo de Consulta</label>
                                    <select class="form-select" name="tipo" aria-label="Default select example">
                                        <option selected>Selecione o tipo de Procedimento</option>
                                        @foreach ($especialidades as $especialidade)
                                        <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Doctor</label>
                                    <select class="form-select" name="p_clinic" aria-label="Default select example">
                                        <option selected>Selecione o Doctor</option>
                                        @foreach ($doctores as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->nome }} {{ $doctor->sobreNome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-4">Agendar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/Admin/marcacao/exame.js') }}"></script>


@endsection
