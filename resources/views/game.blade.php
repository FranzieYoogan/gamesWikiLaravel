<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/game.css')}}">
    <title>Document</title>
</head>
<body>

    @include('header')

    @if(isset($response))

    <section class="containerAll">

        <div class="containerItem">

            <div>
                <h1 class="gameTitle">{{$response->title}} - Status: @if($response->status == "Live")<span class="status">{{$response->status}}</span>@endif</h1>
            </div>


            <div>

                <p>
                    {{$response->description}}

                </p>

            </div>


        </div>
   


    </section>
    





    @endif
    
</body>
</html>