<?php

namespace QA\Http\Controllers;

use QA\Observaciones;
use Illuminate\Http\Request;
use QA\Http\Controllers\Controller;
use GuzzleHttp\Client;

class ObservacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//Route::post('/', 'TesisController@index')

    $client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://dogcare-cliente.herokuapp.com/horarios',
    // You can set any number of default request options.
    'timeout'  => 2.0,
    
    
]);

    $response= $client->request('GET', 'horarios');
    $post = json_decode($response->getBody()->getContents());
    dd($post);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $client = new \GuzzleHttp\Client(["base_uri" => "http://dogcare-cliente.herokuapp.com/horario"]);
            $options = [
                'json' => [
                    "cuidador" => 5,
                    "fecha_fin" => "2020-03-08",
                    "fecha_ini" => "2020-03-06"
                   ]
        
    ];
    
    // $response = $client->request('POST', 'horario');

    $response = $client->post("/horario", $options);

    echo $response->getBody();
    }

    /**
     * Display the specified resource.
     *
     * @param  \QA\Observaciones  $observaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Observaciones $observaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \QA\Observaciones  $observaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Observaciones $observaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \QA\Observaciones  $observaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Observaciones $observaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \QA\Observaciones  $observaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Observaciones $observaciones)
    {
        //
    }
}
