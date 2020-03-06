<?php

namespace QA;

use Illumnate\Http\Request;
use GuzzleHttp\Client;

class Objetivos extends Controller
{
    public function index (){
        $client = new \GuzzleHttp\Client(["base_uri" => "https://bibliotecadigital.herokuapp.com/"]);
        $options = [
            'json' => [
                "nombre" => "Desarrollar ",
                "tesis_id" => 1,
                "usuario_id" => 1,
                "objetivo_id" => 1
            ]
         ];

    $response = $client->post("/usuarioobjetivos", $options);

    dd($response);


    }
}
