<?php

namespace QA\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TesisController extends Controller
{
    public function index () {
        $client = new \GuzzleHttp\Client(["base_uri" => "http://dogcare-cliente.herokuapp.com/horario"]);
        $options = [
            'json' => [
                "cuidador" => 2,
                "fecha_fin" => "2020-03-08",
                "fecha_ini" => "2020-03-19"
            ]
        ];
   
    // $response = $client->request('POST', 'horario');

    $response = $client->post("/horario", $options);

    echo $response->getBody();
    }
}
