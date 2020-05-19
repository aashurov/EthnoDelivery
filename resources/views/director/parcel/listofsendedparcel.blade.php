@extends('layouts.directormenu')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; padding:0px;">
                        <h5 class="auto my-2">{{$title}}</h5>
                        <div class="btn-group " role="group" aria-label="Basic example">
                            <select multiple="multiple" id="tooggle-column"
                                class="form-control form-control-sm auto my-1 pull-right"
                                placeholder="Выберите колонок">
                                <option value="0" selected>№</option>
                                <option value="1" selected>Фото</option>
                                <option value="2" selected>Номер посылки</option>
                                <option value="3" selected>Компания отправителя</option>
                                <option value="4" selected>Компания получателя</option>
                                <option value="5" selected>Дата отправки</option>
                                <option value="6" selected>Дата обновление</option>
                                <option value="7" selected>Вызов курьера</option>
                                <option value="8" selected>Тип доставки</option>
                                <option value="9" selected>Статус</option>
                                <option value="10" selected>Действие</option>
                            </select>
                            <a href="{{route('director')}}" class="btn btn-primary btn-sm auto my-1"><i
                                    class="fa fa-arrow-left"></i></a>
                            {{-- <a href="{{route('director.parcel.addparcel')}}" class="btn btn-primary btn-sm auto
                            my-1"><i class="fa fa-plus"></i></a> --}}

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
                            {{-- style="background-color:#1c87c9; color:#fff; font-weight: bold; " --}}
                            <tr>
                                <td class="text-center">№</td>
                                <td class="text-center">Фото</td>
                                <td class="text-center">Номер посылки</td>
                                <td class="text-center">Компания отправителя</td>
                                <td class="text-center">Компания получателя</td>
                                <td class="text-center">Дата отправки</td>
                                <td class="text-center">Дата обновление</td>
                                <td class="text-center">Вызов курьера</td>
                                <td class="text-center">Тип доставки</td>
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
                                    <a class="image-link" target="_blank" data-fancybox="gallery"
                                        href="{{asset($listofparcel->parcelImage)}}">
                                        <img src="{{asset($listofparcel->parcelImage)}}" width="20" height="20"></a>
                                    @if($listofparcel->parcelInvoiceImage=='storage/images/nophoto.jpg')
                                    @else <a class="image-link" data-fancybox="gallery" target="_blank"
                                        href="{{asset($listofparcel->parcelInvoiceImage)}}">
                                        <img src="{{asset($listofparcel->parcelInvoiceImage)}}" width="20"
                                            height="20"></a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    {{$listofparcel->refNumber}}

                                    @if($listofparcel->senderUserBranch_id == $userBranch_id)
                                    <span class="badge "><i class="fa fa-arrow-up "></i></span>
                                    @elseif($listofparcel->senderBranch_id != $userBranch_id)
                                    <span class="badge "><i class="fa fa-arrow-down "></i></span>
                                    @endif
                                </td>
                                <td class="text-center">{{$listofparcel->senderCompanyName}}</td>
                                <td class="text-center">{{$listofparcel->recipientCompanyName}}</td>
                                <td class="text-center">
                                    {{date('d-M. Y г.', strtotime($listofparcel->parcelCreateDate))}}</td>
                                <td class="text-center">
                                    {{date('d-M. Y г.', strtotime($listofparcel->parcelCurrentStatusUpdateDate))}}</td>
                                <td class="text-center">
                                    @if($listofparcel->parcelCourierService==1)
                                    Да
                                    @elseif($listofparcel->parcelCourierService==0)
                                    Нет
                                    @endif
                                </td>
                                <td class="text-center">
                                    {{$listofparcel->parcelDeliveryTypeName}}
                                </td>

                                <td class="text-center" style="width:10%">
                                    @if ($listofparcel->parcelCurrentStatus_id==1)
                                    <a href="#"
                                        class="badge badge-danger">{{$listofparcel->parcelCurrentStatusName}}</a>
                                    @elseif($listofparcel->parcelCurrentStatus_id==2)
                                    <a href="#"
                                        class="badge badge-primary">{{$listofparcel->parcelCurrentStatusName}}</a>
                                    @elseif($listofparcel->parcelCurrentStatus_id==3)
                                    <a href="#"
                                        class="badge badge-secondary">{{$listofparcel->parcelCurrentStatusName}}</a>
                                    @elseif($listofparcel->parcelCurrentStatus_id==4)
                                    <a href="#"
                                        class="badge badge-warning">{{$listofparcel->parcelCurrentStatusName}}</a>
                                    @elseif($listofparcel->parcelCurrentStatus_id==5)
                                    <a href="#" class="badge badge-info">{{$listofparcel->parcelCurrentStatusName}}</a>
                                    @elseif($listofparcel->parcelCurrentStatus_id==6)
                                    <a href="#" class="badge badge-light">{{$listofparcel->parcelCurrentStatusName}}</a>
                                    @elseif($listofparcel->parcelCurrentStatus_id==7)
                                    <a href="#"
                                        class="badge badge-secondary">{{$listofparcel->parcelCurrentStatusName}}</a>
                                    @elseif($listofparcel->parcelCurrentStatus_id==8)
                                    <a href="#"
                                        class="badge badge-danger">{{$listofparcel->parcelCurrentStatusName}}</a>
                                    @elseif($listofparcel->parcelCurrentStatus_id==9)
                                    <a href="#"
                                        class="badge badge-success">{{$listofparcel->parcelCurrentStatusName}}</a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{route('director.parcel.viewparcel', $listofparcel->id)}}"><i
                                            class="fa fa-eye"></i></a>
                                    <a data-toggle="modal" href="#exampleModalCenter"><i class="fa fa-print"></i></a>

                                    {{-- <a href="{{route('director.parcel.editparcel', $listofparcel->id)}}"><i
                                        class="fa fa-edit"></i></a> --}}
                                    {{-- {!!Form::open(['route'=>['director.parcel.delete', $listofparcel->id,
                                    $listofparcel->refNumber],'method'=>'DELETE'])!!}
                                    <button
                                        onclick="return confirm('Вы действительно хотите удалить посылку {{$listofparcel->refNumber}}')"><i
                                        class="fa fa-trash"></i></button>
                                    {!!Form::close()!!} --}}
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Печать чеков и накладных
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="#" class="btn btn-danger btn-block">Печать чека для клейки
                                                        в
                                                        посылку</a></div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{route('director.parcel.pdfInvoice', $listofparcel->id)}}"
                                                        class="btn btn-warning btn-block">Печать накладную в А5
                                                        формате</a>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{route('director.parcel.pdfInvoicea4', $listofparcel->id)}}"
                                                        class="btn btn-success btn-block">Печать накладную в А4
                                                        формате</a>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                    <ul class="pagination justify-content-end" style="margin:20px 0">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
