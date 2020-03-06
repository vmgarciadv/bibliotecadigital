<?php

namespace QA\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ObjetivoController extends Controller
{
    public function index () {
        $client = new \GuzzleHttp\Client(["base_uri" => "http://bibliotecadigital.herokuapp.com/api/objetivo"]);
        $options = [
            'json' => [
                "nombre" => "desarrollar",
                "tesis_id" => 1,
                "usuario_id" => 1,
                "objetivo_id" => ""
            ]
        ];
   
     // $response = $client->request('POST', 'horario');

    $response = $client->post("/api/objetivo", $options);

    dd($response);

        }
}
