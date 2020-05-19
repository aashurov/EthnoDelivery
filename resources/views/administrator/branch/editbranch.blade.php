@extends('layouts.administratormenu')

@section('content')
<div class="container">
        {{-- <div class="jumbotron jumbotron-fluid"> --}}
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Редактирование филиала</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!!Form::open(['route'=>['administrator.branch.updatebranch', $lisofbranches->id],'method'=>'put'])!!}

                    <div class="form-group">
                        <input type="text" class="form-control" name="branchName" placeholder="Назавание филиала" value="{{$lisofbranches->branchName}}">
                        <br>
                        <input type="text" class="form-control" name="branchPhone" placeholder="Контакты филиала" value="{{$lisofbranches->branchPhone}}">
                        <br>
                        <input type="text" class="form-control" name="branchEmail" placeholder="Email адрес" value="{{$lisofbranches->branchEmail}}">
                        <br>
                        <input type="text" class="form-control" name="branchAddress" placeholder="Адрес филиала" value="{{$lisofbranches->branchAddress}}">
                        <br>
                        <input type="text" class="form-control" name="branchCity" placeholder="Город филиала" value="{{$lisofbranches->branchCity}}">
                        <br>
                        <input type="text" class="form-control" name="branchCountry" placeholder="Страна филиала" value="{{$lisofbranches->branchCountry}}">
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
