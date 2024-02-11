<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Consulta extends Model
{
    use HasFactory;


    public static function consultasPendentes () {
        return DB::select("SELECT * FROM consultas WHERE estado=0");
    }

    public static function getConsultasPendentesMedico ($id_user_medico) {
        return DB::select("SELECT con.id, u.nome, u.sobrenome, con.tipo, con.data, con.hora, con.estado FROM consultas con 
                           INNER JOIN pacientes pac ON (con.paciente_id=pac.id)
                           INNER JOIN users u ON (pac.user_id=u.id)
                           WHERE (con.estado = 0 or con.estado = 1) and con.medico_id = (SELECT id FROM p_clinics WHERE user_id = $id_user_medico);
                        ");
    }

    public static function getConsultasPendentesPaciente ($id_user_paciente) {
        return DB::select("SELECT con.id, u.nome, u.sobrenome, con.tipo, con.data, con.hora, con.estado FROM consultas con 
                           INNER JOIN p_clinics pc ON (con.medico_id=pc.id)
                           INNER JOIN users u ON (pc.user_id=u.id)
                           WHERE (con.estado = 0 or con.estado = 1) and con.paciente_id = (SELECT id FROM pacientes WHERE user_id = $id_user_paciente);
                        ");
    }

    public static function getAllTipoConsulta () {
        return DB::select("SELECT * FROM consulta_especialidade");
    }

    public static function createConsultaEspecialidade ($request) {
        DB::insert("INSERT INTO consulta_especialidade (nome,  descricao, especialidade_id) VALUES ('".$request['nome']."', '".$request['descricao']."', ".$request['especialidade_id'].")");
    }

    public static function getAllTipoConsultaEspecialidade ($espec_id) {
        return DB::select("SELECT *  FROM consulta_especialidade WHERE especialidade_id = $espec_id");
    }


}
