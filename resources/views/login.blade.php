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
            <i class="fa-solid fa-bars"></i>
        </div>

        <div id="logotipo">
            <a href= "/">
                <img src="img/logo.png" alt="" height="80">
            </a>
        </div>

        <div id="botaotopo">

            <a href="http://wa.me/5514999999999?text=olá tudo bem hre href=" whats.html>Whatsapp</a>
            <!--<a href="#secao1" href="index.html:matricula.html">Matricule-se</a>-->
        </div>

        <!-- href="formulario.html" -->
        </div>


    </header>

    <header id="cabecalho" class="container">

        <div id="botao-menu-mobile">
            <div id="botao-menu-mobile">
                <i class="fa-solid fa-bars"></i>
            </div>

            <div id="logotipo">
                <img src="img/logo.png" alt="" height="80">
            </div>

            <nav id="menu">

                <li><a href="index.html">INICIO</a></li>

                </ul>
            </nav>

            <div id="botaotopo">

                <a href="http://wa.me/5514999999999?text=olá tudo bem hre href=" whats.html>whatsapp</a>

            </div>

            <style>
                .email {

                    font-size: 25px;
                }
            </style>

    </header>


    <main class="texto">
        <div class="fundoplanoss">
            <h1>Login</h1>

            <form action="login.php" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required><br><br>

                <a href="#" class="esqueceu-senha">Esqueceu sua senha?</a>


                <br>

                <button type="button" class="btn btn-primary">Login</button>
                {{-- <img src="../img/fundoplanos3.jpg" alt=""> --}}
                {{-- <button type="#" id="botaoenviar" value= "Login"> Login</button> --}}

                <style>
                  
                    form {
                        width: 300px;
                        margin: 0 auto;
                        padding: 20px;
                        border: 1px solid #ccc;
                        border-radius: 10px;
                        background-color: #f0f0f0;
                        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                        font-family: Arial, sans-serif;
                    }

                    /* Estilo para os rótulos (labels) */
                    label {
                        display: block;
                        margin-bottom: 8px;
                        font-weight: bold;
                        color: #333;
                    }

                    /* Estilo para os campos de entrada (input) */
                    input[type="email"],
                    input[type="password"] {
                        width: 100%;
                        padding: 10px;
                        margin-bottom: 15px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        box-sizing: border-box;
                    }

                    /* Estilo para o botão de envio */
                    input[type="submit"] {
                        width: 100%;
                        padding: 10px;
                        background-color: #007bff;
                        border: none;
                        border-radius: 5px;
                        color: white;
                        font-weight: bold;
                        cursor: pointer;
                        transition: background-color 0.3s;
                    }

                    input[type="submit"]:hover {
                        background-color: #45a049;
                    }

                    /* Estilo para o espaçamento entre os campos */
                    br {
                        line-height: 1.5;
                    }

                    .esqueceu-senha {
                        display: block;
                        margin-bottom: 15px;
                        text-align: center;
                        font-size: 12px;
                        color: #007bff;
                        text-decoration: none;
                        transition: color 0.3s;
                    }

                    .esqueceu-senha:hover {
                        color: #0056b3;
                    }
                </style>


            </form>
        </div>
        </div>
    </main>



</body>

</html>
