@extends('layouts.administratormenu')

@section('content')
<div class="container">
        {{-- <div class="jumbotron jumbotron-fluid"> --}}
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Редактирование компании</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!!Form::open(['route'=>['administrator.company.updatecompany', $listofcompanyes->id],'method'=>'put'])!!}

                    <div class="form-group">
                        <input type="text" class="form-control" name="companyName" placeholder="Назавание филиала" value="{{$listofcompanyes->companyName}}">
                        <br>
                        <input type="text" class="form-control" name="companyPhone" placeholder="Контакты филиала" value="{{$listofcompanyes->companyPhone}}">
                        <br>
                        <input type="text" class="form-control" name="companyEmail" placeholder="Email адрес" value="{{$listofcompanyes->companyEmail}}">
                        <br>
                        <input type="text" class="form-control" name="companyAddress" placeholder="Адрес филиала" value="{{$listofcompanyes->companyAddress}}">
                        <br>
                        <input type="text" class="form-control" name="companyCity" placeholder="Город филиала" value="{{$listofcompanyes->companyCity}}">
                        <br>
                        <input type="text" class="form-control" name="companyCountry" placeholder="Страна филиала" value="{{$listofcompanyes->companyCountry}}">
                        <br>
                        <input type="text" class="form-control" name="companyBalance" placeholder="Баланс компании" value="{{$listofcompanyes->companyBalance}}">
                        <br>
                        <button class="btn btn-primary btn-block">Сохранить</button>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>

    </div>
</div>
{{-- </div> --}}
@endsection
