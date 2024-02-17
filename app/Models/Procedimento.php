<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Procedimento extends Model
{
    use HasFactory;


    public static function procedimentosPendentes () {
        return DB::select("SELECT * FROM procedimentos WHERE estado=0");
    }

    public static function getProcedimentosPendentesMedico ($id_user_medico) {
        return DB::select("SELECT pro.id, u.nome, u.sobrenome, pro.tipo, pro.data, pro.hora, pro.estado 
                           FROM procedimentos pro 
                           INNER JOIN pacientes pac ON (pro.paciente_id=pac.id)
                           INNER JOIN users u ON (pac.user_id=u.id)
                           WHERE pro.estado = 0 and pro.medico_id = (SELECT id FROM p_clinics WHERE user_id = $id_user_medico);
                        ");
    }

    public static function getProcedimentosPendentesPaciente ($id_user_paciente) {
        return DB::select("
            SELECT pro.id, u.nome, u.sobrenome, pro.tipo, pro.data, pro.hora, pro.estado FROM procedimentos pro 
            INNER JOIN p_clinics pc ON (pro.medico_id=pc.id)
            INNER JOIN users u ON (pc.user_id=u.id)
            WHERE pro.estado = 0 and pro.paciente_id = (SELECT id FROM pacientes WHERE user_id = $id_user_paciente);
        ");
    }

    public static function getAllTipoProcedimentos () {
        return DB::select("SELECT * FROM tipo_procedimento");
    }

    public static function getPaciente ($id_procedimento) {
        return DB::select("
            SELECT u.nome, u.sobreNome, p.id FROM procedimentos c 
            INNER JOIN pacientes p ON (c.paciente_id=p.id)
            INNER JOIN users u ON (p.user_id=u.id)
            WHERE c.id = $id_procedimento
        ")[0];
    }

    public static function getMedico ($id_procedimento) {
        return DB::select("
            SELECT u.nome, u.sobreNome, p.id FROM procedimentos c 
            INNER JOIN p_clinics p ON (c.paciente_id=p.id)
            INNER JOIN users u ON (p.user_id=u.id)
            WHERE c.id = $id_procedimento
        ")[0];
    }

    public static function getDadosProcedimento ($id_procedimento) {
        return DB::select("
            SELECT * FROM procedimentos WHERE id = $id_procedimento
        ")[0];
    }



}
