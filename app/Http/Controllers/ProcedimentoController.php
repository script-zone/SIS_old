<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
            'tipoProcedimentos' => Procedimento::getAllTipoProcedimentos(),
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
    
    public function reagendarProcedimento ($id_procedimento) {

        $dados = [
            'paciente' => Procedimento::getPaciente(Crypt::decryptString($id_procedimento)),
            'dadosProcedimento' => Procedimento::getDadosProcedimento(Crypt::decryptString($id_procedimento)),
            'tipoProcedimentos' => Procedimento::getAllTipoProcedimentos(),
            'doctores' => P_clinic::getP_clinic(),
        ];

        return view('Admin.Marcacao.reagendarProcedimento')->with($dados);
    }

    public function updateMarcacaoPrecedimento (Request $request, $id_procedimento, $rcp) {

        $retorno['estado'] = true;

        try {

            DB::beginTransaction();

            // registrando uma consulta
            $consulta = Procedimento::find(Crypt::decryptString($id_procedimento));
            $consulta->estado       = 0;
            $consulta->data         = $request['data_agendada'];
            $consulta->hora         = filter_var($request['hora'], FILTER_SANITIZE_STRING);
            $consulta->paciente_id  = $request['paciente'];
            $consulta->medico_id    = $request['p_clinic'];
            $consulta->tipo         = $request['tipo'];
            $consulta->rcp_id       = filter_var(Crypt::decryptString($rcp), FILTER_SANITIZE_STRING);
            $consulta->save();

            DB::commit();

            $retorno['estado'] = true;

        } catch (Exception $th) {
            DB::rollBack();

            DB::beginTransaction(false);

            $retorno['error_sql'] = $th->getMessage();
            $retorno['estado'] = false;

            return redirect()->back()->withErrors($retorno);
        }

        $retorno['erros_validacao_user'] = [];
        $retorno['erros_validacao_paciente'] = [];
        $retorno['erros_validacao_rcp'] = [];
        
        return redirect()->back()->with('mgs', 'Dados Atualizados Com sucesso.');

    }


}
