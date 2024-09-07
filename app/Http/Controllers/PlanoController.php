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
        // Validação do formulário, incluindo o campo de imagem
        $request->validate([
            'nome_plano' => 'required',
            'duracao' => 'required',
            'preco' => 'required',
            'imagem' => 'required', // Validação da imagem
        ]);
    
        // Processo de upload da imagem
        if ($request->hasFile('imagem')) {
            // Salvar a imagem na pasta storage/app/public/images
            $imagePath = $request->file('imagem')->store('imagem', 'public');
    
            // Criar o plano no banco de dados, incluindo o caminho da imagem
            plano::create([
                'nome_plano' => $request->nome_plano,
                'duracao' => $request->duracao,
                'preco' => $request->preco,
                'imagem' => $imagePath, // Caminho da imagem armazenada na storage
            ]);
    
            return redirect()->route('plano.index')->with('sucesso', 'Plano cadastrado com sucesso!');
        } else {
            return back()->with('erro', 'O upload da imagem falhou.');
        }
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
    // Validação do formulário, incluindo o campo de imagem (opcional)
    $request->validate([
        'nome_plano' => 'required',
        'duracao' => 'required',
        'preco' => 'required',
        'imagem' => 'nullable', // A imagem é opcional no update
    ]);
    $plano = Plano::findOrFail($id);

    // Verifica se uma nova imagem foi carregada
    if ($request->hasFile('imagem')) {
        
        // Salva a nova imagem na pasta storage/app/public/imagem
        $imagePath = $request->file('imagem')->store('imagem', 'public');
    } else {
        // Se nenhuma nova imagem for carregada, mantém a imagem antiga
        $imagePath = $plano->imagem;
    }

    // Atualiza o plano no banco de dados, incluindo o caminho da nova imagem, se for o caso
    $plano->update([
        'nome_plano' => $request->nome_plano,
        'duracao' => $request->duracao,
        'preco' => $request->preco,
        'imagem' => $imagePath, // Atualiza o caminho da imagem
    ]);

    
    return redirect()->route('plano.index')->with('sucesso', 'Plano atualizado com sucesso!');
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
