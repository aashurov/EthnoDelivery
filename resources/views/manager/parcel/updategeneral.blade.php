@extends('layouts.managermenu')

@section('content')
{!!Form::open(['route'=>['manager.parcel.updatestatussave', $id], 'enctype' => 'multipart/form-data', 'method'=>'PUT',
'files' => true])!!}
@csrf
{{csrf_field()}}
<div class="container">


    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Изменить статус посылки</div>


                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (session('danger'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('danger') }}
                    </div>
                    @endif

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                @if($id->senderUserBranch_id == $senderUserBranch_id)
                                {!! Form::select('id1', $status1, null, ['class' => 'form-control']) !!}</div>
                            @else
                            {!! Form::select('id1', $status2, null, ['class' => 'form-control','id'=>'ddColor',
                            'onchange'=>'fun_showtextbox()']) !!}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-group" id="dvPinNo5" style="display: none">
                    <br>{!! Form::select('id2', $courier, null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group" id="dvPinNo6" style="display: none">
                    <br>{!! Form::file('parcelInvoiceImage',['class'=>'form-control-file']) !!}
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col"><br>{!! Form::submit('Сохранить', ['class'=>'btn btn-primary btn-block']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{!!Form::close()!!}
@endsection
