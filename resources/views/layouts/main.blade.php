<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('titulo')</title>

        <link rel="stylesheet" href="/css/style.css">

        <link rel="shortcut icon" href="/icon/logo.ico" type="image/x-icon">

        <script src="/js/script.js"></script>

        {{--Fonte da aolicação -- font-family: 'Roboto Condensed', sans-serif; --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

        {{--Css BootStrap--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body>
            <header>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbar">
                        <a href="/"><img id="logo" src="/img/logo.jpg" alt=""></a>
                        <div class="lista"><ul class="navbar-nav">
                            <li class="navbar-item">
                                <a href="/cookies/fazer-pedido" class="navbar-link">Fazer Pedidos</a>
                            </li>
                            <li class="navbar-item">
                                <a href="/pedidos" class="navbar-link">Lista de Pedidos</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </header>





        @yield('conteudo')
        <footer>
            <p>Matson Leite &copy; 2023</p>
        </footer>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
