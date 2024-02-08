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

    public static function getRCP ($paciente_id) {
        return DB::select("SELECT rcp.id FROM pacientes p INNER JOIN r_c_p_s rcp ON (p.id=rcp.paciente_id) WHERE p.id=$paciente_id");
    }


}
