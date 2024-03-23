<?php

namespace App\Http\Controllers\Auth;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    // code login method
    public function login()
    {
        return view('auth.login');
    }


    public function logout(Request $request)
    {
        $ipAddress = $request->ip();
        $computerName = gethostname();
        Session::flush();
        Auth::logout();
        return Redirect('/login');
    }

}
