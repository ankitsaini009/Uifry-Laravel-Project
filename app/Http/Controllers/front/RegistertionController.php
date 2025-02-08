<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontuser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use session;

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
            'identifier' => 'required',
            'password' => 'required',
        ]);

        if ($errormsg->fails()) {
            return redirect()->back()->withErrors($errormsg)->withInput();
        }

        $identifier = $request->input('identifier');
        $password = $request->input('password');

        $fieldType = filter_var($identifier, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        if ($this->guard()->attempt([$fieldType => $identifier, 'password' => $password])) {
            // Login successful
            return redirect()->route('front.index')->with('success', 'Login SuccessFully.');
        }
        // Authentication failed
        return back()->withErrors([
            'identifier' => 'The provided credentials do not match our records.',
        ]);
    }
    public function userlogout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('front.login')->with('success', 'User Logout Successfully');
    }

    public function create_user_1(Request $request)
    {
        //dd($request->all());

        $errormsg = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|unique:frontusers',
            'phone' => 'required|string|max:15|unique:frontusers',
        ]);

        if ($errormsg->fails()) {
            return redirect()->back()->withErrors($errormsg)->withInput();
        }
        session([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('front.creatpass')->with('success', 'Plese Creat Your Unique Password');
    }
    public function create_user_2(Request $request)
    {
        $errormsg = Validator::make($request->all(), [
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($errormsg->fails()) {
            return redirect()->back()->withErrors($errormsg)->withInput();
        }

        $user = Frontuser::create([
            'name' => session('name'),
            'email' => session('email'),
            'phone' => session('phone'),
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('front.login')->with('success', 'Your Acount SuccessFully Created.');
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
