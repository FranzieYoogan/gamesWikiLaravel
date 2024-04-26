<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('/css/home.css')}}">

        <!-- Styles -->
       
    </head>
    <body class="antialiased">
       
        @include('header')

        <section class="containerAll" >
                
            @if(isset($response))

      
            @foreach($response as $data)
            
            <form class="containerItems" method="POST" action="/game">
                @csrf

                <div style="display: flex; gap: 1em">
                    <h1 type="text" class="titleGame" name="gameTitle">{{$data->title}} </h1>
                    <input type="text" class="titleGame2" name="gameId" value="{{$data->id}}">

                </div>
             
                <button style="background-color: transparent; padding: 0px; width: 100%;" type="submit"><img class="imgGame" src="{{asset("$data->thumbnail")}}" alt=""></button>
            </form>
                
       

          
          

            @endforeach
            @endif

        </section>


    </body>
</html>
