<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Especialidade;
use App\Models\P_clinic;
use App\Models\Exame;

use DB;

class ExameController extends Controller
{
    //


    public function formMarcacaoExame () {

        $dados = [
            'pacientes' => Paciente::getPacientes(),
            'tipoExames' => Exame::getAllTipoExame(),
            'doctores' => P_clinic::getP_clinic(),
        ];

        return view('Admin.Marcacao.exame')->with($dados);
    }

    public function storeMarcacaoExame (Request $request) {

        $retorno['estado'] = true;

        $allconsultas = Exame::examesPendentes();
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
            $exame = new Exame();
            $exame->estado       = 0;
            $exame->data         = $request['data_agendada'];
            $exame->hora         = filter_var($request['hora'], FILTER_SANITIZE_STRING);
            $exame->paciente_id  = filter_var($request['paciente'], FILTER_SANITIZE_STRING);
            $exame->medico_id    = filter_var($request['p_clinic'], FILTER_SANITIZE_STRING);
            $exame->tipo         = filter_var($request['tipo'], FILTER_SANITIZE_STRING);
            $exame->rcp_id       = $rcp[0]->id;
            $exame->save();

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
