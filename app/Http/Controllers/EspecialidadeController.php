<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidade;
use DB;

class EspecialidadeController extends Controller
{
    //


    public function formCreateEspecialidade () {
        return view('Admin.Cadastro.cadastroEspec');
    }

    public function createEspecialidade (Request $request) {

        // dd($request);

        // $retorno = Validacao::validarDadosCriacaoDeConta($request);
        // if ($retorno['estado'] == true) {
        // } else {
        //    $retorno['estado'] = false;
        //    return response([
        //        'retorno' => $retorno
        //    ]);
        // }

        $retorno['erros_validacao_especialidade'] = [];
        $retorno['estado'] = false;
            
        $request['nomeCompleto'] = $request['nome']." ".$request['sobrenome'];
        //dd($request);

        try {
            DB::beginTransaction();

            // registrando uma especialidade
            $especialidade = new Especialidade();
            $especialidade->nome = filter_var($request['nome'], FILTER_SANITIZE_STRING);
            $especialidade->descricao = filter_var($request['descricao'], FILTER_SANITIZE_STRING);
            $especialidade->save();

            DB::commit();

            $retorno['estado'] = true;

        } catch (Exception $th) {
            DB::rollBack();

            DB::beginTransaction(false);

            try {
                addErro($th, 'Erro ao criar conta!');
            } catch (Exception $th) {
            }

            $retorno['error_sql'] = $th->getMessage();
            $retorno['estado'] = false;
        }
        
        return response([
            'retorno' => $retorno,
        ]);

    }

    public function showAllEspecialidades () {

        $dados = [
            'especialidades' => Especialidade::all(),
            'count' => 0,
        ];

        return view('Admin.Listagem.todasEspec')->with($dados);
    }

}
