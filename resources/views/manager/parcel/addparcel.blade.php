@extends('layouts.managermenu')

@section('content')
{!!Form::open(['route'=>['manager.parcel.savenewparcel'], 'enctype' => 'multipart/form-data', 'method'=>'POST',
'files'=> true])!!}
@csrf
{{csrf_field()}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Об отправителе</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox1" name="checkBoxOldSender"
                                onchange="oldSender();">
                            <label class="form-check-label" for="checkbox1">Отправитель из списка</label>
                        </div>

                    </div>
                    <div class="form-group" id="dvPinNo1" style="display: none">
                        <select class="form-control" name="senderUser_id">
                            <option value="">Выберите отправителя</option>
                            @foreach($senderUsers as $senderUser)
                            <option value="{{$senderUser->id}}">
                                {{$senderUser->companyName }} || {{$senderUser->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" id="dvPinNo2" style="display: unset">
                        {{ Form::text('senderCompanyName', null, ['class' => 'form-control', 'placeholder'=>'Компания отправителя']) }}<br>
                        {{ Form::text('senderUserName', null, ['class' => 'form-control',     'placeholder'=>'ФИО отправителя']) }}<br>
                        {{ Form::text('senderUserPhone', null, ['class' => 'form-control',    'placeholder'=>'Контакты отправителя']) }}<br>
                        {{ Form::text('senderUserAdress', null, ['class' => 'form-control',  'placeholder' => 'Адрес отправителя']) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">О получателе</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox2" name="checkBoxOldRecipient"
                                onchange="oldRecipient();">
                            <label class="form-check-label" for="checkbox2">Получатель из списка</label>
                        </div>


                    </div>
                    <div class="form-group" id="dvPinNo3" style="display: none">
                        <select class="form-control" name="recipientUser_id">
                            <option value="">Выберите получателя</option>
                            @foreach($recipientUsers as $recipientUser)
                            <option value="{{$recipientUser->id}}">
                                {{$recipientUser->companyName }} || {{$recipientUser->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" id="dvPinNo4" style="display: unset">

                        <div class="row">
                            <div class="col">{!! Form::select('recipientUserBranch_id',
                                $branches, null, ['class' =>
                                'form-control']) !!}</div>
                            <div class="col">
                                {{ Form::text('recipientCompanyName', null, ['class' => 'form-control',  'placeholder'=>'Компания получателя']) }}
                            </div>
                        </div>
                        <br>
                        {{ Form::text('recipientUserName', null, ['class' => 'form-control','placeholder'=>'ФИО получателя' ]) }}<br>
                        {{ Form::text('recipientUserPhone', null, ['class' => 'form-control','placeholder'=>'Контакты получателя']) }}<br>
                        {{ Form::text('recipientUserAdress', null, ['class' => 'form-control','placeholder'=>'Адрес получателя']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <p class="text-white">Success.</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">О посылке
                    <small class="float-sm-right"><a id="myLink" href="#" onclick="MyFunction1();return false;"><i
                                class="fa fa-refresh"></i></a></small></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                {{ Form::text('parcelDescription', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Название посылки']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <br>{{ Form::text('parcelWeight', null, ['class' => 'form-control', 'placeholder' => 'Вес (кг)', 'required' => 'required', 'id'=>'parcelWeight',  'onkeyup'=>'sum();']) }}
                            </div>
                            <div class="col">
                                <br>{{ Form::text('parcelLength', null, ['class' => 'form-control', 'placeholder' => 'Длина (см)', 'required' => 'required', 'id'=>'parcelLength',  'onkeyup'=>'sum();']) }}
                            </div>
                            <div class="col">
                                <br>{{ Form::text('parcelWidth',  null, ['class' => 'form-control', 'placeholder' => 'Ширина (см)', 'required' => 'required', 'id'=>'parcelWidth',  'onkeyup'=>'sum();']) }}
                            </div>
                            <div class="col">
                                <br>{{ Form::text('parcelHeight', null, ['class' => 'form-control', 'placeholder' => 'Высота (см)', 'required' => 'required', 'id'=>'parcelHeight',  'onkeyup'=>'sum();']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><br> {!! Form::file('parcelImage',['class'=>'form-control-file']) !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">О платеже

                    <small class="float-sm-right"><a id="myLink" href="#" onclick="MyFunction(this);return false;"><i
                                class="fa fa-refresh"></i></a></small></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group">

                        <div class="row">
                            <div class="col-auto my-1" style="width: 33%;">
                                <div class="form-check">
                                    <input class="form-check-input" name="parcelCourierService" type="checkbox"
                                        id="autoSizingCheck3" onchange="sum(this)">
                                    <label class="form-check-label" for="autoSizingCheck3">Вызов курьера</label>
                                </div>
                            </div>
                            <div class="col-auto my-1" style="width: 25%;">
                                <div class="form-check">
                                    <input class="form-check-input" name="parcelDeliveryType_id" type="checkbox"
                                        id="autoSizingCheck4" onchange="sum()">
                                    <label class="form-check-label" for="autoSizingCheck4">До двери</label>
                                </div>
                            </div>
                            <div class="col-auto my-1" style="width: 42%;">
                                <div class="form-check txt">
                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck1"
                                        name="parcelPayer_id" checked="true">
                                    <label class="form-check-label" for="autoSizingCheck1">Платить отправитель </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-auto my-1" style="width: 80%;">{!! Form::select('parcelPlan_id',
                                $parcelPlanName, null, ['class' => 'form-control',
                                'id'=>'parcelPlan', 'required' => 'required', 'onclick'=>'sum();']) !!}</div>


                            <div class="col-auto my-1" style="width: 20%;">
                                {{ Form::text('parcelDiscount', null, ['class' => 'form-control', 'data-toggle'=>'tooltip', 'title'=>'Скидна в процентах','placeholder'=>'...%', 'onkeyup'=>'sum();', 'id'=>'parcelDiscount']) }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <br>{{ Form::text('parcelPriceUS', null, ['class' => 'form-control', 'data-toggle'=>'tooltip', 'title'=>'Цена перевозки в валюте','placeholder'=>'Валюта', 'id'=>'parcelPriceUS', 'onkeyup'=>'priceCustomUS();']) }}
                            </div>
                            <div class="col">
                                <br>{{ Form::text('parcelPriceRU', null, ['class' => 'form-control', 'data-toggle'=>'tooltip', 'title'=>'Цена перевозки в рублях','placeholder'=>'Рубль', 'id'=>'parcelPriceRU', 'onkeyup'=>'priceCustomRU();']) }}
                            </div>
                            <div class="col">
                                <br>{{ Form::text('parcelPriceUZS', null, ['class' => 'form-control', 'data-toggle'=>'tooltip', 'title'=>'Цена перевозки в сумах','placeholder'=>'Сум', 'id'=>'parcelPriceUZS', 'onkeyup'=>'priceCustomUZS();']) }}
                            </div>


                        </div>
                        <div class="row" id="timediv" style="display:none;">
                            <div class="col" style="width: 100%;">
                                <label id="currentTime"></label>
                                <label id="currentTime2"></label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>{!! Form::submit('Сохранить', ['class'=>'btn btn-primary btn-block']) !!}
</div>
{!!Form::close()!!}
@endsection
