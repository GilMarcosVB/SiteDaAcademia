@extends('layouts.admin')
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Cadastrar Usuários</h2>
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


    <form action="{{ route('usuario.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome do usuário</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Seu Usuário"
                value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="E-mail"
                value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Senha...">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF"
                value="{{ old('cpf') }}">
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" name="celular" class="form-control" id="celular" placeholder="(00) 0000-0000"
                value="{{ old('celular') }}">
        </div>
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de nascimiento</label>
            <input type="date" name="data_nascimento" class="form-control" id="data_nascimento" placeholder="Preço"
                value="{{ old('data_nascimento') }}">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('usuario.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
