<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ethno Delivery') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}" defer></script>
    {{-- <script type="text/javascript" src="{{ asset('js/select.js') }}" defer></script> --}}
    <script type="text/javascript" src="{{ asset('js/countries.js') }}"></script>
    {{-- <script src="{{ asset('js/countries.js') }}"></script> --}}

    {{-- <script type="text/javascript" src="{{ asset('js/datatablesCustom.js') }}" defer></script> --}}


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/datatablesCustom.js') }}" defer></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css" />

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        form {
            display: inline;
        }

        form button {
            background: transparent;
            padding: 0px;
            border: 0px;
        }

        form i {
            /* color: #3490dc; */
            color: red;
        }

    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Филиалы <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"
                                    href="{{route('administrator.branch.listofbranches')}}">Филиалы</a>
                                <a class="dropdown-item"
                                    href="{{route('administrator.currency.listofcurrency')}}">Валюта</a>
                                <a class="dropdown-item" href="{{route('administrator.plan.listofplan')}}">Тарифы</a>
                                <a class="dropdown-item"
                                    href="{{route('administrator.company.listofcompany')}}">Компании</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Пользователи <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('administrator.users.users', '0')}}">Все
                                    пользователи</a>
                                {{-- <a class="dropdown-item"                                    href="{{route('administrator.users.users')}}">Администраторы</a>
                                --}}
                                <a class="dropdown-item"
                                    href="{{route('administrator.users.users', '1')}}">Менеджеры</a>
                                <a class="dropdown-item" href="{{route('administrator.users.users', '2')}}">Курьеры</a>
                                <a class="dropdown-item"
                                    href="{{route('administrator.users.users', '3')}}">Директоры</a>
                                <a class="dropdown-item"
                                    href="{{route('administrator.users.users', '4')}}">Сотрудники</a>
                                <a class="dropdown-item" href="{{route('administrator.users.users', '5')}}">Клиенты</a>

                            </div>
                        </li>

                        @endguest
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
                        <li class="dropdown">
                            <a class="nav-link dropdown" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-bell"></i> <span class="caret"></span>
                                @if(auth()->user()->unreadNotifications->count()!=0)
                                <span
                                    class="badge badge-danger badge-pill">{{auth()->user()->unreadNotifications->count()}}</span>
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @foreach (auth()->user()->unreadNotifications as $unreadNotification)
                                <a class="dropdown-item" href="#">{{$unreadNotification->data['data']}}</a>
                                @endforeach

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Филиал:
                                {{\App\tblBranchModel::find(\App\tblUserConnectorModel::where('user_id', Auth::user()->id)->first()->branch_id)->branchName}}</a>
                        </li>
                        <li class="nav-item dropdown">
                        
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative; padding-left:50px;">
                                <img src="{{ Auth::user()->avatar }}" style="width:33px; height:32px; position:absolute; top:3px; left:10px; border-radius:50%">  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                {{ Auth::user()->name }} 
                                    </a>
                                    <hr >
                                <a class="dropdown-item" href="{{ route('administrator.profile') }}">
                                        {{ __('Profile') }}
                                    </a>
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
<script language="javascript">
    populateCountries("country",
        "state"
    );

</script>

</html>
