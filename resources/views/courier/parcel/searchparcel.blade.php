@extends('layouts.couriermenu')

@section('content')
{!!Form::open(['route'=>['courier.parcel.findparcel'], 'enctype' => 'multipart/form-data', 'method'=>'POST', 'files' =>
true])!!}
@csrf
{{csrf_field()}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Поиск посылок</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div id="example3"></div>
                    <div class="form-group">
                        {{ Form::text('senderCompanyName', null, ['class' => 'form-control', 'data-role'=>'tagsinput', 'placeholder'=>'Номер посылки']) }}<br>
                    </div>
                    {!! Form::submit('Поиск', ['class'=>'btn btn-primary btn-block']) !!}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>

    </div>
</div>

<br>
<div class="container-fluid">
    <div class="row justify-content-center">
        @if($listofparcels)
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; padding:0px;">
                        <strong class="mr-auto">Результаты поиска</strong>
                        <div class="btn-group " role="group" aria-label="Basic example">
                            <div class="row">
                                <div class="col">
                                    {!!Form::open(['route'=>['courier.parcel.massupdateparcel'],'method'=>'POST'])!!}
                                    {!! Form::hidden('tags', json_encode($tags)) !!}
                                    @csrf
                                    {{csrf_field()}}
                                    <button
                                        onclick="return confirm('Вы действительно хотите принят все посылки для доставки')"><i
                                            class="fa fa-download"></i></button>
                                    {!!Form::close()!!}</div>
                                {{-- <div class="col">{!!Form::open(['route'=>['courier.parcel.massupdateparcell'],'method'=>'POST'])!!}
                                    {!! Form::hidden('tags', json_encode($tags)) !!}
                                    @csrf
                                    {{csrf_field()}}
                                <button
                                    onclick="return confirm('Вы действительно хотите принят все посылки в городе получателя')"><i
                                        class="fa fa-upload"></i></button>
                                {!!Form::close()!!}
                            </div>--}}
                        </div>



                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <table id="my_table" class="table  table-sm table-striped table-hover" data-page-length='50'>
                    <thead style="background-color:#1c87c9; color:#fff; font-weight: bold; ">
                        <tr>
                            <td class="text-center">№</td>
                            <td class="text-center">Фото</td>
                            <td class="text-center">Номер посылки</td>
                            <td class="text-center">Компания отправителя</td>
                            <td class="text-center">Компания получателя</td>
                            <td class="text-center">Дата отправки</td>
                            <td class="text-center">Дата обновление</td>
                            <td class="text-center">Статус</td>
                            <td class="text-center">Действие</td>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0;
                        @endphp
                        @foreach ($listofparcels as $listofparcel)
                        @php
                        $i ++;
                        @endphp
                        <tr>
                            <td class="text-center">{{$i}}</td>
                            <td class="text-center">
                                <a class="image-link" target="_blank" href="{{asset($listofparcel->parcelImage)}}">
                                    <img src="{{asset($listofparcel->parcelImage)}}" width="20" height="20"></a>
                                @if($listofparcel->parcelInvoiceImage=='storage/images/nophoto.jpg')
                                @else <a class="image-link" target="_blank"
                                    href="{{asset($listofparcel->parcelInvoiceImage)}}">
                                    <img src="{{asset($listofparcel->parcelInvoiceImage)}}" width="20" height="20"></a>
                                @endif
                            </td>
                            <td class="text-center">{{$listofparcel->refNumber}}</td>
                            <td class="text-center">{{$listofparcel->senderCompanyName}}</td>
                            <td class="text-center">{{$listofparcel->recipientCompanyName}}</td>
                            <td class="text-center">{{date('d-M. Y г.', strtotime($listofparcel->parcelCreateDate))}}
                            </td>
                            <td class="text-center">
                                {{date('d-M. Y г.', strtotime($listofparcel->parcelCurrentStatusUpdateDate))}}</td>

                            <td class="text-center">
                                @if ($listofparcel->parcelCurrentStatus_id==1)
                                <a href="{{route('courier.parcel.getparcel', $listofparcel->id)}}"
                                    class="badge badge-danger">{{$listofparcel->parcelCurrentStatusName}}</a>
                                @elseif($listofparcel->parcelCurrentStatus_id==2)
                                <a href="{{route('courier.parcel.getparcel', $listofparcel->id)}}"
                                    class="badge badge-primary">{{$listofparcel->parcelCurrentStatusName}}</a>
                                @elseif($listofparcel->parcelCurrentStatus_id==2)
                                <a href="{{route('courier.parcel.getparcel', $listofparcel->id)}}"
                                    class="badge badge-secondary">{{$listofparcel->parcelCurrentStatusName}}</a>
                                @elseif($listofparcel->parcelCurrentStatus_id==3)
                                <a href="{{route('courier.parcel.getparcel', $listofparcel->id)}}"
                                    class="badge badge-secondary">{{$listofparcel->parcelCurrentStatusName}}</a>
                                @elseif($listofparcel->parcelCurrentStatus_id==4)
                                <a href="{{route('courier.parcel.getparcel', $listofparcel->id)}}"
                                    class="badge badge-warning">{{$listofparcel->parcelCurrentStatusName}}</a>
                                @elseif($listofparcel->parcelCurrentStatus_id==5)
                                <a href="{{route('courier.parcel.getparcel', $listofparcel->id)}}"
                                    class="badge badge-info">{{$listofparcel->parcelCurrentStatusName}}</a>
                                @elseif($listofparcel->parcelCurrentStatus_id==5)
                                <a href="{{route('courier.parcel.getparcel', $listofparcel->id)}}"
                                    class="badge badge-dark">{{$listofparcel->parcelCurrentStatusName}}</a>
                                @elseif($listofparcel->parcelCurrentStatus_id==6)
                                <a href="{{route('courier.parcel.getparcel', $listofparcel->id)}}"
                                    class="badge badge-light">{{$listofparcel->parcelCurrentStatusName}}</a>
                                @elseif($listofparcel->parcelCurrentStatus_id==7)
                                <a href="{{route('courier.parcel.getparcel', $listofparcel->id)}}"
                                    class="badge badge-secondary">{{$listofparcel->parcelCurrentStatusName}}</a>
                                @elseif($listofparcel->parcelCurrentStatus_id==8)
                                <a href="{{route('courier.parcel.getparcel', $listofparcel->id)}}"
                                    class="badge badge-danger">{{$listofparcel->parcelCurrentStatusName}}</a>
                                @elseif($listofparcel->parcelCurrentStatus_id==9)
                                <a href="{{route('courier.parcel.getparcel', $listofparcel->id)}}"
                                    class="badge badge-success">{{$listofparcel->parcelCurrentStatusName}}</a>
                                @endif
                            </td>

                            <td class="text-center">
                                <a href="{{route('courier.parcel.viewparcel', $listofparcel->id)}}"><i
                                        class="fa fa-eye"></i></a>
                                <a href="{{route('courier.parcel.pdfInvoice', $listofparcel->id)}}"><i
                                        class="fa fa-print"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    @endif
</div>
</div>
@endsection
