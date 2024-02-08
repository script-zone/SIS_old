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



}
