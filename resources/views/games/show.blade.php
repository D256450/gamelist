<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <title>Show</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li class="home"><a href="{{route('index')}}">Home</a></li>
            <li class="create_post"><a href="">Add a game</a></li>
            <input class="search_bar" type="text" placeholder="Search...">
            <button class="search_button" type="submit"></button>
            <li class="sign_up"><a href="{{route('register')}}">Sign up</a></li>
            <li class="login"><a href="{{route('login')}}">Login</a></li>
        </ul>
    </div>

    <h1>{{$game->name}}</h1>
    <p>Hours played: {{$game->hrsplayed}}</p>
    <p>Genre: {{$game->genre}}</p>
    <p>Singleplayer: {{$game->singleplayer}}</p>
    <p>Local multiplayer: {{$game->local_multiplayer}}</p>
    <p>Online multiplayer: {{$game->online_multiplayer}}</p>
    <p>DLC: {{$game->DLC}}</p>
    <p>Platform: {{$game->platform}}</p>
    <p>Rating: {{$game->rating}}</p>
</body>
</html>