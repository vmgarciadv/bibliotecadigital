<?php

namespace QA\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TemaController extends Controller
{
    public function index () {
        $client = new \GuzzleHttp\Client(["base_uri" => "http://bibliotecadigital.herokuapp.com/api/tema"]);
        $options = [
            'json' => [
                "nombre" => "webp"
            ], 
            
        ];
   
     // $response = $client->request('POST', 'horario');

    $response = $client->post("/api/tema", $options);
    
    dd($response);

    //echo $response->getBody();
        }
}
