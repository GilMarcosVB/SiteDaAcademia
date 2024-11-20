@extends('layouts.admin')
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Visualizar Usuario</h2>
    </div>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>{{ $usuario->id }}</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>{{ $usuario->name}}</td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td>{{ $usuario->email}}</td>
        </tr>
        <tr>
            <th>Data De Nascimento</th>
            <td>{{ $usuario->data_nascimento }}</td>
        </tr>
        <tr>
            <th>Celular</th>
            <td>{{ $usuario->celular}}</td>
        </tr>

        <tr>
            <th>CPF</th>
            <td>{{ $usuario->cpf}}</td>
        </tr>
    </table>
    <a href="{{ route('usuario.edit', ['id' => $usuario->id]) }}" class="btn btn-primary">Editar</a>
    <a href="{{ route('usuario.index') }}" class="btn btn-secondary">Cancelar</a>
@endsection
