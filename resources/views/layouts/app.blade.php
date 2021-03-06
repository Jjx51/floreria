<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Floreria Euforia</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ route('inicio') }}">
                        Floreria Euforia
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        @auth
                            <!--Pestañas de usuario normal-->
                            <li class="hidden-sm"><a name="inicio" href="{{ route('inicio') }}">Inicio</a></li>

                            <li><a name="merma" href="{{ url('merma') }}">Merma</a></li>
                            <li><a name="Repartidor" href="{{ url('repartidor') }}">Repartidor</a></li>
                            <li><a href="{{ url('florista') }}">Florista</a></li>

                            <!--Pestañas de usuario administrador-->
                            @if(Auth::user()->rol=='admin')
                                <li><a name="Reportes" href="{{ route('reports.index') }}">Reportes</a></li>
                                <li><a name="Panel" href="{{ route('usuarios.index') }}"><div class="hidden-sm">Panel de usuarios</div><div class="visible-sm">Panel</div></a></li>
                                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" name="inventario" href="#">Panel de <span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url("/Categoryp") }}">Categorias</a>
                                        <a href="{{ url("/Product") }}">Productos</a>
                                        <a href="{{ url("/Array") }}">Arreglos</a>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Iniciar sesion</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')
</body>
</html>
