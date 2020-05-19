<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\tblUserConnectorModel;
use App\tblBranchModel;
use App\tblParcelPlanModel;
use App\tblParcelNewModel;
use App\tblParcelStatusHistoryModel;
use App\tblParcelCurrentStatusModel;
use Carbon\Carbon;

class CourierController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        // return view('courier.home', compact(['user']));

        $user_id = $user->id;
        $user_branch_id = tblUserConnectorModel::select('*')->where('user_id', $user_id)->first();
        $user_branchName = tblBranchModel::find($user_branch_id->branch_id);
        $all = tblParcelNewModel::whereNotIn('parcelCurrentStatus_id', ['1', '2', '3', '4'])
            ->where('recipientUserBranch_id', $user_branch_id->branch_id)
            ->where('senderUserBranch_id', $user_branch_id->branch_id)->count();
        $userBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        $myTask = tblParcelNewModel::where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', '>', '4')->count();
        $_1 = tblParcelNewModel::where('parcelCourier_id', $user->id)->count();
        return view('courier.dashboard', ['all' => $all, 'count' => $myTask, 'a1' => $_1], compact(['user']));
    }

    public function listofparcel($id)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $userBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        if ($id == 0) {
            $myTask = tblParcelNewModel::where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', '>', '4')->get();
            $title = 'Все прибывшие посылки';
        }
        if ($id == 1) {
            $myTask = tblParcelNewModel::where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCourier_id', $user_id)->get();
            $title = 'Мои посылки';
            // $id=1;
        }
        $lw = 1;
        return view('courier.parcel.listofparcel', ['listofparcels' => $myTask, 'title' => $title, 'userBranch_id' => $userBranch_id, 'lw' => $lw], compact(['user']));
    }

    public function viewparcel($id)
    {
        $user = Auth::user();
        $myTask = tblParcelNewModel::find($id);
        $myTask1 = tblParcelStatusHistoryModel::where('refNumber', $myTask->refNumber)->get();
        return view('courier.parcel.viewparcel', ['parcel' => $myTask, 'historys' => $myTask1], compact(['user']));
    }
    public function getparcel($id)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $userBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;

        $myTask1 = tblParcelNewModel::find($id);
        $lastStatus_id = tblParcelStatusHistoryModel::where('refNumber', $myTask1->refNumber)->latest()->first()->parcelStatus_id;
        // dd($lastStatus_id);
        if ($lastStatus_id != 7) {
            $myTask1->parcelCurrentStatus_id = '7';
            $myTask1->parcelCurrentStatusName = 'На доставке у курьера';
            $mytime  = Carbon::now();
            $mytime->setTimezone('Asia/Tashkent');
            $mytime->toDateTimeString();
            $myTask1->parcelCurrentStatusDescription = 'Посылка было передано для доставки курьером';
            $myTask1->parcelCurrentStatusUpdateDate = $mytime;
            $myTask1->parcelCourier_id = $user->id;
            $myTask1->parcelCourierName = $user->name;
            $myTask2 = new tblParcelStatusHistoryModel();
            $myTask2->refNumber = $myTask1->refNumber;
            $myTask2->parcelStatus_id = '7';
            $myTask2->parcelStatus = 'На доставке у курьера';
            $myTask2->parcelCurrentStatusDescription = 'Посылка было передано для доставки курьером';
            $myTask2->parcelStatusDate = $mytime;
            $myTask1->save();
            $myTask2->save();
            // // dd($lastStatus_id);
            $title = 'Принят в городе получателя';
            $id = 0;
            return redirect()->route('courier.parcel.listofparcel', compact(['user', 'title', 'id']))->with('status', 'Посылка успешно обновлена');
        } elseif ($lastStatus_id == 7) {
            $title = 'Принят в городе получателя';
            $id = 0;
            return redirect()->route('courier.parcel.listofparcel', compact(['user', 'title', 'id']))->with('danger', 'Посылка уже имеет данный статус');
        }
    }
    public function setdelivery($id)
    {
        $user = Auth::user();
        $id = tblParcelNewModel::find($id);
        return view('courier.parcel.setdelivery',  ['id' => $id], compact(['user']));
    }
    public function updatedelivery(Request $request, $id)
    {

        $user = Auth::user();


        if ($request->hasFile('parcelInvoiceImage')) {


            $myTask1 = tblParcelNewModel::find($id);
            $lastStatus_id = tblParcelStatusHistoryModel::where('refNumber', $myTask1->refNumber)->latest()->first()->parcelStatus_id;
            if ($lastStatus_id != 9) {
                $myTask1->fill($request->all());
                $refNumber = $myTask1->refNumber;
                $myTask1->parcelCurrentStatus_id = '9';
                $myTask1->parcelCurrentStatusName = 'Доставлен';
                $mytime  = Carbon::now();
                $mytime->setTimezone('Asia/Tashkent');
                $mytime->toDateTimeString();
                $myTask1->parcelCurrentStatusUpdateDate = $mytime;
                $myTask1->parcelCurrentStatusDescription = 'Посылка успешно доставлено';

                $filenameWithExt = $request->file('parcelInvoiceImage')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extention = $request->file('parcelInvoiceImage')->getClientOriginalExtension();
                $filenameStore = $refNumber . '-' . $filename . '.' . $extention;
                $path = $request->file('parcelInvoiceImage')->storeAs('public/images/', $filenameStore);
                $myTask1->parcelInvoiceImage = "storage/images/{$filenameStore}";
                $myTask1->save();
                $myTask2 = new tblParcelStatusHistoryModel(); //::where('refNumber', $refNumber)->latest()->first();
                $myTask2->fill($request->all());
                $myTask2->parcelStatus = 'Доставлен';
                $myTask2->parcelCurrentStatusDescription = 'Посылка успешно доставлено';

                $myTask2->refNumber = $myTask1->refNumber;
                $myTask2->parcelStatus_id = '9';
                $myTask2->parcelStatusDate = $mytime;
                $myTask2->save();
            } elseif ($lastStatus_id == 9) {
                $title = 'Принят в городе получателя';
                $id = 0;
                return redirect()->route('courier.parcel.listofparcel', compact(['user', 'title', 'id']))->with('danger', 'Посылка уже доставлена');
            }
        }

        $title = 'Принят в городе получателя';
        $id = 0;
        return redirect()->route('courier.parcel.listofparcel', compact(['user', 'title', 'id']))->with('status', 'Посылка успешно обновлена');
    }

    public function searchparcel()
    {
        $user = Auth::user();
        $listofparcels = null;
        return view('courier.parcel.searchparcel', ['listofparcels' => $listofparcels], compact(['user']));
    }
    public function findparcel(Request $request)
    {
        $user = Auth::user();
        $tags = explode(',', $request->senderCompanyName);
        $listofparcels = tblParcelNewModel::whereIn('refNumber', $tags)->get();
        return view('courier.parcel.searchparcel', ['listofparcels' => $listofparcels, 'tags' => $tags], compact(['user']));
    }

    public function massupdateparcel(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $user_name = $user->name;

        $userBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        $tags = json_decode($request->tags, true);
        foreach ($tags as $tag) {
            $myTask1 = tblParcelNewModel::where('refNumber', $tag)->first();
            $lastStatus_id = tblParcelStatusHistoryModel::where('refNumber', $myTask1->refNumber)->latest()->first()->parcelStatus_id;

            if ($lastStatus_id != 7) {
                $myTask1 = tblParcelNewModel::where('refNumber', $tag)->first();
                $myTask1->fill($request->all());
                $myTask1->parcelCurrentStatus_id = '7';
                $myTask1->parcelCurrentStatusName = 'На доставке у курьера';
                $mytime  = Carbon::now();
                $mytime->setTimezone('Asia/Tashkent');
                $mytime->toDateTimeString();
                $myTask1->parcelCurrentStatusDescription = 'Посылка передано для доставки курьером';
                $myTask1->parcelCurrentStatusUpdateDate = $mytime;
                $myTask1->recipientManager_id =  $user_id;
                $myTask1->recipientManagerName = $user_name;
                $myTask2 = new tblParcelStatusHistoryModel(); //::where('refNumber', $tag)->first();
                $myTask2->fill($request->all());
                $myTask2->refNumber = $myTask1->refNumber;
                $myTask2->parcelStatus_id = '7';
                $myTask2->parcelStatus = 'На доставке у курьера';
                $myTask2->parcelCurrentStatusDescription = 'Посылка передано для доставки курьером';
                $myTask2->parcelStatusDate = $mytime;

                $myTask1->save();
                $myTask2->save();
            }
        }
        $title = 'Принят в городе получателя';
        $id = 0;
        return redirect()->route('courier.parcel.listofparcel', compact(['user', 'title', 'id']))->with('danger', 'Посылка уже имеет данный статус');
    }
    public function viewparcelNotify($id, $n_id)
    {
        $user = Auth::user();
        if (auth()->user()->notifications->find($n_id)->markAsRead() == null) {
            auth()->user()->notifications->find($n_id)->markAsRead();
        }

        $myTask = tblParcelNewModel::find($id);
        $myTask1 = tblParcelStatusHistoryModel::where('refNumber', $myTask->refNumber)->get();
        return view('manager.parcel.viewparcel', ['parcel' => $myTask, 'historys' => $myTask1], compact(['user']));
    }
    public function markasread()
    {
        $user = Auth::user();
        $user->unreadNotifications->markAsRead();
        return redirect()->back();
    }
}
