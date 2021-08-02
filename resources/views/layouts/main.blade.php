<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home.min.css') }}">

    <title>Luzinha</title>
</head>

<body>
    <header>
        <div class="barra"></div>
        <div class="menu">
            <div class="container">
                <div class="row  mx-auto">
                    <div class="col-2">
                        <label class="menu-toggle"><img src="{{ url('assets/img/menu.svg') }}" alt=""></label>
                        <nav><a class="nav-item" href="#home">Home</a><a class="nav-item" href="#about">About</a><a
                                class="nav-item" href="#work">Work</a><a class="nav-item" href="#contact">Contact</a>
                        </nav>

                    </div>
                    <div class="col-8">
                        <div class="logo">
                            <img src="{{ url('assets/img/logo.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="user">
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

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="{{ url('/assets/js/script.js') }}"></script>

</body>

</html>
