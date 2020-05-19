<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo() {
        $user = Auth::user();
        switch(true) {
            case $user->isAdmin():
                return '/administrator/dashboard';
                break;
            case $user->isManager():
                return 'manager/dashboard';
                break;
            case $user->isCourier():
                return 'courier/dashboard';
                break;
            case $user->isDirector():
                return 'director/dashboard';
                break;
            case $user->isStaff():
                return 'staff/dashboard';
                break;
            case $user->isCustomer():
                return 'customer/dashboard';
                break;
            default:
                return '/';
        }}
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
