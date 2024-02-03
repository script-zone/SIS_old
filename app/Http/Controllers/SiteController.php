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
        //$retorno = Validacao::validarDadosLogin($request);
        //dd($request['email']); 
        //if($retorno['estado'] == true){}

        $request->validate([
            //validando
            'email' => 'required|email',
            'password' => 'required|min:2',
        ],[
            //mensagens de erros de validacao
            'email.required' => 'email obrigatório',
            'email.email' => 'email deve ter aspecto de email',
            'password.required' => 'password obrigatória',
            'password.min' => 'password deve ter no minimo :min caracteres'
        ]);

        $dadosUtilizador = $request->only('email','password');

        if(Auth::attempt($dadosUtilizador)){
            $request->session()->regenerate();
            return redirect()->intended('/admin')->with(['sucesso'=>'Online']);
        }
        
        return redirect()->back()->withErrors(['error' => 'Email ou Senha errados']);
        
    }

    public function fazerLogout(){
        if (Auth::check() === true) {
            Auth::logout();
            //Session::flush();
            return redirect(route('login'));
        } else {
            return redirect(route('dashboard'));
        }
    }

    public function logout () {

        Auth::fazerLogout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect ('/');

    }

}
