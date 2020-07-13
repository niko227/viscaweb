<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function showOdds(){
        $client = new Client([
            'base_uri' => 'http://www.verdelimon.es/work/step3-payload.json',
            'timeout'  => 20.0,
        ]);
    
        $response = $client->request('GET');
        $odds = json_decode( $response->getBody()->getContents());
        
        return view('visca_web', compact('odds'));
    }

}
