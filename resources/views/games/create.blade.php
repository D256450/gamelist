<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{route('game.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name:</label>
            <input name="name" type="text">
        </div>

        <div class="form-group">
            <label for="">Hours played:</label>
            <input name="hrsplayed" type="number">
        </div>

        <div class="form-group">
            <label for="">Genre:</label>
            <input name="genre" type="text">
        </div>

        <div class="form-group">
            <label for="">Singleplayer:</label>
            <input name="singleplayer" type="number">
        </div>

        <div class="form-group">
            <label for="">Local multiplayer:</label>
            <input name="local_multiplayer" type="number">
        </div>

        <div class="form-group">
            <label for="">Online multiplayer:</label>
            <input name="online_multiplayer" type="number">
        </div>

        <div class="form-group">
            <label for="">DLC:</label>
            <input name="DLC" type="number">
        </div>

        <div class="form-group">
            <label for="">Platform:</label>
            <input name="platform" type="text">
        </div>

        <div class="form-group">
            <label for="">Rating:</label>
            <input name="rating" type="number">
        </div>

        <input type="submit" value="Create">
    </form>
</body>
</html>