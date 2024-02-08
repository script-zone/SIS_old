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



}
