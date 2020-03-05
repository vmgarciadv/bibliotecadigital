<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use GuzzleHttp\Client;

Route::resource('observacion', 'ObservacionesController');

//$client = new Client([
    // Base URI is used with relative requests
  //  'base_uri' => '',
    // You can set any number of default request options.
   // 'timeout'  => 2.0,
//]);
/*
$response= $client->request('GET', 'posts');


//post

//Route::post('/', 'TesisController@index')

$client = new \GuzzleHttp\Client(["base_uri" => "http://dogcare-cliente.herokuapp.com/observacion"]);
$options = [
    'json' => [
        "cuidador" => 2,
        "fecha_fin" => "2020-03-08",
        "fecha_ini" => "2020-03-06"
       ]
   ];
   
  // $response = $client->request('POST', 'horario');

  $response = $client->post("/horario", $options);

echo $response->getBody();*/

