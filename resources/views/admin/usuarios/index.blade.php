@extends('layouts.admin')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Lista de Usuários</h2>
        <a href="{{ route('usuario.create') }}" class="btn btn-primary">Cadastrar</a>
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
                <th>Nome</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Data Nascimento</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->celular}}</td>
                    <td>{{ $usuario->data_nascimento }}</td>
                    <td>
                        <a href="{{ route('usuario.show', ['id' => $usuario->id]) }}" class="btn btn-primary">Visualizar</a>
                        <a href="{{ route('usuario.edit', ['id' => $usuario->id]) }}" class="btn btn-secondary">Editar</a>

                        <form action="{{ route('usuario.destroy', ['id' => $usuario->id]) }}" method="post"
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
