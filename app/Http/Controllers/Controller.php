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

    
    public function dataMmo2() {


    
    
        $response = json_decode(Http::get("https://www.freetogame.com/api/games?category=mmorpg")) ;

       
    


    return view('mmorpg', ['response' => $response]);

}

public function card() {


    
    
    $response = json_decode(Http::get("https://www.freetogame.com/api/games?category=card")) ;

   



return view('card', ['response' => $response]);

}

public function moba() {


    
    
    $response = json_decode(Http::get("https://www.freetogame.com/api/games?category=moba")) ;

   



return view('card', ['response' => $response]);

}

public function shooter() {


    
    
    $response = json_decode(Http::get("https://www.freetogame.com/api/games?category=shooter")) ;

   



return view('card', ['response' => $response]);

}

  

public function gameCatch(Request $request) {

    

    $id = $request->input('gameId');


    $response = json_decode(Http::get("https://www.freetogame.com/api/game?id=$id"));

        

   return view('game', ['response' => $response]);
}



    public function gameSearch(Request $request) {

        $searchValue = $request->input('searchValue');


        if(isset($_POST['submit'])) {


      
    
 $response = json_decode(Http::get("https://www.freetogame.com/api/games"));

        foreach($response as $data) {

            if($data->title == $searchValue) {

                $id = $data->id;

                $response2 = json_decode(Http::get("https://www.freetogame.com/api/game?id=$id"));

                
                return view('game2', ['response2' => $response2]);

            }   

        }

        if($data->title != $searchValue) {

            $error = true;

            return view('error', ['error' => $error]);

        }


    }


    }

}   
