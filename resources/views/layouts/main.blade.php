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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/greghub/green-audio-player/dist/css/green-audio-player.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="{{ url('assets/css/basic.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/mediaquery.min.css') }}">

    <title>Luzinha</title>
</head>

<body>
    <div class="barra"></div>
    <header>

        <div class="menu">
            <div class="container">
                <div class="sem-nome">
                    <div class="nao-sei">
                        <div class=" btn-menu">
                            <div class="">
                                <label class="menu-toggle"><img src="{{ url('assets/img/menu.svg') }}" alt=""></label>
                                <nav>
                                    @if (Auth::check())
                                        <span class="name">Olá, {{ Auth::user()->name }}</span>
                                    @endif
                                    <a class="nav-item" href="{{ url('/home') }}">Home</a>
                                    <a class="nav-item" href="{{ url('loja-home') }}">Loja Online</a>
                                    <a class="nav-item" href="{{ url('livros') }}">Livros</a>
                                    <a class="nav-item" href="{{ url('bebes') }}">Bebé</a>
                                    <a class="nav-item" href="{{ url('musicas') }}">Música</a>
                                    <a class="nav-item" href="{{ url('jogos') }}">Jogos</a>
                                    <a class="nav-item" href="{{ url('pais') }}">Pais</a>
                                    <a class="nav-item" href="{{ url('sobre') }}">Sobre autora</a>
                                    <a class="nav-item" href="{{ url('contatos') }}">Contactos</a>
                                </nav>
                            </div>
                        </div>
                        <div class="">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{{ url('assets/img/logo.svg') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class=" user">
                            <div class="">
                                <a href="{{ route('login') }}"><img src="{{ url('assets/img/user.svg') }}"
                                        alt=""></a>
                            </div>
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
                <div class="row justify-content-around">
                    <div class="col-4 ">
                        <a href="{{ url('videos') }}"><img src="{{ url('assets/img/camera.svg') }}" alt=""></a>
                    </div>
                    <div class="col-4">
                        {{-- <span class="bolinha ">
                            <a href="{{ url('/') }}"><img src="{{ url('assets/img/centro.svg') }}" alt=""></a> --}}
                        <span class="bolinha">
                            <a href="{{ url('/home') }}"><img src="{{ url('assets/img/centro.svg') }}" alt=""></a>
                        </span>
                    </div>
                    <div class="col-4 ">
                        <a href="{{ url('jogos') }}"> <img src="{{ url('assets/img/jogo.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="text/javascript" src="{{ url('assets/extras/modernizr.2.5.3.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/greghub/green-audio-player/dist/js/green-audio-player.min.js"></script>
    <script src="{{ url('/assets/lib/turn.js') }}"></script>
    <script src="{{ url('/assets/js/basic.js') }}"></script>
    <script src="{{ url('/assets/js/script.js') }}"></script>
    <script type="text/javascript">
        $('.your-class').slick({
            dots: false,
            arrows: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            responsive: [{
                breakpoint: 426,
                settings: {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                }
            }, ]
        });
        $('.your-class1').slick({
            dots: false,
            arrows: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 426,
                settings: {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                }
            }, ]
        });
    </script>
</body>

</html>
