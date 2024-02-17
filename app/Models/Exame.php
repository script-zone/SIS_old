<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Exame extends Model
{
    use HasFactory;


    public static function examesPendentes () {
        return DB::select("SELECT * FROM exames WHERE estado=0");
    }

    public static function getExamesPendentesMedico ($id_user_medico) {
        return DB::select("SELECT ex.id, u.nome, u.sobrenome, ex.tipo, ex.data, ex.hora, ex.estado FROM exames ex 
                           INNER JOIN pacientes pac ON (ex.paciente_id=pac.id)
                           INNER JOIN users u ON (pac.user_id=u.id)
                           WHERE (ex.estado = 0 or ex.estado = 1) and ex.medico_id = (SELECT id FROM p_clinics WHERE user_id = $id_user_medico);
                        ");
    }

    public static function getExamesPendentesLab () {
        return DB::select("SELECT ex.id, u.nome, u.sobrenome, ex.resultado, ex.tipo, ex.data, ex.hora, ex.estado FROM exames ex 
                           INNER JOIN pacientes pac ON (ex.paciente_id=pac.id)
                           INNER JOIN users u ON (pac.user_id=u.id)
                           WHERE ex.estado = 0;
                        ");
    }

    public static function getExamesPendentesPaciente ($id_user_paciente) {
        return DB::select("SELECT ex.id, u.nome, u.sobrenome, ex.tipo, ex.data, ex.hora, ex.estado FROM exames ex 
                           INNER JOIN p_clinics pc ON (ex.medico_id=pc.id)
                           INNER JOIN users u ON (pc.user_id=u.id)
                           WHERE (ex.estado = 0 or ex.estado = 1) and ex.paciente_id = (SELECT id FROM pacientes WHERE user_id = $id_user_paciente);
                        ");
    }

    public static function createExameEspecialidade ($request) {
        DB::insert("INSERT INTO exame_especialidade (nome,  descricao, especialidade_id) VALUES ('".$request['nome']."', '".$request['descricao']."', ".$request['especialidade_id'].")");
    }

    public static function getAllTipoExame () {
        return DB::select("SELECT *  FROM exame_especialidade");
    }

    public static function getAllTipoExameEspecialidade ($espec_id) {
        return DB::select("SELECT *  FROM exame_especialidade WHERE especialidade_id = $espec_id");
    }

    public static function getPaciente ($id_exame) {
        return DB::select("
            SELECT u.nome, u.sobreNome, p.id FROM exames c 
            INNER JOIN pacientes p ON (c.paciente_id=p.id)
            INNER JOIN users u ON (p.user_id=u.id)
            WHERE c.id = $id_exame
        ")[0];
    }

    public static function getMedico ($id_exame) {
        return DB::select("
            SELECT u.nome, u.sobreNome, p.id FROM exames c 
            INNER JOIN p_clinics p ON (c.paciente_id=p.id)
            INNER JOIN users u ON (p.user_id=u.id)
            WHERE c.id = $id_exame
        ")[0];
    }

    public static function getDadosConsulta ($id_exame) {
        return DB::select("
            SELECT * FROM exames WHERE id = $id_exame
        ")[0];
    }



}
