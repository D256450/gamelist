<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <title>Index</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li class="home"><a href="{{route('index')}}">Home</a></li>
            <li class="create_game"><a href="{{route('create')}}">Add a game</a></li>
            <input class="search_bar" type="text" placeholder="Search...">
            <button class="search_button" type="submit"></button>
            <li class="sign_up"><a href="{{route('register')}}">Sign up</a></li>
            <li class="login"><a href="{{route('login')}}">Login</a></li>
        </ul>
    </div>

    <div class="card-container">
        @foreach($games as $game)
            <a class="card" href="{{route('game', $game->id)}}">
                <p>Name: {{$game->name}}</p>
                <p>Hours played: {{$game->hrsplayed}}</p>
            </a>
        @endforeach
    </div>
</body>
</html>