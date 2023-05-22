@extends('layout/app')

@section('content')

<div class="grid grid-cols-2 gap-5 p-20 text-white bg-zinc-800 m-24 rounded-md border-black border-2">

    <div class="flex justify-center items-center ">

      <img class=" h-96" src="/Gaming-store/Game/public/{{ Storage::url($game->image->path)}}" alt="Jeux">

    </div>

    <div class="bg-zinc-600 rounded-md">
      <h3 class="text-4xl text-center m-10">{{$game->titre}}</h3>

      
    <div class="text-center">

        @forelse ($game->tags as $tag)

        <span class="bg-zinc-800 p-2 rounded-md mr-5">{{$tag->name}}</span>
        
      @empty

    <span>Aucun tags pour ce jeu</span>
    
    
    @endforelse

    <div>
        <h4 class="m-8 text-xl">Choisi la console :</h4>

        <form action="" method="GET">

            @foreach ($game->consoles as $console)

            <input name="console" type="radio" class="mr-5 p-2 text-xl rounded-md  bg-zinc-800 hover:bg-violet-500" required>

            <label>{{$console->console}}</label>
                
            @endforeach


            <div class="flex justify-end">
        
                <button type="submit" class="flex mr-5 p-2 rounded-md text-3xl hover:bg-violet-500 bg-zinc-800 ml-5 items-end"> {{$game->prix}}$ ></button>
        
                </div>


        </form>

    

    </div>



    </div>

    </div>


    <p class="rounded-md col-span-2 p-5 text-white bg-zinc-600 text-xl">{{$game->content}}</p>
    
  </div>

  


    
@endsection

