<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\P_admin;
use App\Models\Role;

use DB;

class AdminController extends Controller
{
    //

    public function formCreateUserAdmin () {
        
        $papeis = Role::getRoles();

        return view('Admin.Config.user')->with(['papeis' => $papeis]);

    }

    public function createAccountUserAdmin (Request $request) {

        // dd($request);

        $retorno['estado'] = true;

        // dd($request);

        // $retorno = Validacao::validarDadosCriacaoDeConta($request);
        // if ($retorno['estado'] == true) {
        // } else {
        //    $retorno['estado'] = false;
        //    return response([
        //        'retorno' => $retorno
        //    ]);
        // }

        $retorno['erros_validacao_user'] = [];
        $retorno['erros_validacao_paciente'] = [];
        $retorno['erros_validacao_rcp'] = [];

            
        $request['nomeCompleto'] = $request['nome']." ".$request['sobrenome'];

        $allUsers = User::all();
        foreach ($allUsers as $user) {

            if($user->email == $request['email']){
                $retorno['jaExisteEmail'] = "email já está a ser utilizado!";
                $retorno['estado'] = false;
                break;
            };

        }

        $allP_admin = P_admin::all();
        foreach ($allP_admin as $admin) {

            if($admin->bi == $request['bi']){
                $retorno['jaExistebi'] = "bilhete já está a ser utilizado!";
                $retorno['estado'] = false;
                break;
            };
        }

        if($retorno['estado'] == false) return response([
            'retorno' => $retorno,
        ]);
        
        //dd($request);

        try {
            DB::beginTransaction();

            // registrando o paciente como user
            $user = new User();
            $user->nomeCompleto = filter_var($request['nomeCompleto'], FILTER_SANITIZE_STRING);
            $user->email        = filter_var($request['email'], FILTER_SANITIZE_STRING);
            $user->password     = bcrypt($request['password']);
            $user->foto         = null;
            $user->tipo         = "pessoal_administrativo";
            $user->save();

            // registrando-o como pessoal administrativo
            $paciente = new P_admin();
            $paciente->data_nascimento= filter_var($request['dataNascimento'], FILTER_SANITIZE_STRING);
            $paciente->codigoPostal= filter_var($request['codigoPostal'], FILTER_SANITIZE_STRING);
            $paciente->localidade= filter_var($request['localidade'], FILTER_SANITIZE_STRING);
            $paciente->telefone= filter_var($request['telefone'], FILTER_SANITIZE_STRING);
            $paciente->morada= filter_var($request['morada'], FILTER_SANITIZE_STRING);
            $paciente->sexo= filter_var($request['Sexo'], FILTER_SANITIZE_STRING);
            $paciente->bi= filter_var($request['bi'], FILTER_SANITIZE_STRING);
            $paciente->user_id= $user->id;
            $paciente->save();

            Role::storeRoleUser($user->id, $request['papel']);

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

            return response([
                'retorno' => $retorno,
            ]);
        }
        
        return response([
            'retorno' => $retorno,
        ]);

    }



}
