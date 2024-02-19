<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;
use App\Models\Validacao;
use App\Models\Role;
use App\Models\Paciente;

class UserController extends Controller
{
    //

    public function createAccountUser (Request $request) {

        // dd($request);

        // $retorno = Validacao::validarDadosCriacaoDeConta($request);
        // if ($retorno['estado'] == true) {
        // } else {
        //    $retorno['estado'] = false;
        //    return response([
        //        'retorno' => $retorno
        //    ]);
        // }
            
        
        //dd($request);

        $totalUsers = User::getTotalUser();

        try {

            DB::beginTransaction();

            $user = new User();
            $user->nome         = filter_var($request['nome'], FILTER_SANITIZE_STRING);
            $user->sobreNome    = filter_var($request['sobreNome'], FILTER_SANITIZE_STRING);
            $user->email        = filter_var($request['email'], FILTER_SANITIZE_STRING);
            $user->password     = bcrypt(filter_var($request['password'], FILTER_SANITIZE_STRING));
            $user->tipo         = "paciente";
            $user->save();

            Role::storeRoleUser($user->id, 1);

            // registrando-o como paciente
            $paciente = new Paciente();
            $paciente->contacto_emergencia= null;
            $paciente->user_id= $user->id;
            $paciente->save();

            DB::commit();

            $retorno['estado'] = true;

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
                'retorno' => $retorno,
            ]);
        }

        return response([
            'retorno' => $retorno,
        ]);

    }
    

}
