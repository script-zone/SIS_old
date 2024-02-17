<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Models\Paciente;
use App\Models\Especialidade;
use App\Models\P_clinic;
use App\Models\Consulta;

use DB;

class ConsultaController extends Controller
{
    //


    public function formMarcacaoConsulta () {

        $dados = [
            'pacientes' => Paciente::getPacientes(),
            'tipoConsultas' => Consulta::getAllTipoConsulta(),
            'doctores' => P_clinic::getP_clinic(),
        ];

        return view('Admin.Marcacao.consulta')->with($dados);
    }

    public function storeMarcacaoConsulta (Request $request) {

        $retorno['estado'] = true;

        $allconsultas = Consulta::consultasPendentes();
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

        // dd($rcp[0], $request['paciente']);

        if(empty($rcp)){
            $retorno['erroRCPEmFalta'] = 'Tens de adicionar dados do RCP';
            $retorno['estado'] = false;
        }

        if($retorno['estado'] == false) return response([
            'retorno' => $retorno,
        ]);

        try {

            DB::beginTransaction();

            // registrando uma consulta
            $consulta = new Consulta();
            $consulta->estado       = 0;
            $consulta->data         = $request['data_agendada'];
            $consulta->hora         = filter_var($request['hora'], FILTER_SANITIZE_STRING);
            $consulta->paciente_id  = filter_var($request['paciente'], FILTER_SANITIZE_STRING);
            $consulta->medico_id    = filter_var($request['p_clinic'], FILTER_SANITIZE_STRING);
            $consulta->tipo         = filter_var($request['tipo'], FILTER_SANITIZE_STRING);
            $consulta->rcp_id       = $rcp[0]->id;
            $consulta->save();

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
    
    public function reagendarConsulta ($id_consulta) {

        $dados = [
            'paciente' => Consulta::getPaciente(Crypt::decryptString($id_consulta)),
            'dadosConsulta' => Consulta::getDadosConsulta(Crypt::decryptString($id_consulta)),
            'tipoConsultas' => Consulta::getAllTipoConsulta(),
            'doctores' => P_clinic::getP_clinic(),
        ];

        return view('Admin.Marcacao.reagendarConsulta')->with($dados);
    }

    public function updateMarcacaoConsulta (Request $request, $id_consulta, $rcp) {

        $retorno['estado'] = true;

        try {

            DB::beginTransaction();

            // registrando uma consulta
            $consulta = Consulta::find(Crypt::decryptString($id_consulta));
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
