<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index(){
        // $client = new Client([
        //     'base_uri' => 'https://jsonplaceholder.typicode.com',        
        //     'timeout'  => 2.0,
        // ]);
    
        // $response = $client->request('GET', 'posts');
    
        // $posts = json_decode($response->getBody()->getContents());
    
        // return view('index', compact('posts'));


        $client = new Client([
            'base_uri' => 'https://api.openweathermap.org/data/2.5/weather?zip=',        
            'timeout'  => 2.0,
        ]);
        $appid="&appid=f3950d19b2ada03837a03fd06f1b418d&units=metric&lang=es";
    
        $prevision="";
        $error="";
        
        if($_SERVER['REQUEST_METHOD']==="GET" && !empty($_REQUEST['zipCode'])){

            $zipCode=isset($_REQUEST['zipCode']) ? $_REQUEST['zipCode'] : "";
            $content = file_get_contents($client->base_uri.$zipCode.$appid);            
            $response = $client->request('GET', zipCode.',es'+$appid);              
            
            if(!$content){
                $error = "No hemos encontrado ninguna ciudad con ese código postal.";
            }else{
                //$data = json_decode($content, true);	//al poner true lo transforma en un array      
                $data = json_decode($response, true);                     
                $prevision = "El tiempo en ... en ".$zipCode." es ".$data['weather'][0]['description']." Ya ta.";
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