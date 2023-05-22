@extends('layout/app')

@section('content')

<div class="flex justify-center ">

    <form method="POST" action="{{ route('game.post') }}" enctype="multipart/form-data" class="w-2/5 bg-zinc-600 m-10 p-10 rounded text-white">
      @csrf
  
      <div class="flex flex-col items-center">

        <label class="m-5 text-2xl underline" for="">Ajouter un Jeu</label>
        <input type="text" name="titre" class=" mb-4 w-2/3 rounded text-black" required placeholder="Nom du jeu">
        <textarea name="content" cols="30" rows="10" class=" mb-4 w-2/3 rounded text-sm text-black " required placeholder="Synopsis"></textarea>
        <input type="number" name="prix" class=" mb-4 w-2/3 rounded text-black" required placeholder="Prix">
        <label class="m-5 text-xl" for="">Image du jeu</label>
        <input type="file" name="game" id="game" accept="image/png, image/jpeg" class="m-5 mb-10"  required>

      </div>
  
      <div class="flex justify-center">

        <div class="w-1/2 pr-5">

          <label class="block text-center text-lg" for="AllConsole">Choisis les Tags :</label>

          <div class="grid grid-cols-2 gap-2">

            @foreach ($tags as $tag)

            <div class="flex items-center w-1/2">

              <input class="mr-2" type="checkbox" id="{{$tag->name}}" name="tags[]" value="{{$tag->id}}">
              <label class="" for="{{$tag->name}}">{{$tag->name}}</label>

            </div>

            @endforeach

          </div>
        </div>
  
 
        <div class="w-1/2 ml-5">

            <label class="block text-center text-lg" for="AllConsole">Choisis les Consoles :</label>

            <div class="grid grid-cols-2 gap-2">

              @foreach ($consoles as $console)

              <div class="flex items-center">

                <input type="checkbox" id="{{$console->console}}" name="consoles[]" value="{{$console->id}} ">
                <label for="{{$console->console}}">{{$console->console}}</label>

              </div>

              @endforeach

            </div>

          </div>
        </div>
  
      <div class="flex justify-end">

        <button type="submit" class="bg-zinc-800 p-2  hover:bg-violet-500 text-white rounded-full ">Nouveau jeu</button>

      </div>
    </form>
  </div>


  <div class="flex justify-between">

    <form method="POST" action="{{ route('game.postTag') }}" class="flex items-end bg-zinc-600 m-10 p-10 rounded text-white">

      @csrf

      <input class=" border-black m-2 rounded text-black" type="text" name="name">

      <button type="submit" class="bg-zinc-800 p-2  hover:bg-violet-500 text-white rounded-full ">Nouveau Tag</button>
      
    </form>
  
    <form method="POST" action="{{ route('game.postConsole') }}" class="flex items-end bg-zinc-600 m-10 p-10 rounded text-white">

      @csrf

      <input class="border-black rounded m-2 text-black" type="text" name="console">

      <button type="submit" class="bg-zinc-800 p-2  hover:bg-violet-500 text-white rounded-full ">Nouvelle Console</button>

    </form>

  </div>
    
@endsection