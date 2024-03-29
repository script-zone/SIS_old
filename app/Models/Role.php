<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Role extends Model
{
    use HasFactory;

    public function permissions () {
        return $this->belongsToMany(Permission::class);
    }

    public static function storeRolePermission ($papel_id, $permissoes) {

        $queryImpr = "INSERT INTO permission_role(role_id, hability_id) VALUES ";

        foreach ($permissoes as $permissao) {
            # code...
            $queryImpr = $queryImpr."($papel_id,$permissao),";
        }

        $query = rtrim($queryImpr, ",");

        DB::insert($query);
    }

    public static function storeRoleUser ($user_id, $role_id) {

        $query = "INSERT INTO role_user (role_id,user_id) VALUES ($role_id, $user_id)";

        DB::insert($query);
    }

    public static function getRoles () {

        return DB::select("SELECT id, name, tipo FROM roles");
    }

    public static function getPermissoes ($id_papel) {
        return DB::select("SELECT p.name FROM roles r 
                            INNER JOIN permission_role pr ON (r.id=pr.role_id) 
                            INNER JOIN permissions p ON (pr.hability_id=p.id) 
                            WHERE r.id = $id_papel"
                        );
    }

}

