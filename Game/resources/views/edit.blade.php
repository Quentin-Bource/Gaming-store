@extends('layout/app')

@section('content')



<div class="flex justify-center">
    <form method="POST" action="{{ route('game.update', $game->id) }}" enctype="multipart/form-data" class="w-3/5 bg-zinc-600 m-10 p-10 rounded text-white">
        @csrf
        @method('PATCH')

        <div class="flex flex-col items-center">
            <label class="m-5 text-2xl underline" for="">Modifier le jeu</label>

            <div class="mb-4 ">
                <input type="text" name="titre" class="rounded text-black border-2 border-black p-2" value="{{ $game->titre }}" placeholder="Nom du jeu">
            </div>

            <div class="mb-4">
                <textarea name="content" cols="30" rows="10" class="rounded text-sm text-black border-2 border-black p-2" placeholder="Synopsis">{{ $game->content }}</textarea>
            </div>

            <div class="mb-4">
                <input type="number" name="prix" class="rounded text-black border-2 border-black p-2" value="{{ $game->prix }}" placeholder="Prix">
            </div>


            <div class="grid grid-cols-2">

                <div class=" mb-4 w-2/3">
                    <label class="block mb-2 font-bold" for="tags">Choisis les Tags :</label>
                    @foreach ($tags as $tag)
                        <div class="flex items-center">
                            <input type="checkbox" id="tag_{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}"
                                {{ $game->tags->contains('id', $tag->id) ? 'checked' : '' }} class="mr-2">
                            <label for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
                        </div>
                    @endforeach
                </div>
    
                <div class="mb-4 w-2/3">
                    <label class="block mb-2 font-bold" for="consoles">Choisis les Consoles :</label>
                    @foreach ($consoles as $console)
                        <div class="flex items-center">
                            <input type="checkbox" id="console_{{ $console->id }}" name="consoles[]" value="{{ $console->id }}"
                                {{ $game->consoles->contains('id', $console->id) ? 'checked' : '' }} class="mr-2">
                            <label for="console_{{ $console->id }}">{{ $console->console }}</label>
                        </div>
                    @endforeach
                </div>


            </div>

            

           
            <div class="flex justify-end">
                <button type="submit" class="bg-zinc-800 p-2 hover:bg-violet-500 text-white rounded-full">Mettre à jour le jeu</button>
            </div>
            </div>
            </form>
            </div>
@endsection