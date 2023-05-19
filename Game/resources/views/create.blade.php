@extends('layout/app')

@section('content')

<form method="POST" action="{{ route('game.post') }}" enctype="multipart/form-data">

    @csrf

    <input type="text" name="titre" class=" border-black border-4">

    <textarea name="content" cols="30" rows="10" class=" border-black border-4"></textarea>

    <input type="number" name="prix" class=" border-black border-4" >

    <input type="file" name="game" id="game" accept="image/png, image/jpeg">

    <label for="AllConsole">Choisis les Tags :</label>

    @foreach ($tags as $tag)

    <input type="checkbox" id="{{$tag->name}}" name="{{$tag->name}}" value="{{$tag->name}}">
    <label for="{{$tag->name}}">{{$tag->name}}</label><br>
        
    @endforeach

    <label for="AllConsole">Choisis les Consoles :</label>

    @foreach ($consoles as $console)

    <input type="checkbox" id="{{$console->console}}" name="{{$console->console}}" value="{{$console->console}}">
    <label for="{{$console->console}}">{{$console->console}}</label><br>
        
    @endforeach

    <button type="submit" class=" border-black border-4">Nouveau jeu</button>

    
</form>

<form method="POST" action="{{ route('game.postTag') }}">

    @csrf

    <input class="border-8 border-black" type="text" name="name">

    <button type="submit" class=" border-black border-4">Nouveau Tag</button>

</form>

<form method="POST" action="{{ route('game.postConsole') }}">

    @csrf

    <input class="border-8 border-black" type="text" name="console">

    <button type="submit" class=" border-black border-4">Nouvelle Console</button>


    
</form>
    
@endsection