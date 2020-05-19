@extends('layouts.couriermenu')

@section('content')
{!!Form::open(['route'=>['courier.parcel.updatedelivery', $id], 'enctype' => 'multipart/form-data', 'method'=>'PUT',
'files' => true])!!}
@csrf
{{csrf_field()}}
<div class="container">


    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Доставлен</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <div class="row">
                            <div class="col">{!! Form::file('parcelInvoiceImage',['class'=>'form-control-file']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><br>{!! Form::submit('Сохранить', ['class'=>'btn btn-primary btn-block'])
                                !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection
