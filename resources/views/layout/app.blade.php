<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CEAP-RH Gestão de Pessoas para Educação') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header class="fixed-top" id="inicio">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="https://ceap.com.br/img/logo_ceaprh.png" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                    aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/#inicio">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#apresentacao">Apresentação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#sistema_integrado">Sistema Integrado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#contato">Fale Conosco</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        CEAP-RH &bullet; Centro de Estudos Aplicados ao Profissional de Ensino
                        <br>
                        Av. Rep. Argentina, 2510 s/25 Curitiba/PR &bullet; (41) 3082-6679
                    </p>
                    <span>© 2022 - Todos os direitos reservados</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
