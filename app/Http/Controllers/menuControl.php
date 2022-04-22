<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use DB;
use Validator;
use Illuminate\Support\Str;
use App\comidas;
use App\menu_hoys;

class menuControl extends Controller
{

    public function upFood(Request $request)
    {
        $food = comidas::find($request->id);
        $food->comida = $request->comida;
        $food->precio = $request->precio;
        $food->media = $request->media;
        $food->save();
        return redirect()->back()->with('success', 'SE MODIFICO');
    }

    public function verMod()
    {
        $comidas = comidas::all();
        return view('modoficar', ['food' => $comidas]);
    }

    public function storeFood(Request $request)
    {
        $rules = [
            'comida' => 'required|max:255',
            'precio' => 'required|numeric',
            'media' => 'required|numeric',
            'foto' => 'required|max:255'
        ];

        $messages = [
            'comida.required' => 'SE REQUIERE EL NOMBRE',
            'comida.max' => 'EL NOMBRE ES MUY LARGO',
            'precio.required' => 'EL PRECIO ES REQUERIDO',
            'precio.numeric' => 'EL PRECIO DEBE SER NÚMERICO',
            'media.required' => 'EL PRECIO DE LA MEDIA ES REQUERIDO',
            'media.numeric' => 'EL PRECIO DE LA MEDIA DEBE SER NÚMERICO',
            'foto.required' => 'LA FOTO ES REQUERIDA'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }

        try {
            $comida = new comidas();
            $comida->comida = $request->comida;
            $comida->precio = $request->precio;
            $comida->media = $request->media;


            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $url = 'images/';
                $filename = time() . '-' . $file->getClientOriginalName();
                $filename = Str::camel($filename);
                $upload = $request->file('foto')->move($url, $filename);
                $comida->foto = $url . $filename;
            }


            $comida->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'SE AGREGO DE MANERA CORRECTA');
    }

    public function generarMenul(Request $request)
    {
        try {
            $this->upMn();
            //return comidas::find($request->comida);
            for ($i = 0; $i < count($request->comida); $i++) {
                $hoy = new menu_hoys();
                $hoy->menu = $request->comida[$i];
                $hoy->activo = 1;
                $hoy->save();
            }

            $this->generarDoc();
            $ruta = "menu/menuHoy.png";
            return response()->download($ruta);
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'Se creo el registro exitosamente');
    }

    public function upMn()
    {
        menu_hoys::where('activo', 1)->update([
            'activo' => '0'
        ]);
    }

    public function generarDoc()
    {
        Browsershot::url(route('verMen'))->save('menu/menuHoy.png');
    }

    public function verMenu()
    {
        $comidasHoy = menu_hoys::select('menu')->Where('activo', 1)->get();
        foreach ($comidasHoy as $com) {
            $arr[] = [$com->menu];
        }
        //return $arr;
        $comidas = comidas::find($arr);

        return view('menuMenu.menu', ['food' => $comidas]);
    }

    public function añadirAlimento()
    {
        return view('addAliment');
    }
}
