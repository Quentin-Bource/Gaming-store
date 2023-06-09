@extends('layout/app')

@section('content')

<div class="grid grid-cols-2 gap-5 p-20 text-white bg-zinc-800 m-24 rounded-md border-black border-2">

    <div class="flex justify-center items-center ">

      <img class=" h-96 " src="/Gaming-store/Game/public/{{ Storage::url($game->image->path)}}" alt="Jeux" data-aos="fade-down">

    </div>

    <div class="bg-zinc-600 rounded-md" data-aos="fade-left">
      <h3 class="text-4xl text-center m-10">{{$game->titre}}</h3>

      
    <div class="text-center">

        @forelse ($game->tags as $tag)

        <span class="bg-zinc-800 p-2 rounded-md mr-5" data-aos="fade-left">{{$tag->name}}</span>
        
      @empty

    <span data-aos="fade-left">Aucun tags pour ce jeu</span>
    
    
    @endforelse

    <div>
        <h4 class="m-8 text-xl">Choisi la console :</h4>

        <form action="{{ route('cart.add') }}" method="POST">

          @csrf
        
          @foreach ($game->consoles as $console)

            <label class="inline-flex items-center mt-5 mr-5 p-2 text-xl rounded-md bg-zinc-800 hover:bg-violet-500">

              <input type="radio" name="console_id" value="{{ $console->id }}" class="form-radio h-5 w-5 text-violet-500" required >

              {{ $console->console }}

            </label>
          @endforeach
        
          <div class="flex justify-end">

            <input type="hidden" name="game_id" value="{{ $game->id }}">
            
            <button type="submit" class="flex mr-5 p-2 rounded-md text-3xl hover:bg-violet-500 bg-zinc-800 ml-5 mt-5 mb-5 items-end" data-aos="fade-right"> {{ $game->prix }}$ ></button>
          
          </div>
        </form>

    

    </div>



    </div>

    </div>


    <p class="rounded-md col-span-2 p-5 text-white bg-zinc-600 text-xl" data-aos="fade-up">{{$game->content}}</p>
    
  </div>


  

  <form action="{{ route('game.remove', ['id' => $game->id])}}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="rounded-xl bg-zinc-600 hover:bg-violet-500 text-white p-2 m-5">Supprimer</button>
  </form>

  <a class="rounded-xl bg-zinc-600 hover:bg-violet-500 text-white p-2 m-5" href="{{ route('edit', ['id' => $game->id])}}">Modifier</a>

  



  


    
@endsection

