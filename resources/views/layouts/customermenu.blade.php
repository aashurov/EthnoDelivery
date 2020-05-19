<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Ethno Delivery') }}</title>
    <!-- Scripts -->
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/price.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/status.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/tagsinput.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/selectt.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/customer.js') }}" defer></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css" rel="stylesheet">
    <link href="https://unpkg.com/multiple-select@1.5.2/dist/themes/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
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
            color: #3490dc;
        }

    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('customer')}}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('customer.parcel.addparcel')}}">Новая посылка</a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{route('customer.parcel.listofparcel', '0')}}">Все посылки</a>
                        </li> --}}

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Отправленные посылки <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('customer.parcel.listofsendedparcel', '0')}}">Все
                                    посылки</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('customer.parcel.listofsendedparcel', '1')}}">В
                                    обработке</a>
                                <a class="dropdown-item"
                                    href="{{route('customer.parcel.listofsendedparcel', '2')}}">Принят
                                    в городе
                                    отправителя</a>
                                <a class="dropdown-item"
                                    href="{{route('customer.parcel.listofsendedparcel', '3')}}">Отправлен в транзитный
                                    город</a>
                                <a class="dropdown-item"
                                    href="{{route('customer.parcel.listofsendedparcel', '4')}}">Отправлен в город
                                    получателя</a>
                                <a class="dropdown-item"
                                    href="{{route('customer.parcel.listofsendedparcel', '5')}}">Принят
                                    в городе
                                    получателя</a>
                                <a class="dropdown-item" href="{{route('customer.parcel.listofsendedparcel', '6')}}">На
                                    складе готов к выдаче</a>
                                <a class="dropdown-item" href="{{route('customer.parcel.listofsendedparcel', '7')}}">На
                                    доставке у курьера</a>
                                <a class="dropdown-item"
                                    href="{{route('customer.parcel.listofsendedparcel', '8')}}">Возвращен на склад
                                    доставки</a>
                                <a class="dropdown-item"
                                    href="{{route('customer.parcel.listofsendedparcel', '9')}}">Доставлен</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Прибывшие посылки <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"
                                    href="{{route('customer.parcel.listofwaitingparcel', '0')}}">Все
                                    посылки</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"
                                    href="{{route('customer.parcel.listofwaitingparcel', '4')}}">Отправлен в город
                                    получателя</a>
                                <a class="dropdown-item"
                                    href="{{route('customer.parcel.listofwaitingparcel', '5')}}">Принят в городе
                                    получателя</a>
                                <a class="dropdown-item" href="{{route('customer.parcel.listofwaitingparcel', '6')}}">На
                                    складе готов к выдаче</a>
                                <a class="dropdown-item" href="{{route('customer.parcel.listofwaitingparcel', '7')}}">На
                                    доставке у курьера</a>
                                <a class="dropdown-item"
                                    href="{{route('customer.parcel.listofwaitingparcel', '8')}}">Возвращен на склад
                                    доставки</a>
                                <a class="dropdown-item"
                                    href="{{route('customer.parcel.listofwaitingparcel', '9')}}">Доставлен</a>

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
                            <a href="#" class="nav-link dropdown" data-toggle="dropdown" role="button"
                                aria-expanded="false">
                                {{-- fa-2x --}}
                                <i class="fa fa-bell " aria-hidden="true"></i>
                                @if(auth()->user()->unreadNotifications->count()!=0)
                                <span class="badge badge-danger"
                                    style="position:relative; top:-15px; left:-15px; ">{{auth()->user()->unreadNotifications->count()}}</span>
                                @endif
                            </a>

                            @if(auth()->user()->unreadNotifications->count()!=0)
                            <ul class="dropdown-menu dropdown-menu-right" role="menu" style="width:330px">
                                @foreach (auth()->user()->unreadNotifications as $unreadNotification)
                                <li style="padding:10px; ">
                                    <a href="{{route('customer.parcel.viewparcelNotify', ['id'=>$unreadNotification->data['0']['id'], 'n_id'=> $unreadNotification->id] )}}"
                                        class="dropdown-item">
                                        <div class="row">
                                            <div class="col-md-2" style="position:relative;top:10px; left:-20px;">
                                                <img src="{{asset($unreadNotification->data['0']['parcelImage'])}}"
                                                    style="width:75px; padding:5px; background:#fff; border:1px solid #eee"
                                                    class="img-rounded">
                                            </div>

                                            <div class="col-md-10" style="position:relative;top:5px; left:20px;">
                                                Посылка
                                                <b
                                                    style="color:green; font-size:90%">{{substr($unreadNotification->data['0']['refNumber'], 0, 4) .str_repeat("*", (strlen($unreadNotification->data['0']['refNumber']) - 4)).substr($unreadNotification->data['0']['refNumber'],-4,4)}}</b>
                                                <br>
                                                <span>
                                                    @if($unreadNotification->data['0']['parcelCurrentStatus_id']==1)
                                                    <h6 class="badge badge-danger">
                                                        {{$unreadNotification->data['0']['parcelCurrentStatusName']}}
                                                    </h6>
                                                    @elseif($unreadNotification->data['0']['parcelCurrentStatus_id']==2)
                                                    <h6 class="badge badge-primary">
                                                        {{$unreadNotification->data['0']['parcelCurrentStatusName']}}
                                                    </h6>
                                                    @elseif($unreadNotification->data['0']['parcelCurrentStatus_id']==3)
                                                    <h6 class="badge badge-secondary">
                                                        {{$unreadNotification->data['0']['parcelCurrentStatusName']}}
                                                    </h6>
                                                    @elseif($unreadNotification->data['0']['parcelCurrentStatus_id']==4)
                                                    <h6 class="badge badge-warning">
                                                        {{$unreadNotification->data['0']['parcelCurrentStatusName']}}
                                                    </h6>
                                                    @elseif($unreadNotification->data['0']['parcelCurrentStatus_id']==5)
                                                    <h6 class="badge badge-info">
                                                        {{$unreadNotification->data['0']['parcelCurrentStatusName']}}
                                                    </h6>
                                                    @elseif($unreadNotification->data['0']['parcelCurrentStatus_id']==6)
                                                    <h6 class="badge badge-light">
                                                        {{$unreadNotification->data['0']['parcelCurrentStatusName']}}
                                                    </h6>
                                                    @elseif($unreadNotification->data['0']['parcelCurrentStatus_id']==7)
                                                    <h6 class="badge badge-secondary">
                                                        {{$unreadNotification->data['0']['parcelCurrentStatusName']}}
                                                    </h6>
                                                    @elseif($unreadNotification->data['0']['parcelCurrentStatus_id']==8)
                                                    <h6 class="badge badge-danger">
                                                        {{$unreadNotification->data['0']['parcelCurrentStatusName']}}
                                                    </h6>
                                                    @elseif($unreadNotification->data['0']['parcelCurrentStatus_id']==9)
                                                    <h6 class="badge badge-success">
                                                        {{$unreadNotification->data['0']['parcelCurrentStatusName']}}
                                                    </h6>
                                                    @endif
                                                </span>
                                                <br>
                                                <small style="color:#90949C; position:relative; top:-8px;">
                                                    {{date('d-M. Y г.', strtotime($unreadNotification->data['0']['parcelCurrentStatusUpdateDate']))}}

                                                </small>

                                            </div>

                                        </div>
                                    </a>

                                </li>

                                @endforeach
                                <li>
                                    <div class="dropdown-divider"></div> <a
                                        href="{{route('customer.parcel.markasread')}}" style="text-align: center"
                                        class="dropdown-item">Удалить все уведомления</a>

                                </li>
                            </ul>
                            @endif
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
                                <a class="dropdown-item" href="{{ route('customer.profile') }}">
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
        {{-- <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Тип регистрации</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <a href="{{route('customer.parcel.addspecialparcel')}}"
        class="btn btn-primary btn-block">Регистрировать посылку для существующего
        клиента</a>
    </div>
    </div>
    <div class="row">
        <div class="col"><br><a href="#" class="btn btn-success btn-block" data-toggle="modal"
                data-target="#exampleModalCenter1">Регистрировать посылку для нового клиента</a>
        </div>
    </div>

    </div>

    </div>
    </div>
    </div> --}}

    <main class="py-4">
        @yield('content')


    </main>
    </div>
</body>

</html>
