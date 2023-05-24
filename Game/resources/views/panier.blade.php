@extends('layout/app')

@section('content')

<h2 class="text-3xl m-5 text-center"> Ton Panier</h2>

<div class="grid grid-cols-2">

    <div class="">

        @if($cart->count() > 0)

        @foreach($cart as $cartItem)

        <div class="flex bg-zinc-600 w-4/6 ml-40 mt-8 mb-8 text-white rounded-lg" >
            <img class="w-48 mt-5 mb-5 ml-5 rounded" src="/Gaming-store/Game/public/{{ Storage::url($cartItem->game->image->path)}}" alt="Jeux">

            <div class="text-center w-full">
                <h4 class="text-3xl m-5"> {{$cartItem->game->titre}} </h4>
                <p class="text-2xl mb-5"> {{$cartItem->console->console}} </p>
                
                <p class="text-3xl mb-5"> {{$cartItem->game->prix}} $ </p>
    
    
            
    
                        <form class="flex justify-end m-2" action="{{ route('cart.remove', ['id' => $cartItem->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-zinc-800 p-2  hover:bg-violet-500 rounded-full" type="submit" class="btn-remove">Supprimer</button>
                        </form>


            </div>



        </div>
    
        @endforeach



    

@else

    <p class="text-center m-11 text-lg">Votre panier est vide.</p>
@endif






    </div>

    <div class="bg-zinc-600 text-white w-3/6 h-min ml-40 rounded-lg mt-8">

        

        <div class="">
           

            <div class="grid grid-cols-3 m-5 mt-8">

                    <span class="text-center">Nom :</span>
                    <span class="text-center ">Console :</span>
                    <span class="text-center ">Prix :</span>
                
                    @foreach($cart as $cartItem)
                    
                        <span class="text-center m-5">{{$cartItem->game->titre}}</span>
                        <span class="text-center m-5">{{$cartItem->console->console}}</span>
                        <span class="text-center m-5 italic">{{$cartItem->game->prix}}$</span>
                    
                    @endforeach
             
            </div>



        </div>
    
       

        <p class="text-center text-2xl m-5">Total: {{ $cart->sum('game.prix') }} $ <button class="bg-zinc-800 ml-5 p-2  hover:bg-violet-500 text-white rounded-full text-xl"> <a href=" {{route('home')}} ">Payer</a> </button></p>
    </div>



</div>






@endsection