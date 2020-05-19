<?php

namespace App\Http\Controllers\Web;
use App\tblParcelCurrencyModel;
use App\tblParcelStatusHistoryModel;
use App\tblParcelPlanModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexPageController extends Controller
{


public function listofcurrency()
    {
        $sum = tblParcelCurrencyModel::select('currencyPrice')->where('currencyCode', 'UZS')->first();
        $rubl =tblParcelCurrencyModel::select('currencyPrice')->where('currencyCode', 'RUB')->first();
        // return view('index', ['rubl' => $rubl, 'sum' => $sum]);
        $eko = tblParcelPlanModel::select('parcelPlanPrice')->where('parcelPlanName', 'Эконом')->first();
        $sta = tblParcelPlanModel::select('parcelPlanPrice')->where('parcelPlanName', 'Стандарт (Москва-Ташкент)')->first();
        $ult = tblParcelPlanModel::select('parcelPlanPrice')->where('parcelPlanName', 'Ультрасрочный')->first();

        return view('index', ['rubl' => $rubl, 'sum' => $sum, 'eko' => $eko,'sta' => $sta,'ult' => $ult]);


    }
    public function foundparcel(Request $request)
    {
        $listofparcels = tblParcelStatusHistoryModel::where('refNumber', $request->refNumber)->get();
        $sum = tblParcelCurrencyModel::select('currencyPrice')->where('currencyCode', 'UZS')->first();
        $rubl = tblParcelCurrencyModel::select('currencyPrice')->where('currencyCode', 'RUB')->first();
        $eko = tblParcelPlanModel::select('parcelPlanPrice')->where('id', '1')->first();
        $sta = tblParcelPlanModel::select('parcelPlanPrice')->where('id', '2')->first();
        $ult = tblParcelPlanModel::select('parcelPlanPrice')->where('id', '4')->first();

        return view('search', ['rubl' => $rubl, 'sum' => $sum, 'eko' => $eko,'sta' => $sta,'ult' => $ult], compact(['listofparcels']));
    }
}
