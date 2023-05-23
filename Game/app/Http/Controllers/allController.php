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

    public function panier()
    {
        return view('panier');
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

        return view('create', [
            'tags' => $tags,
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
        $image = new Image();
        $image->path = $path;

        $game->image()->save($image);


        $tags = $request->input('tags', []);
        $consoles = $request->input('consoles', []);

        $game->tags()->sync($tags);
        $game->consoles()->sync($consoles);

        return redirect()->back()->with('success', 'Le jeu a été créé avec succès.');

        // dd('Post crée');
    }

    public function postTag(Request $request)
    {

        Tag::create([
            'name' => $request->name
        ]);
        return redirect()->back()->with('success', 'Le Tag a été créé avec succès.');

        // dd('Post crée');
    }

    public function postConsole(Request $request)
    {

        Console::create([
            'console' => $request->console
        ]);
        return redirect()->back()->with('success', 'La console a été créée avec succès.');

        // dd('Post crée');
    }
}
