@extends('layouts.directormenu')

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
                    <div class="row">
                        <div class="col text-center"><i class="fa fa-arrow-up"></i><a
                                href="{{route('director.parcel.listofsendedparcel', '0')}}" class="stretched-link"></a>
                            {{$all}}</div>
                        <div class="col text-center"><i class="fa fa-arrow-down"></i><a
                                href="{{route('director.parcel.listofwaitingparcel', '0')}}" class="stretched-link"></a>
                            {{$alll}}</div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">В обработке</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col text-center"><i class="fa fa-arrow-up"></i><a
                                href="{{route('director.parcel.listofsendedparcel', '1')}}" class="stretched-link"></a>
                            {{$a1}}</div>
                        {{-- <div class="col text-center"><i class="fa fa-arrow-down"></i><a
                                href="{{route('director.parcel.listofwaitingparcel', '1')}}"
                        class="stretched-link"></a>
                        {{$a11}}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">Принят в городе отправителя</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <div class="row">
                    <div class="col text-center"><i class="fa fa-arrow-up"></i><a
                            href="{{route('director.parcel.listofsendedparcel', '2')}}" class="stretched-link"></a>
                        {{$a2}}</div>
                    {{-- <div class="col text-center"><i class="fa fa-arrow-down"></i><a
                                href="{{route('director.parcel.listofwaitingparcel', '2')}}"
                    class="stretched-link"></a>
                    {{$a22}}
                </div> --}}
            </div>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card">
        <div class="card-header">Отправлен в транзитный город</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div class="row">
                <div class="col text-center"><i class="fa fa-arrow-up"></i><a
                        href="{{route('director.parcel.listofsendedparcel', '3')}}" class="stretched-link"></a>
                    {{$a3}}</div>
                {{-- <div class="col text-center"><i class="fa fa-arrow-down"></i><a
                                href="{{route('director.parcel.listofwaitingparcel', '3')}}"
                class="stretched-link"></a>
                {{$a33}}
            </div> --}}
        </div>

    </div>
</div>
</div>

</div>
<div class="row">
    <div class="col">
        <p class="text-white">Success.</p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">Отправлен в город получателя</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="row">
                    <div class="col text-center"><i class="fa fa-arrow-up"></i><a
                            href="{{route('director.parcel.listofsendedparcel', '4')}}" class="stretched-link"></a>
                        {{$a4}}</div>
                    <div class="col text-center"><i class="fa fa-arrow-down"></i><a
                            href="{{route('director.parcel.listofwaitingparcel', '4')}}" class="stretched-link"></a>
                        {{$a44}}</div>
                </div>

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
                <div class="row">
                    <div class="col text-center"><i class="fa fa-arrow-up"></i><a
                            href="{{route('director.parcel.listofsendedparcel', '5')}}" class="stretched-link"></a>
                        {{$a5}}</div>
                    <div class="col text-center"><i class="fa fa-arrow-down"></i><a
                            href="{{route('director.parcel.listofwaitingparcel', '5')}}" class="stretched-link"></a>
                        {{$a55}}</div>
                </div>

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
                <div class="row">
                    <div class="col text-center"><i class="fa fa-arrow-up"></i><a
                            href="{{route('director.parcel.listofsendedparcel', '6')}}" class="stretched-link"></a>
                        {{$a6}}</div>
                    <div class="col text-center"><i class="fa fa-arrow-down"></i><a
                            href="{{route('director.parcel.listofwaitingparcel', '6')}}" class="stretched-link"></a>
                        {{$a66}}</div>
                </div>

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
                <div class="row">
                    <div class="col text-center"><i class="fa fa-arrow-up"></i><a
                            href="{{route('director.parcel.listofsendedparcel', '7')}}" class="stretched-link"></a>
                        {{$a7}}</div>
                    <div class="col text-center"><i class="fa fa-arrow-down"></i><a
                            href="{{route('director.parcel.listofwaitingparcel', '7')}}" class="stretched-link"></a>
                        {{$a77}}</div>
                </div>

            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col">
        <p class="text-white">Success.</p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">Возвращен на склад доставки</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="row">
                    <div class="col text-center"><i class="fa fa-arrow-up"></i><a
                            href="{{route('director.parcel.listofsendedparcel', '8')}}" class="stretched-link"></a>
                        {{$a8}}</div>
                    <div class="col text-center"><i class="fa fa-arrow-down"></i><a
                            href="{{route('director.parcel.listofwaitingparcel', '8')}}" class="stretched-link"></a>
                        {{$a88}}</div>
                </div>

            </div>
        </div>

    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">Доставлен</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="row">
                    <div class="col text-center"><i class="fa fa-arrow-up"></i><a
                            href="{{route('director.parcel.listofsendedparcel', '9')}}" class="stretched-link"></a>
                        {{$a9}}</div>
                    <div class="col text-center"><i class="fa fa-arrow-down"></i><a
                            href="{{route('director.parcel.listofwaitingparcel', '9')}}" class="stretched-link"></a>
                        {{$a99}}</div>
                </div>

            </div>
        </div>
    </div>


</div>
{{-- </div> --}}
</div>
@endsection
