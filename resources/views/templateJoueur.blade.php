<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ultimate Volleyball</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('{{asset('img/wallpaper.gif')}}')">
    
    @include('components.headerJoueur')

    <div class="main">
        @yield('content')
        

    </div>




    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>