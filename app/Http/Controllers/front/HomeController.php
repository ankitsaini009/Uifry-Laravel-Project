<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontuser;
use App\Models\Service;
use App\Models\Specialist;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Faq;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function index()
    {
        $services = Service::latest()->where('status', 'active')->get();
        $specialists = Specialist::latest()->where('status', 'active')->get();
        $Testimonials = Testimonial::latest()->where('status', 'active')->get();
        $Faqs = Faq::latest()->where('status', 'active')->get();
        $Blogs = Blog::latest()->where('status', 'active')->get();
        //dd($Blogs);
        return view('frontend.index', compact('services', 'specialists', 'Testimonials', 'Faqs', 'Blogs'));
    }

    public function userchangepass()
    {
        return view('frontend.passwordchange');
    }
    public function passwordupdate(Request $request)
    {
        //dd($request->all());

        $errormsg = Validator::make($request->all(), [
            'current_password' => 'required|min:8',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if ($errormsg->fails()) {
            return redirect()->back()->withErrors($errormsg)->withInput();
        }

        $user = Auth::guard('front_user')->user();
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password does not match our records.']);
        }
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password successfully updated.');
    }

    public function userstore(Request $request)
    {
        //dd($request->all());
        if (isset($request->user_id) && !empty($request->user_id)) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required',
                'phone' => 'required|string|max:15',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user = Frontuser::find($request->user_id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $user->image = $imageName;
            }
            $user->save();
            return redirect()->back()->with('success', 'Profile Update successfully.');
        }
    }

    public function frontuserprofile()
    {
        $userdata = Auth::guard('front_user')->user();
        //dd($userdata);
        return view('frontend.profile', compact('userdata'));
    }
}
