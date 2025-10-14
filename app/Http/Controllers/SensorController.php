<?php

namespace App\Http\Controllers;

use App\Models\Ambiente;
use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function store (Request $request){

        $sensorLamp = Sensor::create([
        'ambiente_id' => $request->ambiente_id,
        'codigo'=> $request->codigo,
        'tipo'=> $request->tipo,
        'status'=> $request->status
    ]);  

    return response()->json([
        'status'=> true,
        'message'=> 'Cadastrado com sucesso'
    ]);
    } 
}
