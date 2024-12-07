<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Plano;
use Exception;
use Illuminate\Http\Request;

class PlanoApiController extends Controller
{
    public function index()
    {
        try {
            $planos = Plano::all();
            $planos = $planos->map(function($plano){
                $plano->imagem = asset("storage/".$plano->imagem);
                return $plano;
            });
            return response()->json($planos, 200);

        } catch (Exception $e) {
            return response()->json(["Erro" => "Erro ao carregar dados"], 500);
        }

    }
}
