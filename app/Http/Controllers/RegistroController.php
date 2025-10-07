<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroFormRequest;
use App\Models\Registro;
use App\Models\Sensor;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
  
    // public function store(RegistroFormRequest $request){

    //     $registro = Registro::create([
    //         'sensor_id' => $request->sensor_id,
    //         'valor' => $request->valor,
    //         'unidade' => $request->unidade,
    //         'data_hora' =>$request->data_hora

    //     ]);
    //     return $registro;
    // }

    // public function index(){
    //     $registro = Registro::orderBy('id', 'desc')->get(); //Se tiver mais de um registro desse com o um código, ele traz o primeiro.
    // }

    public function store(RegistroFormRequest $request){
        $sensor = Sensor::where('codigo', $request->cod_sensor)->first();
        if(!$sensor){
            return response()->json(['error'=>'sensor não encontrado'], 404);
        }
        
        $registro = Registro::create([
            'sensor_id' => $sensor->id,
            'valor' => $request->valor,
            'unidade' => $request->unidade,
            'data_hora' => now()
        ]);

        return response()->json([
            'success' => 'registro salvo com sucesso',
            'data' => $registro
        ], 201);
    }



}
