@extends('layouts.couriermenu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-weight:bold">
                    <div style="display: flex; justify-content: space-between; padding:0px;">
                        {{-- <strong class="mr-auto">{{$title}}</strong> --}}
                        <h5 class="auto my-2">Общее</h5>
                        <div class="btn-group " role="group" aria-label="Basic example">
                            <a href="{{ URL::previous() }}" class="btn btn-primary btn-sm auto my-1"><i
                                    class="fa fa-arrow-left"></i></a>
                            {{-- <a href="{{route('manager.parcel.listofsendedparcel', 0)}}" class="btn btn-primary
                            btn-sm auto my-1"><i class="fa fa-arrow-left"></i></a> --}}

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <table class='table table-bordered table-sm'>
                            <tbody>
                                <tr>
                                    <td colspan="3" style="font-weight:bold">Дата регистрации посылки</td>
                                    <td colspan="3">{{$parcel->parcelCreateDate}}</td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="font-weight:bold">ФИО менеджер отправитель</td>
                                    <td colspan="3">{{$parcel->senderManagerName}}</td>
                                </tr>
                                @if($parcel->recipientManagerName == 0)

                                <tr>
                                    <td colspan="3" style="font-weight:bold">ФИО менеджер получатель</td>
                                    <td colspan="3">{{$parcel->recipientManagerName}}</td>
                                </tr>

                                @endif
                                @if($parcel->parcelCourier_id !=0)
                                <tr>
                                    <td colspan="3" style="font-weight:bold">ФИО курьера</td>
                                    <td colspan="3">{{$parcel->parcelCourierName}}</td>
                                </tr>
                                @endif

                                <tr>
                                    <td colspan="2"
                                        style="font-weight:bold; text-align: center; border-top: 3px solid #dee2e6;">
                                        Статус посылки</td>
                                    <td colspan="2"
                                        style="font-weight:bold; text-align: center; border-top: 3px solid #dee2e6;">
                                        Примечание</td>
                                    <td colspan="2"
                                        style="font-weight:bold; text-align: center; border-top: 3px solid #dee2e6;">
                                        Дата обновление</td>
                                </tr>
                                @foreach ($historys as $history)
                                <tr>
                                    <td colspan="2" style="text-align: center;">{{$history->parcelStatus}}</td>
                                    <td colspan="2" style="text-align: center">
                                        {{$history->parcelCurrentStatusDescription}}</td>
                                    <td colspan="2" style="text-align: center">{{$history->parcelStatusDate}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
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
                <div class="card-header" style="font-weight:bold">О посылке</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <table class='table table-bordered table-sm'>
                            <tbody>
                                <tr>
                                    <td colspan="4" style="font-weight:bold">Номер посылки</td>
                                    <td colspan="4">{{$parcel->refNumber}}</td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="font-weight:bold">Название посылки</td>
                                    <td colspan="4">{{$parcel->parcelDescription}}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold">Вес</td>
                                    <td>{{$parcel->parcelWeight}}</td>
                                    <td style="font-weight:bold">Длина</td>
                                    <td>{{$parcel->parcelLength}} см</td>
                                    <td style="font-weight:bold">Ширина</td>
                                    <td>{{$parcel->parcelWidth}} см</td>
                                    <td style="font-weight:bold">Высота</td>
                                    <td>{{$parcel->parcelHeight}} см</td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="font-weight:bold">Фото</td>
                                    <td colspan="4">
                                        <a class="image-link" target="_blank" href="{{asset($parcel->parcelImage)}}">
                                            <img src="{{asset($parcel->parcelImage)}}" width="20" height="20"></a>
                                        @if($parcel->parcelInvoiceImage=='storage/images/nophoto.jpg')

                                        @else <a class="image-link" target="_blank"
                                            href="{{asset($parcel->parcelInvoiceImage)}}">
                                            <img src="{{asset($parcel->parcelInvoiceImage)}}" width="20"
                                                height="20"></a>
                                        @endif</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="font-weight:bold">О платеже</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <table class='table table-bordered table-sm'>

                            <tr>
                                <td style="font-weight:bold">Тариф</td>
                                <td>{{$parcel->parcelPlanName}}</td>
                                <td style="font-weight:bold">Скидка</td>
                                <td>
                                    @if($parcel->parcelDiscount==0)
                                    {{$parcel->parcelDiscount}} 0 %
                                    @else {{$parcel->parcelDiscount}} %
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Тип посылки</td>
                                @if($parcel->parcelPlan_id==4 or $parcel->parcelPlan_id==5 or $parcel->parcelPlan_id==6)
                                <td>Документ</td>
                                @else
                                <td>Посылка</td>

                                @endif
                                <td style="font-weight:bold">Тип доставки</td>
                                <td>{{$parcel->parcelDeliveryTypeName}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Плательщик</td>
                                <td>{{$parcel->parcelPayerName}}</td>
                                <td style="font-weight:bold">Вызов курьера</td>
                                <td>Да</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Цена</td>
                                <td>{{$parcel->parcelPriceUS}} $</td>
                                <td>{{$parcel->parcelPriceRU}} &#8381;</td>
                                <td>{{$parcel->parcelPriceUZS}} Сум</td>
                            </tr>
                        </table>
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
                <div class="card-header" style="font-weight:bold">Об отправителя</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <table class='table table-bordered table-sm'>
                            <tr>
                                <td style="font-weight:bold">Филиал отправителя</td>
                                <td>{{$parcel->senderUserBranchName}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Компания отправителя</td>
                                <td>{{$parcel->senderCompanyName}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Директор компании</td>
                                <td>{{$parcel->senderDirectorName}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">ФИО отправителя</td>
                                <td>{{$parcel->senderUserName}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Контакты отправителя</td>
                                <td>{{$parcel->senderUserPhone}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Адрес отправителя</td>
                                <td>{{$parcel->senderUserAdress}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="font-weight:bold">О получателе</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <table class='table table-bordered table-sm'>
                            <tr>
                                <td style="font-weight:bold">Филиал получателя</td>
                                <td>{{$parcel->recipientUserBranchName}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Компания получателя</td>
                                <td>{{$parcel->recipientCompanyName}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Директор компании</td>
                                <td>{{$parcel->recipientDirectorName}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">ФИО получателя</td>
                                <td>{{$parcel->recipientUserName}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Контакты получателя</td>
                                <td>{{$parcel->recipientUserPhone}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">Адрес получателя</td>
                                <td>{{$parcel->recipientUserAdress}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
