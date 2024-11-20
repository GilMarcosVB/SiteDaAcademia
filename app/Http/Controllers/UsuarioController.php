<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Hash;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.usuarios.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|string|min:8',
            'cpf' => 'required|string',
            'celular' => 'required|string',
            'data_nascimento' => 'required|date',
        ]);

        // Salvar o usuário no banco de dados
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->senha), // Criptografar a senha
            'cpf' => $request->cpf,
            'celular' => $request->celular,
            'data_nascimento' => $request->data_nascimento,
        ]);

        // dd($request);

        return redirect()->route('usuario.index')->with('sucesso', 'Usuário cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.visualizar', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    // Buscar o usuário pelo ID
    $usuario = User::findOrFail($id);

    // Retornar a view com os dados do usuário
    return view('admin.usuarios.editar', compact('usuario'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar os dados enviados
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email,' . $id, 
            'password' => 'nullable|string|min:8', // 
            'cpf' => 'required|string|max:14',
            'celular' => 'required|string|max:15',
            'data_nascimento' => 'required|date',
        ]);


        $usuario = User::findOrFail($id);

        // Atualizar os campos
        $usuario->name = $validated['name'];
        $usuario->email = $validated['email'];
        $usuario->cpf = $validated['cpf'];
        $usuario->celular = $validated['celular'];
        $usuario->data_nascimento = $validated['data_nascimento'];

        // Atualizar a senha apenas se foi enviada
        if (!empty($validated['password'])) {
            $usuario->password = Hash::make($validated['password']);
        }

        // Salvar as alterações
        $usuario->save();

        // Retornar uma resposta ou redirecionar
        return redirect()->route('usuario.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
