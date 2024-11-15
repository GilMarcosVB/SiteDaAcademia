<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
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

        return redirect()->back()->with('sucesso', 'Usuário cadastrado com sucesso!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
