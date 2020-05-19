@extends('layouts.administratormenu')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Редактирование валюты</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!!Form::open(['route'=>['administrator.currency.updatecurrency', $listofcurrencys->id],'method'=>'put'])!!}
                    <div class="form-group">
                        <input type="text" class="form-control" name="currencyName" placeholder="Назавание валюты" value="{{$listofcurrencys->currencyName}}">
                        <br>
                        <input type="text" class="form-control" name="currencyCode" placeholder="Код валюты" value="{{$listofcurrencys->currencyCode}}">
                        <br>
                        <input type="text" class="form-control" name="currencyPrice" placeholder="Цена валюты" value="{{$listofcurrencys->currencyPrice}}">
                        <br>
                        <button class="btn btn-primary btn-block">Сохранить</button>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
