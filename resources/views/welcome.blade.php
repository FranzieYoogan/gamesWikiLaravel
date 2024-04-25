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

        <section class="containerAll">

            @if(isset($response))

      
            @foreach($response as $data)

            <div class="containerItems">
                <h1 class="titleGame">{{$data->title}}</h1>
                <img class="imgGame" src="{{asset("$data->thumbnail")}}" alt="">
            </div>
                
       

          
          

            @endforeach
            @endif

        </section>


    </body>
</html>
