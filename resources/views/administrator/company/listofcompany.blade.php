@extends('layouts.administratormenu')

@section('content')
<div class="container-fluid">
    {{-- <div class="jumbotron jumbotron-fluid"> --}}
    <div class="row justify-content-center">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <div style="display: flex; justify-content: space-between; padding:0px;">
                        {{-- <h4 class="vertical-center">Все компании</h4> --}}
                        <h5 class="auto my-2">Все компании</h5>

                        <a href="{{route('administrator.company.addcompany')}}" class="btn btn-primary"><i
                                class="fa fa-plus"></i></a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table id="my_table" class="table  table-sm table-striped table-hover" data-page-length='50'>
                        <thead style="background-color:#1c87c9; color:#fff; font-weight: bold; ">
                            <tr>
                                <td class="text-center">№</td>
                                <td class="text-center">Название компании</td>
                                <td class="text-center">Контакты компании</td>
                                <td class="text-center">Email компании</td>
                                <td class="text-center">Адрес компании</td>
                                <td class="text-center">Город компании</td>
                                <td class="text-center">Страна компании</td>
                                <td class="text-center">Баланс компании</td>

                                <td>Действие</td>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0;
                            @endphp
                            @foreach ($listofcompanyes as $listofcompany)
                            @php
                            $i ++;
                            @endphp
                            <tr>
                                <td class="text-center">{{$i}}</td>
                                <td class="text-center">{{$listofcompany->companyName}}</td>
                                <td class="text-center">{{$listofcompany->companyPhone}}</td>
                                <td class="text-center">{{$listofcompany->companyEmail}}</td>
                                <td class="text-center">{{$listofcompany->companyAddress}}</td>
                                <td class="text-center">{{$listofcompany->companyCity}}</td>
                                <td class="text-center">{{$listofcompany->companyCountry}}</td>
                                <td class="text-center">{{$listofcompany->companyBalance}} $</td>

                                <td class="text-center">
                                    <a href="{{route('administrator.company.editcompany', $listofcompany->id)}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    {!!Form::open(['route'=>['administrator.company.deletecompany',
                                    $listofcompany->id],'method'=>'DELETE'])!!}
                                    <button
                                        onclick="return confirm('Вы действительно хотите удалить компанию {{$listofcompany->companyName}}')"><i
                                            class="fa fa-trash"></i></button>
                                    {!!Form::close()!!}
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                </div>
            </div>
        </div>

    </div>
    {{-- </div> --}}
</div>
@endsection
