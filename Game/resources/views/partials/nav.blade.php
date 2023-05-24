<div class="bg-slate-800 w-full opacity-100 text-slate-50 flex rounded-t-md">

    <a class="flex justify-start" href="{{ route('game.create') }}">

      <img class="w-48" src="{{asset('img/logo.png')}}" alt="">

    </a>

    <div class="flex justify-around w-full">

      <ul class="inline-flex text-center items-center text-2xl transition-colors duration-300">

        <li class="m-10 mr-20 hover:text-violet-500 @if(Request::is('/')) text-violet-500 @endif">

          <a href="{{ route('home') }}">Home</a>

        </li>

        <li class="m-10 mr-20 hover:text-violet-500 @if(Request::is('Game*')) text-violet-500 @endif">

          <a href="{{ route('games') }}">Games</a>

        </li>

        <li class="m-10 mr-20 hover:text-violet-500 @if(Request::is('About')) text-violet-500 @endif">

          <a href="{{ route('about') }}">About</a>

        </li>

      </ul>

      <a class="w-10 flex justify-center items-center" href="{{ route('panier') }}"> 
        @if ($cart->count() > 0)
        <span class="text-xs bg-violet-500 p-1 rounded-full ">{{$cart->count()}}</span> 
      
      @endif

      <img src="{{asset('img/panier.png')}}" alt="panier"> 
      </a>

    </div>
  </div>
  



