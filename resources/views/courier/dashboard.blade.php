@extends('layouts.couriermenu')

@section('content')
<div class="container">
        {{-- <div class="jumbotron jumbotron-fluid"> --}}
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"> Все посылки</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('courier.parcel.listofparcel', '0')}}" class="stretched-link"></a>

                    {{-- {{$all}} --}}
                    {{$count}}

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Мои посылки</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('courier.parcel.listofparcel', '1')}}" class="stretched-link"></a>
                    {{$a1}}
                </div>
            </div>
        </div>
        {{-- <div class="col-md-3">
            <div class="card">
                <div class="card-header">Получить посылку</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('manager.parcel.listofparcel', '2')}}" class="stretched-link"></a>
                    {{$a2}}
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-md-3">
            <div class="card">
                <div class="card-header">Доставить посылку</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('manager.parcel.listofparcel', '3')}}" class="stretched-link"></a>
                    {{$a3}}
                </div>
            </div>
        </div> --}}

    </div>
    <div class="row">
<div class="col"> <p class="text-white">Success.</p> </div>
    </div>

    {{-- <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Отправлен в город получателя</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('manager.parcel.listofparcel', '4')}}" class="stretched-link"></a>
                    {{$a4}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Принят в городе получателя</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('manager.parcel.listofparcel', '5')}}" class="stretched-link"></a>
                    {{$a5}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">На складе готов к выдаче</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('manager.parcel.listofparcel', '6')}}" class="stretched-link"></a>
                    {{$a6}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">На доставке у курьера</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('manager.parcel.listofparcel', '7')}}" class="stretched-link"></a>
                    {{$a7}}
                </div>
            </div>
        </div>

    </div>
    <div class="row">
            <div class="col"> <p class="text-white">Success.</p> </div>
                </div> --}}

                {{-- <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">Возвращен на склад доставки</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <a href="{{route('manager.parcel.listofparcel', '8')}}" class="stretched-link"></a>
                                {{$a8}}
                            </div>
                        </div>

                    </div> --}}
                    {{-- <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">Доставлен</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <a href="{{route('manager.parcel.listofparcel', '9')}}" class="stretched-link"></a>
                                 {{$a9}}
                            </div>
                        </div>
                    </div> --}}


                </div>
{{-- </div> --}}
</div>
@endsection
