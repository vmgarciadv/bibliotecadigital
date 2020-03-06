<?php

namespace QA\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TesisController extends Controller
{
    public function index () {
        $client = new \GuzzleHttp\Client(["base_uri" => "https://bibliotecadigital.herokuapp.com/api/tesis/"]);
        $options = [
            'json' => [
                "nombre" => "Tesis 1",
                "autor" => "Jose",
                "tutor" => "Juan",
                "year_publicacion" => 2020,
                "tema_id" => 1
            ]
        ];
   
    // $response = $client->request('POST', 'horario');

    $response = $client->post("/api/tesis/", $options);

    dd($response);

    
    }
}
