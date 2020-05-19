<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\tblUserConnectorModel;
use App\tblBranchModel;
use App\tblCompanyModel;
use App\tblParcelPlanModel;
use App\tblParcelCurrencyModel;
class AdministratorControllerApi extends Controller
{
    public function profile()
    {   
        return response()->json(Auth::user());
    }
    public function dashboard()
    {   
        $user = Auth::user();
        // return Auth::user();
        response()->json(array('listofbranches' => $user));
        
        $myTask1 = (string) tblBranchModel::count();
        //plans
        $myTask2 =  (string) tblParcelPlanModel::count();
        //managers id=1
        $myTask3 = (string) tblUserConnectorModel::where('role_id', '1')->count();
        //couriers id=2
        $myTask4 = (string) tblUserConnectorModel::where('role_id', '2')->count();
        //companyes
        $myTask5 = (string) tblCompanyModel::count();
        //director id=3
        $myTask6 =  (string) tblUserConnectorModel::where('role_id', '3')->count();
        //staffs id=4
        $myTask7 =  (string) tblUserConnectorModel::where('role_id', '4')->count();
        //customers
        $myTask8 = (string) tblUserConnectorModel::where('role_id', '5')->count();

        return response()->json(array('branches' => $myTask1, 'plans' => $myTask2, 'managers' => $myTask3, 'couriers' => $myTask4, 'director' => $myTask6, 'staffs' => $myTask7, 'customers' => $myTask8, 'companies' => $myTask5));
    }
    public function listofbranches()
    {
        $user = Auth::user();
        $myTask1 = tblBranchModel::all();
        return response()->json(array('listofbranches' => $myTask1));
    }
    public function listofcompanies($branch_id)
    {
        $user = Auth::user();
        if ($branch_id != '0')
        {
            $myTask1 = tblCompanyModel::where('branch_id', $branch_id)->get();
        }
        else if ($branch_id == '0')
        {
            $myTask1 = tblCompanyModel::all();
        }
        return response()->json(array('listofcompanies' => $myTask1));
    }
 
    public function listofplans()
    {
        $user = Auth::user();
        $myTask1 = tblParcelPlanModel::all();
        return response()->json(array('listofplans' => $myTask1));
    }

    public function users($role_id)
    {
        $user = Auth::user();
        if ($role_id == 0) {
            $myTask1 = tblUserConnectorModel::select('tbluserconnector.*', 'tblbranch.*', 'tblcompany.*', 'users.*')
                ->join('users', 'tbluserconnector.user_id',   '=', 'users.id')
                ->join('tblbranch', 'tbluserconnector.branch_id',   '=', 'tblbranch.id')
                ->leftjoin('tblcompany', 'tbluserconnector.company_id',   '=', 'tblcompany.id')
                ->orderby('users.id')
                ->get();
        } elseif ($role_id != 0) {
            $myTask1 = tblUserConnectorModel::select('tbluserconnector.*', 'tblbranch.*', 'tblcompany.*', 'users.*')
                ->join('users', 'tbluserconnector.user_id',   '=', 'users.id')
                ->join('tblbranch', 'tbluserconnector.branch_id',   '=', 'tblbranch.id')
                ->leftjoin('tblcompany', 'tbluserconnector.company_id',   '=', 'tblcompany.id')
                ->where('tbluserconnector.role_id', $role_id)
                ->orderby('users.id')
                ->get();
        }
        return response()->json(array('users' => $myTask1));
    }
    public function profileid($id)
    {
        $user = Auth::user();
        $myTask1 = tblUserConnectorModel::select('tbluserconnector.*', 'tblbranch.*', 'tblcompany.*', 'users.*')
        ->join('users', 'tbluserconnector.user_id',   '=', 'users.id')
        ->join('tblbranch', 'tbluserconnector.branch_id',   '=', 'tblbranch.id')
        ->leftjoin('tblcompany', 'tbluserconnector.company_id',   '=', 'tblcompany.id')
        ->where('tbluserconnector.user_id', $id)
        ->first();
        return response()->json(array('userprofile' => $myTask1));
    }

}
