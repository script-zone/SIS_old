<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Validacao extends Model
{
    use HasFactory;

    public static function validarDadosCriacaoDeConta($request)
    {
        //VALIDAÇÃO DOS DADOS DE ENTRADA

        if (Validator::make($request->all(), ['nome' => 'required'])->fails()) {
            $retorno['nome'] = "O nome completo do utilizador é obrigatório.";
            $retorno['estado'] = false;
        }
        if (Validator::make($request->all(), ['sobrenome' => 'required'])->fails()) {
            $retorno['sobrenome'] = "O nome completo do utilizador é obrigatório.";
            $retorno['estado'] = false;
        }

        if (Validator::make($request->all(), ['email' => 'required'])->fails()) {
            $retorno['email'] = "O email do Utilizador é obrigatório.";
            $retorno['estado'] = false;
        }else if (Validator::make($request->all(), ['email' => 'unique:users,email'])->fails()) {
            $retorno['email'] = "Esse email já está sendo utilizado.";
            $retorno['estado'] = false;
        }

        if (Validator::make($request->all(), ['password' => 'required'])->fails()) {
            $retorno['password'] = "A password é obrigatória.";
            $retorno['estado'] = false;
        }

        $retorno['nome'] = ""; //
        $retorno['sobrenome'] = ""; //
        $retorno['nomeCompleto'] = ""; //
        $retorno['email'] = ""; //
        $retorno['password'] = ""; //
        $retorno['estado'] = true;

        return $retorno;
    }

    public static function validarDadosLogin($request)
    {
        //VALIDAÇÃO DOS DADOS DE ENTRADA
        $retorno['email'] = ""; //
        $retorno['password'] = ""; //
        $retorno['estado'] = true;

        if (Validator::make($request->all(), ['email' => 'required'])->fails()) {
            $retorno['email'] = "O email do Utilizador é obrigatório.";
            $retorno['estado'] = false;
        }else if (Validator::make($request->all(), ['email' => 'exists:users,email'])->fails()) {
            $retorno['email'] = "Esse email já está sendo utilizado.";
            $retorno['estado'] = false;
        }

        if (Validator::make($request->all(), ['password' => 'required'])->fails()) {
            $retorno['password'] = "A password é obrigatória.";
            $retorno['estado'] = false;
        }
        
        return $retorno;
    }
    
    public static function validarDadosUpdate($request)
    {
        $retorno['estado'] = 2;
        $retorno['sms'] = "";

        if (!Validator::make($request->all(), ['file_certificado' => 'required'])->fails()) {
            if (Validator::make($request->all(), ['file_certificado' => 'mimetypes:application/pdf'])->fails()) {
                $retorno['estado'] = 0;
                $retorno['sms'] = "O Formato do certificado é inválido.";
            } else if (Validator::make($request->all(), ['file_certificado' => 'max:1024'])->fails()) {
                $retorno['estado'] = 0;
                $retorno['sms'] = "O Tamanho do certificado deve ser menor ou igual a 1MB";
            }else{

                $retorno['estado'] = 1;

            }
        }

        return $retorno;
    }
}
