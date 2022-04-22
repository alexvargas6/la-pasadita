<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comidas;

class menu extends Controller
{
    public function showMod()
    {
        $comidas = comidas::all();
        return view('modMenu', ['food' => $comidas]);
    }
}
