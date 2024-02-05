@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Lançar Resultado de Exame</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Informações do Exame </h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label  class="form-label">Paciente</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Selecione o Paciente</option>
                                        <option value="1">Fridson Firmino</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Tipo de Exame</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Selecione o tipo de Exame</option>
                                        <option value="1">Surgeory</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="admitdate" class="form-label">Data</label>
                                    <input type="date" class="form-control" id="admitdate">
                                </div>
                                <div class="col-md-6">
                                    <label for="admittime" class="form-label">Hora</label>
                                    <input type="time" class="form-control" id="admittime">
                                </div>
                                <div class="col-md-6">
                                    <label for="admittime" class="form-label">Estado</label>
                                    <input type="text" class="form-control" id="admittime">
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Resultado</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Selecione um</option>
                                        <option value="1">Falso</option>
                                        <option value="2">Positivo</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="addnote" class="form-label">Descriçãp</label>
                                    <textarea  class="form-control" id="addnote" rows="3"></textarea> 
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-4">Lançar Resultado</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection