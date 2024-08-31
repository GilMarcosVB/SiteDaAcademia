<?php

namespace App\Http\Controllers;


use App\Models\Plano;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class PlanoController extends Controller
{

    public function index()
    {
        $planos = Plano::all();
        return view('admin.planos.index', compact('planos'));
    }

    public function create()
    {
        return view('admin.planos.cadastrar');
    }

    public function store(Request $request)
    {

        $request->validate([
            'titulo' => 'required',
            'preco' => 'required',
            
        ]);

        plano::create([
            'titulo' => $request->titulo,
            'preco' => $request->descricao,
          
        ]);

        return redirect()->route('plano.index')->with('sucesso', 'Plano cadastrado com sucesso!');
    }

    public function show(string $id)
    {
        $plano = Plano::findOrFail($id);
        return view('admin.planos.visualizar', compact('plano'));
    }

    public function edit(string $id)
    {
        $plano = Plano::findOrFail($id);
        return view('admin.planos.editar', compact('plano'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome_plano' => 'required',
            'duracao' => 'required',
            'preco' => 'required',
        ]);

        $plano = Plano::findOrFail($id);

        $plano->update([
            'nome_plano' => $request->nome_plano,
            'duracao' => $request->duracao,
            'preco' => $request->preco,
           
        ]);

        return redirect()->route('plano.index')->with('sucesso','Plano atualizado com sucesso!!!');
    }

    public function destroy(string $id)
    {
        try {
            $plano = Plano::findOrFail($id);
            $plano->delete();
            return redirect()->route('plano.index')->with('sucesso', 'Plano deletado com sucesso!!!');
        } catch (\Exception $e) {

            return redirect()->route('plano.index')->with('error', 'Erro ao deletar o usuário');
        }
    }
}
