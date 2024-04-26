<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/css/game.css')}}">
</head>
<body>

    @include('header')

@if(isset($response2))


<section class="containerAll">

    <div class="containerItem">

        <div>
            <h1 class="gameTitle">{{$response2->title}} - Status:<span class="status">{{$response2->status}}</span></h1>
        </div>


        <div>

            <p>
                {{$response2->description}}

            </p>

        </div>


    </div>

@endif

@if(isset($error))

    <h1 class="error">ERROR</h1>

@endif
    
</body>
</html>