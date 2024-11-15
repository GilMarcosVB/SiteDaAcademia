@extends('layouts.admin')
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Visualizar Plano</h2>
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
            <th>Imagem</th>
            <td>{{ $usuario->email}}</td>
        </tr>
        <tr>
            <th>Duração</th>
            <td>{{ $usuario->data_nascimento }}</td>
        </tr>
        <tr>
            <th>Preço</th>
            <td>{{ $usuario->celular}}</td>
        </tr>
    </table>
    <a href="{{ route('plano.edit', ['id' => $plano->id]) }}" class="btn btn-primary">Editar</a>
    <a href="{{ route('plano.index') }}" class="btn btn-secondary">Cancelar</a>
@endsection
