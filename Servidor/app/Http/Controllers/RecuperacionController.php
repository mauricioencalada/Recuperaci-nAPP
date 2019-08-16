<?php

namespace App\Http\Controllers;
use App\Recuperacion;

use Illuminate\Http\Request;

class RecuperacionController extends Controller
{
    public function getRecuperacion(Request $request){
        $recuperacion = Recuperacion::get();
        return response()->json($recuperacion, 200);
    }
    public function postRecuperacion(Request $request){
        $data = $request->json()->all();
        $recuperacion = Recuperacion::create([
            'descripciòn'=>$data['descripciòn'],
            'fecha'=>$data['fecha'],
            'latitud'=>$data['latitud'],
            'longitud'=>$data['longitud'],
        ]);
        return response()->json($recuperacion, 201);
    }
}
