<?php


namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\tblParcelNewModel;
use App\tblUserConnectorModel;
use App\tblParcelStatusHistoryModel;
use  App\Notifications\NewParcelNotification;

class DirectorController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        // dd($user->id);
        $userBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        // dd($userBranch_id);
        $all = tblParcelNewModel::where('senderUserBranch_id', $userBranch_id)->count();
        $_1 = tblParcelNewModel::where('parcelCurrentStatus_id', '1')->where('senderUserBranch_id', $userBranch_id)->count();
        $_2 = tblParcelNewModel::where('parcelCurrentStatus_id', '2')->where('senderUserBranch_id', $userBranch_id)->count();
        $_3 = tblParcelNewModel::where('parcelCurrentStatus_id', '3')->where('senderUserBranch_id', $userBranch_id)->count();
        $_4 = tblParcelNewModel::where('parcelCurrentStatus_id', '4')->where('senderUserBranch_id', $userBranch_id)->count();
        $_5 = tblParcelNewModel::where('parcelCurrentStatus_id', '5')->where('senderUserBranch_id', $userBranch_id)->count();
        $_6 = tblParcelNewModel::where('parcelCurrentStatus_id', '6')->where('senderUserBranch_id', $userBranch_id)->count();
        $_7 = tblParcelNewModel::where('parcelCurrentStatus_id', '7')->where('senderUserBranch_id', $userBranch_id)->count();
        $_8 = tblParcelNewModel::where('parcelCurrentStatus_id', '8')->where('senderUserBranch_id', $userBranch_id)->count();
        $_9 = tblParcelNewModel::where('parcelCurrentStatus_id', '9')->where('senderUserBranch_id', $userBranch_id)->count();

        $alll = tblParcelNewModel::where('senderUserBranch_id', '!=',  $userBranch_id)->count();
        $_11 = tblParcelNewModel::where('parcelCurrentStatus_id', '1')->where('senderUserBranch_id', '!=', $userBranch_id)->count();
        $_22 = tblParcelNewModel::where('parcelCurrentStatus_id', '2')->where('senderUserBranch_id', '!=', $userBranch_id)->count();
        $_33 = tblParcelNewModel::where('parcelCurrentStatus_id', '3')->where('senderUserBranch_id', '!=', $userBranch_id)->count();
        $_44 = tblParcelNewModel::where('parcelCurrentStatus_id', '4')->where('senderUserBranch_id', '!=', $userBranch_id)->count();
        $_55 = tblParcelNewModel::where('parcelCurrentStatus_id', '5')->where('senderUserBranch_id', '!=', $userBranch_id)->count();
        $_66 = tblParcelNewModel::where('parcelCurrentStatus_id', '6')->where('senderUserBranch_id', '!=', $userBranch_id)->count();
        $_77 = tblParcelNewModel::where('parcelCurrentStatus_id', '7')->where('senderUserBranch_id', '!=', $userBranch_id)->count();
        $_88 = tblParcelNewModel::where('parcelCurrentStatus_id', '8')->where('senderUserBranch_id', '!=', $userBranch_id)->count();
        $_99 = tblParcelNewModel::where('parcelCurrentStatus_id', '9')->where('senderUserBranch_id', '!=', $userBranch_id)->count();

        // return view('director.home', compact(['user']));

        return view('director.dashboard', [
            'all' => $all,
            'a1' => $_1,
            'a2' => $_2,
            'a3' => $_3,
            'a4' => $_4,
            'a5' => $_5,
            'a6' => $_6,
            'a7' => $_7,
            'a8' => $_8,
            'a9' => $_9,

            'alll' => $alll,
            'a11' => $_11,
            'a22' => $_22,
            'a33' => $_33,
            'a44' => $_44,
            'a55' => $_55,
            'a66' => $_66,
            'a77' => $_77,
            'a88' => $_88,
            'a99' => $_99


        ], compact(['user']));
    }
    public function listofsendedparcel($id)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $userBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        if ($id == 0) {
            $myTask = tblParcelNewModel::where('senderUserBranch_id', $userBranch_id)->get();
            $title = '?????? ???????????????????????? ??????????????';
        } elseif ($id == 1) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '?? ??????????????????';
        } elseif ($id == 2) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '???????????? ?? ???????????? ??????????????????????';
        } elseif ($id == 3) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '?????????????????? ?? ???????????????????? ??????????';
        } elseif ($id == 4) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '?????????????????? ?? ?????????? ????????????????????';
        } elseif ($id == 5) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '???????????? ?? ???????????? ????????????????????';
        } elseif ($id == 6) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '???? ???????????? ?????????? ?? ????????????';
        } elseif ($id == 7) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '???? ???????????????? ?? ??????????????';
        } elseif ($id == 8) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '?????????????????? ???? ?????????? ????????????????';
        } elseif ($id == 9) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '??????????????????';
        }


        return view('director.parcel.listofsendedparcel', ['listofparcels' => $myTask, 'title' => $title, 'userBranch_id' => $userBranch_id], compact(['user']));
    }
    public function listofwaitingparcel($id)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $userBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        if ($id == 0) {
            $myTask = tblParcelNewModel::where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', '>', '3')->get();
            $title = '?????? ?????????????????? ??????????????';
        } elseif ($id == 4) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '?????????????????? ?? ?????????? ????????????????????';
        } elseif ($id == 5) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '???????????? ?? ???????????? ????????????????????';
        } elseif ($id == 6) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '???? ???????????? ?????????? ?? ????????????';
        } elseif ($id == 7) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '???? ???????????????? ?? ??????????????';
        } elseif ($id == 8) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '?????????????????? ???? ?????????? ????????????????';
        } elseif ($id == 9) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = '??????????????????';
        }
        $lw = 1;
        return view('director.parcel.listofwaitingparcel', ['listofparcels' => $myTask, 'title' => $title, 'userBranch_id' => $userBranch_id, 'lw' => $lw], compact(['user']));
    }

    public function viewparcel($id)
    {
        $user = Auth::user();
        $myTask = tblParcelNewModel::find($id);
        $myTask1 = tblParcelStatusHistoryModel::where('refNumber', $myTask->refNumber)->get();
        return view('director.parcel.viewparcel', ['parcel' => $myTask, 'historys' => $myTask1], compact(['user']));
    }
    public function viewparcelNotify($id, $n_id)
    {
        $user = Auth::user();
        if (auth()->user()->notifications->find($n_id)->markAsRead() == null) {
            auth()->user()->notifications->find($n_id)->markAsRead();
        }

        $myTask = tblParcelNewModel::find($id);
        $myTask1 = tblParcelStatusHistoryModel::where('refNumber', $myTask->refNumber)->get();
        return view('director.parcel.viewparcel', ['parcel' => $myTask, 'historys' => $myTask1], compact(['user']));
    }
}
