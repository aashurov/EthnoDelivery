@extends('layouts.administratormenu')

@section('content')
<div class="container">
        {{-- <div class="jumbotron jumbotron-fluid"> --}}
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавить тарифный план</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!!Form::open(['route'=>['administrator.plan.saveplan', 'method'=>'POST']])!!}
                    {{-- {{ csrf_field() }} --}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="parcelPlanName" placeholder="Назавание тарифного плана" required autocomplete="parcelPlanName" autofocus>
                        <br>
                        <input type="text" class="form-control" name="parcelPlanPrice" placeholder="Цена тарифного плана" required autocomplete="parcelPlanPrice" autofocus>
                        <br>
                        <input type="text" class="form-control" name="parcelPlanDate" placeholder="Срок перевозки" required autocomplete="parcelPlanDate" autofocus>
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
