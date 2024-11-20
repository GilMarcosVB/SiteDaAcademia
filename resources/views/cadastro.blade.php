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
      

        <div class="fundoplanos pb-4">
            <h1>Cadastro de Usuário</h1>

            @if (session('sucesso'))
                <p style="color: green;">{{ session('sucesso') }}</p>
            @endif

            <div class="OrdemTamanho d-flex justify-content-center">
                <form action="{{ route('usuario.store') }}" method="POST" enctype="multipart/form-data" class="w-50">
                    @csrf
                    <div class="mb-4">
                        {{-- <label for="name" class="form-label">Nome do usuário</label> --}}
                        <input type="text" name="name" class="form-control" id="name" placeholder="Seu Usuário"
                            value="{{ old('name') }}">
                    </div>
                    <div class="mb-4">
                        {{-- <label for="email" class="form-label">E-mail</label> --}}
                        <input type="text" name="email" class="form-control" id="email" placeholder="E-mail"
                            value="{{ old('email') }}">
                    </div>
                    <div class="mb-4">
                        {{-- <label for="password" class="form-label">Senha</label> --}}
                        <input type="password" name="password" class="form-control" id="password" placeholder="Senha...">
                    </div>
                    <div class="mb-4">
                        {{-- <label for="cpf" class="form-label">CPF</label> --}}
                        <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF"
                            value="{{ old('cpf') }}">
                    </div>
                    <div class="mb-4">
                        {{-- <label for="celular" class="form-label">Celular</label> --}}
                        <input type="text" name="celular" class="form-control" id="celular" placeholder="(00) 0000-0000"
                        onkeyup="phone(event)" value="{{ old('celular') }}">
                    </div>
                    <div class="mb-4">
                        {{-- <label for="data_nascimento" class="form-label">Data de nascimiento</label> --}}
                        <input type="date" name="data_nascimento" class="form-control" id="data_nascimento" placeholder="Preço"
                            value="{{ old('data_nascimento') }}">
                    </div>
            
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('usuario.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>




            </header>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            $('#cpf').on('input', function() {
                this.value = formatCpf(this.value);
            })
        });

        function formatCpf(v) {
            v = v.replace(/\D/g, ""); // Remove tudo que não é dígito
            v = v.replace(/(\d{3})(\d)/, "$1.$2"); // Coloca ponto entre o terceiro e o quarto dígitos
            v = v.replace(/(\d{3})(\d)/, "$1.$2"); // Coloca ponto entre o sexto e o sétimo dígitos
            v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); // Coloca hífen entre o nono e o décimo dígitos
            v = v.substring(0, 14); // Limita a 14 caracteres, também tem q limitar no campo input

            return v;
        }

        /* formatação da máscara do campo telefone com regex */

        const phone = (event) => {
            let input = event.target
            input.value = phoneMask(input.value)
        }

        const phoneMask = (value) => {
            // se o valor de 'value' for falso, retorne uma string vazia
            if (!value) return ""
            value = value.replace(/\D/g, '')
            value = value.replace(/(\d{2})(\d)/, "($1) $2")
            value = value.replace(/(\d)(\d{4})$/, "$1-$2")
            return value
        }
    </script>

</body>

</html>
