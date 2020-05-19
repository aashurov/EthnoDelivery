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
use Carbon\Carbon;
use  App\Notifications\NewParcelNotification;

class CustomerController extends Controller
{

    public function dashboard()
    {
        $user = Auth::user();
        // dd($user->id);
        $company_id = tblUserConnectorModel::where('user_id', $user->id)->first()->company_id;
        // dd($userBranch_id);
        $all = tblParcelNewModel::where('senderCompany_id', $company_id)->count();
        $_1 = tblParcelNewModel::where('parcelCurrentStatus_id', '1')->where('senderCompany_id', $company_id)->count();
        $_2 = tblParcelNewModel::where('parcelCurrentStatus_id', '2')->where('senderCompany_id', $company_id)->count();
        $_3 = tblParcelNewModel::where('parcelCurrentStatus_id', '3')->where('senderCompany_id', $company_id)->count();
        $_4 = tblParcelNewModel::where('parcelCurrentStatus_id', '4')->where('senderCompany_id', $company_id)->count();
        $_5 = tblParcelNewModel::where('parcelCurrentStatus_id', '5')->where('senderCompany_id', $company_id)->count();
        $_6 = tblParcelNewModel::where('parcelCurrentStatus_id', '6')->where('senderCompany_id', $company_id)->count();
        $_7 = tblParcelNewModel::where('parcelCurrentStatus_id', '7')->where('senderCompany_id', $company_id)->count();
        $_8 = tblParcelNewModel::where('parcelCurrentStatus_id', '8')->where('senderCompany_id', $company_id)->count();
        $_9 = tblParcelNewModel::where('parcelCurrentStatus_id', '9')->where('senderCompany_id', $company_id)->count();

        $alll = tblParcelNewModel::where('senderCompany_id', '!=',  $company_id)->count();
        $_11 = tblParcelNewModel::where('parcelCurrentStatus_id', '1')->where('senderCompany_id', '!=', $company_id)->count();
        $_22 = tblParcelNewModel::where('parcelCurrentStatus_id', '2')->where('senderCompany_id', '!=', $company_id)->count();
        $_33 = tblParcelNewModel::where('parcelCurrentStatus_id', '3')->where('senderCompany_id', '!=', $company_id)->count();
        $_44 = tblParcelNewModel::where('parcelCurrentStatus_id', '4')->where('senderCompany_id', '!=', $company_id)->count();
        $_55 = tblParcelNewModel::where('parcelCurrentStatus_id', '5')->where('senderCompany_id', '!=', $company_id)->count();
        $_66 = tblParcelNewModel::where('parcelCurrentStatus_id', '6')->where('senderCompany_id', '!=', $company_id)->count();
        $_77 = tblParcelNewModel::where('parcelCurrentStatus_id', '7')->where('senderCompany_id', '!=', $company_id)->count();
        $_88 = tblParcelNewModel::where('parcelCurrentStatus_id', '8')->where('senderCompany_id', '!=', $company_id)->count();
        $_99 = tblParcelNewModel::where('parcelCurrentStatus_id', '9')->where('senderCompany_id', '!=', $company_id)->count();

        // return view('customer.home', compact(['user']));

        return view('customer.dashboard', [
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
        $userCompany_id = tblUserConnectorModel::where('user_id', $user->id)->first()->company_id;

        if ($id == 0) {
            $myTask = tblParcelNewModel::where('senderUserBranch_id', $userBranch_id)->get();
            $title = 'Все отправленные посылки';
        } elseif ($id == 1) {
            $myTask = tblParcelNewModel::select('*')->where('senderCompany_id', $userCompany_id)->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'В обработке';
        } elseif ($id == 2) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'Принят в городе отправителя';
        } elseif ($id == 3) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'Отправлен в транзитный город';
        } elseif ($id == 4) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'Отправлен в город получателя';
        } elseif ($id == 5) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'Принят в городе получателя';
        } elseif ($id == 6) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'На складе готов к выдаче';
        } elseif ($id == 7) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'На доставке у курьера';
        } elseif ($id == 8) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'Возвращен на склад доставки';
        } elseif ($id == 9) {
            $myTask = tblParcelNewModel::select('*')->where('senderUserBranch_id', $userBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'Доставлен';
        }


        return view('customer.parcel.listofsendedparcel', ['listofparcels' => $myTask, 'title' => $title, 'userBranch_id' => $userBranch_id], compact(['user']));
    }
    public function listofwaitingparcel($id)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $recipientBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id;
        if ($id == 0) {
            $myTask = tblParcelNewModel::where('senderUserBranch_id', 'not like', $recipientBranch_id)->where('parcelCurrentStatus_id', '>', '3')->get();
            $title = 'Все прибывшие посылки';
        } elseif ($id == 4) {
            $myTask = tblParcelNewModel::select('*')->where('recipientUserBranch_id', $recipientBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'Отправлен в город получателя';
        } elseif ($id == 5) {
            $myTask = tblParcelNewModel::select('*')->where('recipientUserBranch_id', $recipientBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'Принят в городе получателя';
        } elseif ($id == 6) {
            $myTask = tblParcelNewModel::select('*')->where('recipientUserBranch_id', $recipientBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'На складе готов к выдаче';
        } elseif ($id == 7) {
            $myTask = tblParcelNewModel::select('*')->where('recipientUserBranch_id', $recipientBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'На доставке у курьера';
        } elseif ($id == 8) {
            $myTask = tblParcelNewModel::select('*')->where('recipientUserBranch_id', $recipientBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'Возвращен на склад доставки';
        } elseif ($id == 9) {
            $myTask = tblParcelNewModel::select('*')->where('recipientUserBranch_id', $recipientBranch_id)->where('parcelCurrentStatus_id', $id)->get();
            $title = 'Доставлен';
        }
        $lw = 1;
        return view('customer.parcel.listofwaitingparcel', ['listofparcels' => $myTask, 'title' => $title, 'userBranch_id' => $recipientBranch_id, 'lw' => $lw], compact(['user']));
    }
    public function addparcel()
    {
        $user = Auth::user();

        // $recipientUser_id = ['' => 'Выберите получателя'] + User::where('role_id', '4')->get()->pluck('name', 'id')->toArray();

        $recipients = tblUserConnectorModel::select('tbluserconnector.*', 'tblbranch.*', 'tblcompany.*', 'users.*')
            ->join('users', 'tbluserconnector.user_id',   '=', 'users.id')
            ->join('tblbranch', 'tbluserconnector.branch_id',   '=', 'tblbranch.id')
            ->leftjoin('tblcompany', 'tbluserconnector.company_id',   '=', 'tblcompany.id')
            ->where('tbluserconnector.branch_id', '!=', tblUserConnectorModel::where('user_id', $user->id)->first()->branch_id)
            ->where('users.role_id', '4')
            ->orderby('users.id')
            ->get();

        $stafBranch_id = tblUserConnectorModel::where('user_id', $user->id)->first();
        $branches = ['' => 'Выберите филиал'] + tblBranchModel::pluck('branchName', 'id')->toArray();
        $parcelPlanName = ['' => 'Выберите тариф'] + tblParcelPlanModel::pluck('parcelPlanName', 'id')->toArray();

        return view('customer.parcel.addparcel', [
            'branches'   => $branches,
            'parcelPlanName' => $parcelPlanName,
            'recipients' => $recipients,
        ], compact(['user']));
    }
    public function savespecialparcel(Request $request)
    {
        $user = Auth::user();
        //const
        $senderManager_id = $user->id;
        $senderRole_id = $user->role_id;
        $mytime  = Carbon::now();
        $mytime->setTimezone('Asia/Tashkent');
        $mytime->toDateTimeString();

        $tblParcelNewModel = new tblParcelNewModel();
        $tblParcelStatusHistoryModel = new tblParcelStatusHistoryModel();

        if ($request->has('checkBoxOldSender')) {
            $refNumber = rand(100000000000, 999999999999);
            $parcelDescription = $request->parcelDescription;
            $parcelWeight = $request->parcelWeight;
            $parcelLength = $request->parcelLength;
            $parcelWidth = $request->parcelWidth;
            $parcelHeight = $request->parcelHeight;

            $tblParcelStatusHistoryModel->refNumber = $refNumber;
            $tblParcelStatusHistoryModel->parcelStatus_id = '1';
            $tblParcelStatusHistoryModel->parcelStatus = 'В обработке';
            $tblParcelStatusHistoryModel->parcelCurrentStatusDescription = 'Посылка в обработке';
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
            $parcelCurrentStatus_id = '1';
            $parcelCurrentStatusName = 'В обработке';
            $parcelCurrentStatusDescription = 'Посылка в обработке';
            $parcelCurrentStatusUpdateDate = $mytime;
            if ($request->has('parcelDeliveryType_id')) {
                $parcelDeliveryType_id = '1';
                $parcelDeliveryTypeName = 'До двери';
            } elseif (!$request->has('parcelDeliveryType_id')) {
                $parcelDeliveryType_id = '0';
                $parcelDeliveryTypeName = 'До офиса';
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

            $senderUser_id = $user->id;
            // dd($senderUser_id);
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
            $id = tblUserConnectorModel::where('branch_id', $senderUserBranch_id)->where('role_id', '1')->first();
            $ss = User::find($id->user_id);
            $senderManager_id = $ss->id;
            $senderManagerName = $ss->name;
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
        } elseif (!$request->has('checkBoxOldSender')) {

            // dd('sa');
            $refNumber = rand(100000000000, 999999999999);
            $parcelDescription = $request->parcelDescription;
            $parcelWeight = $request->parcelWeight;
            $parcelLength = $request->parcelLength;
            $parcelWidth = $request->parcelWidth;
            $parcelHeight = $request->parcelHeight;


            $tblParcelStatusHistoryModel->refNumber = $refNumber;
            $tblParcelStatusHistoryModel->parcelStatus_id = '1';
            $tblParcelStatusHistoryModel->parcelStatus = 'В обработке';
            $tblParcelStatusHistoryModel->parcelCurrentStatusDescription = 'Посылка в обработке';
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
            $parcelCurrentStatus_id = '1';
            $parcelCurrentStatusName = 'В обработке';
            $parcelCurrentStatusDescription = 'Посылка в обработке';
            $parcelCurrentStatusUpdateDate = $mytime;
            if ($request->has('parcelDeliveryType_id')) {
                $parcelDeliveryType_id = '1';
                $parcelDeliveryTypeName = 'До двери';
            } elseif (!$request->has('parcelDeliveryType_id')) {
                $parcelDeliveryType_id = '0';
                $parcelDeliveryTypeName = 'До офиса';
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

            $senderUser_id = $user->id;
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

            $recipientUserAdress = $request->recipientUserPhone;
            $recipientUserEmail = '0';
            $recipientUserBranch_id = $request->recipientUserBranch_id;
            // dd($request->all());
            $recipientUserBranchName =  tblBranchModel::find($recipientUserBranch_id)->branchName;
            $recipientCompany_id = '0';
            $recipientCompanyName = $request->recipientCompanyName;
            $recipientDirector_id = '0';
            $recipientDirectorName = '0';
            $id = tblUserConnectorModel::where('branch_id', $senderUserBranch_id)->where('role_id', '1')->first();
            $ss = User::find($id->user_id);
            $senderManager_id = $ss->id;
            $senderManagerName = $ss->name;
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
            // dump('salom');
        }
        $id = 0;
        $data = [
            'id' => $tblParcelNewModel->id,
            'refNumber' => $refNumber,
            'parcelImage' => $parcelImage,
            'parcelCurrentStatusName' => $parcelCurrentStatusName,
            'parcelCurrentStatus_id' => $parcelCurrentStatus_id,
            'parcelCurrentStatusUpdateDate' => $parcelCurrentStatusUpdateDate,

        ];


        if (User::find($senderDirector_id) != null) {
            User::find($senderDirector_id)->notify(new NewParcelNotification($data));
        }

        $senderManagers = User::find(tblUserConnectorModel::where('branch_id', $senderUserBranch_id)->where('role_id', 1)->pluck('user_id'));
        $senderCouriers = User::find(tblUserConnectorModel::where('branch_id', $senderUserBranch_id)->where('role_id', 2)->pluck('user_id'));
        foreach ($senderManagers as $senderManager) {
            $senderManager->notify(new NewParcelNotification($data));
        }
        foreach ($senderCouriers as $senderCourier) {
            $senderCourier->notify(new NewParcelNotification($data));
        }

        return redirect()->route('customer.parcel.listofsendedparcel',  compact(['user', 'id']))->with('status', 'Новая посылка успешно добавлена');
    }

    public function delete($id, $refNumber)
    {
        $user = Auth::user();
        $myTask = tblParcelNewModel::find($id)->delete();
        $myTask2 = tblParcelStatusHistoryModel::where('refNumber', $refNumber)->delete();
        $title = 'Все отправленные посылки';
        $id = 0;
        return redirect()->route('customer.parcel.listofsendedparcel', compact(['user', 'title', 'id']))->with('status', 'Посылка успешно удалена');
    }
    public function viewparcel($id)
    {
        $user = Auth::user();
        $myTask = tblParcelNewModel::find($id);
        $myTask1 = tblParcelStatusHistoryModel::where('refNumber', $myTask->refNumber)->get();
        return view('customer.parcel.viewparcel', ['parcel' => $myTask, 'historys' => $myTask1], compact(['user']));
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

        return view('customer.parcel.editparcel', [
            'branches'   => $branches,
            'parcelPlanName' => $parcelPlanName,
            'users' => $users,
            'parcel' => $myTask1
        ], compact(['user']));
    }
    public function updateparcel(Request $request, $id)
    {
        // dd('sa');
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
        return redirect()->route('customer.parcel.listofsendedparcel', compact(['user', 'id']))->with('status', 'Посылка успешно обновлена');
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
