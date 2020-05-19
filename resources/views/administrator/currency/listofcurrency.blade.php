@extends('layouts.administratormenu')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <div style="display: flex; justify-content: space-between; padding:0px;">
                        {{-- <h4 class="vertical-center">Все валюты</h4> --}}
                        <h5 class="auto my-2">Все валюты</h5>

                        <a href="{{route('administrator.currency.addcurrency')}}" class="btn btn-primary"><i
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
                                <td class="text-center">Название валюты</td>
                                <td class="text-center">Код валюты</td>
                                <td class="text-center">Цена валюты</td>
                                <td class="text-center">Действие</td>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0;
                            @endphp
                            @foreach ($listofcurrencys as $listofcurrency)
                            @php
                            $i ++;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$listofcurrency->currencyName}}</td>
                                <td>{{$listofcurrency->currencyCode}}</td>
                                <td>{{$listofcurrency->currencyPrice}}</td>
                                <td align="center">
                                    <a href="{{route('administrator.currency.editcurrency', $listofcurrency->id)}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    {!!Form::open(['route'=>['administrator.currency.deletecurrency',
                                    $listofcurrency->id],'method'=>'DELETE'])!!}
                                    <button
                                        onclick="return confirm('Вы действительно хотите удалить валюту {{$listofcurrency->currencyName}}')"><i
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
</div>
@endsection
