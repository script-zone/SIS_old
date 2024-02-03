<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidade;
use DB;

class EspecialidadeController extends Controller
{
    //

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
            $user = new Especialidade();
            $user->nome = filter_var($request['nome'], FILTER_SANITIZE_STRING);
            $user->descricao = filter_var($request['descricao'], FILTER_SANITIZE_STRING);
            $user->save();

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

}
