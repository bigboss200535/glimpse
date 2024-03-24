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
        // fetch all user
        $users = DB::table('users')->get();
        
        return view('user.list', compact('users'));
    } 

    public function login()
    {
        
        return view('auth.login');
    }


    public function singinAction(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        // Retrieve the user record from the database based on username
        $user = User::where('Username', $username)->first();
        // return response()->json(['success' => true, 'users' => $user], 200);
        if ($user==true){
            // Verify the password
            if (Hash::check($password, $user->Password)) {
                // Store user details in the session
                $request->session()->put('user', $user);
                
                // Redirect to the dashboard 
                return redirect()->intended('dashboard');
            }
        }

        return redirect()->back()->withErrors(['loginError' => 'Invalid credentials']);
   }

   // public function logout()
   //  {

   //      $ipAddress = $request->ip();
   //      $computerName = gethostname();
   //      Session::flush();
   //      Auth::logout();
   //      return Redirect('/login');
   //  }

    private function user_id(Request $request)
    {
        $request->session()->put('user', $user);
    }
    public function registration()
    {
        return view('auth.registration');
    }


}
