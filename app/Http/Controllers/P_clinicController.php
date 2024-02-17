<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\P_clinic;
use App\Models\Especialidade;
use App\Models\User;
use App\Models\Role;
use App\Models\Exame;
use App\Models\Consulta;
use App\Models\Procedimento;

use DB;

class P_clinicController extends Controller
{
    //

    public function formCreateAccountP_clinic () {

        $dados = [
            'dias' => P_clinic::getDias(),
            'especialidades' => Especialidade::all(),
        ];

        return view('Admin.Cadastro.cadastroDoctor')->with($dados);
    }

    public function createAccountUserP_clinic (Request $request) {

        // dd($request);

        // $retorno = Validacao::validarDadosCriacaoDeConta($request);
        // if ($retorno['estado'] == true) {
        // } else {
        //    $retorno['estado'] = false;
        //    return response([
        //        'retorno' => $retorno
        //    ]);
        // }

        $retorno['estado'] = true;
        //dd($request);

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

        try {
            DB::beginTransaction();

            // registrando o p_clinic como user
            $user = new User();
            $user->nome         = filter_var($request['nome'], FILTER_SANITIZE_STRING);
            $user->sobreNome    = filter_var($request['sobreNome'], FILTER_SANITIZE_STRING);
            $user->email        = filter_var($request['email'], FILTER_SANITIZE_STRING);
            $user->password     = bcrypt($request['password']);
            $user->bi           = filter_var($request['bi'], FILTER_SANITIZE_STRING);
            $user->tipo         = "pessoal clinico";
            $user->save();

            Role::storeRoleUser($user->id, 4);

            // registrando-o como paciente
            $pClinc = new P_clinic();
            $pClinc->estado= 0;
            $pClinc->CRM= filter_var($request['CRM'], FILTER_SANITIZE_STRING);
            $pClinc->especialidade= $request['especialidade'];
            $pClinc->user_id= $user->id;
            $pClinc->save();

            $dias = explode(',', $request['dias']);

            P_clinic::storeDiasTrabalho($pClinc->id, $dias);

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
        }

        $retorno['erros_validacao_user'] = [];
        $retorno['erros_validacao_paciente'] = [];
        $retorno['erros_validacao_rcp'] = [];
        
        return response([
            'retorno' => $retorno,
        ]);

    }

    public function showP_clinic_Perfil () {

        

        return view('Admin.Doctor.perfil');
    }

    public function editarPerfilDoctor ($id_user_doctor) {

        $dados = [
            'doctor' => P_clinic::getDadosDoctor(Crypt::decryptString($id_user_doctor)),
            'especialidades' => Especialidade::all(),
        ];

        return view('Admin.Doctor.edit_Perfil')->with($dados);
    }
    
    public function UpdateAccountUserDoctor ($id_user_doctor, Request $request) {

        $retorno['estado'] = true;

        // dd(Crypt::decryptString($id_user_doctor),Crypt::decryptString($id_rcp),);

        try {
            DB::beginTransaction();

            // registrando o paciente como user
            $user = User::find(Crypt::decryptString($id_user_doctor));
            $user->nome = filter_var($request['nome'], FILTER_SANITIZE_STRING);
            $user->sobreNome = filter_var($request['sobreNome'], FILTER_SANITIZE_STRING);
            $user->data_nascimento= filter_var($request['dataNascimento'], FILTER_SANITIZE_STRING);
            $user->email        = filter_var($request['email'], FILTER_SANITIZE_STRING);
            $user->codigoPostal= filter_var($request['codigoPostal'], FILTER_SANITIZE_STRING);
            $user->localidade= filter_var($request['localidade'], FILTER_SANITIZE_STRING);
            $user->telefone= filter_var($request['telefone'], FILTER_SANITIZE_NUMBER_INT);
            $user->morada= filter_var($request['morada'], FILTER_SANITIZE_STRING);
            $user->sexo= filter_var($request['Sexo'], FILTER_SANITIZE_STRING);
            $user->bi= filter_var($request['bi'], FILTER_SANITIZE_STRING);
            $user->save();

            // registrando-o como paciente

            $id_doctor = P_clinic::getIdP_clinic(Crypt::decryptString($id_user_doctor))->id;

            $doctor = P_clinic::find($id_doctor);
            $doctor->CRM = filter_var($request['CRM'], FILTER_SANITIZE_STRING);
            $doctor->especialidade = $request['especialidade'];
            $doctor->save();

            DB::commit();

        } catch (Exception $th) {
            DB::rollBack();

            // DB::beginTransaction(false);

            $retorno['error_sql'] = $th->getMessage();
            $retorno['estado'] = false;

            return redirect()->back()->withErrors($retorno);
        }
        
        return redirect()->back()->with('mgs', 'Dados Atualizado Com sucesso.'); // redirect(route(''))->with($retorno);

    }
    
    public function showP_clinic () {

        $doctores = P_clinic::getAllDoctores();

        return view('Admin.Listagem.todosDotores')->with(['doctores' => $doctores]);
    }

    public function getAgendaMedica ($id_medico) {
        $id_medico = Crypt::decryptString($id_medico);

        $dados = [
            'exames' => Exame::getExamesPendentesMedico($id_medico),
            'count1' => 1,
            'consultas' => Consulta::getConsultasPendentesMedico($id_medico),
            'count2' => 1,
            'procedimentos' => Procedimento::getProcedimentosPendentesMedico($id_medico),
            'count3' => 1,
        ];

        return view('Admin.Doctor.agendaMedica')->with($dados);
    }

    public function listarExameslab () {

        $dados = [
            'exames' => Exame::getExamesPendentesLab(),
            'count' => 1,
        ];

        return view('Admin.Lab.examesLab')->with($dados);
    }
}
