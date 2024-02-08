<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Especialidade;
use App\Models\P_clinic;
use App\Models\Procedimento;

use DB;

class ProcedimentoController extends Controller
{
    //


    public function formMarcacaoProcedimento () {

        $dados = [
            'pacientes' => Paciente::getPacientes(),
            'especialidades' => Especialidade::all(),
            'doctores' => P_clinic::getP_clinic(),
        ];

        return view('Admin.Doctor.agendarProcedimento')->with($dados);
    }

    public function storeMarcacaoProcedimento (Request $request) {

        $retorno['estado'] = true;

        $allconsultas = Procedimento::procedimentosPendentes();
        foreach ($allconsultas as $consulta) {

            if($consulta->data == $request['data_agendada']){
                if($consulta->hora == $request['hora']){
                    $retorno['erroHoraMarcacao'] = "Alguém já agendou uma consulta para esta hora!";
                    $retorno['estado'] = false;
                    break;
                } 
            };

        }
        
        $rcp = Paciente::getRCP($request['paciente']);

        if($rcp == []){
            $retorno['erroRCPEmFalta'] = 'Tens de adicionar dados do RCP';
            $retorno['estado'] = false;
        }

        if($retorno['estado'] == false) return response([
            'retorno' => $retorno,
        ]);

        try {

            DB::beginTransaction();

            // registrando uma consulta
            $procedimento = new Procedimento();
            $procedimento->estado       = 0;
            $procedimento->data         = $request['data_agendada'];
            $procedimento->hora         = filter_var($request['hora'], FILTER_SANITIZE_STRING);
            $procedimento->paciente_id  = filter_var($request['paciente'], FILTER_SANITIZE_STRING);
            $procedimento->medico_id    = filter_var($request['p_clinic'], FILTER_SANITIZE_STRING);
            $procedimento->tipo         = filter_var($request['tipo'], FILTER_SANITIZE_STRING);
            $procedimento->rcp_id       = $rcp[0]->id;
            $procedimento->save();

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

        $retorno['erros_validacao_user'] = [];
        $retorno['erros_validacao_paciente'] = [];
        $retorno['erros_validacao_rcp'] = [];
        
        return response([
            'retorno' => $retorno,
        ]);

    }


}
