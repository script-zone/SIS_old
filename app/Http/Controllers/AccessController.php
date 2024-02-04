<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;

use DB;

class AccessController extends Controller
{
    //
    
    protected function getPapelPermissoes () {

        $permissoes = Permission::all();

        return view('Admin.Config.papeis')
        ->with([
            'permissoes' => $permissoes,
        ]);

    }

    protected function storePapelPermissoes (Request $request) {

        // dd($request);

        try {
            DB::beginTransaction();

            // registrando uma especialidade
            $role = new Role();
            $role->name = filter_var($request['name'], FILTER_SANITIZE_STRING);
            $role->save();

            $permissoes = explode(',', $request['permissoes']);

            Role::storeRolePermission($role->id, $permissoes);

            DB::commit();

            $retorno['estado'] = true;

        } catch (Exception $th) {
            DB::rollBack();

            $retorno['estado'] = false;

            DB::beginTransaction(false);

            try {
                addErro($th, 'Erro ao registrar papel e suas permissões!');
            } catch (Exception $th) {
            }

            $retorno['error_sql'] = $th->getMessage();
            $retorno['estado'] = false;


            return response([
                'retorno' => $retorno,
            ]);
        }

        return response([
            'retorno' => $retorno,
        ]);

    }

}
