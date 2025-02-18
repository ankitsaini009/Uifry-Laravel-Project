<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function edit()
    {
        $admindata = User::first();
        return view('admin.profile.index', compact('admindata'));
    }

    public function update(Request $request)
    {
        //dd($request->all());

        if (isset($request->user_id) && !empty($request->user_id)) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user = User::find($request->user_id);
            $user->name = $request->name;
            $user->email = $request->email;
            if (isset($request->password) && !empty($request->password)) {
                $user->password = Hash::make($request->password);
            }
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $user->profile_img = $imageName;
            }
            $user->save();
            return redirect()->route('profile.edit')->with('success', 'Admin update successfully.');
        } else {
            return redirect()->route('profile.edit')->with('error', 'Admin not updated.');
        }
    }
}
