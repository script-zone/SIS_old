<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Paciente extends Model
{
    use HasFactory;

    public static function getPacientes () {
        return DB::select("SELECT u.nome, u.sobreNome, p.id FROM users u INNER JOIN pacientes p ON (u.id=p.user_id) WHERE tipo = 'paciente'");
    }

    public static function getUserPacientes () {
        return DB::select("SELECT u.*, p.id as id_paciente FROM pacientes p INNER JOIN users u ON (u.id=p.user_id) WHERE u.tipo = 'paciente'");
    }

    public static function getIdPaciente ($user_id) {
        return DB::select("SELECT id FROM pacientes p WHERE p.user_id=$user_id")[0];
    }

    public static function getRCP ($paciente_id) {
        return DB::select("SELECT rcp.* FROM pacientes p INNER JOIN r_c_p_s rcp ON (p.id=rcp.paciente_id) WHERE p.id=$paciente_id");
    }

    public static function getDadosPaciente ($paciente_id) {
        return DB::select("SELECT u.nome, u.sobreNome, u.email, u.telefone, u.data_nascimento, u.bi, u.localidade, u.morada, u.codigoPostal, u.sexo, u.foto, 
            p.contacto_emergencia, 
            r.id as rcp, r.grupo_sanguineo, r.alergias, r.deficiencia, r.historico_familiar, r.terapeutica 
            FROM users u 
            LEFT JOIN pacientes p ON (p.user_id=u.id) 
            LEFT JOIN r_c_p_s r ON (p.id=r.paciente_id) 
            WHERE u.id=$paciente_id"
        );
    }


}
