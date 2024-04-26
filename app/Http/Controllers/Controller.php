<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Laravel\Dusk\Browser;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dataMmo() {


    
    
            $response = json_decode(Http::get("https://www.freetogame.com/api/games")) ;

           
        
  

        return view('welcome', ['response' => $response]);

    }

    public function gameCatch(Request $request) {

        

        $id = $request->input('gameId');


        $response = json_decode(Http::get("https://www.freetogame.com/api/game?id=$id"));

        

       return view('game', ['response' => $response]);
    }

}   
