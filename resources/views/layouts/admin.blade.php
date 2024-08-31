<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Projeto Laravel')</title>
    <!-- Inclua aqui os arquivos de estilo, como o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            color: #fff;
            padding: 15px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin: 15px 0;
            padding: 10px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Menu Lateral -->
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="#">Início</a>
        <a href="{{ route('plano.index') }}">Planos</a>
        <a href="#">Perfil</a>
        <a href="#">Configurações</a>
        <a href="#">Sair</a>
    </div>

    <!-- Conteúdo Principal -->
    <div class="content">
        @yield('conteudo')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
