@extends('layouts.admin')
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Editar Categorias</h2>
    </div>
    <hr>
    @if ($errors->any())
        <div class="boxError alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('plano.update', ['id' => $plano->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome_plano" class="form-label">Nome</label>
            <input type="text" name="nome_plano" class="form-control" id="nome_plano" placeholder="Nome"
                value="{{ old('nome_plano', $plano->nome_plano) }}">
        </div>
        <div class="mb-3">
            <label for="duracao" class="form-label">Duração</label>
            <input type="text" name="duracao" class="form-control" id="duracao" placeholder="Duração"
                value="{{ old('duracao', $plano->duracao) }}">
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="text" name="preco" class="form-control" id="preco" placeholder="Preço"
                value="{{ old('preco', $plano->preco) }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('plano.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
