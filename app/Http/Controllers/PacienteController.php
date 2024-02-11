<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\User;
use App\Models\RCP;
use App\Models\Role;
use App\Models\Exame;
use App\Models\Consulta;
use App\Models\Procedimento;
use DB;

class PacienteController extends Controller
{
    //

    public function formAccountUserPaciente () {
        return view('Admin.Cadastro.cadastroPaciente');
    }
    
    public function createAccountUserPaciente (Request $request) {

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

            if($user->bi == $request['bi']){
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
            $user->nome = filter_var($request['nome'], FILTER_SANITIZE_STRING);
            $user->sobreNome = filter_var($request['sobreNome'], FILTER_SANITIZE_STRING);
            $user->email        = filter_var($request['email'], FILTER_SANITIZE_STRING);
            $user->password     = bcrypt($request['password']);
            $user->tipo         = "paciente";
            $user->data_nascimento= filter_var($request['dataNascimento'], FILTER_SANITIZE_STRING);
            $user->codigoPostal= filter_var($request['codigoPostal'], FILTER_SANITIZE_STRING);
            $user->localidade= filter_var($request['localidade'], FILTER_SANITIZE_STRING);
            $user->telefone= filter_var($request['telefone'], FILTER_SANITIZE_STRING);
            $user->morada= filter_var($request['morada'], FILTER_SANITIZE_STRING);
            $user->sexo= filter_var($request['Sexo'], FILTER_SANITIZE_STRING);
            $user->bi= filter_var($request['bi'], FILTER_SANITIZE_STRING);
            $user->save();

            Role::storeRoleUser($user->id, 1);

            // registrando-o como paciente
            $paciente = new Paciente();
            $paciente->contacto_emergencia= filter_var($request['telefoneEmergencia'], FILTER_SANITIZE_STRING);
            $paciente->user_id= $user->id;
            $paciente->save();

            // criando seu RCP
            $rcp = new RCP();
            $rcp->historico_familiar= $request['doenca_familiar'];
            $rcp->grupo_sanguineo= $request['grupo_sanguineo'];
            $rcp->alergias= $request['alergia'];
            $rcp->deficiencia= $request['deficiencia'];
            $rcp->terapeutica= filter_var($request['addNote'], FILTER_SANITIZE_STRING);
            $rcp->paciente_id= $paciente->id;
            $rcp->save();

            DB::commit();

            $retorno['estado'] = true;
            $retorno['dados_validos'] = [
                'numero_user' => $user->email,
                'password' => $request['password'],
            ];

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

    public function showPaciente () {

        $dados = [
            'pacientes' => Paciente::getUserPacientes(),
        ];

        return view('Admin.Listagem.listarPaciente')->with($dados);
    }

    public function showPacientePerfil () {

        

        return view('Admin.Paciente.perfil');
    }

    public function getAgendaMedica ($id_paciente) {

        $dados = [
            'exames' => Exame::getExamesPendentesPaciente($id_paciente),
            'count1' => 1,
            'consultas' => Consulta::getConsultasPendentesPaciente($id_paciente),
            'count2' => 1,
            'procedimentos' => Procedimento::getProcedimentosPendentesPaciente($id_paciente),
            'count3' => 1,
        ];

        return view('Admin.Paciente.minhaAgenda')->with($dados);
    }

}
