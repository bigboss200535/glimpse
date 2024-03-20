<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    
    // code logout method
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    // code action login method
    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }
        return redirect("login")->withSuccess('Please enter valid credentials');
    }

    // code login method
    public function index()
    {
        return view('auth.login');
    }
}
