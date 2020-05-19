@extends('layouts.administratormenu')

@section('content')
<div class="container">
        {{-- <div class="jumbotron jumbotron-fluid"> --}}
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Редактирование тарифного плана</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!!Form::open(['route'=>['administrator.plan.updateplan', $listofplans->id],'method'=>'put'])!!}

                    <div class="form-group">
                        <input type="text" class="form-control" name="parcelPlanName" placeholder="Назавание тарифного плана" value="{{$listofplans->parcelPlanName}}">
                        <br>
                        <input type="text" class="form-control" name="parcelPlanPrice" placeholder="Цена тарифного плана" value="{{$listofplans->parcelPlanPrice}}">
                        <br>
                        <input type="text" class="form-control" name="parcelPlanDate" placeholder="Срок перевозки" value="{{$listofplans->parcelPlanDate}}">
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
