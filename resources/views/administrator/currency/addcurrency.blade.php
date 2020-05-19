@extends('layouts.administratormenu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавить новую валюту</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!!Form::open(['route'=>['administrator.currency.savecurrency', 'method'=>'POST']])!!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" name="currencyName" placeholder="Назавание валюты" required autocomplete="currencyName" autofocus>
                        <br>
                        <input type="text" class="form-control" name="currencyCode" placeholder="Код валюты" required autocomplete="currencyCode" autofocus>
                        <br>
                        <input type="text" class="form-control" name="currencyPrice" placeholder="Цена валюты" required autocomplete="currencyPrice" autofocus>
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
