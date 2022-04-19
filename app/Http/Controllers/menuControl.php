<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class menuControl extends Controller
{
    public function generarMenul(Request $request)
    {
        return $request->alimento;
        //return view('menuMenu.menu', ['va' => $request->all()]);
    }

    public function onlin()
    {
        /*$data = [
            'titulo' => 'Styde.net'
        ];

        $pdf = \PDF::loadView('menuMenu.menu', $data);
        $pdf->render();
        return $pdf->download('archivo.pdf');*/

        Browsershot::url(route('verMen'))->save('menu/example.png');
    }

    public function verMenu()
    {
        return view('menuMenu.menu');
    }
}
