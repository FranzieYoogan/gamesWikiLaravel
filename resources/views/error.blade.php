<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/css/game.css')}}">
    <link rel="stylesheet" href="{{asset('/css/footer2.css')}}">
</head>
<body>

    @include('header')

    @if(isset($error))

    <h1 class="error">ERROR</h1>

    <footer
class="footer2 text-center"

>
<!-- Grid container -->


<!-- Copyright -->
<div
class="footer2 text-center p-3"

>
© 2024 Copyright:
<a class="textStyle" href="https://www.freetogame.com/api-doc"
>freetogameApi</a
>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->


@endif

    
</body>
</html>