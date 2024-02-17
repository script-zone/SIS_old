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
                    <h3 class="fw-bold mb-0">Editar dados da Especialidade</h3>
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
                        <form action="{{ route('admin.cadastro.updateEspec', Crypt::encryptString($especialidade->id)) }}" id="form_store_full_especialidade" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome da Especialidade</label>
                                    <input type="text" name="nome" class="form-control" id="nome" value="{{ $especialidade->nome }}">
                                </div>
                                <div class="col-md-12">
                                    <label for="descricao" class="form-label">Descrição da Especialidade</label>
                                    <textarea  class="form-control" name="descricao" id="descricao" rows="3">{{ $especialidade->descricao }}</textarea> 
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