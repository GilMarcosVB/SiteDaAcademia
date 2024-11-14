<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/main.css">
</head>

<body>


    <header id="cabecalho" class="container">

        <div id="botao-menu-mobile">
            <div id="botao-menu-mobile">
                <i class="fa-solid fa-bars"></i>
            </div>

            <div id="logotipo">
                <img src="img/logo.png" alt="" height="80">
            </div>

            <nav id="menu">
                <ul>

                    <li><a href="index.html">INICIO</a></li>

                </ul>
            </nav>

            <div id="botaotopo">

                <a href="http://wa.me/5514999999999?text=olá tudo bem hre href=" whats.html>whatsapp</a>

            </div>

            <div id="botao-menu-mobile">
                <div id="botao-menu-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <div id="logotipo">
                    <img src="img/logo.png" alt="" height="80">
                </div>

                <nav id="menu">
                    <ul>
                        <!-- <li><a href="javascript:;">Categorias</a></li>  -->
                        <li><a href="index.html">INICIO</a></li>
                        <!-- <li><a href="Contato.html:;">Contato</a></li> -->
                    </ul>
                </nav>
                <div id="botaotopo">

                    <a href="http://wa.me/5514999999999?text=olá tudo bem hre href=" whats.html>whatsapp</a>

                </div>


    </header>


    <main class="texto">


        <div class="fundoplanos">
            <h1>Cadastro de Usuário</h1>

            @if (session('sucesso'))
                <p style="color: green;">{{ session('sucesso') }}</p>
            @endif

            <div class="OrdemTamanho">
                <form action="{{ route('cadastro.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome:</label><br>
                        <input type="text" id="nome" name="nome" required
                            value="{{ old('nome') }}"><br><br>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail:</label><br>
                        <input type="email" id="email" name="email" required
                            value="{{ old('email') }}"><br><br>
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha:</label><br>
                        <input type="password" id="senha" name="senha" required><br><br>
                    </div>

                    <div class="form-group">
                        <label for="data">Data de Nascimento:</label><br>
                        <input type="date" id="data" name="data_nascimento" required
                            value="{{ old('data_nascimento') }}"><br><br>
                    </div>

                    <div class="form-group">
                        <label for="genero">Gênero:</label><br>
                        <select name="genero" id="genero" required>
                            <option value="Masculino" {{ old('genero') == 'Masculino' ? 'selected' : '' }}>Masculino
                            </option>
                            <option value="Feminino" {{ old('genero') == 'Feminino' ? 'selected' : '' }}>Feminino
                            </option>
                            <option value="Outros" {{ old('genero') == 'Outros' ? 'selected' : '' }}>Outros</option>
                            <option value="Prefiro não dizer"
                                {{ old('genero') == 'Prefiro não dizer' ? 'selected' : '' }}>Prefiro não dizer</option>
                        </select><br><br>
                    </div>

                    <button type="submit">Cadastrar</button>
                </form>
            </div>




            </header>
        </div>
        </div>
    </main>

</body>

</html>
