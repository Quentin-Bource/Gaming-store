<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Image;
use App\Models\Tag;
use App\Models\Console;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class allController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function game($id)
    {
        $game = Game::findOrFail($id);

        return view('game', [
            'game' => $game
        ]);
    }

    public function allGame()
    {

        $games = Game::all();


        return view('allGame', [
            'games' => $games
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function sub()
    {
        return view('sub');
    }

    public function login()
    {
        return view('login');
    }

    public function create()
    {
        $tags = Tag::all();
        $consoles = Console::all();

        return view('create' ,[
            'tags' => $tags ,
            'consoles' => $consoles
        ]);
    }

    public function post(Request $request)
    {

        
        
        $game = Game::create([
            'titre' => $request->titre,
            'content' => $request->content,
            'prix' => $request->prix
        ]);

        $path = Storage::disk('public')->put('GamesImg', $request->game);
        $image = New Image();
        $image->path = $path;

        $game->image()->save($image);

       

        // dd('Post crée');
    }

    public function postTag(Request $request) {

        $tag = Tag::create([
            'name'=> $request->name
        ]);

        // dd('Post crée');
    }

    public function postConsole(Request $request) {

        $tag = Console::create([
            'console'=> $request->console
        ]);

        // dd('Post crée');
    }
}
