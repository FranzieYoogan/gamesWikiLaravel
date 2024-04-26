<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/game.css')}}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/footer.css')}}">
</head>
<body>

    @include('header')

    @if(isset($response))

    <section class="containerAll">

        <div class="containerItem">

            <div>
                <h1 class="gameTitle">{{$response->title}} - Status:<span class="status">{{$response->status}}</span></h1>
            </div>


            <div>

                <p>
                    {{$response->description}}

                </p>

            </div>


        </div>
   


    </section>
    



    <footer
                class="footer text-center"
            
                >
          <!-- Grid container -->
      
      
          <!-- Copyright -->
          <div
               class="footer text-center p-3"
            
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