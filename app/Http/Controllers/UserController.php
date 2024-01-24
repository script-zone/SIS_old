<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Validacao;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    //

    public function createAccountPaciente (Request $request) {

        //dd($request);

        $retorno = Validacao::validarDadosCriacaoDeConta($request);
        if ($retorno['estado'] == true) {
            
            $request['nomeCompleto'] = $request['nome']." ".$request['sobrenome'];
            //dd($request);

            try {
                DB::beginTransaction();

                $user = new User();
                $user->nomeCompleto                 = filter_var($request['nomeCompleto'], FILTER_SANITIZE_STRING);
                $user->email                = filter_var($request['email'], FILTER_SANITIZE_STRING);
                $user->password             = bcrypt($request['password']);
                $user->tipo                 = "paciente";
                $user->save();

                DB::commit();

                //enviarNotificacaoCelular($candidato->telefone,  $mensagem);

                $mensagem = "Suas Credenciais";
                $retorno['estado'] = true;
                return redirect()->back()->with([
                    'email' => $user->email,
                    'password' => $user->password,
                    'mensagem' => $mensagem,
                    'retorno' => $retorno,
                ]);

            } catch (Exception $th) {
                DB::rollBack();

                //DB::beginTransaction(false);
                try {
                    addErro($th, 'Erro ao criar conta!');
                } catch (Exception $th) {
                }

                $retorno['error_sql'] = $th->getMessage();
                $retorno['estado'] = false;
                return response([
                    'retorno' => $retorno
                ]);
            }
        } else {
            $retorno['estado'] = false;
            return response([
                'retorno' => $retorno
            ]);
        }

    }    

}
