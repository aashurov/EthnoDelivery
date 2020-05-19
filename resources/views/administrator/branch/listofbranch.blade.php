@extends('layouts.administratormenu')

@section('content')
<div class="container-fluid">
    {{-- <div class="jumbotron jumbotron-fluid"> --}}
    <div class="row justify-content-center">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <div style="display: flex; justify-content: space-between; padding:0px;">
                        <h5 class="auto my-2">Все филиалы</h5>

                        <a href="{{route('administrator.branch.addbranch')}}" class="btn btn-primary"><i
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
                                <td>№</td>
                                <td>Название филиала</td>
                                <td>Контакты филиала</td>
                                <td>Email филиала</td>
                                <td>Адрес филиала</td>
                                <td>Город филиала</td>
                                <td>Страна филиала</td>
                                <td>Действие</td>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0;
                            @endphp
                            @foreach ($lisofbranches as $listofbranch)
                            @php
                            $i ++;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$listofbranch->branchName}}</td>
                                <td>{{$listofbranch->branchPhone}}</td>
                                <td>{{$listofbranch->branchEmail}}</td>
                                <td>{{$listofbranch->branchAddress}}</td>
                                <td>{{$listofbranch->branchCity}}</td>
                                <td>{{$listofbranch->branchCountry}}</td>
                                <td align="center">
                                    <a href="{{route('administrator.branch.editbranch', $listofbranch->id)}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    {!!Form::open(['route'=>['administrator.branch.deletebranch',
                                    $listofbranch->id],'method'=>'DELETE'])!!}
                                    <button
                                        onclick="return confirm('Вы действительно хотите удалить филиал {{$listofbranch->branchName}}')"><i
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
