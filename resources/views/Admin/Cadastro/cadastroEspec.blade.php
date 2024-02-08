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
                        <form action="{{ route('admin.store.especialidade') }}" id="form_store_full_especialidade" method="post">
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome da Especialidade</label>
                                    <input type="text" name="nome" class="form-control" id="nome">
                                </div>
                                <div class="col-md-12">
                                    <label for="descricao" class="form-label">Descrição da Especialidade</label>
                                    <textarea  class="form-control" name="descricao" id="descricao" rows="3"></textarea> 
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

<script src="{{asset('js/Admin/cadastro/especialidade.js')}}"></script>

@endsection