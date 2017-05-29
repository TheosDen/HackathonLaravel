<?php

namespace App\Http\Controllers;

use App\Hero;
use App\Repositories\Heroes;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index(Heroes $heroes)
    {
        $heroes = $heroes->all();

        return view('hero.index', compact('heroes'));
    }

    public function details(Hero $hero)
    {
        return view('hero.details', compact('hero'));
    }
}
