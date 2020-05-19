@extends('layouts.administratormenu')

@section('content')
<div class="container">
    {{-- <div class="jumbotron jumbotron-fluid"> --}}
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавить новую компанию</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {!!Form::open(['route'=>['administrator.company.savecompany', 'method'=>'POST']])!!}
                    {{-- {{ csrf_field() }} --}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="companyName" placeholder="Назавание компании"
                            required autocomplete="companyName" autofocus>
                        <br>
                        <input type="text" class="form-control" name="companyPhone" placeholder="Контакты компании"
                            required autocomplete="companyPhone" autofocus>
                        <br>
                        <input type="text" class="form-control" name="companyEmail" placeholder="Email компании"
                            required autocomplete="companyEmail" autofocus>
                        <br>
                        <select class="form-control" id="country" name="companyCountry"></select>
                        <br>
                        <select class="form-control" name="companyCity" id="state"></select>
                        <br>
                        {{-- <input type="text" class="form-control" name="companyCountry" placeholder="Страна компании" --}}
                        {{-- required autocomplete="companyCountry" autofocus> --}}
                        {{-- <br> --}}
                        {{-- <input type="text" class="form-control" name="companyCity" placeholder="Город компании" required
                            autocomplete="companyCity" autofocus> --}}
                        {{-- <br> --}}
                        <input type="text" class="form-control" name="companyAddress" placeholder="Адрес компании"
                            required autocomplete="companyAddress" autofocus>
                        <br>
                        <input type="text" class="form-control" name="companyBalance" placeholder="Баланс компании"
                            required autocomplete="companyBalance" autofocus>
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
