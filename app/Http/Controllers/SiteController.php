<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Validacao;

class SiteController extends Controller
{
    //
    public function index () {
        return view('Site.index');
    }

    public function login () {
        return view('Site.login');
    }

    public function createAccount () {
        return view('Site.createAccount');
    }

    public function authLogin (Request $request) {
        //dd($request);
        $retorno = Validacao::validarDadosLogin($request);
        //dd($request['email']); 
        if($retorno['estado'] == true){

            $dadosUtilizador = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if(Auth::attempt($dadosUtilizador)){
                $request->session()->regenerate();
                $tipo_user = User::getTipo($request['email'])[0]->tipo;
                //dd($tipo_user);
                return redirect()->intended('/admin')->with(['dados'=>$dadosUtilizador]);
            }
        }
        
        return redirect()->back()->with(['retorno' => $retorno,'mensagem' => 'Email ou Senha errados']);
        
    }

    public function fazerLogout () {

        Auth::fazerLogout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect ('/');

    }

}
