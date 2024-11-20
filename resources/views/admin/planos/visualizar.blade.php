@extends('layouts.admin')
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Visualizar Plano</h2>
    </div>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>{{ $usuario->name }}</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>{{ $usuario->nome_plano }}</td>
        </tr>
        <tr>
            <th>Imagem</th>
            <td>{{ $plano->imagem}}</td>
        </tr>
        <tr>
            <th>Duração</th>
            <td>{{ $plano->duracao }}</td>
        </tr>
        <tr>
            <th>Preço</th>
            <td>{{ $plano->preco }}</td>
        </tr>
    </table>
    <a href="{{ route('plano.edit', ['id' => $plano->id]) }}" class="btn btn-primary">Editar</a>
    <a href="{{ route('plano.index') }}" class="btn btn-secondary">Cancelar</a>
@endsection
