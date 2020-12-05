<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Healthy Life') }}</title>

    <link rel="icon" href="{{asset('/img/favicon/favicon.png')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/extraStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/forms.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">

        <header>
            <nav>
                    <ul class="navbar navbar-expand-md bg-darkorange p-0">
                        
                        <!--<li  class="nav-item col-0 pr-0 pl-2 btn" id="lesp">
                            <a  class="nav-link col-0 pr-0" href="#"><img class='size-icon' id="ilogo" src="{{asset('/img/idioma/spain.png')}}" /></a>
                        </li>
                        <li  class="nav-item col-0 pl-0 btn" id="ling">
                            <a  class="nav-link" href="#"><img id="ilogo" class='size-icon' src="{{asset('/img/idioma/united-kingdom.png')}}" /></a>
                        </li>-->
                        <div class='container d-flex justify-content-end mr-0'>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
                    
                                </ul>
                    
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link txt-style-healthy" href="{{ route('login') }}" style="width: 140px;">{{ __('Iniciar Sesión') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link txt-style-healthy" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>
                    
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('users.show',Auth::user()) }}">
                                                    {{ __('Mi perfil') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('users.edit',Auth::user()) }}">
                                                    {{ __('Configuración') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Cerrar Sesión') }}
                                                </a>
                    
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </ul>
            </nav>

        <div id="iCabecera" class='container-fluid text-center mt-5 mb-5'>
            <a href="/" class="text-decoration-none">
                <img id="logo" class='size-logo mr-4' src="{{asset('/img/logo/favicon.png')}}"/>
                <img id="tbanner" class='size-big mt-5' src="{{asset('/img/banner/titulo.png')}}"/>
            </a>
        </div>

    </header>
    {{-- Menu principal --}}
        @include('layouts.sections.nav')  

        <main>
            @include('layouts.sections.mensaje')
            @yield('content')
        </main>
    </div>

    <div id="irArriba" class='position-fixed float-right mr-3 mt-4' style="bottom: 8px;right: 16px;">
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>"><img src="{{asset('img/navegacion/arriba.png')}}"></a>
    </div> 
    {{-- Footer --}}
    <footer class='mt-5'>
        @include('layouts.sections.footer')
    </footer>
</body>
</html>
