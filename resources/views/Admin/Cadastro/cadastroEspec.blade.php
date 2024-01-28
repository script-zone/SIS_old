@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Cadastrar Especialidade</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Informações</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="firstname" class="form-label">Nome da Especialidade</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                                <div class="col-md-12">
                                    <label for="addnote" class="form-label">Descrição da Especialidade</label>
                                    <textarea  class="form-control" id="addnote" rows="3"></textarea> 
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
@endsection