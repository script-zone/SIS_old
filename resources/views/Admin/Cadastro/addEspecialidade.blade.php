@extends('Admin.adminIndex')

@section('conteudo')

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Cadastro Especialidades</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
							<div class="form-group">
								<label>Nome da Especialidade</label>
								<input class="form-control" type="text">
							</div>
                            <div class="form-group">
                                <label>Descrição</label>
                                <textarea cols="30" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			<div class="notification-box">
            @endsection