<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dataMmo() {


    
    
            $response = json_decode(Http::get("https://www.freetogame.com/api/games?category=mmorpg")) ;

           
        
  

        return view('welcome', ['response' => $response]);

    }

}   
