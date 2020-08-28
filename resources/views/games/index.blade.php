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
        <label for="">
            Nome do jogo
        </label>
        <input type="text" name="gameName">
        <label for="">
            Imagem
        </label>
        <input type="file" name="gameImage">
        <label for="">
            Nota
        </label>
        <input type="search" name="gameScore">
        <label for="">
            Descrição
        </label>
        <textarea type="text" name="gameDescription"></textarea>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <button type="input">
        Enviar
    </button>
</form>
<h1>
    Lista de jogos
</h1>
<ul>
    @foreach ($games as $game )
    <li>
        {{$game->name}}
        {{$game->description}}
        <form action="{{route('games.destroy',['game'=>$game->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <button>
                Deletar
            </button>
        </form>
        <a href="{{route('games.edit', ['game'=>$game])}}">
            Editar
        </a>
    </li>
    @endforeach
</ul>
</body>
</html>
