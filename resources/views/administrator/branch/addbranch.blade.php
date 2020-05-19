@extends('layouts.administratormenu')

@section('content')
<div class="container">

        {{-- <div class="jumbotron jumbotron-fluid"> --}}
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавить новый филиал</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif
                    {{-- @if (count($errors)>0)
                    <div class="alert alert-danger text-left">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                    {!!Form::open(['route'=>['administrator.branch.savebranch', 'method'=>'POST']])!!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" name="branchName" placeholder="Назавание филиала" required autocomplete="branchName" autofocus>
                        <br>
                        <input type="text" class="form-control" name="branchPhone" placeholder="Контакты филиала" required autocomplete="branchPhone" autofocus>
                        <br>
                        <input type="text" class="form-control" name="branchEmail" placeholder="Email адрес" required autocomplete="branchEmail" autofocus>
                        <br>
                        <input type="text" class="form-control" name="branchAddress" placeholder="Адрес филиала" required autocomplete="branchAddress" autofocus>
                        <br>
                        <input type="text" class="form-control" name="branchCity" placeholder="Город филиала" required autocomplete="branchCity" autofocus>
                        <br>
                        <input type="text" class="form-control" name="branchCountry" placeholder="Страна филиала" required autocomplete="branchCountry" autofocus>
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
