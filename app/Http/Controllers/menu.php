<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menu extends Controller
{
    public function showMod()
    {
        return view('modMenu');
    }
}
