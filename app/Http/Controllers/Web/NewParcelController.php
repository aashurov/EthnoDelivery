<?php


namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\tblUserConnectorModel;
use App\tblBranchModel;
use App\tblCompanyModel;
use App\tblParcelPlanModel;
use App\tblParcelNewModel;
use App\tblParcelStatusHistoryModel;
use App\tblParcelStatusModel;
use Carbon\Carbon;
use  App\Notifications\NewParcelNotification;
use Illuminate\Support\Facades\Notification;

class NewParcelController extends Controller
{
    // use tblParcelNewModel;
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

        // return view('manager.dashboard', compact(['user']));

        return view('manager.dashboard', [
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
        // return view('manager.home');
    }

    public function listofsendedparcel($id)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $userBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        if ($id == 0) {
            $myTask = tblParcelNewModel::where('senderUserBranch_id', $userBranch_id)->orderBy("id", "desc")->get();
            $title = 'Все отправленные посылки';
        } elseif ($id == 1) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'В обработке';
        } elseif ($id == 2) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'Принят в городе отправителя';
        } elseif ($id == 3) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'Отправлен в транзитный город';
        } elseif ($id == 4) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'Отправлен в город получателя';
        } elseif ($id == 5) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'Принят в городе получателя';
        } elseif ($id == 6) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'На складе готов к выдаче';
        } elseif ($id == 7) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'На доставке у курьера';
        } elseif ($id == 8) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'Возвращен на склад доставки';
        } elseif ($id == 9) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'Доставлен';
        }


        return view('manager.parcel.listofsendedparcel', ['listofparcels' => $myTask, 'title' => $title, 'userBranch_id' => $userBranch_id], compact(['user']));
    }
    public function listofwaitingparcel($id)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $userBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        if ($id == 0) {
            $myTask = tblParcelNewModel::where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', '>', '3')->orderBy("id", "desc")->get();
            $title = 'Все прибывшие посылки';
        } elseif ($id == 4) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'Отправлен в город получателя';
        } elseif ($id == 5) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'Принят в городе получателя';
        } elseif ($id == 6) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'На складе готов к выдаче';
        } elseif ($id == 7) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'На доставке у курьера';
        } elseif ($id == 8) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'Возвращен на склад доставки';
        } elseif ($id == 9) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', 'not like', $userBranch_id)->where('parcelCurrentStatus_id', $id)->orderBy("id", "desc")->get();
            $title = 'Доставлен';
        }
        $lw = 1;
        return view('manager.parcel.listofwaitingparcel', ['listofparcels' => $myTask, 'title' => $title, 'userBranch_id' => $userBranch_id, 'lw' => $lw], compact(['user']));
    }

    public function viewparcel($id)
    {
        $user = Auth::user();
        $myTask = tblParcelNewModel::find($id);
        $myTask1 = tblParcelStatusHistoryModel::where('refNumber', $myTask->refNumber)->get();
        return view('manager.parcel.viewparcel', ['parcel' => $myTask, 'historys' => $myTask1], compact(['user']));
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
    public function addparcel(Request $request)
    {
        $user = Auth::user();
        $ownBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        $senderUsers = tblUserConnectorModel::select('tbluserconnector.*', 'tblbranch.*', 'tblcompany.*', 'users.*')
            ->join('users', 'tbluserconnector.user_id',   '=', 'users.id')
            ->join('tblbranch', 'tbluserconnector.branch_id',   '=', 'tblbranch.id')
            ->leftjoin('tblcompany', 'tbluserconnector.company_id',   '=', 'tblcompany.id')
            ->where('tbluserconnector.branch_id', $ownBranch_id)
            ->where('users.role_id', '4')
            ->orderby('tbluserconnector.company_id')
            ->get();

        $recipientUsers = tblUserConnectorModel::select('tbluserconnector.*', 'tblbranch.*', 'tblcompany.*', 'users.*')
            ->join('users', 'tbluserconnector.user_id',   '=', 'users.id')
            ->join('tblbranch', 'tbluserconnector.branch_id',   '=', 'tblbranch.id')
            ->leftjoin('tblcompany', 'tbluserconnector.company_id',   '=', 'tblcompany.id')
            ->where('tbluserconnector.branch_id', 'not like', $ownBranch_id)
            ->where('users.role_id', '4')
            ->orderby('tbluserconnector.company_id')
            ->get();

        $branches = ['' => 'Выберите филиал'] + tblBranchModel::pluck('branchName', 'id')->toArray();
        $parcelPlanName = ['' => 'Выберите тариф'] + tblParcelPlanModel::pluck('parcelPlanName', 'id')->toArray();

        return view('manager.parcel.addparcel', [
            'branches'   => $branches,
            'parcelPlanName' => $parcelPlanName,
            'senderUsers' => $senderUsers,
            'recipientUsers' => $recipientUsers
        ], compact(['user']));
    }
    public function savenewparcel(Request $request)
    {
        $user = Auth::user();

        //const
        $senderManager_id = $user->id;
        // $senderRole_id = $user->role_id;
        $mytime  = Carbon::now();
        $mytime->setTimezone('Asia/Tashkent');
        $mytime->toDateTimeString();

        $tblParcelNewModel = new tblParcelNewModel();
        $tblParcelStatusHistoryModel = new tblParcelStatusHistoryModel();
        if ($request->has('checkBoxOldSender') && $request->has('checkBoxOldRecipient')) {
            $refNumber1 = rand(100000000000, 999999999999);
            $digits =(string)$refNumber1;
            $even_sum = $digits{1} + $digits{3} + $digits{5} + $digits{7} + $digits{9} + $digits{11};
            $even_sum_three = $even_sum * 3;
            $odd_sum = $digits{0} + $digits{2} + $digits{4} + $digits{6} + $digits{8} + $digits{10};
            $total_sum = $even_sum_three + $odd_sum;
            $next_ten = (ceil($total_sum/10))*10;
            $check_digit = $next_ten - $total_sum;
            $refNumber = $digits . $check_digit;

            $parcelDescription = $request->parcelDescription;
            $parcelWeight = $request->parcelWeight;
            $parcelLength = $request->parcelLength;
            $parcelWidth = $request->parcelWidth;
            $parcelHeight = $request->parcelHeight;

            $tblParcelStatusHistoryModel->refNumber = $refNumber;
            $tblParcelStatusHistoryModel->parcelStatus_id = '2';
            $tblParcelStatusHistoryModel->parcelStatus = 'Принят в городе отправителя';
            $tblParcelStatusHistoryModel->parcelCurrentStatusDescription = 'Посылка благополучна было принято в городе отправителя';
            $tblParcelStatusHistoryModel->parcelStatusDate = $mytime;
            $tblParcelStatusHistoryModel->save();

            if ($request->hasFile('parcelImage')) {
                $filenameWithExt = $request->file('parcelImage')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extention = $request->file('parcelImage')->getClientOriginalExtension();
                $filenameStore = $refNumber . '-' . $filename . '.' . $extention;

                $path = $request->file('parcelImage')->storeAs('public/images', $filenameStore);
                // dd($path);
                $parcelImage = "storage/images/{$filenameStore}";
                $parcelInvoiceImage = "storage/images/nophoto.jpg";
            } else {
                $parcelImage = "storage/images/nophoto.jpg";
                $parcelInvoiceImage = "storage/images/nophoto.jpg";
            }

            $parcelCreateDate = $mytime;
            $parcelCurrentStatus_id = '2';
            $parcelCurrentStatusName = 'Принят в городе отправителя';
            $parcelCurrentStatusDescription = 'Посылка благополучна было принято в городе отправителя';
            $parcelCurrentStatusUpdateDate = $mytime;
            if ($request->has('parcelDeliveryType_id')) {
                $parcelDeliveryType_id = '1';
                $parcelDeliveryTypeName = 'ДО ПОЛУЧАТЕЛЯ';
            } elseif (!$request->has('parcelDeliveryType_id')) {
                $parcelDeliveryType_id = '0';
                $parcelDeliveryTypeName = 'ДО СКЛАДА';
            }

            $parcelPlan_id = $request->parcelPlan_id;
            $plan = tblParcelPlanModel::find($parcelPlan_id);
            $parcelPlanName = $plan->parcelPlanName;
            $parcelDeliveryTimeFrom = $plan->parcelPlanDate;
            $parcelDeliveryTimeTo = $plan->parcelPlanDate;

            if ($request->has('parcelPayer_id')) {
                $parcelPayer_id = '1';
                $parcelPayerName = 'Отправитель';
            } elseif (!$request->has('parcelPayer_id')) {
                $parcelPayer_id = '0';
                $parcelPayerName = 'Получатель';
            }

            if ($request->has('parcelCourierService')) {
                $parcelCourierService = '1';
            } elseif (!$request->has('parcelCourierService')) {
                $parcelCourierService = '0';
            }

            $parcelDiscount = $request->parcelDiscount;
            $parcelNalBeznal = '1';
            $parcelPriceUS = $request->parcelPriceUS;
            $parcelPriceRU = $request->parcelPriceRU;
            $parcelPriceUZS = $request->parcelPriceUZS;

            $senderUser_id = $request->senderUser_id;
            $senderUserRole_id = tblUserConnectorModel::where('user_id', $senderUser_id)->first()->role_id;
            $senderUserName = User::find($senderUser_id)->name;
            $senderUserPhone = User::find($senderUser_id)->phone;
            $company_id = tblUserConnectorModel::where('user_id', $senderUser_id)->first()->company_id;
            $companyPhone = tblCompanyModel::find($company_id)->companyPhone;
            $senderUserPhoneAll = $senderUserPhone . ', ' . $companyPhone;

            $senderUserAdressLongitude = '0';
            $senderUserAdressLattitude = '0';

            $senderUserAdress = tblCompanyModel::find($company_id)->companyAddress;
            $senderUserEmail = tblCompanyModel::find($company_id)->companyEmail;
            $senderUserBranch_id = tblUserConnectorModel::where('user_id', $senderUser_id)->first()->branch_id;
            $senderUserBranchName = tblBranchModel::find($senderUserBranch_id)->branchName;
            $senderCompany_id = $company_id;
            $senderCompanyName = tblCompanyModel::find($company_id)->companyName;
            $senderDirector_id = tblUserConnectorModel::where('company_id', $company_id)->where('role_id', '3')->first()->user_id;
            $senderDirectorName = User::find($senderDirector_id)->name;

            $recipientUser_id = $request->recipientUser_id;
            $recipientUserRole_id = tblUserConnectorModel::where('user_id', $recipientUser_id)->first()->role_id;
            $recipientUserName = User::find($recipientUser_id)->name;
            $recipientUserPhone = User::find($recipientUser_id)->phone;
            $company_id1 = tblUserConnectorModel::where('user_id', $recipientUser_id)->first()->company_id;
            $companyPhone1 = tblCompanyModel::find($company_id1)->companyPhone;
            $recipientUserPhoneAll = $recipientUserPhone . ', ' . $companyPhone1;

            $recipientUserAdressLongitude = '0';
            $recipientUserAdressLattitude = '0';

            $recipientUserAdress = tblCompanyModel::find($company_id1)->companyAddress;
            $recipientUserEmail = tblCompanyModel::find($company_id1)->companyEmail;
            $recipientUserBranch_id = tblUserConnectorModel::where('user_id', $recipientUser_id)->first()->branch_id;
            $recipientUserBranchName = tblBranchModel::find($recipientUserBranch_id)->branchName;
            $recipientCompany_id = $company_id1;
            $recipientCompanyName = tblCompanyModel::find($company_id1)->companyName;
            $recipientDirector_id = tblUserConnectorModel::where('company_id', $company_id1)->where('role_id', '3')->first()->user_id;
            $recipientDirectorName = User::find($recipientDirector_id)->name;
            $senderManager_id = $user->id;
            $senderManagerName = $user->name;
            $recipientManager_id = '0';
            $recipientManagerName = '0';
            $parcelCourier_id = '0';
            $parcelCourierName = '0';
            $newSender = '0';
            $newRecipient = '0';

            $tblParcelNewModel->refNumber = $refNumber;
            $tblParcelNewModel->parcelDescription = $parcelDescription;
            $tblParcelNewModel->parcelWeight = $parcelWeight;
            $tblParcelNewModel->parcelLength = $parcelLength;
            $tblParcelNewModel->parcelWidth = $parcelWidth;
            $tblParcelNewModel->parcelHeight = $parcelHeight;
            $tblParcelNewModel->parcelImage = $parcelImage;
            $tblParcelNewModel->parcelInvoiceImage = $parcelInvoiceImage;
            $tblParcelNewModel->parcelCreateDate = $parcelCreateDate;
            $tblParcelNewModel->parcelCurrentStatus_id = $parcelCurrentStatus_id;
            $tblParcelNewModel->parcelCurrentStatusName = $parcelCurrentStatusName;
            $tblParcelNewModel->parcelCurrentStatusDescription = $parcelCurrentStatusDescription;
            $tblParcelNewModel->parcelCurrentStatusUpdateDate = $parcelCurrentStatusUpdateDate;
            $tblParcelNewModel->parcelDeliveryType_id = $parcelDeliveryType_id;
            $tblParcelNewModel->parcelDeliveryTypeName = $parcelDeliveryTypeName;
            $tblParcelNewModel->parcelPlan_id = $parcelPlan_id;
            $tblParcelNewModel->parcelPlanName = $parcelPlanName;
            $tblParcelNewModel->parcelDeliveryTimeFrom = $parcelDeliveryTimeFrom;
            $tblParcelNewModel->parcelDeliveryTimeTo = $parcelDeliveryTimeTo;
            $tblParcelNewModel->parcelPayer_id = $parcelPayer_id;
            $tblParcelNewModel->parcelPayerName = $parcelPayerName;
            $tblParcelNewModel->parcelCourierService = $parcelCourierService;
            $tblParcelNewModel->parcelDiscount = $parcelDiscount;
            $tblParcelNewModel->parcelNalBeznal = $parcelNalBeznal;
            $tblParcelNewModel->parcelPriceUS = $parcelPriceUS;
            $tblParcelNewModel->parcelPriceRU = $parcelPriceRU;
            $tblParcelNewModel->parcelPriceUZS = $parcelPriceUZS;
            $tblParcelNewModel->senderUser_id = $senderUser_id;
            $tblParcelNewModel->senderUserRole_id = $senderUserRole_id;
            $tblParcelNewModel->senderUserName = $senderUserName;
            $tblParcelNewModel->senderUserPhone = $senderUserPhoneAll;
            $tblParcelNewModel->senderUserAdressLongitude = $senderUserAdressLongitude;
            $tblParcelNewModel->senderUserAdressLattitude = $senderUserAdressLattitude;
            $tblParcelNewModel->senderUserAdress = $senderUserAdress;
            $tblParcelNewModel->senderUserEmail = $senderUserEmail;
            $tblParcelNewModel->senderUserBranch_id = $senderUserBranch_id;
            $tblParcelNewModel->senderUserBranchName = $senderUserBranchName;
            $tblParcelNewModel->senderCompany_id = $senderCompany_id;
            $tblParcelNewModel->senderCompanyName = $senderCompanyName;
            $tblParcelNewModel->senderDirector_id = $senderDirector_id;
            $tblParcelNewModel->senderDirectorName = $senderDirectorName;
            $tblParcelNewModel->recipientUser_id = $recipientUser_id;
            $tblParcelNewModel->recipientUserRole_id = $recipientUserRole_id;
            $tblParcelNewModel->recipientUserName = $recipientUserName;
            $tblParcelNewModel->recipientUserPhone = $recipientUserPhoneAll;
            $tblParcelNewModel->recipientUserAdressLongitude = $recipientUserAdressLongitude;
            $tblParcelNewModel->recipientUserAdressLattitude = $recipientUserAdressLattitude;
            $tblParcelNewModel->recipientUserAdress = $recipientUserAdress;
            $tblParcelNewModel->recipientUserEmail = $recipientUserEmail;
            $tblParcelNewModel->recipientUserBranch_id = $recipientUserBranch_id;
            $tblParcelNewModel->recipientUserBranchName = $recipientUserBranchName;
            $tblParcelNewModel->recipientCompany_id = $recipientCompany_id;
            $tblParcelNewModel->recipientCompanyName = $recipientCompanyName;
            $tblParcelNewModel->recipientDirector_id = $recipientDirector_id;
            $tblParcelNewModel->recipientDirectorName = $recipientDirectorName;
            $tblParcelNewModel->senderManager_id = $senderManager_id;
            $tblParcelNewModel->senderManagerName = $senderManagerName;
            $tblParcelNewModel->recipientManager_id = $recipientManager_id;
            $tblParcelNewModel->recipientManagerName = $recipientManagerName;
            $tblParcelNewModel->parcelCourier_id = $parcelCourier_id;
            $tblParcelNewModel->parcelCourierName = $parcelCourierName;
            $tblParcelNewModel->newSender = $newSender;
            $tblParcelNewModel->newRecipient = $newRecipient;
            $tblParcelNewModel->save();
        }



        //old sender new recipient
        elseif ($request->has('checkBoxOldSender') && !$request->has('checkBoxOldRecipient')) {
            // dd('sa');
           $refNumber1 = rand(100000000000, 999999999999);
            $digits =(string)$refNumber1;
            $even_sum = $digits{1} + $digits{3} + $digits{5} + $digits{7} + $digits{9} + $digits{11};
            $even_sum_three = $even_sum * 3;
            $odd_sum = $digits{0} + $digits{2} + $digits{4} + $digits{6} + $digits{8} + $digits{10};
            $total_sum = $even_sum_three + $odd_sum;
            $next_ten = (ceil($total_sum/10))*10;
            $check_digit = $next_ten - $total_sum;
            $refNumber = $digits . $check_digit;

            $parcelDescription = $request->parcelDescription;
            $parcelWeight = $request->parcelWeight;
            $parcelLength = $request->parcelLength;
            $parcelWidth = $request->parcelWidth;
            $parcelHeight = $request->parcelHeight;


            $tblParcelStatusHistoryModel->refNumber = $refNumber;
            $tblParcelStatusHistoryModel->parcelStatus_id = '2';
            $tblParcelStatusHistoryModel->parcelStatus = 'Принят в городе отправителя';
            $tblParcelStatusHistoryModel->parcelCurrentStatusDescription = 'Посылка благополучна было принято в городе отправителя';
            $tblParcelStatusHistoryModel->parcelStatusDate = $mytime;
            $tblParcelStatusHistoryModel->save();

            if ($request->hasFile('parcelImage')) {
                $filenameWithExt = $request->file('parcelImage')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extention = $request->file('parcelImage')->getClientOriginalExtension();
                $filenameStore = $refNumber . '-' . $filename . '.' . $extention;

                $path = $request->file('parcelImage')->storeAs('public/images', $filenameStore);
                // dd($path);
                $parcelImage = "storage/images/{$filenameStore}";
                $parcelInvoiceImage = "storage/images/nophoto.jpg";
            } else {
                $parcelImage = "storage/images/nophoto.jpg";
                $parcelInvoiceImage = "storage/images/nophoto.jpg";
            }

            $parcelCreateDate = $mytime;
            $parcelCurrentStatus_id = '2';
            $parcelCurrentStatusName = 'Принят в городе отправителя';
            $parcelCurrentStatusDescription = 'Посылка благополучна было принято в городе отправителя';
            $parcelCurrentStatusUpdateDate = $mytime;
            if ($request->has('parcelDeliveryType_id')) {
                $parcelDeliveryType_id = '1';
                $parcelDeliveryTypeName = 'ДО ПОЛУЧАТЕЛЯ';
            } elseif (!$request->has('parcelDeliveryType_id')) {
                $parcelDeliveryType_id = '0';
                $parcelDeliveryTypeName = 'ДО СКЛАДА';
            }

            $parcelPlan_id = $request->parcelPlan_id;
            $plan = tblParcelPlanModel::find($parcelPlan_id);
            $parcelPlanName = $plan->parcelPlanName;
            $parcelDeliveryTimeFrom = $plan->parcelPlanDate;
            $parcelDeliveryTimeTo = $plan->parcelPlanDate;

            if ($request->has('parcelPayer_id')) {
                $parcelPayer_id = '1';
                $parcelPayerName = 'Отправитель';
            } elseif (!$request->has('parcelPayer_id')) {
                $parcelPayer_id = '0';
                $parcelPayerName = 'Получатель';
            }

            if ($request->has('parcelCourierService')) {
                $parcelCourierService = '1';
            } elseif (!$request->has('parcelCourierService')) {
                $parcelCourierService = '0';
            }

            $parcelDiscount = $request->parcelDiscount;
            $parcelNalBeznal = '1';
            $parcelPriceUS = $request->parcelPriceUS;
            $parcelPriceRU = $request->parcelPriceRU;
            $parcelPriceUZS = $request->parcelPriceUZS;

            $senderUser_id = $request->senderUser_id;
            $senderUserRole_id = tblUserConnectorModel::where('user_id', $senderUser_id)->first()->role_id;
            $senderUserName = User::find($senderUser_id)->name;
            $senderUserPhone = User::find($senderUser_id)->phone;
            $company_id = tblUserConnectorModel::where('user_id', $senderUser_id)->first()->company_id;
            $companyPhone = tblCompanyModel::find($company_id)->companyPhone;
            $senderUserPhoneAll = $senderUserPhone . ', ' . $companyPhone;

            $senderUserAdressLongitude = '0';
            $senderUserAdressLattitude = '0';

            $senderUserAdress = tblCompanyModel::find($company_id)->companyAddress;
            $senderUserEmail = tblCompanyModel::find($company_id)->companyEmail;
            $senderUserBranch_id = tblUserConnectorModel::where('user_id', $senderUser_id)->first()->branch_id;
            $senderUserBranchName = tblBranchModel::find($senderUserBranch_id)->branchName;
            $senderCompany_id = $company_id;
            $senderCompanyName = tblCompanyModel::find($company_id)->companyName;
            $senderDirector_id = tblUserConnectorModel::where('company_id', $company_id)->where('role_id', '3')->first()->user_id;
            $senderDirectorName = User::find($senderDirector_id)->name;

            $recipientUser_id = '0';
            $recipientUserRole_id = '0';
            $recipientUserName = $request->recipientUserName;
            $recipientUserPhone = $request->recipientUserPhone;
            $company_id1 = '0';
            $recipientUserPhoneAll = $request->recipientUserPhone;

            $recipientUserAdressLongitude = '0';
            $recipientUserAdressLattitude = '0';

            $recipientUserAdress = $request->recipientUserAdress;
            $recipientUserEmail = '0';
            $recipientUserBranch_id = $request->recipientUserBranch_id;
            // dd($recipientUserBranch_id);
            $recipientUserBranchName =  tblBranchModel::find($recipientUserBranch_id)->branchName;
            $recipientCompany_id = '0';
            $recipientCompanyName = $request->recipientCompanyName;
            $recipientDirector_id = '0';
            $recipientDirectorName = '0';
            $senderManager_id = $user->id;
            $senderManagerName = $user->name;
            $recipientManager_id = '0';
            $recipientManagerName = '0';
            $parcelCourier_id = '0';
            $parcelCourierName = '0';
            $newSender = '0';
            $newRecipient = '1';


            $tblParcelNewModel->refNumber = $refNumber;
            $tblParcelNewModel->parcelDescription = $parcelDescription;
            $tblParcelNewModel->parcelWeight = $parcelWeight;
            $tblParcelNewModel->parcelLength = $parcelLength;
            $tblParcelNewModel->parcelWidth = $parcelWidth;
            $tblParcelNewModel->parcelHeight = $parcelHeight;
            $tblParcelNewModel->parcelImage = $parcelImage;
            $tblParcelNewModel->parcelInvoiceImage = $parcelInvoiceImage;
            $tblParcelNewModel->parcelCreateDate = $parcelCreateDate;
            $tblParcelNewModel->parcelCurrentStatus_id = $parcelCurrentStatus_id;
            $tblParcelNewModel->parcelCurrentStatusName = $parcelCurrentStatusName;
            $tblParcelNewModel->parcelCurrentStatusDescription = $parcelCurrentStatusDescription;
            $tblParcelNewModel->parcelCurrentStatusUpdateDate = $parcelCurrentStatusUpdateDate;
            $tblParcelNewModel->parcelDeliveryType_id = $parcelDeliveryType_id;
            $tblParcelNewModel->parcelDeliveryTypeName = $parcelDeliveryTypeName;
            $tblParcelNewModel->parcelPlan_id = $parcelPlan_id;
            $tblParcelNewModel->parcelPlanName = $parcelPlanName;
            $tblParcelNewModel->parcelDeliveryTimeFrom = $parcelDeliveryTimeFrom;
            $tblParcelNewModel->parcelDeliveryTimeTo = $parcelDeliveryTimeTo;
            $tblParcelNewModel->parcelPayer_id = $parcelPayer_id;
            $tblParcelNewModel->parcelPayerName = $parcelPayerName;
            $tblParcelNewModel->parcelCourierService = $parcelCourierService;
            $tblParcelNewModel->parcelDiscount = $parcelDiscount;
            $tblParcelNewModel->parcelNalBeznal = $parcelNalBeznal;
            $tblParcelNewModel->parcelPriceUS = $parcelPriceUS;
            $tblParcelNewModel->parcelPriceRU = $parcelPriceRU;
            $tblParcelNewModel->parcelPriceUZS = $parcelPriceUZS;
            $tblParcelNewModel->senderUser_id = $senderUser_id;
            $tblParcelNewModel->senderUserRole_id = $senderUserRole_id;
            $tblParcelNewModel->senderUserName = $senderUserName;
            $tblParcelNewModel->senderUserPhone = $senderUserPhoneAll;
            $tblParcelNewModel->senderUserAdressLongitude = $senderUserAdressLongitude;
            $tblParcelNewModel->senderUserAdressLattitude = $senderUserAdressLattitude;
            $tblParcelNewModel->senderUserAdress = $senderUserAdress;
            $tblParcelNewModel->senderUserEmail = $senderUserEmail;
            $tblParcelNewModel->senderUserBranch_id = $senderUserBranch_id;
            $tblParcelNewModel->senderUserBranchName = $senderUserBranchName;
            $tblParcelNewModel->senderCompany_id = $senderCompany_id;
            $tblParcelNewModel->senderCompanyName = $senderCompanyName;
            $tblParcelNewModel->senderDirector_id = $senderDirector_id;
            $tblParcelNewModel->senderDirectorName = $senderDirectorName;
            $tblParcelNewModel->recipientUser_id = $recipientUser_id;
            $tblParcelNewModel->recipientUserRole_id = $recipientUserRole_id;
            $tblParcelNewModel->recipientUserName = $recipientUserName;
            $tblParcelNewModel->recipientUserPhone = $recipientUserPhoneAll;
            $tblParcelNewModel->recipientUserAdressLongitude = $recipientUserAdressLongitude;
            $tblParcelNewModel->recipientUserAdressLattitude = $recipientUserAdressLattitude;
            $tblParcelNewModel->recipientUserAdress = $recipientUserAdress;
            $tblParcelNewModel->recipientUserEmail = $recipientUserEmail;
            $tblParcelNewModel->recipientUserBranch_id = $recipientUserBranch_id;
            $tblParcelNewModel->recipientUserBranchName = $recipientUserBranchName;
            $tblParcelNewModel->recipientCompany_id = $recipientCompany_id;
            $tblParcelNewModel->recipientCompanyName = $recipientCompanyName;
            $tblParcelNewModel->recipientDirector_id = $recipientDirector_id;
            $tblParcelNewModel->recipientDirectorName = $recipientDirectorName;
            $tblParcelNewModel->senderManager_id = $senderManager_id;
            $tblParcelNewModel->senderManagerName = $senderManagerName;
            $tblParcelNewModel->recipientManager_id = $recipientManager_id;
            $tblParcelNewModel->recipientManagerName = $recipientManagerName;
            $tblParcelNewModel->parcelCourier_id = $parcelCourier_id;
            $tblParcelNewModel->parcelCourierName = $parcelCourierName;
            $tblParcelNewModel->newSender = $newSender;
            $tblParcelNewModel->newRecipient = $newRecipient;
            $tblParcelNewModel->save();
        }
        //new sender old recepient
        elseif (!$request->has('checkBoxOldSender') && $request->has('checkBoxOldRecipient')) {
            $refNumber1 = rand(100000000000, 999999999999);
            $digits =(string)$refNumber1;
            $even_sum = $digits{1} + $digits{3} + $digits{5} + $digits{7} + $digits{9} + $digits{11};
            $even_sum_three = $even_sum * 3;
            $odd_sum = $digits{0} + $digits{2} + $digits{4} + $digits{6} + $digits{8} + $digits{10};
            $total_sum = $even_sum_three + $odd_sum;
            $next_ten = (ceil($total_sum/10))*10;
            $check_digit = $next_ten - $total_sum;
            $refNumber = $digits . $check_digit;

            $parcelDescription = $request->parcelDescription;
            $parcelWeight = $request->parcelWeight;
            $parcelLength = $request->parcelLength;
            $parcelWidth = $request->parcelWidth;
            $parcelHeight = $request->parcelHeight;

            $tblParcelStatusHistoryModel->refNumber = $refNumber;
            $tblParcelStatusHistoryModel->parcelStatus_id = '2';
            $tblParcelStatusHistoryModel->parcelStatus = 'Принят в городе отправителя';
            $tblParcelStatusHistoryModel->parcelCurrentStatusDescription = 'Посылка благополучна было принято в городе отправителя';
            $tblParcelStatusHistoryModel->parcelStatusDate = $mytime;
            $tblParcelStatusHistoryModel->save();

            if ($request->hasFile('parcelImage')) {
                $filenameWithExt = $request->file('parcelImage')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extention = $request->file('parcelImage')->getClientOriginalExtension();
                $filenameStore = $refNumber . '-' . $filename . '.' . $extention;

                $path = $request->file('parcelImage')->storeAs('public/images', $filenameStore);
                // dd($path);
                $parcelImage = "storage/images/{$filenameStore}";
                $parcelInvoiceImage = "storage/images/nophoto.jpg";
            } else {
                $parcelImage = "storage/images/nophoto.jpg";
                $parcelInvoiceImage = "storage/images/nophoto.jpg";
            }

            $parcelCreateDate = $mytime;
            $parcelCurrentStatus_id = '2';
            $parcelCurrentStatusName = 'Принят в городе отправителя';
            $parcelCurrentStatusDescription = 'Посылка благополучна было принято в городе отправителя';
            $parcelCurrentStatusUpdateDate = $mytime;
            if ($request->has('parcelDeliveryType_id')) {
                $parcelDeliveryType_id = '1';
                $parcelDeliveryTypeName = 'ДО ПОЛУЧАТЕЛЯ';
            } elseif (!$request->has('parcelDeliveryType_id')) {
                $parcelDeliveryType_id = '0';
                $parcelDeliveryTypeName = 'ДО СКЛАДА';
            }

            $parcelPlan_id = $request->parcelPlan_id;
            $plan = tblParcelPlanModel::find($parcelPlan_id);
            $parcelPlanName = $plan->parcelPlanName;
            $parcelDeliveryTimeFrom = $plan->parcelPlanDate;
            $parcelDeliveryTimeTo = $plan->parcelPlanDate;

            if ($request->has('parcelPayer_id')) {
                $parcelPayer_id = '1';
                $parcelPayerName = 'Отправитель';
            } elseif (!$request->has('parcelPayer_id')) {
                $parcelPayer_id = '0';
                $parcelPayerName = 'Получатель';
            }

            if ($request->has('parcelCourierService')) {
                $parcelCourierService = '1';
            } elseif (!$request->has('parcelCourierService')) {
                $parcelCourierService = '0';
            }

            $parcelDiscount = $request->parcelDiscount;
            $parcelNalBeznal = '1';
            $parcelPriceUS = $request->parcelPriceUS;
            $parcelPriceRU = $request->parcelPriceRU;
            $parcelPriceUZS = $request->parcelPriceUZS;

            $senderUser_id = '0';
            $senderUserRole_id = '0';
            $senderUserName = $request->senderUserName;
            $senderUserPhone = $request->senderUserPhone;
            $company_id = '0';
            $companyPhone = '0';
            $senderUserPhoneAll = '0';

            $senderUserAdressLongitude = '0';
            $senderUserAdressLattitude = '0';

            $senderUserAdress = $request->senderUserAdress;
            $senderUserEmail = '0';
            $forBranch = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
            $senderUserBranch_id = $forBranch;
            $senderUserBranchName = tblBranchModel::find($forBranch)->branchName;
            $senderCompany_id = '0';
            $senderCompanyName = $request->senderCompanyName;
            // dd($senderCompanyName);
            $senderDirector_id = '0';
            $senderDirectorName = '0';

            $recipientUser_id = $request->recipientUser_id;
            $recipientUserRole_id = tblUserConnectorModel::where('user_id', $recipientUser_id)->first()->role_id;
            $recipientUserName = User::find($recipientUser_id)->name;
            $recipientUserPhone = User::find($recipientUser_id)->phone;
            $company_id1 = tblUserConnectorModel::where('user_id', $recipientUser_id)->first()->company_id;
            $companyPhone1 = tblCompanyModel::find($company_id1)->companyPhone;
            $recipientUserPhoneAll = $recipientUserPhone . ', ' . $companyPhone1;

            $recipientUserAdressLongitude = '0';
            $recipientUserAdressLattitude = '0';

            $recipientUserAdress = tblCompanyModel::find($company_id1)->companyAddress;
            $recipientUserEmail = tblCompanyModel::find($company_id1)->companyEmail;
            $recipientUserBranch_id = tblUserConnectorModel::where('user_id', $recipientUser_id)->first()->branch_id;
            $recipientUserBranchName = tblBranchModel::find($recipientUserBranch_id)->branchName;
            $recipientCompany_id = $company_id1;
            $recipientCompanyName = tblCompanyModel::find($company_id1)->companyName;
            $recipientDirector_id = tblUserConnectorModel::where('company_id', $company_id1)->where('role_id', '3')->first()->user_id;
            $recipientDirectorName = User::find($recipientDirector_id)->name;
            $senderManager_id = $user->id;
            $senderManagerName = $user->name;
            $recipientManager_id = '0';
            $recipientManagerName = '0';
            $parcelCourier_id = '0';
            $parcelCourierName = '0';
            $newSender = '1';
            $newRecipient = '0';
            // dd($senderManagerName);

            $tblParcelNewModel->refNumber = $refNumber;
            $tblParcelNewModel->parcelDescription = $parcelDescription;
            $tblParcelNewModel->parcelWeight = $parcelWeight;
            $tblParcelNewModel->parcelLength = $parcelLength;
            $tblParcelNewModel->parcelWidth = $parcelWidth;
            $tblParcelNewModel->parcelHeight = $parcelHeight;
            $tblParcelNewModel->parcelImage = $parcelImage;
            $tblParcelNewModel->parcelInvoiceImage = $parcelInvoiceImage;
            $tblParcelNewModel->parcelCreateDate = $parcelCreateDate;
            $tblParcelNewModel->parcelCurrentStatus_id = $parcelCurrentStatus_id;
            $tblParcelNewModel->parcelCurrentStatusName = $parcelCurrentStatusName;
            $tblParcelNewModel->parcelCurrentStatusDescription = $parcelCurrentStatusDescription;
            $tblParcelNewModel->parcelCurrentStatusUpdateDate = $parcelCurrentStatusUpdateDate;
            $tblParcelNewModel->parcelDeliveryType_id = $parcelDeliveryType_id;
            $tblParcelNewModel->parcelDeliveryTypeName = $parcelDeliveryTypeName;
            $tblParcelNewModel->parcelPlan_id = $parcelPlan_id;
            $tblParcelNewModel->parcelPlanName = $parcelPlanName;
            $tblParcelNewModel->parcelDeliveryTimeFrom = $parcelDeliveryTimeFrom;
            $tblParcelNewModel->parcelDeliveryTimeTo = $parcelDeliveryTimeTo;
            $tblParcelNewModel->parcelPayer_id = $parcelPayer_id;
            $tblParcelNewModel->parcelPayerName = $parcelPayerName;
            $tblParcelNewModel->parcelCourierService = $parcelCourierService;
            $tblParcelNewModel->parcelDiscount = $parcelDiscount;
            $tblParcelNewModel->parcelNalBeznal = $parcelNalBeznal;
            $tblParcelNewModel->parcelPriceUS = $parcelPriceUS;
            $tblParcelNewModel->parcelPriceRU = $parcelPriceRU;
            $tblParcelNewModel->parcelPriceUZS = $parcelPriceUZS;
            $tblParcelNewModel->senderUser_id = $senderUser_id;
            $tblParcelNewModel->senderUserRole_id = $senderUserRole_id;
            $tblParcelNewModel->senderUserName = $senderUserName;
            $tblParcelNewModel->senderUserPhone = $senderUserPhoneAll;
            $tblParcelNewModel->senderUserAdressLongitude = $senderUserAdressLongitude;
            $tblParcelNewModel->senderUserAdressLattitude = $senderUserAdressLattitude;
            $tblParcelNewModel->senderUserAdress = $senderUserAdress;
            $tblParcelNewModel->senderUserEmail = $senderUserEmail;
            $tblParcelNewModel->senderUserBranch_id = $senderUserBranch_id;
            $tblParcelNewModel->senderUserBranchName = $senderUserBranchName;
            $tblParcelNewModel->senderCompany_id = $senderCompany_id;
            $tblParcelNewModel->senderCompanyName = $senderCompanyName;
            $tblParcelNewModel->senderDirector_id = $senderDirector_id;
            $tblParcelNewModel->senderDirectorName = $senderDirectorName;
            $tblParcelNewModel->recipientUser_id = $recipientUser_id;
            $tblParcelNewModel->recipientUserRole_id = $recipientUserRole_id;
            $tblParcelNewModel->recipientUserName = $recipientUserName;
            $tblParcelNewModel->recipientUserPhone = $recipientUserPhoneAll;
            $tblParcelNewModel->recipientUserAdressLongitude = $recipientUserAdressLongitude;
            $tblParcelNewModel->recipientUserAdressLattitude = $recipientUserAdressLattitude;
            $tblParcelNewModel->recipientUserAdress = $recipientUserAdress;
            $tblParcelNewModel->recipientUserEmail = $recipientUserEmail;
            $tblParcelNewModel->recipientUserBranch_id = $recipientUserBranch_id;
            $tblParcelNewModel->recipientUserBranchName = $recipientUserBranchName;
            $tblParcelNewModel->recipientCompany_id = $recipientCompany_id;
            $tblParcelNewModel->recipientCompanyName = $recipientCompanyName;
            $tblParcelNewModel->recipientDirector_id = $recipientDirector_id;
            $tblParcelNewModel->recipientDirectorName = $recipientDirectorName;
            $tblParcelNewModel->senderManager_id = $senderManager_id;
            $tblParcelNewModel->senderManagerName = $senderManagerName;
            $tblParcelNewModel->recipientManager_id = $recipientManager_id;
            $tblParcelNewModel->recipientManagerName = $recipientManagerName;
            $tblParcelNewModel->parcelCourier_id = $parcelCourier_id;
            $tblParcelNewModel->parcelCourierName = $parcelCourierName;
            $tblParcelNewModel->newSender = $newSender;
            $tblParcelNewModel->newRecipient = $newRecipient;
            $tblParcelNewModel->save();
        }
        // new sender new recipient
        elseif (!$request->has('checkBoxOldSender') && !$request->has('checkBoxOldRecipient')) {


           $refNumber1 = rand(100000000000, 999999999999);
            $digits =(string)$refNumber1;
            $even_sum = $digits{1} + $digits{3} + $digits{5} + $digits{7} + $digits{9} + $digits{11};
            $even_sum_three = $even_sum * 3;
            $odd_sum = $digits{0} + $digits{2} + $digits{4} + $digits{6} + $digits{8} + $digits{10};
            $total_sum = $even_sum_three + $odd_sum;
            $next_ten = (ceil($total_sum/10))*10;
            $check_digit = $next_ten - $total_sum;
            $refNumber = $digits . $check_digit;


            $parcelDescription = $request->parcelDescription;
            $parcelWeight = $request->parcelWeight;
            $parcelLength = $request->parcelLength;
            $parcelWidth = $request->parcelWidth;
            $parcelHeight = $request->parcelHeight;

            $tblParcelStatusHistoryModel->refNumber = $refNumber;
            $tblParcelStatusHistoryModel->parcelStatus_id = '2';
            $tblParcelStatusHistoryModel->parcelStatus = 'Принят в городе отправителя';
            $tblParcelStatusHistoryModel->parcelCurrentStatusDescription = 'Посылка благополучна было принято в городе отправителя';
            $tblParcelStatusHistoryModel->parcelStatusDate = $mytime;
            $tblParcelStatusHistoryModel->save();

            if ($request->hasFile('parcelImage')) {
                $filenameWithExt = $request->file('parcelImage')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extention = $request->file('parcelImage')->getClientOriginalExtension();
                $filenameStore = $refNumber . '-' . $filename . '.' . $extention;

                $path = $request->file('parcelImage')->storeAs('public/images', $filenameStore);
                // dd($path);
                $parcelImage = "storage/images/{$filenameStore}";
                $parcelInvoiceImage = "storage/images/nophoto.jpg";
            } else {
                $parcelImage = "storage/images/nophoto.jpg";
                $parcelInvoiceImage = "storage/images/nophoto.jpg";
            }

            $parcelCreateDate = $mytime;
            $parcelCurrentStatus_id = '2';
            $parcelCurrentStatusName = 'Принят в городе отправителя';
            $parcelCurrentStatusDescription = 'Посылка благополучна было принято в городе отправителя';
            $parcelCurrentStatusUpdateDate = $mytime;
            if ($request->has('parcelDeliveryType_id')) {
                $parcelDeliveryType_id = '1';
                $parcelDeliveryTypeName = 'ДО ПОЛУЧАТЕЛЯ';
            } elseif (!$request->has('parcelDeliveryType_id')) {
                $parcelDeliveryType_id = '0';
                $parcelDeliveryTypeName = 'ДО СКЛАДА';
            }

            $parcelPlan_id = $request->parcelPlan_id;
            $plan = tblParcelPlanModel::find($parcelPlan_id);
            $parcelPlanName = $plan->parcelPlanName;
            $parcelDeliveryTimeFrom = $plan->parcelPlanDate;
            $parcelDeliveryTimeTo = $plan->parcelPlanDate;

            if ($request->has('parcelPayer_id')) {
                $parcelPayer_id = '1';
                $parcelPayerName = 'Отправитель';
            } elseif (!$request->has('parcelPayer_id')) {
                $parcelPayer_id = '0';
                $parcelPayerName = 'Получатель';
            }

            if ($request->has('parcelCourierService')) {
                $parcelCourierService = '1';
            } elseif (!$request->has('parcelCourierService')) {
                $parcelCourierService = '0';
            }

            $parcelDiscount = $request->parcelDiscount;
            $parcelNalBeznal = '1';
            $parcelPriceUS = $request->parcelPriceUS;
            $parcelPriceRU = $request->parcelPriceRU;
            $parcelPriceUZS = $request->parcelPriceUZS;

            $senderUser_id = '0';
            $senderUserRole_id = '0';
            $senderUserName = $request->senderUserName;
            $senderUserPhoneAll = $request->senderUserPhone;

            $senderUserAdressLongitude = '0';
            $senderUserAdressLattitude = '0';

            $senderUserAdress = $request->senderUserAdress;
            $senderUserEmail = '0';
            $forBranch = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
            $senderUserBranch_id = $forBranch;
            $senderUserBranchName = tblBranchModel::find($forBranch)->branchName;
            $senderCompany_id = '0';
            $senderCompanyName = '0';
            $senderDirector_id = '0';
            $senderDirectorName = '0';

            $recipientUser_id = '0';
            $recipientUserRole_id = '0';
            $recipientUserName = $request->recipientUserName;
            $recipientUserPhone = $request->recipientUserPhone;
            $company_id1 = '0';
            $recipientUserPhoneAll = $request->recipientUserPhone;

            $recipientUserAdressLongitude = '0';
            $recipientUserAdressLattitude = '0';

            $recipientUserAdress = $request->recipientUserAdress;
            $recipientUserEmail = '0';
            $recipientUserBranch_id = $request->recipientUserBranch_id;
            // dd($recipientUserBranch_id);
            $recipientUserBranchName =  tblBranchModel::find($recipientUserBranch_id)->branchName;
            $recipientCompany_id = '0';
            $recipientCompanyName = $request->recipientCompanyName;
            $recipientDirector_id = '0';
            $recipientDirectorName = '0';
            $senderManager_id = $user->id;
            $senderManagerName = $user->name;
            $recipientManager_id = '0';
            $recipientManagerName = '0';
            $parcelCourier_id = '0';
            $parcelCourierName = '0';
            $newSender = '1';
            $newRecipient = '1';
            // dd($senderManagerName);

            $tblParcelNewModel->refNumber = $refNumber;
            $tblParcelNewModel->parcelDescription = $parcelDescription;
            $tblParcelNewModel->parcelWeight = $parcelWeight;
            $tblParcelNewModel->parcelLength = $parcelLength;
            $tblParcelNewModel->parcelWidth = $parcelWidth;
            $tblParcelNewModel->parcelHeight = $parcelHeight;
            $tblParcelNewModel->parcelImage = $parcelImage;
            $tblParcelNewModel->parcelInvoiceImage = $parcelInvoiceImage;
            $tblParcelNewModel->parcelCreateDate = $parcelCreateDate;
            $tblParcelNewModel->parcelCurrentStatus_id = $parcelCurrentStatus_id;
            $tblParcelNewModel->parcelCurrentStatusName = $parcelCurrentStatusName;
            $tblParcelNewModel->parcelCurrentStatusDescription = $parcelCurrentStatusDescription;
            $tblParcelNewModel->parcelCurrentStatusUpdateDate = $parcelCurrentStatusUpdateDate;
            $tblParcelNewModel->parcelDeliveryType_id = $parcelDeliveryType_id;
            $tblParcelNewModel->parcelDeliveryTypeName = $parcelDeliveryTypeName;
            $tblParcelNewModel->parcelPlan_id = $parcelPlan_id;
            $tblParcelNewModel->parcelPlanName = $parcelPlanName;
            $tblParcelNewModel->parcelDeliveryTimeFrom = $parcelDeliveryTimeFrom;
            $tblParcelNewModel->parcelDeliveryTimeTo = $parcelDeliveryTimeTo;
            $tblParcelNewModel->parcelPayer_id = $parcelPayer_id;
            $tblParcelNewModel->parcelPayerName = $parcelPayerName;
            $tblParcelNewModel->parcelCourierService = $parcelCourierService;
            $tblParcelNewModel->parcelDiscount = $parcelDiscount;
            $tblParcelNewModel->parcelNalBeznal = $parcelNalBeznal;
            $tblParcelNewModel->parcelPriceUS = $parcelPriceUS;
            $tblParcelNewModel->parcelPriceRU = $parcelPriceRU;
            $tblParcelNewModel->parcelPriceUZS = $parcelPriceUZS;
            $tblParcelNewModel->senderUser_id = $senderUser_id;
            $tblParcelNewModel->senderUserRole_id = $senderUserRole_id;
            $tblParcelNewModel->senderUserName = $senderUserName;
            $tblParcelNewModel->senderUserPhone = $senderUserPhoneAll;
            $tblParcelNewModel->senderUserAdressLongitude = $senderUserAdressLongitude;
            $tblParcelNewModel->senderUserAdressLattitude = $senderUserAdressLattitude;
            $tblParcelNewModel->senderUserAdress = $senderUserAdress;
            $tblParcelNewModel->senderUserEmail = $senderUserEmail;
            $tblParcelNewModel->senderUserBranch_id = $senderUserBranch_id;
            $tblParcelNewModel->senderUserBranchName = $senderUserBranchName;
            $tblParcelNewModel->senderCompany_id = $senderCompany_id;
            $tblParcelNewModel->senderCompanyName = $senderCompanyName;
            $tblParcelNewModel->senderDirector_id = $senderDirector_id;
            $tblParcelNewModel->senderDirectorName = $senderDirectorName;
            $tblParcelNewModel->recipientUser_id = $recipientUser_id;
            $tblParcelNewModel->recipientUserRole_id = $recipientUserRole_id;
            $tblParcelNewModel->recipientUserName = $recipientUserName;
            $tblParcelNewModel->recipientUserPhone = $recipientUserPhoneAll;
            $tblParcelNewModel->recipientUserAdressLongitude = $recipientUserAdressLongitude;
            $tblParcelNewModel->recipientUserAdressLattitude = $recipientUserAdressLattitude;
            $tblParcelNewModel->recipientUserAdress = $recipientUserAdress;
            $tblParcelNewModel->recipientUserEmail = $recipientUserEmail;
            $tblParcelNewModel->recipientUserBranch_id = $recipientUserBranch_id;
            $tblParcelNewModel->recipientUserBranchName = $recipientUserBranchName;
            $tblParcelNewModel->recipientCompany_id = $recipientCompany_id;
            $tblParcelNewModel->recipientCompanyName = $recipientCompanyName;
            $tblParcelNewModel->recipientDirector_id = $recipientDirector_id;
            $tblParcelNewModel->recipientDirectorName = $recipientDirectorName;
            $tblParcelNewModel->senderManager_id = $senderManager_id;
            $tblParcelNewModel->senderManagerName = $senderManagerName;
            $tblParcelNewModel->recipientManager_id = $recipientManager_id;
            $tblParcelNewModel->recipientManagerName = $recipientManagerName;
            $tblParcelNewModel->parcelCourier_id = $parcelCourier_id;
            $tblParcelNewModel->parcelCourierName = $parcelCourierName;
            $tblParcelNewModel->newSender = $newSender;
            $tblParcelNewModel->newRecipient = $newRecipient;
            $tblParcelNewModel->save();
        }

        $id = 2;
        $data = [
            'id' => $tblParcelNewModel->id,
            'refNumber' => $refNumber,
            'parcelImage' => $parcelImage,
            'parcelCurrentStatusName' => $parcelCurrentStatusName,
            'parcelCurrentStatus_id' => $parcelCurrentStatus_id,
            'parcelCurrentStatusUpdateDate' => $parcelCurrentStatusUpdateDate,

        ];

        if (User::find($senderUser_id) != null) {
            User::find($senderUser_id)->notify(new NewParcelNotification($data));
        }
        if (User::find($senderDirector_id) != null) {
            User::find($senderDirector_id)->notify(new NewParcelNotification($data));
        }


        // dd($request->all());
        return redirect()->route('manager.parcel.listofsendedparcel',  compact(['user', 'id']))->with('status', 'Новая посылка успешно добавлена');
    }

    public function delete($id, $refNumber)
    {
        $user = Auth::user();
        $myTask = tblParcelNewModel::find($id)->delete();
        $myTask2 = tblParcelStatusHistoryModel::where('refNumber', $refNumber)->delete();
        $title = 'Все отправленные посылки';
        $id = 0;
        return redirect()->route('manager.parcel.listofsendedparcel', compact(['user', 'title', 'id']))->with('status', 'Посылка успешно удалена');
    }

    public function editparcel($id)
    {
        $user = Auth::user();
        $users = tblUserConnectorModel::select('tbluserconnector.*', 'tblbranch.*', 'tblcompany.*', 'users.*')
            ->join('users', 'tbluserconnector.user_id',   '=', 'users.id')
            ->join('tblbranch', 'tbluserconnector.branch_id',   '=', 'tblbranch.id')
            ->leftjoin('tblcompany', 'tbluserconnector.company_id',   '=', 'tblcompany.id')
            ->where('users.role_id', '4')
            ->orderby('users.id')
            ->get();

        $branches = ['' => 'Выберите филиал'] + tblBranchModel::pluck('branchName', 'id')->toArray();
        $parcelPlanName = ['' => 'Выберите тариф'] + tblParcelPlanModel::pluck('parcelPlanName', 'id')->toArray();
        $myTask1 = tblParcelNewModel::find($id);

        return view('manager.parcel.editparcel', [
            'branches'   => $branches,
            'parcelPlanName' => $parcelPlanName,
            'users' => $users,
            'parcel' => $myTask1
        ], compact(['user']));
    }
    public function updateparcel(Request $request, $id)
    {
        $user = Auth::user();
        $myTask1 = tblParcelNewModel::find($id);
        $myTask2 = tblParcelNewModel::find($id);

        $myTask1->fill($request->all());
        $myTask1->senderUser_id = $myTask2->senderUser_id;
        $myTask1->recipientUser_id = $myTask2->recipientUser_id;

        if ($request->hasFile('parcelImage')) {
            $filenameWithExt = $request->file('parcelImage')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extention = $request->file('parcelImage')->getClientOriginalExtension();
            $filenameStore = $myTask2->refNumber . '-' . $filename . '.' . $extention;
            $path = $request->file('parcelImage')->storeAs('/public/images/', $filenameStore);
            $myTask1->parcelImage = "/storage/images/{$filenameStore}";
        }

        $myTask1->save();
        $title = 'Все отправленные посылки';
        $id = 0;
        return redirect()->route('manager.parcel.listofsendedparcel', compact(['user', 'id']))->with('status', 'Посылка успешно обновлена');
    }

    public function updatestatus($id)
    {
        $user = Auth::user();
        $userBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        $status1 = ['' => 'Статус'] + tblParcelStatusModel::select('*')
            ->where('id', 'not like', '%5%')
            ->where('id', 'not like', '%6%')
            ->where('id', 'not like', '%7%')
            ->where('id', 'not like', '%8%')
            ->where('id', 'not like', '%9%')
            ->pluck('parcelStatus', 'id')->toArray();

        $status2 = ['' => 'Статус'] + tblParcelStatusModel::select('*')
            ->where('id', 'not like', '%1%')
            ->where('id', 'not like', '%2%')
            ->where('id', 'not like', '%3%')
            ->where('id', 'not like', '%4%')
            ->pluck('parcelStatus', 'id')->toArray();
        $id = tblParcelNewModel::find($id);
        $courier = ['' => 'Курьер'] + User::where('id', tblUserConnectorModel::where('role_id', 2)->where('branch_id', $userBranch_id)->first()->user_id)->where('role_id', '=', '2')->pluck('name', 'id')->toArray();
        return view('manager.parcel.updategeneral', [
            'status1' => $status1, 'status2' => $status2, 'courier' => $courier, 'id' => $id, 'senderUserBranch_id' => $userBranch_id
        ], compact(['user']));
    }

    public function updatestatussave(Request $request, $id)
    {
        $user = Auth::user();
        $userBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        $title = 'Все отправленные посылки';
        $myTask1 = tblParcelNewModel::find($id);
        $lastStatus_id = tblParcelStatusHistoryModel::where('refNumber', $myTask1->refNumber)->latest()->first()->parcelStatus_id;
            // dd($lastStatus_id);

        if ($request->id1 == null) {
            return redirect()->route('manager.parcel.updatestatus', $id)->with('danger', 'Статус не выбран');
            // dd('Статус не выбран');
        } elseif ($request->id1 != null) {
            if ($request->id1 < $lastStatus_id) {
                return redirect()->route('manager.parcel.updatestatus', $id)->with('danger', 'Выберите более поздний статус');
                // dd('Выберите более поздний статус');
            }
            if ($request->id1 == $lastStatus_id) {
                return redirect()->route('manager.parcel.updatestatus', $id)->with('danger', 'Посылка уже имеет данный статус');
                // dd('Выбранный статус уже имеется у посылки');
            }

            if ($request->id1 > $lastStatus_id && $request->id1 != 7 && $request->id1 != 9 && $request->id2 == null) {
                // dd('Выбранный статус подходить');
                $myTask1 = tblParcelNewModel::find($id);
                $myTask1->fill($request->all());
                $myTask1->parcelCurrentStatus_id = $request->id1;
                $newStatusname = tblParcelStatusModel::find($request->id1)->parcelStatus;
                $myTask1->parcelCurrentStatusName = $newStatusname;
                $myTask1->parcelCurrentStatusDescription = 'Статус посылки успешно обновлен';
                $mytime  = Carbon::now();
                $mytime->setTimezone('Asia/Tashkent');
                $mytime->toDateTimeString();
                $myTask1->parcelCurrentStatusUpdateDate = $mytime;
                $myTask1->update();
                $myTask2 = new tblParcelStatusHistoryModel();
                $myTask2->fill($request->all());

                $myTask2->refNumber = $myTask1->refNumber;
                $myTask2->parcelStatus_id = $request->id1;
                $myTask2->parcelStatus = $newStatusname;
                $myTask2->parcelCurrentStatusDescription = 'Статус посылки успешно обновлен';
                $myTask2->parcelStatusDate = $mytime;
                $myTask2->save();

                $title = 'Все отправленные посылки';
                $id = $request->id1;
                if ($userBranch_id != $myTask1->senderUserBranch_id) {

                    $data = [
                        'id' => $myTask1->id,
                        'refNumber' => $myTask1->refNumber,
                        'parcelImage' => $myTask1->parcelImage,
                        'parcelCurrentStatusName' => $myTask1->parcelCurrentStatusName,
                        'parcelCurrentStatus_id' => $myTask1->parcelCurrentStatus_id,
                        'parcelCurrentStatusUpdateDate' => $myTask1->parcelCurrentStatusUpdateDate,
                    ];
                    $senderManager_id = $myTask1->senderManager_id;
                    $senderCouriers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->senderUserBranch_id)->where('role_id', 2)->pluck('user_id'));
                    $senderDirector_id = $myTask1->senderDirector_id;
                    $senderUser_id = $myTask1->senderUser_id;
                    $recipientManagers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->recipientUserBranch_id)->where('role_id', 1)->pluck('user_id'));
                    $recipientCouriers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->recipientUserBranch_id)->where('role_id', 2)->pluck('user_id'));
                    $recipientDirector_id = $myTask1->recipientDirector_id;
                    $recipientUser_id = $myTask1->recipientUser_id;
                    switch ($myTask2->parcelStatus_id) {
                        case 5:         // Принят в городе получателя ||senderManager_id||senderDirector_id||senderUser_id||recipientDirector_id||recipientUser_id||
                            User::find($senderManager_id)->notify(new NewParcelNotification($data));
                            if (User::find($senderDirector_id) != null) {
                                User::find($senderDirector_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($senderUser_id) != null) {
                                User::find($senderUser_id)->notify(new NewParcelNotification($data));
                            }
                            User::find($recipientDirector_id)->notify(new NewParcelNotification($data));
                            User::find($recipientUser_id)->notify(new NewParcelNotification($data));
                            break;
                        case 6:         // На складе готов к выдаче ||senderManager_id||senderDirector_id||senderUser_id||recipientDirector_id||recipientUser_id||parcelCourier_id||
                            User::find($senderManager_id)->notify(new NewParcelNotification($data));
                            if (User::find($senderDirector_id) != null) {
                                User::find($senderDirector_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($senderUser_id) != null) {
                                User::find($senderUser_id)->notify(new NewParcelNotification($data));
                            }
                            foreach ($recipientCouriers as $recipientCourier) {
                                $recipientCourier->notify(new NewParcelNotification($data));
                            }
                            User::find($recipientDirector_id)->notify(new NewParcelNotification($data));
                            User::find($recipientUser_id)->notify(new NewParcelNotification($data));
                            break;
                        case 7:         // На доставке у курьера ||senderManager_id||senderDirector_id||senderUser_id||recipientDirector_id||recipientUser_id||
                            User::find($senderManager_id)->notify(new NewParcelNotification($data));
                            if (User::find($senderDirector_id) != null) {
                                User::find($senderDirector_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($senderUser_id) != null) {
                                User::find($senderUser_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($recipientDirector_id) != null) {
                                User::find($recipientDirector_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($recipientUser_id) != null) {
                                User::find($recipientUser_id)->notify(new NewParcelNotification($data));
                            }
                            break;
                        case 8:         // Возвращен на склад доставки ||senderManager_id||senderDirector_id||senderUser_id||parcelCourier_id||recipientDirector_id||recipientUser_id||recipientCourier_id||
                            User::find($senderManager_id)->notify(new NewParcelNotification($data));
                            if (User::find($senderDirector_id) != null) {
                                User::find($senderDirector_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($senderUser_id) != null) {
                                User::find($senderUser_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($recipientDirector_id) != null) {
                                User::find($recipientDirector_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($recipientUser_id) != null) {
                                User::find($recipientUser_id)->notify(new NewParcelNotification($data));
                            }
                            foreach ($recipientCouriers as $recipientCourier) {
                                $recipientCourier->notify(new NewParcelNotification($data));
                            }
                            break;
                        case 9:         // Доставлен ||senderManager_id||senderDirector_id||senderUser_id||recipientDirector_id||recipientUser_id||parcelCourier_id||
                            User::find($senderManager_id)->notify(new NewParcelNotification($data));
                            if (User::find($senderDirector_id) != null) {
                                User::find($senderDirector_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($senderUser_id) != null) {
                                User::find($senderUser_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($recipientDirector_id) != null) {
                                User::find($recipientDirector_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($recipientUser_id) != null) {
                                User::find($recipientUser_id)->notify(new NewParcelNotification($data));
                            }
                            $recipientCourier_id = $myTask1->parcelCourier_id;
                            User::find($recipientCourier_id)->notify(new NewParcelNotification($data));
                            break;
                        default:
                            break;
                    }
                    return redirect()->route('manager.parcel.listofwaitingparcel', compact(['user', 'title', 'id']))->with('status', 'Посылка успешно обновлена');
                } else {
                    $data = [
                        'id' => $myTask1->id,
                        'refNumber' => $myTask1->refNumber,
                        'parcelImage' => $myTask1->parcelImage,
                        'parcelCurrentStatusName' => $myTask1->parcelCurrentStatusName,
                        'parcelCurrentStatus_id' => $myTask1->parcelCurrentStatus_id,
                        'parcelCurrentStatusUpdateDate' => $myTask1->parcelCurrentStatusUpdateDate,
                    ];
                    $senderManager_id = $myTask1->senderManager_id;
                    $senderCouriers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->senderUserBranch_id)->where('role_id', 2)->pluck('user_id'));
                    $senderDirector_id = $myTask1->senderDirector_id;
                    $senderUser_id = $myTask1->senderUser_id;
                    $recipientManagers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->recipientUserBranch_id)->where('role_id', 1)->pluck('user_id'));
                    $recipientCouriers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->recipientUserBranch_id)->where('role_id', 2)->pluck('user_id'));
                    $recipientDirector_id = $myTask1->recipientDirector_id;
                    $recipientUser_id = $myTask1->recipientUser_id;
                    switch ($myTask2->parcelStatus_id) {
                        case 2:         // Принят в городе отправителя ||senderDirector_id||senderUser_id||
                            if (User::find($senderDirector_id) != null) {
                                User::find($senderDirector_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($senderUser_id) != null) {
                                User::find($senderUser_id)->notify(new NewParcelNotification($data));
                            }

                            break;
                        case 3:         // Отправлен в транзитный город ||senderDirector_id||senderUser_id||recipientManager_id||
                            if (User::find($senderDirector_id) != null) {
                                User::find($senderDirector_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($senderUser_id) != null) {
                                User::find($senderUser_id)->notify(new NewParcelNotification($data));
                            }

                            break;
                        case 4:         // Отправлен в город получателя ||senderDirector_id||senderUser_id||recipientManager_id||
                            if (User::find($senderDirector_id) != null) {
                                User::find($senderDirector_id)->notify(new NewParcelNotification($data));
                            }
                            if (User::find($senderUser_id) != null) {
                                User::find($senderUser_id)->notify(new NewParcelNotification($data));
                            }

                            foreach ($recipientManagers as $recipientManager) {
                                $recipientManager->notify(new NewParcelNotification($data));
                            }
                            break;
                        default:
                            break;
                    }
                    return redirect()->route('manager.parcel.listofsendedparcel', compact(['user', 'title', 'id']))->with('status', 'Посылка успешно обновлена');
                }
            }


            if ($request->id1 == 7 && $request->id2 == null) {
                return redirect()->route('manager.parcel.updatestatus', $id)->with('danger', 'Выберите курьера для доставки посылки');
                // dd('Выберите курьрера');
            } elseif ($request->id1 == 7 && $request->id2 != null) {
                $myTask1 = tblParcelNewModel::find($id);
                $myTask1->fill($request->all());
                $myTask1->parcelCurrentStatus_id = $request->id1;
                $newStatusname = tblParcelStatusModel::find($request->id1)->parcelStatus;
                $myTask1->parcelCurrentStatusName = $newStatusname;
                $myTask1->parcelCurrentStatusDescription = 'Статус посылки успешно обновлен';
                $courier = User::find($request->id2);
                $myTask1->parcelCourier_id = $courier->id;
                $myTask1->parcelCourierName = $courier->name;

                $mytime  = Carbon::now();
                $mytime->setTimezone('Asia/Tashkent');
                $mytime->toDateTimeString();
                $myTask1->parcelCurrentStatusUpdateDate = $mytime;
                $myTask1->update();
                $myTask2 = new tblParcelStatusHistoryModel();
                $myTask2->fill($request->all());

                $myTask2->refNumber = $myTask1->refNumber;
                $myTask2->parcelStatus_id = $request->id1;
                $myTask2->parcelStatus = $newStatusname;
                $myTask2->parcelCurrentStatusDescription = 'Статус посылки успешно обновлен';
                $myTask2->parcelStatusDate = $mytime;
                $myTask2->save();
                $id = $request->id1;
                $title = 'Все отправленные посылки';

                if ($userBranch_id != $myTask1->senderUserBranch_id) {
                    $senderManager_id = $myTask1->senderManager_id;
                    $senderCouriers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->senderUserBranch_id)->where('role_id', 2)->pluck('user_id'));
                    $senderDirector_id = $myTask1->senderDirector_id;
                    $senderUser_id = $myTask1->senderUser_id;
                    $recipientManagers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->recipientUserBranch_id)->where('role_id', 1)->pluck('user_id'));
                    $recipientCouriers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->recipientUserBranch_id)->where('role_id', 2)->pluck('user_id'));
                    $recipientDirector_id = $myTask1->recipientDirector_id;
                    $recipientUser_id = $myTask1->recipientUser_id;
                    $data = [
                        'id' => $myTask1->id,
                        'refNumber' => $myTask1->refNumber,
                        'parcelImage' => $myTask1->parcelImage,
                        'parcelCurrentStatusName' => $myTask1->parcelCurrentStatusName,
                        'parcelCurrentStatus_id' => $myTask1->parcelCurrentStatus_id,
                        'parcelCurrentStatusUpdateDate' => $myTask1->parcelCurrentStatusUpdateDate,
                    ];
                    User::find($senderManager_id)->notify(new NewParcelNotification($data));
                    if (User::find($senderDirector_id) != null) {
                        User::find($senderDirector_id)->notify(new NewParcelNotification($data));
                    }
                    if (User::find($senderUser_id) != null) {
                        User::find($senderUser_id)->notify(new NewParcelNotification($data));
                    }
                    if (User::find($recipientDirector_id) != null) {
                        User::find($recipientDirector_id)->notify(new NewParcelNotification($data));
                    }
                    if (User::find($recipientUser_id) != null) {
                        User::find($recipientUser_id)->notify(new NewParcelNotification($data));
                    }
                    User::find($$myTask1->parcelCourier_id)->notify(new NewParcelNotification($data));
                    return redirect()->route('manager.parcel.listofwaitingparcel', compact(['user', 'title', 'id']))->with('status', 'Посылка успешно обновлена');
                } else {
                    $senderManager_id = $myTask1->senderManager_id;
                    $senderCouriers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->senderUserBranch_id)->where('role_id', 2)->pluck('user_id'));
                    $senderDirector_id = $myTask1->senderDirector_id;
                    $senderUser_id = $myTask1->senderUser_id;
                    $recipientManagers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->recipientUserBranch_id)->where('role_id', 1)->pluck('user_id'));
                    $recipientCouriers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->recipientUserBranch_id)->where('role_id', 2)->pluck('user_id'));
                    $recipientDirector_id = $myTask1->recipientDirector_id;
                    $recipientUser_id = $myTask1->recipientUser_id;
                    $data = [
                        'id' => $myTask1->id,
                        'refNumber' => $myTask1->refNumber,
                        'parcelImage' => $myTask1->parcelImage,
                        'parcelCurrentStatusName' => $myTask1->parcelCurrentStatusName,
                        'parcelCurrentStatus_id' => $myTask1->parcelCurrentStatus_id,
                        'parcelCurrentStatusUpdateDate' => $myTask1->parcelCurrentStatusUpdateDate,
                    ];
                    User::find($senderManager_id)->notify(new NewParcelNotification($data));
                    if (User::find($senderDirector_id) != null) {
                        User::find($senderDirector_id)->notify(new NewParcelNotification($data));
                    }
                    if (User::find($senderUser_id) != null) {
                        User::find($senderUser_id)->notify(new NewParcelNotification($data));
                    }
                    if (User::find($recipientDirector_id) != null) {
                        User::find($recipientDirector_id)->notify(new NewParcelNotification($data));
                    }
                    if (User::find($recipientUser_id) != null) {
                        User::find($recipientUser_id)->notify(new NewParcelNotification($data));
                    }
                    User::find($$myTask1->parcelCourier_id)->notify(new NewParcelNotification($data));
                    return redirect()->route('manager.parcel.listofsendedparcel', compact(['user', 'title', 'id']))->with('status', 'Посылка успешно обновлена');
                }
                // dd('Статус для курьрера');
            }

            if ($request->id1 == 9 && $request->id2 == null && !$request->hasFile('parcelInvoiceImage')) {
                return redirect()->route('manager.parcel.updatestatus', $id)->with('danger', 'Выберите фото потверждающий доставленной посылки');
                // dd('Выберите фото');
            } elseif ($request->id1 == 9 && $request->id2 == null && $request->hasFile('parcelInvoiceImage')) {
                $myTask1 = tblParcelNewModel::find($id);
                $myTask1->fill($request->all());
                $myTask1->parcelCurrentStatus_id = $request->id1;
                $newStatusname = tblParcelStatusModel::find($request->id1)->parcelStatus;
                $myTask1->parcelCurrentStatusName = $newStatusname;
                $myTask1->parcelCurrentStatusDescription = 'Статус посылки успешно обновлен';
                $mytime  = Carbon::now();
                $mytime->setTimezone('Asia/Tashkent');
                $mytime->toDateTimeString();
                $myTask1->parcelCurrentStatusUpdateDate = $mytime;
                $myTask2 = new tblParcelStatusHistoryModel();
                $myTask2->fill($request->all());
                $myTask2->refNumber = $myTask1->refNumber;
                $myTask2->parcelStatus_id = $request->id1;
                $myTask2->parcelStatus = $newStatusname;
                $myTask2->parcelCurrentStatusDescription = 'Статус посылки успешно обновлен';
                $myTask2->parcelStatusDate = $mytime;
                $myTask2->save();

                if ($request->hasFile('parcelInvoiceImage')) {
                    $filenameWithExt = $request->file('parcelInvoiceImage')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extention = $request->file('parcelInvoiceImage')->getClientOriginalExtension();
                    $filenameStore = $myTask2->refNumber . '-Nak' . $filename . '.' . $extention;
                    $path = $request->file('parcelInvoiceImage')->storeAs('/public/images/', $filenameStore);
                    $myTask1->parcelInvoiceImage = "/storage/images/{$filenameStore}";
                }
                $myTask1->update();
                $title = 'Все отправленные посылки';
                $id = $request->id1;
                if ($userBranch_id != $myTask1->senderUserBranch_id) {
                    $senderManager_id = $myTask1->senderManager_id;
                    $senderCouriers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->senderUserBranch_id)->where('role_id', 2)->pluck('user_id'));
                    $senderDirector_id = $myTask1->senderDirector_id;
                    $senderUser_id = $myTask1->senderUser_id;
                    $recipientManagers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->recipientUserBranch_id)->where('role_id', 1)->pluck('user_id'));
                    $recipientCouriers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->recipientUserBranch_id)->where('role_id', 2)->pluck('user_id'));
                    $recipientDirector_id = $myTask1->recipientDirector_id;
                    $recipientUser_id = $myTask1->recipientUser_id;
                    $data = [
                        'id' => $myTask1->id,
                        'refNumber' => $myTask1->refNumber,
                        'parcelImage' => $myTask1->parcelImage,
                        'parcelCurrentStatusName' => $myTask1->parcelCurrentStatusName,
                        'parcelCurrentStatus_id' => $myTask1->parcelCurrentStatus_id,
                        'parcelCurrentStatusUpdateDate' => $myTask1->parcelCurrentStatusUpdateDate,
                    ];
                    User::find($senderManager_id)->notify(new NewParcelNotification($data));
                    if (User::find($senderDirector_id) != null) {
                        User::find($senderDirector_id)->notify(new NewParcelNotification($data));
                    }
                    if (User::find($senderUser_id) != null) {
                        User::find($senderUser_id)->notify(new NewParcelNotification($data));
                    }
                    if (User::find($recipientDirector_id) != null) {
                        User::find($recipientDirector_id)->notify(new NewParcelNotification($data));
                    }
                    if (User::find($recipientUser_id) != null) {
                        User::find($recipientUser_id)->notify(new NewParcelNotification($data));
                    }
                    $recipientCourier_id = $myTask1->parcelCourier_id;
                    User::find($recipientCourier_id)->notify(new NewParcelNotification($data));


                    return redirect()->route('manager.parcel.listofwaitingparcel', compact(['user', 'title', 'id']))->with('status', 'Посылка успешно обновлена');
                } else {
                    $senderManager_id = $myTask1->senderManager_id;
                    $senderCouriers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->senderUserBranch_id)->where('role_id', 2)->pluck('user_id'));
                    $senderDirector_id = $myTask1->senderDirector_id;
                    $senderUser_id = $myTask1->senderUser_id;
                    $recipientManagers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->recipientUserBranch_id)->where('role_id', 1)->pluck('user_id'));
                    $recipientCouriers = User::find(tblUserConnectorModel::where('branch_id', $myTask1->recipientUserBranch_id)->where('role_id', 2)->pluck('user_id'));
                    $recipientDirector_id = $myTask1->recipientDirector_id;
                    $recipientUser_id = $myTask1->recipientUser_id;
                    $data = [
                        'id' => $myTask1->id,
                        'refNumber' => $myTask1->refNumber,
                        'parcelImage' => $myTask1->parcelImage,
                        'parcelCurrentStatusName' => $myTask1->parcelCurrentStatusName,
                        'parcelCurrentStatus_id' => $myTask1->parcelCurrentStatus_id,
                        'parcelCurrentStatusUpdateDate' => $myTask1->parcelCurrentStatusUpdateDate,
                    ];
                    User::find($senderManager_id)->notify(new NewParcelNotification($data));
                    if (User::find($senderDirector_id) != null) {
                        User::find($senderDirector_id)->notify(new NewParcelNotification($data));
                    }
                    if (User::find($senderUser_id) != null) {
                        User::find($senderUser_id)->notify(new NewParcelNotification($data));
                    }
                    if (User::find($recipientDirector_id) != null) {
                        User::find($recipientDirector_id)->notify(new NewParcelNotification($data));
                    }
                    if (User::find($recipientUser_id) != null) {
                        User::find($recipientUser_id)->notify(new NewParcelNotification($data));
                    }
                    $recipientCourier_id = $myTask1->parcelCourier_id;
                    User::find($recipientCourier_id)->notify(new NewParcelNotification($data));
                    return redirect()->route('manager.parcel.listofsendedparcel', compact(['user', 'title', 'id']))->with('status', 'Посылка успешно обновлена');
                }
                // dd('Выбранный статус доставлено фото подходить');
            }
        }
    }
    public function searchparcel(Request $request)
    {
        $user = Auth::user();
        $listofparcels = null;
        return view('manager.parcel.searchparcel', ['listofparcels' => $listofparcels], compact(['user']));
    }
    public function findparcel(Request $request)
    {
        $user = Auth::user();
        $tags = explode(',', $request->senderCompanyName);
        $listofparcels = tblParcelNewModel::whereIn('refNumber', $tags)->get();
        return view('manager.parcel.searchparcel', ['listofparcels' => $listofparcels, 'tags' => $tags], compact(['user']));
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
            $myTask1->fill($request->all());
            $myTask1->parcelCurrentStatus_id = '5';
            $myTask1->parcelCurrentStatusName = 'Принят в городе получателя';
            $mytime  = Carbon::now();
            $mytime->setTimezone('Asia/Tashkent');
            $mytime->toDateTimeString();
            $myTask1->parcelCurrentStatusDescription = 'Посылка благополучно принято в городе получателя';
            $myTask1->parcelCurrentStatusUpdateDate = $mytime;
            $myTask1->recipientManager_id =  $user_id;
            $myTask1->recipientManagerName = $user_name;
            $myTask2 = new tblParcelStatusHistoryModel(); //::where('refNumber', $tag)->first();
            $myTask2->fill($request->all());
            $myTask2->refNumber = $myTask1->refNumber;
            $myTask2->parcelStatus_id = '5';
            $myTask2->parcelStatus = 'Принят в городе получателя';
            $myTask2->parcelCurrentStatusDescription = 'Посылка благополучно принято в городе получателя';
            $myTask2->parcelStatusDate = $mytime;

            $myTask1->save();
            $myTask2->save();
        }
        $title = 'Принят в городе получателя';
        $id = 5;
        return redirect()->route('manager.parcel.listofwaitingparcel', compact(['user', 'title', 'id']))->with('status', 'Посылка успешно обновлена');
    }

    public function massupdateparcell(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $user_name = $user->name;

        $userBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        $tags = json_decode($request->tags, true);
        foreach ($tags as $tag) {
            $myTask1 = tblParcelNewModel::where('refNumber', $tag)->first();
            $myTask1->fill($request->all());
            $myTask1->parcelCurrentStatus_id = '4';
            $myTask1->parcelCurrentStatusName = 'Отправлен в город получателя';
            $mytime  = Carbon::now();
            $mytime->setTimezone('Asia/Tashkent');
            $mytime->toDateTimeString();
            $myTask1->parcelCurrentStatusDescription = 'Посылка благополучно отправлено в город получателя';
            $myTask1->parcelCurrentStatusUpdateDate = $mytime;
            $myTask2 = new tblParcelStatusHistoryModel(); //::where('refNumber', $tag)->first();
            $myTask2->fill($request->all());
            $myTask2->refNumber = $myTask1->refNumber;
            $myTask2->parcelStatus_id = '4';
            $myTask2->parcelStatus = 'Отправлен в город получателя';
            $myTask2->parcelCurrentStatusDescription = 'Посылка благополучно отправлено в город получателя';
            $myTask2->parcelStatusDate = $mytime;
            $myTask1->save();
            $myTask2->save();
        }
        $title = 'Принят в городе получателя';
        $id = 4;
        return redirect()->route('manager.parcel.listofsendedparcel', compact(['user', 'title', 'id']))->with('status', 'Посылка успешно обновлена');
    }
    public function markasread()
    {
        $user = Auth::user();
        $user->unreadNotifications->markAsRead();
        return redirect()->back();
    }
    public function foundparcel(Request $request)
    {
        $listofparcels = tblParcelStatusHistoryModel::where('refNumber', $request->refNumber)->get();

        return view('search', compact(['listofparcels']));
        // return redirect()->route('index.source', compact('listofparcels'));
    }
}
