<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Especialidade;
use App\Models\Exame;
use DB;

class EspecialidadeController extends Controller
{
    //


    public function formCreateEspecialidade () {
        return view('Admin.Cadastro.cadastroEspec');
    }

    public function createEspecialidade (Request $request) {

        $retorno['erros_validacao_especialidade'] = [];
        $retorno['estado'] = false;
            
        $request['nomeCompleto'] = $request['nome']." ".$request['sobrenome'];
        //dd($request);

        try {
            DB::beginTransaction();

            // registrando uma especialidade
            $especialidade = new Especialidade();
            $especialidade->nome = filter_var($request['nome'], FILTER_SANITIZE_STRING);
            $especialidade->descricao = filter_var($request['descricao'], FILTER_SANITIZE_STRING);
            $especialidade->save();

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

    public function editarEspecialidade ($id_especialidade) {

        $dados = [
            'especialidade' => Especialidade::getDadosEspecialidade(Crypt::decryptString($id_especialidade)),
        ];

        return view('Admin.Cadastro.editarEspec')->with($dados);
    }

    public function updateEspecialidade (Request $request, $id_especialidade) {

        // dd($id_especialidade);

        try {
            DB::beginTransaction();

            // registrando uma especialidade
            $especialidade = Especialidade::find(Crypt::decryptString($id_especialidade));
            $especialidade->nome = filter_var($request['nome'], FILTER_SANITIZE_STRING);
            $especialidade->descricao = filter_var($request['descricao'], FILTER_SANITIZE_STRING);
            $especialidade->save();

            DB::commit();

        } catch (Exception $th) {
            DB::rollBack();

            DB::beginTransaction(false);

            $retorno['error_sql'] = $th->getMessage();
            $retorno['estado'] = false;

            return redirect()->back()->withErrors($retorno);
        }
        
        return redirect()->back()->with('mgs', 'Dados Atualizado Com sucesso.');

    }

    public function showAllEspecialidades () {

        $dados = [
            'especialidades' => Especialidade::all(),
            'count' => 0,
        ];

        return view('Admin.Listagem.todasEspec')->with($dados);
    }

    public function formCreateExame () {

        $dados = [
            'especialidades' => Especialidade::all(),
        ];

        return view('Admin.Cadastro.cadastroTipoExame')->with($dados);
    }

    public function storeTipoExame (Request $request) {
        //dd($request);

        $retorno['estado'] = 'null';

        $allEspecialidade = Especialidade::all();
        foreach ($allEspecialidade as $esp) {

            if($esp->id == $request['especialidade_id']){
                $allTipoExame = Exame::getAllTipoExameEspecialidade($request['especialidade_id']);
                foreach ($allTipoExame as $tipo) {

                    if($tipo->nome == $request['nome']){
                        $retorno['jaExisteExame'] = "Este tipo de Exame Já existe Para esta Especialidade";
                        $retorno['estado'] = false;
                        break;
                    };

                }
            };

        }

        if($retorno['estado'] == false) return response([
            'retorno' => $retorno,
        ]);

        try {
            DB::beginTransaction();

            // registrando um exame com especialidade
            Exame::createExameEspecialidade($request);

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

    public function formCreateConsulta () {

        $dados = [
            'especialidades' => Especialidade::all(),
        ];

        return view('Admin.Cadastro.cadastroTipoConsulta')->with($dados);
    }

    public function storeTipoConsulta (Request $request) {
        //dd($request);

        $retorno['estado'] = 'null';

        $allEspecialidade = Especialidade::all();
        foreach ($allEspecialidade as $esp) {

            if($esp->id == $request['especialidade_id']){
                $allTipoExame = Exame::getAllTipoConsultaEspecialidade($request['especialidade_id']);
                foreach ($allTipoExame as $tipo) {

                    if($tipo->nome == $request['nome']){
                        $retorno['jaExisteConsulta'] = "Este tipo de Consulta Já existe Para esta Especialidade";
                        $retorno['estado'] = false;
                        break;
                    };

                }
            };

        }

        if($retorno['estado'] == false) return response([
            'retorno' => $retorno,
        ]);

        try {
            DB::beginTransaction();

            // registrando um exame com especialidade
            Exame::createConsultaEspecialidade($request);

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
