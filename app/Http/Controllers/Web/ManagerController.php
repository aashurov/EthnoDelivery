<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('manager.home', compact(['user']));
    }



}
