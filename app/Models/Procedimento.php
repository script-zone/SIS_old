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



}
