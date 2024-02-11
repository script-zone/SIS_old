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



}
