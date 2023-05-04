<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allController extends Controller
{
    function home() {
        return view('home');
    }

    function game($id) {
        return view('game');
    }

    function allGame() {
        return view('allGame');
    }

    function about() {
        return view('about');
    }

    function sub() {
        return view('sub');
    }

    function login() {
        return view('login');
    }
}
