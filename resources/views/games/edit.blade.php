<form action="{{route('games.update', ['game'=>$game])}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">
        Nome
    </label>
    <input type="text" value="{{$game->name}}" name="gameName">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <button>
        salvar
    </button>
</form>
