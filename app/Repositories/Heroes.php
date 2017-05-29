<?php

namespace App\Repositories;

use App\Hero;

class Heroes
{
    public function all()
    {
        return Hero::all();
    }
}