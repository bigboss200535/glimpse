<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\User;
use Session;
use App\Models\User;
use Hash;

class UserController extends Controller
{

    public function index()
    {
        // fetch all student which are active and not soft deleted
       $users = DB::table('users')->get();
        
        return view('user.list', compact('users'));
    } 


    public function singinAction(Request $request)
   {
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $username = $request->input('username');
    $password = $request->input('password');

    // Retrieve the user record from the database based on the provided username
    $user = User::where('username', $username)->first();

    if ($user==true){
        // Verify the password
        if (Hash::check($password, $user->Password)) {
            // Password is correct
            // Store user details in the session
            $request->session()->put('user', $user);
            // return response()->json(['success' => true, 'id_generated' => $user], 200);
            // Redirect to the dashboard or intended page
            return redirect()->intended('dashboard');
        }
    }

    return redirect()->back()->withErrors(['loginError' => 'Invalid username and/or password']);
   }

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

    
    // public function singin_Action(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('username', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('home/dashboard'); 
    //     }

    //     return redirect()->back()->withErrors(['loginError' => 'Invalid username and or password']);
    // }


    // code logout method
    


}
