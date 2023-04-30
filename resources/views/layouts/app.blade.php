<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">

    @notify_css
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                     {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto h5">
                        <li class="nav-item">
                            <a href="{{route('agence.index')}}" class="nav-link">Agences</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('cite.index')}}" class="nav-link">Cites</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('terrain.index')}}" class="nav-link">Terrains</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('client.index')}}" class="nav-link">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('logement.index')}}" class="nav-link">Logements</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('acheter.index')}}" class="nav-link">Achats</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        </nav>

        <main class="py-4 container">
            @yield('content')
        </main>


        <footer class="footer text-center">
            <footer class="footer text-center px-auto">
                <p>App made by <a href="">MariusDev10</a> with
                        <a href="http://www.facebook.com/ernestorabutin"> Rabutin</a></p>
            </footer>
        </footer>
    </div>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/dataTables.min.js')}}"></script>
<script>
    let table = new DataTable('#dataTable');
</script>
</body>
@notify_js
@notify_render
</html>
