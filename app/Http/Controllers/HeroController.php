<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        return view('hero.index');
    }

    public function details()
    {
        return view('hero.index');
    }
}
