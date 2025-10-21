<?php

namespace App\Http\Controllers;

use App\Models\Ambiente;
use Illuminate\Http\Request;

class AmbienteController extends Controller
{
    public function update(Request $request)
    {
        $ambiente = Ambiente::find($request->id);

        if ($ambiente == null) {
            return response()->json([
                'status' => false,
                'message' => 'Não foi possível encontrar o ambiente'
            ]);
        }

        if (isset($request->nome)) {
            $ambiente->nome = $request->nome;
        }

        if (isset($request->descricao)) {
            $ambiente->descricao = $request->descricao;
        }

        if (isset($request->status)) {
            $ambiente->status = $request->status;
        }

        $ambiente->update();

        return response()->json([
            'status' => true,
            'message' => 'Alterado com sucesso'
        ]);
    }

    public function findLED($id)
    {
        $led = Ambiente::find($id);

        if ($led == null) {
            return response()->json([
                'status' => false,
                'message' => "ID não encontrado"
            ]);
        }
        //retornar o status
        return $led->status;
    }

}
