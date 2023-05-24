<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Image;
use App\Models\Tag;
use App\Models\Console;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class allController extends Controller
{
    public function home()
    {
        $cart = Cart::all();
        $games = Game::all();
        return view(
            'home',
            [
                'cart' => $cart,
                'games' => $games
            ]
        );
    }





    public function addPanier(Request $request)
    {
        $game = Game::findOrFail($request->game_id);
        $console = Console::findOrFail($request->console_id);


        $cartItem = new Cart();
        $cartItem->game_id = $game->id;
        $cartItem->console_id = $console->id;



        $cartItem->save();


        return redirect()->back()->with('success', 'Le jeu a été ajouté au panier.');
    }


    public function panier()
    {
        $cart = Cart::all();

        return view(
            'panier',
            [
                'cart' => $cart,
            ]
        );
    }

    public function removePanier($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->route('panier')->with('success', 'L\'élément a été supprimé du panier.');
    }





    public function game($id)
    {
        $cart = Cart::all();
        $game = Game::findOrFail($id);

        return view('game', [

            'cart' => $cart,
            'game' => $game
        ]);
    }

    public function removeGame($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect()->route('home')->with('success', 'L\'élément a été supprimé du panier.');
    }



    public function allGame()
    {
        $cart = Cart::all();
        $games = Game::all();


        return view('allGame', [

            'cart' => $cart,
            'games' => $games
        ]);
    }

    public function about()
    {
        $cart = Cart::all();
        return view('about', [
            'cart' => $cart,
        ]);
    }






    public function create()
    {
        $cart = Cart::all();
        $tags = Tag::all();
        $consoles = Console::all();

        return view('create', [

            'cart' => $cart,
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

    public function editGame($id)

    {
        $cart = Cart::all();
        $game = Game::findOrFail($id);
        $tags = Tag::all();
        $consoles = Console::all();

        return view('edit', [
            'cart' => $cart,
            'game' => $game,
            'tags' => $tags,
            'consoles' => $consoles
        ]);
    }

    public function update(Request $request, $id)
    {

        $game = Game::findOrFail($id);

        $game->titre = $request->titre;
        $game->content = $request->content;
        $game->prix = $request->prix;

        $game->tags()->sync($request->tags);
        $game->consoles()->sync($request->consoles);


        $game->save();

        return redirect()->route('games')->with('success', 'L\'élément a été supprimé du panier.');
    }










    public function postTag(Request $request)
    {

        Tag::create([
            'name' => $request->name
        ]);
        return redirect()->back()->with('success', 'Le Tag a été créé avec succès.');

        // dd('Post crée');
    }


    public function removeTag($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect()->back()->with('success', 'Le tag à été supprimé.');
    }





    public function postConsole(Request $request)
    {

        Console::create([
            'console' => $request->console
        ]);
        return redirect()->back()->with('success', 'La console a été créée avec succès.');

        // dd('Post crée');
    }


    public function removeConsole($id)
    {
        $console = Console::findOrFail($id);
        $console->delete();

        return redirect()->back()->with('success', 'Le tag à été supprimé.');
    }
}
