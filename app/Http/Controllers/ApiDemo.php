<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiDemo extends Controller
{
  
    function GetApi(){
    $response = Http::get('https://newsapi.org/v2/everything?q=technology&apiKey=533a9dcda9e44c218cfa79fc89808da7');
    $res = json_decode($response->body(), true);

    // Sirf articles nikaal lo
    $articles = $res['articles'];

    return view('apiDemo', ['api' => $articles]);
}

}
