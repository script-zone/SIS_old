<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Especialidade extends Model
{
    use HasFactory;

    public static function getDadosEspecialidade ($especialidade_id) {
        return DB::select("
            SELECT * FROM especialidades WHERE id=$especialidade_id
        ")[0];
    }
}
