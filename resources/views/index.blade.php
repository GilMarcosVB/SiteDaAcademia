<!DOCTYPE html>
<html lang="pt-BR ">

<head>
    <meta charset="utf-8" />
    <title>Academia BRASIL MARILIA SP</title>
    <meta name="descripition" content="Academia BRASIL marilia SP Zona sul." />
    <meta name="Keywords" content="Academia de bairro" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>



    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <header id="cabecalho" class="container">
        <div id="botao-menu-mobile">
            <i class="fa-solid fa-bars"></i>
        </div>

        <div id="logotipo">
            <img src="img/logo.png" alt="" height="80" />
        </div>

        <nav id="menu">
            <ul>
                <li><a href={{ asset('sobre-nos') }}>Sobre nós</a></li>
                <li><a href={{ asset('#secao2') }}>Localização</a></li>
                <li><a href={{ asset('#secao3') }}>Fotos</a></li>
                <!--<li><a href="#secao4">Sobre nós</a></li> -->
            </ul>
        </nav>

        <div id="botaotopo">
            <a href="login">Login</a>
            <!-- <a href="http://wa.me/5514999999999?text=olá tudo bem hre href=" whats.html>Whatsapp</a> -->
            <a href="cadastro" href="matricula.html">Cadastre-se</a>
            <!-- href="formulario.html" -->
        </div>
    </header>

    <div id="banner"></div>

    <main id="main">
        <div class="backbgcinza">
            <section id="mensagem" class="container">
                <div class="texto">
                    <div>
                        <h2>BEM-VINDO A ACADEMIA BRASiL</h2>
                    </div>
                    <div>
                        <p>
                            Bem-vindo à nossa academia inovadora, onde a excelência no
                            condicionamento físico encontra o design contemporâneo. Ao
                            entrar, você será recebido por um ambiente moderno e inspirador,
                            projetado para elevar a sua experiência de treino a um novo
                            patamar.
                        </p>
                    </div>
                    <div>
                        <p>
                            Descubra o prazer do treino em um ambiente acolhedor e
                            motivador.Não é apenas sobre levantar pesos; é sobre elevar-se a
                            novos patamares de autoconfiança, saúde e bem-estar.
                        </p>
                    </div>
                </div>
                <div class="imagebase">
                    <div class="img1">
                        <img src="./img/acdm1.png" alt="#" width="470" />
                    </div>

                    <div class="blocoimagem">
                        <img src="./img/acdm2.png" alt="#" width="150" />
                        <img src="./img/acdm3.png" alt="#" width="150" />
                        <img src="./img/imgacademia4.PNG" alt="#" width="150" />
                    </div>
                </div>
            </section>
        </div>

        <div class="backbgcinza">
            <section id="secao-categoria" class="container">
                <div id="secao3" class="lista-card-categorias owl-carousel owl-theme">
                    <div class="item">
                        <img src="img/imgacademia1.png" alt="#" />
                    </div>
                    <div class="item">
                        <img src="img/imgacademia.png" alt="#" />
                    </div>
                    <div class="item">
                        <img src="img/imgacademia2.png" alt="#" />
                    </div>
                    <div class="item">
                        <img src="img/imgacademia3.png" alt="#" />
                    </div>
                </div>
            </section>
        </div>


        <div class="blackgcinza">
            <section id="secao-categoria2" class="container">
                <h1 class="text-center"><i class="bi bi-clock"></i>Horário de Funcionamento<i class="bi bi-clock"></i></h1>
                <h2 class="text-center">Seg a Sex
                    <br>
                    5h - 0h
                    <br>
                    Sáb
                    <br>
                    8h - 16h
                    <br>
                    Dom/Feriados
                    <br>
                    8h - 14h
                </h2>
                {{-- <img class="logohorario" src="../img/fundohorario.jpg"> --}}
                <style>
                    #secao-categoria2 {

                        width: 1100px;
                        height: 300px;
                        background-image: url('../img/fundohorario.jpg');
                        border-radius: 30px;
                        background-repeat: no-repeat;
                        /* Impede a repetição da imagem */
                        background-position: center;
                        /* Centraliza a imagem */
                    }
                </style>
            </section>
        </div>


        <div id="mapalocalizacao" class="container mapalocalizacao.html">
            <div class="h3">
                <h3 id="secao2">Estamos localizados no endereço</h3>
            </div>

            <div class="mapa">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2291.072594404045!2d-49.926737760359224!3d-22.253670763735375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfda17efe46d27%3A0x24e49387ff67eae7!2sR.%20Angelina%20Balco%20da%20Silva%2C%20418%20-%20Nucleo%20Hab.%20Nova%20Marilia%2C%20Mar%C3%ADlia%20-%20SP%2C%2017522-580!5e1!3m2!1spt-BR!2sbr!4v1701209761245!5m2!1spt-BR!2sbr"
                    width="800" height="400" style="border: 5px" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="p">
                <p>Proximo ao Parque do Povo</p>
            </div>
        </div>

        <div class="backbgcinza">
            <section id="secaoServicos" class="container">
                <div class="secao-titulo">
                    <div class="titulo">
                        <h2 id="secao1">Nossos Planos</h2>
                    </div>
                </div>

                <div class="lista-card-servicos">
                    <!--PLANO SEMANAL-->
                    <div class="card-servicos">
                        <div class="card-foto">
                            <img src="img/planosemanal.png" alt="Plano Semanal" />
                            <div class="card-foto-legenda">
                                <div class="card-foto-preco">R$ 30,00</div>
                                <div id="botaoplano" class="card-foto-categoria">
                                    <a href="{{ route('semanal') }}">SEMANAL</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-descricao"></div>
                    </div>
                    <!--PLANO SEMANAL-->

                    <!--PLANO MENSAL-->

                    <div class="card-servicos">
                        <div class="card-foto">
                            <img src="img/planomensal.jpg" alt="Plano Mensal" />

                            <div class="card-foto-legenda">
                                <div class="card-foto-preco">R$ 60,00</div>
                                <div id="botaoplano" class="card-foto-categoria">
                                    <a href={{ asset('formulariomatricula2.html') }} href="#">MENSAL</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-descricao"></div>
                    </div>
                    <!--PLAMNO MENSAL-->

                    <!--PLANO ANUAL-->
                    <div class="card-servicos">
                        <div class="card-foto">
                            <img src="img/planoanual.jpg" alt="Plano Anual" />
                            <div class="card-foto-legenda">
                                <div class="card-foto-preco">R$ 300,00</div>
                                <div id="botaoplano" class="card-foto-categoria">
                                    <a href={{ asset('formulariomatricula3.html') }}>ANUAL</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-descricao"></div>
                    </div>
                    <!--PLANO ANUAL-->
                </div>
            </section>
        </div>
    </main>

    <footer id="rodape">
        <div class="backbgcinza2">
            <div class="" id="linha-rodape">
                <div class="coluna-rodape">
                    <h2>Mais</h2>

                    <ul>
                        <li><a href='sobre-nos' href="#">Sobre nós</a></li>
                        <li><a href="#">Politica de Privacidade</a></li>
                    </ul>
                </div>

                <div class="coluna-rodape">
                    <h2>Contatos</h2>

                    <ul>
                        <li>
                            <a href="http://wa.me/5514999999999?text=olá tudo bem"><i
                                    class="fa-brands fa-whatsapp"></i>(14) 99999-9999</a>
                        </li>
                    </ul>
                </div>

                <div class="rede-social">
                    <a href="https://facebook.com" target="_blank">
                        <i class="fa-brands fa-facebook"></i>
                    </a>

                    <a href="https://instagram.com">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="copyright">
                <p>
                    &copy; 2023 - todos os direitos são reservados | Desenvolvido por
                    | Leleo | Gil .
                </p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
