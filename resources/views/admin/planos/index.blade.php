@extends('layouts.admin')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Lista de Plano</h2>
        <a href="{{ route('plano.create') }}" class="btn btn-primary">Cadastrar</a>
    </div>
    <hr>

    @if (session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}
        </div>
    @endif


    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Do Plano</th>
                <th>Imagem</th>
                <th>Duração</th>
                <th>Preço</th>
                
            </tr>
        </thead>
        <tbody>

            @foreach ($planos as $plano)
                <tr>
                    <td>{{ $plano->id }}</td>
                    <td>{{ $plano->nome_plano }}</td>
                    <td>{{ $plano->imagem }}</td>
                    <td>{{ $plano->duracao}}</td>
                    <td>{{ $plano->preco }}</td>
                    <td>
                        <a href="{{ route('plano.show', ['id' => $plano->id]) }}" class="btn btn-primary">Visualizar</a>
                        <a href="{{ route('plano.edit', ['id' => $plano->id]) }}" class="btn btn-secondary">Editar</a>

                        <form action="{{ route('plano.destroy', ['id' => $plano->id]) }}" method="post"
                            style="display: inline-block">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Excluir</button>

                        </form>



                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
