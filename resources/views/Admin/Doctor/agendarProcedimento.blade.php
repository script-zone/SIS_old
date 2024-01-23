@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Agendar Procedimento</h3>
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
                        <form>
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="firstname" class="form-label">Nome Completo</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                                <div class="col-md-6">
                                    <label for="phonenumber" class="form-label">Número de telefone</label>
                                    <input type="text" class="form-control" id="phonenumber">
                                </div>
                                <div class="col-md-6">
                                    <label for="emailaddress" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="emailaddress">
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
                                    <label for="admitdate" class="form-label">Data</label>
                                    <input type="date" class="form-control" id="admitdate">
                                </div>
                                <div class="col-md-6">
                                    <label for="admittime" class="form-label">Hora</label>
                                    <input type="time" class="form-control" id="admittime">
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Tipo de Procedimento</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Selecione o tipo de Procedimento</option>
                                        <option value="1">Surgeory</option>
                                        <option value="2">Dentist Chekup</option>
                                        <option value="3">Body Chekup</option>
                                        <option value="4">Gynecologist Chekup</option>
                                        <option value="5">Other Service</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Doctor</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Selecione o Doctor</option>
                                        <option value="1">DR.Fridson</option>
                                        <option value="2">DR.Firmino</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="addnote" class="form-label">Adicionar Nota</label>
                                    <textarea  class="form-control" id="addnote" rows="3"></textarea> 
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
@endsection