<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{route('games.store')}}" method="POST">
    @csrf
    <div>
        <label for="">Nome do jogo</label>
        <input type="text" name="gameName">
    </div>
    <button type="input">Enviar</button>
</form>
<h1>Lista de jogos</h1>
<ul>
    @foreach ($games as $game )
    <li>
        {{$game->name}}
    </li>
    @endforeach
</ul>

</body>
</html>
