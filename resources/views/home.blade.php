<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ultimate Volleyball</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('{{asset('img/wallpaper.gif')}}')">

        
        <h1 class="titre text-white">Bienvenue sur Ultimate VolleyBall</h1>


        <div class="row mt-1 centree">
  
          <div class="choix text-center">
            <h3 class="text-white titre">Joueur</h3>
            <a  href="/joueur">
              <img src="{{asset('img/joueur.gif')}}" alt="">
            </a>
          </div>

          <div class="mx-5"></div>

          <div class="choix text-center">
            <h3 class="text-white titre">Coach</h3>
            <a href="/coach">
              <img src="{{asset('img/coach.gif')}}" alt="">
            </a>
          </div>
        </div>

        @include('components.footer')


    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>