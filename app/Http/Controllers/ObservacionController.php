<?php

namespace QA\Http\Controllers;

use Illuminate\Http\Request;
use App\Observacion;
use QA\Http\Controllers\Controller;
use GuzzleHttp\Client;
use DB;

class ObservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://bibliotecadigital.herokuapp.com/api/observacion',
            // You can set any number of default request options.
            'timeout'  => 2.0,  
        ]);

        $response= $client->request('GET', 'api/observacion');

        $post = json_decode($response->getBody()->getContents());

          echo $response->getBody();

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
         $client = new \GuzzleHttp\Client(["base_uri" => "https://bibliotecadigital.herokuapp.com/api/observacion"]);
        $options = [
            'json' => [
                "descripcion" => "Observacion Prueba 7"
               ]
            
        ];
        

        $response = $client->post("/api/observacion", $options);

        echo $response->getBody();
        dd($response); 
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $observacion = new Observacion;
        $observacion->descripcion = $request->descripcion;
        $observacion->save();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $observacion = Observacion::findOrFail($id);
        $observacion->descripcion = $request->descripcion;
        $observacion->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
