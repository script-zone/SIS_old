<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;

function generateUserNumber( $id)
{
    $userNumber = 'sis'.$id;

    return $userNumber;
}


// function simulaPagamento($referencia,$valor)
// {
//     $api = Api::where('tipo', '=',8)->get()[0]??null;
//     $key = Crypt::decryptString($api->password);
//     $response = Http::withHeaders([
//         "Accept" => "application/vnd.proxypay.v2+json",
//         'Authorization' =>  'Token '.$key,
//         'Content-Type' => 'application/json'
//     ])->post($api->endpoint, [
//         "amount"        => $valor,
//         "reference_id"  => $referencia,

//     ]);
//     if ($response->status() == 200) {
//         return true;
//     } else {
//         return false;
//     }
// }


