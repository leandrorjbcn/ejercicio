<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index(){
        $prevision="";
        $error="";

        if($_SERVER['REQUEST_METHOD']==="GET" && !empty($_REQUEST['zipCode'])){

            $zipCode=isset($_REQUEST['zipCode']) ? $_REQUEST['zipCode'] : "";
            
            $url     = "http://api.openweathermap.org/data/2.5/weather?zip=".$zipCode.",es&appid=a1fc2c19d548237a56e0edd7b79b3ebc&units=metric&lang=es";

            if(!$url){
                $error = "No hemos encontrado ninguna ciudad con ese código postal.";
            }else{

                $json    = file_get_contents($url);
                $data    = json_decode($json, true);
                $prevision = "El tiempo en ".$data['name']." en ".$zipCode." es ".$data['weather'][0]['description'];
                $prevision .= "<br/>Temperatura: ".$data['main']['temp']." grados.";                
            }
        }
        return view('index', compact('prevision')); 
    }

    public function show($id){
        $client = new Client([
            'base_uri' => 'https://jsonplaceholder.typicode.com',        
            'timeout'  => 2.0,
        ]);    
        $response = $client->request('GET', 'posts/{$id}');    
        $post = json_decode($response->getBody()->getContents());    
        return view('show', compact('post'));

    }
}