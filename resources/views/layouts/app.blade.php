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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @else
                            @if(Auth::user()->role != 0)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('allEmployees') }}">{{ __('messages.Employees') }}</a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('allPayrolls') }}">{{ __('messages.Payroll') }}</a>
                            </li>

                            @if(Auth::user()->role == 1 || Auth::user()->role == 2)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('allVehicles') }}">{{ __('messages.Vehicles') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('allDepots') }}">{{ __('messages.Depots') }}</a>
                                </li>
                            @endif

                            @if(Auth::user()->role == 1 || Auth::user()->role == 3)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('allDepartments') }}">{{ __('messages.Departments') }}</a>
                                </li>
                            @endif

                            @if(Auth::user()->role == 1 || Auth::user()->role == 2)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('allRoutes') }}">{{ __('messages.Routes') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('allStops') }}">{{ __('messages.Stations') }}</a>
                                </li>
                            @endif

                            @if(Auth::user()->role == 1)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('allUsers') }}">{{ __('messages.Users') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('allExtras') }}">{{ __('messages.Extras') }}</a>
                                </li>
                            @endif

                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li><a class="nav-link" href="/lang/lv">LV</a></li>
                        <li><a class="nav-link" href="/lang/en">EN</a></li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('messages.Dropdown_info') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('viewProfile') }}">{{ __('messages.Profile') }}</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
