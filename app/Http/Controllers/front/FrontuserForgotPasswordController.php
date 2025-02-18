<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\Frontuser;

class FrontuserForgotPasswordController extends Controller
{
    // Show the form to request a password reset link
    public function showLinkRequestForm()
    {
        return view('frontend.user_login.forgot-password');
    }

    // Send the reset password link to the user's email
    public function sendResetLinkEmail(Request $request)
    {
        //dd($request->all());

        $request->validate(['email' => 'required|email']);

        // Send the password reset link
        $status = Password::broker('front_users')->sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    // Show the password reset form with the token
    public function show_ResetForm($token)
    {
        dd($token);
        return view('frontend.user_login.reset-password', ['token' => $token]);
    }

    // Handle the actual password reset
    public function reset(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = Frontuser::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'User not found.']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password has been reset successfully! ✔');
    }
}
