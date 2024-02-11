<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class P_admin extends Model
{
    use HasFactory;

    public static function getAllUsersAdmin () {
        return DB::select("SELECT u.id, u.nome, u.sobreNome, r.id as papel_id, r.name as papel FROM users u 
                            INNER JOIN role_user ru ON (u.id=ru.user_id) 
                            INNER JOIN roles r ON (ru.role_id=r.id)
                            WHERE u.tipo = 'pessoal_administrativo'
                        ");
    }
}
