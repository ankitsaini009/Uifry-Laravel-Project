<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontuser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;

class RegistertionController extends Controller
{

    protected function guard()
    {
        return Auth::guard('front_user');
    }

    public function loginuser(Request $request)
    {
        //dd($request->all());

        $errormsg = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($errormsg->fails()) {
            return redirect()->back()->withErrors($errormsg)->withInput();
        }

        $email = $request->input('email');
        $password = $request->input('password');


        if ($this->guard()->attempt(['email' => $email, 'password' => $password])) {

            Session::push('notifications', [
                'message' => "Hey {$email}, welcome back! 🎉",
                'time' => now()->diffForHumans(),
            ]);

            // Login successful
            return redirect()->route('front.index')->with('success', 'Login SuccessFully ✔');
        }
        // Authentication failed
        return back()->withErrors([
            'identifier' => 'The provided credentials do not match our records.',
        ]);
    }
    public function userlogout(Request $request)
    {
        Auth::guard('front_user')->logout(); // Logout the front_user guard
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('front.login')->with('success', 'User Logout Successfully ✔');
    }

    public function create_user(Request $request)
    {
        //dd($request->all());

        $errormsg = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|unique:frontusers',
            'password' => 'required|unique:frontusers',
        ]);

        if ($errormsg->fails()) {
            return redirect()->back()->withErrors($errormsg)->withInput();
        }

        $user = Frontuser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // **Create Notification**
        Session::flash('notification', [
            'message' => "Welcome, {$request->name}! Your account has been successfully created. ✔",
            'type' => 'success'
        ]);

        return redirect()->route('front.login')->with('success', 'Your Acount SuccessFully Created Please Login Now ✔');
    }

    public function registration()
    {
        return view('frontend.user_login.registration');
    }
    public function login()
    {
        return view('frontend.user_login.login');
    }
    public function creatpass()
    {
        return view('frontend.user_login.creatpass');
    }
}
