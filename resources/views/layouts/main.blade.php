<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home.min.css') }}">

    <title>Luzinha</title>
</head>

<body>
    <div class="barra"></div>
    <header>

        <div class="menu">
            <div class="">
                <div style="text-align: -webkit-center;" class="d-flex  mx-auto">
                    <div class="col-2 btn-menu">
                        <div class="">
                            <label class="menu-toggle"><img src="{{ url('assets/img/menu.svg') }}" alt=""></label>
                            <nav>
                                <a class="nav-item" href="#home">Loja Online</a>
                                <a class="nav-item" href="#about">Livros</a>
                                <a class="nav-item" href="#work">Bebé</a>
                                <a class="nav-item" href="#contact">Música</a>
                                <a class="nav-item" href="#contact">Jogos</a>
                                <a class="nav-item" href="#contact">Pais</a>
                                <a class="nav-item" href="#contact">Sobre autora</a>
                                <a class="nav-item" href="#contact">Contactos</a>
                            </nav>
                        </div>

                    </div>
                    <div class="col-8">
                        <div class="logo">
                            <img src="{{ url('assets/img/logo.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-2 user">
                        <div class="">
                            <img src="{{ url('assets/img/user.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row justify-content-lg-around">
                    <div class="col-4">
                        <img src="{{ url('assets/img/camera.svg') }}" alt="">
                    </div>
                    <div class="col-4">
                        <span class="bolinha">
                            <img src="{{ url('assets/img/centro.svg') }}" alt="">
                        </span>
                    </div>
                    <div class="col-4">
                        <img src="{{ url('assets/img/jogo.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="{{ url('/assets/js/script.js') }}"></script>

</body>

</html>
