<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\tblUserConnectorModel;
use App\tblBranchModel;
use App\tblCompanyModel;
use App\tblParcelPlanModel;
use App\tblParcelCurrencyModel;
use App\Role;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Validation\ValidatesRequests;
class AdministratorController extends Controller
{
    use ValidatesRequests;
    
    // public function dashboard()
    // {
    //     $user = Auth::user();
    //     return view('administrator.home', compact(['user']));
    // }
    public function dashboard()
    {
        $user = Auth::user();
        //branches
        $myTask1 = tblBranchModel::count();
        //plans
        $myTask2 = tblParcelPlanModel::count();
        //managers id=1
        $myTask3 = tblUserConnectorModel::where('role_id', '1')->count();
        //couriers id=2
        $myTask4 = tblUserConnectorModel::where('role_id', '2')->count();
        //companyes
        $myTask5 = tblCompanyModel::count();
        //director id=3
        $myTask6 = tblUserConnectorModel::where('role_id', '3')->count();
        //staffs id=4
        $myTask7 = tblUserConnectorModel::where('role_id', '4')->count();
        //customers
        $myTask8 = tblUserConnectorModel::where('role_id', '5')->count();

        return view('administrator.dashboard', ['branches' => $myTask1, 'plans' => $myTask2, 'managers' => $myTask3, 'couriers' => $myTask4, 'director' => $myTask6, 'staffs' => $myTask7, 'customers' => $myTask8, 'companyes' => $myTask5], compact(['user']));
    }
    //for user
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
        return view('administrator.users.users', ['Users' => $myTask1], compact(['user']));
    }
    public function adduser()
    {
        $user = Auth::user();
        $myTask1 = tblBranchModel::all();
        $myTask2 = tblCompanyModel::all()->sortBy('companyName');
        return view('administrator.users.adduser', ['listofbranches' => $myTask1, 'listofcompanyes' => $myTask2], compact(['user']));
    }
    public function saveuser(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed']
        ]);

        $user = Auth::user();
        dump($request->all());
        $myTask1 = new User;
        $myTask2 =  new tblUserConnectorModel;
        $myTask3 =  new Role;

        $id = $myTask1->fill($request->all())->id;
        $myTask1->status = '1';
        $myTask1->password = Hash::make($request['password']);
        if ($request->role_id == 0)
        {
            $myTask1->role = 'Administrator';
            $myTask2->company_id = 1;

        }
        else if ($request->role_id == 1)
        {
            $myTask1->role = 'Manager';
            $myTask2->company_id = 1;

        }
         else if ($request->role_id == 2)
         {
            $myTask1->role = 'Courier';
            $myTask2->company_id = 1;

         }
         else if ($request->role_id == 3)
         {
            $myTask1->role = 'Director';
            $myTask2->company_id = $request->company_id;

         }
         else if ($request->role_id == 4)
         {
            $myTask1->role = 'Staff';
            $myTask2->company_id = $request->company_id;

         }
         else if ($request->role_id == 5)
         {
            $myTask1->role = 'Customer';
            $myTask2->company_id = $request->company_id;


         }
        $myTask1->save();
        $id = $myTask1->id;

        $myTask2->fill($request->all());
        $myTask2->user_id = $id;
        $myTask2->save();
        if ($request->role_id == 0)
        {
            $myTask3->user_id = $id;
            $myTask3->role = 'Administrator';

        }
        else if ($request->role_id == 1)
        {
            $myTask3->user_id = $id;
            $myTask3->role = 'Manager';

        }
         else if ($request->role_id == 2)
         {
            $myTask3->user_id = $id;
            $myTask3->role = 'Courier';

         }
         else if ($request->role_id == 3)
         {
            $myTask3->user_id = $id;
            $myTask3->role = 'Director';

         }
         else if ($request->role_id == 4)
         {
            $myTask3->user_id = $id;
            $myTask3->role = 'Staff';

         }
         else if ($request->role_id == 5)
         {
            $myTask3->user_id = $id;
            $myTask3->role = 'Customer';


         }

        $myTask3->save();
        $role_id = 0;
        return redirect()->route('administrator.users.users', compact(['user', 'role_id']))->with(['success' => 'Thanks for subscribing!']);
    }

    public function edituser($id)
    {
        $user = Auth::user();
        $myTask3 = tblBranchModel::all();
        $myTask2 = tblCompanyModel::all();
        $myTask1 = tblUserConnectorModel::select('tbluserconnector.*', 'tblbranch.*', 'tblcompany.*', 'users.*')
            ->join('users', 'tbluserconnector.user_id',   '=', 'users.id')
            ->join('tblbranch', 'tbluserconnector.branch_id',   '=', 'tblbranch.id')
            ->leftjoin('tblcompany', 'tbluserconnector.company_id',   '=', 'tblcompany.id')
            ->where('users.id', $id)
            ->get();
        return view('administrator.users.edituser', ['Users' => $myTask1->first(), 'listofbranches' => $myTask3, 'listofcompanyes' => $myTask2], compact(['user']));
    }


    public function updateuser(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:4', 'confirmed']
        ]);
        $user = Auth::user();
        $myTask1 = User::find($id);
        $myTask1->fill($request->all());
        $myTask1->password = Hash::make($request['password']);
        $myTask1->update();

        $myTask2 = tblUserConnectorModel::where('user_id', $id)->first();
        $myTask2->fill($request->all());
        $myTask2->update();
        $role_id = 0;
        return redirect()->route('administrator.users.users',  compact(['user', 'role_id']))->with('status', 'Пользователь успешно обновлен');
    }

    public function deleteuser($id)
    {
        $user = Auth::user();
        $myTask2 = User::find($id)->delete();
        $myTask2 = tblUserConnectorModel::where('id', $id)->delete();
        $role_id = 0;
        return redirect()->route('administrator.users.users', compact(['user', 'role_id']))->with('status', 'Пользователь успешно удален');
    }


    //for branch
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function listofbranches()
    {
        $user = Auth::user();
        $myTask1 = tblBranchModel::all();
        return view('administrator.branch.listofbranch', ['lisofbranches' => $myTask1], compact(['user']));
    }

    public function addbranch()
    {
        $user = Auth::user();
        return view('administrator.branch.addbranch', compact(['user']));
    }
    public function savebranch(Request $request)
    {
        $user = Auth::user();

        tblBranchModel::create($request->all());
        return redirect()->route('administrator.branch.listofbranches', compact(['user']))->with('status', 'Новый филиал успешно добавлен');
    }
    public function editbranch($id)
    {
        $user = Auth::user();
        $myTask1 = tblBranchModel::find($id);
        return view('administrator.branch.editbranch', ['lisofbranches' => $myTask1], compact(['user']));
    }
    public function updatebranch(Request $request, $id)
    {
        $user = Auth::user();
        $myTask1 = tblBranchModel::find($id);
        $myTask1->fill($request->all());
        $myTask1->update();
        return redirect()->route('administrator.branch.listofbranches', compact(['user']))->with('status', 'Филиал успешно обновлен');
    }
    public function deletebranch(Request $request, $id)
    {
        $user = Auth::user();
        $myTask1 = tblBranchModel::find($id)->delete();
        return redirect()->route('administrator.branch.listofbranches', compact(['user']))->with('status', 'Филиал успешно удален');
    }

    //company
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function listofcompanyes()
    {
        $user = Auth::user();
        $myTask1 = tblCompanyModel::all();
        return view('administrator.company.listofcompany', ['listofcompanyes' => $myTask1], compact(['user']));
    }

    public function addcompany()
    {
        $user = Auth::user();
        return view('administrator.company.addcompany', compact(['user']));
    }
    public function savecompany(Request $request)
    {
        $user = Auth::user();
        tblCompanyModel::create($request->all());
        return redirect()->route('administrator.company.listofcompany', compact(['user']))->with('status', 'Новая компания успешно добавлена');
    }
    public function editcompany($id)
    {
        $user = Auth::user();
        $myTask1 = tblCompanyModel::find($id);
        return view('administrator.company.editcompany', ['listofcompanyes' => $myTask1], compact(['user']));
    }
    public function updatecompany(Request $request, $id)
    {
        $user = Auth::user();
        $myTask1 = tblCompanyModel::find($id);
        $myTask1->fill($request->all());
        $myTask1->update();

        return redirect()->route('administrator.company.listofcompany', compact(['user']))->with('status', 'Компания успешно обновлена');
    }
    public function deletecompany(Request $request, $id)
    {
        $user = Auth::user();
        $myTask1 = tblCompanyModel::find($id)->delete();
        return redirect()->route('administrator.company.listofcompany', compact(['user']))->with('status', 'Компания успешно удалена');
    }
    // for plan
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function listofplans()
    {
        $user = Auth::user();
        $myTask1 = tblParcelPlanModel::all();
        return view('administrator.plan.listofplan', ['listofplans' => $myTask1], compact(['user']));
    }

    public function addplan()
    {
        $user = Auth::user();
        return view('administrator.plan.addplan', compact(['user']));
    }
    public function saveplan(Request $request)
    {
        $user = Auth::user();
        tblParcelPlanModel::create($request->all());
        return redirect()->route('administrator.plan.listofplan', compact(['user']))->with('status', 'Новый тарифный план успешно добавлен');
    }
    public function editplan($id)
    {
        $user = Auth::user();
        $myTask1 = tblParcelPlanModel::find($id);
        return view('administrator.plan.editplan', ['listofplans' => $myTask1], compact(['user']));
    }
    public function updateplan(Request $request, $id)
    {
        $user = Auth::user();
        $myTask1 = tblParcelPlanModel::find($id);
        $myTask1->fill($request->all());
        $myTask1->update();

        return redirect()->route('administrator.plan.listofplan', compact(['user']))->with('status', 'Тарифный план успешно обновлен');
    }
    public function deleteplan(Request $request, $id)
    {
        $user = Auth::user();
        $myTask1 = tblParcelPlanModel::find($id)->delete();
        return redirect()->route('administrator.plan.listofplan', compact(['user']))->with('status', 'Тарифный план успешно удален');
    }

    // for currency
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function listofcurrency()
    {
        $user = Auth::user();
        $myTask1 = tblParcelCurrencyModel::all();
        return view('administrator.currency.listofcurrency', ['listofcurrencys' => $myTask1], compact(['user']));
    }
    public function addcurrency()
    {
        $user = Auth::user();
        return view('administrator.currency.addcurrency', compact(['user']));
    }
    public function savecurrency(Request $request)
    {
        $user = Auth::user();
        tblParcelCurrencyModel::create($request->all());
        return redirect()->route('administrator.currency.listofcurrency', compact(['user']))->with('status', 'Новая валюта успешно добавлена');
    }
    public function editcurrency($id)
    {
        $user = Auth::user();
        $myTask1 = tblParcelCurrencyModel::find($id);
        return view('administrator.currency.editcurrency', ['listofcurrencys' => $myTask1], compact(['user']));
    }
    public function updatecurrency(Request $request, $id)
    {
        $user = Auth::user();
        $myTask1 = tblParcelCurrencyModel::find($id);
        $myTask1->fill($request->all());
        $myTask1->update();

        return redirect()->route('administrator.currency.listofcurrency', compact(['user']))->with('status', 'Валюта успешно обновлена');
    }
    public function deletecurrency(Request $request, $id)
    {
        $user = Auth::user();
        $myTask1 = tblParcelCurrencyModel::find($id)->delete();
        return redirect()->route('administrator.currency.listofcurrency', compact(['user']))->with('status', 'Валюта успешно удалена');
    }
}
