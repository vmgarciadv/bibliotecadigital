<?php

namespace QA\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UsuarioController extends Controller
{
    public function index () {
        $client = new \GuzzleHttp\Client(["base_uri" => "https://bibliotecadigital.herokuapp.com/api/usuario"]);
        $options = [
            'json' => [
                "nombre" => "Juanita"
            ]
        ];
   
    // $response = $client->request('POST', 'horario');

    $response = $client->post("/api/usuario", $options);

    dd($response);

    
    }
}
