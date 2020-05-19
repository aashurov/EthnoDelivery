<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
        'password' => 'required'
    ]);

    if( Auth::attempt(['email'=>$request->email, 'password'=>$request->password]) ) {

        $user = Auth::user();
        $userRole = $user->role()->first();

        $token = $user->createToken($user->email.'-'.now(), [
            $userRole->role
            ]);

        return response()->json([
            // 'token' => $token,

            'token' => $token->accessToken,
            'role' => $token->token->scopes

        ]);
    }
}
}
