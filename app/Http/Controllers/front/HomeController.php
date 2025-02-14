<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontuser;
use App\Models\Service;
use App\Models\Specialist;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Blogcoment;
use App\Models\Manage_about;
use App\Models\Notification;
use App\Models\Appointment;
use App\Models\PagesContantManage;
use App\Models\EmailSubscriber;
use App\Models\Faq;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function notificationShow()
    {
        $user = Auth::guard('front_user')->user();
        $Notification = Notification::where('user_id', $user->id)->get();
        //dd($Apointmentments);

        return view('frontend.notification', compact('user', 'Notification'));
    }

    public function userstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->user_id) && !empty($request->user_id)) {
            $validator = Validator::make($request->all(), [
                'name'  => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|digits_between:10,15',
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
            return redirect()->route('frontuserprofile')->with('success', 'Profile Update successfully. ✔');
        }
    }


    public function bookingShow()
    {
        $user = Auth::guard('front_user')->user();

        $Apointmentments = Appointment::where('user_id', $user->id)
            ->where('status', '!=', 'Completed') // Exclude "Completed"
            ->get();
        $Apointmentments_COMPLETE = Appointment::where('user_id', $user->id)
            ->where('status', 'Completed')
            ->get();

        //dd($Apointmentments);

        return view('frontend.apointment_show', compact('Apointmentments', 'Apointmentments_COMPLETE'));
    }
    public function store_BlogFront(Request $request)
    {
        //dd($request->all());

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string',
            'Blogs_id' => 'required|integer',
            'type' => 'required|string',
        ]);

        // Create a new comment using Eloquent
        $blogComment = new Blogcoment();
        $blogComment->name = $validatedData['name'];
        $blogComment->email = $validatedData['email'];
        $blogComment->description = $validatedData['description'];
        $blogComment->blog_id = $validatedData['Blogs_id'];
        $blogComment->type = $validatedData['type'];
        $blogComment->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'Comment added successfully! ✔');
    }

    public function store_commentsFront(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string',
            'services_id' => 'required|integer',
            'type' => 'required|string',
        ]);

        // Create a new comment using Eloquent
        $blogComment = new Blogcoment();
        $blogComment->name = $validatedData['name'];
        $blogComment->email = $validatedData['email'];
        $blogComment->description = $validatedData['description'];
        $blogComment->services_id = $validatedData['services_id'];
        $blogComment->type = $validatedData['type'];
        $blogComment->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'Comment added successfully! ✔');
    }


    public function services_detail_view(Request $request, $id)
    {

        $comments = Blogcoment::where('type', 'Services Coment')
            ->latest()
            ->take(3)
            ->get();

        $services = Service::where('status', 'active')->find($id);

        $specialists = Specialist::latest()->where('status', 'active')->get();
        $Faqs = Faq::latest()->where('status', 'active')->get();

        $jsonData = PagesContantManage::first(); // Fetch the data from the database
        $PagesContantManage = json_decode($jsonData->home_page_content, true);

        $jsonData = PagesContantManage::first(); // Fetch the data from the database
        $PagesContantManage = json_decode($jsonData->home_page_content, true);

        //dd($comments);

        return view('frontend.services_detail', compact('Faqs', 'services', 'specialists', 'PagesContantManage', "comments"));
    }

    public function blogs_detail_view(Request $request, $id)
    {

        $comments = Blogcoment::where('type', 'Blogs Coment')
            ->latest()
            ->take(3)
            ->get();

        $specialists = Specialist::latest()->where('status', 'active')->get();
        $Faqs = Faq::latest()->where('status', 'active')->get();
        $Blogs = Blog::latest()->where('status', 'active')->find($id);

        $jsonData = PagesContantManage::first(); // Fetch the data from the database
        $PagesContantManage = json_decode($jsonData->home_page_content, true);

        //dd($Blogs);
        return view('frontend.blog_detail', compact('Faqs', 'specialists', 'PagesContantManage', 'Blogs', 'comments'));
    }

    public function blogs_view(Request $request)
    {

        $perPage = 8; // Number of services per page
        $page = $request->input('page', 1); // Get current page from query parameter
        $offset = ($page - 1) * $perPage; // Calculate offset

        $totalServices = Service::where('status', 'active')->count(); // Get total services count
        $Blogs = Blog::where('status', 'active')->latest()->offset($offset)->limit($perPage)->get();

        $totalPages = ceil($totalServices / $perPage); // Calculate total pages

        $specialists = Specialist::latest()->where('status', 'active')->get();
        $Faqs = Faq::latest()->where('status', 'active')->get();
        $jsonData = PagesContantManage::first(); // Fetch the data from the database
        $PagesContantManage = json_decode($jsonData->home_page_content, true);



        return view('frontend.blogs', compact('Faqs', 'specialists', 'PagesContantManage', 'Blogs', 'totalPages', 'page',));
    }

    public function services_view(Request $request)
    {
        $perPage = 6; // Number of services per page
        $page = $request->input('page', 1); // Get current page from query parameter
        $offset = ($page - 1) * $perPage; // Calculate offset

        $totalServices = Service::where('status', 'active')->count(); // Get total services count
        $services = Service::where('status', 'active')->latest()->offset($offset)->limit($perPage)->get();

        $totalPages = ceil($totalServices / $perPage); // Calculate total pages

        $specialists = Specialist::latest()->where('status', 'active')->get();
        $Faqs = Faq::latest()->where('status', 'active')->get();

        $jsonData = PagesContantManage::first(); // Fetch the data from the database
        $PagesContantManage = json_decode($jsonData->home_page_content, true);

        $jsonData2 = PagesContantManage::first(); // Fetch the data from the database
        $PagesContantManage22 = json_decode($jsonData2->services_page_content, true);
        //dd($PagesContantManage2);

        return view('frontend.services', compact('Faqs', 'services', 'specialists', 'PagesContantManage', 'totalPages', 'page', 'PagesContantManage22'));
    }


    public function store_subscribe(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        // Store Subscriber
        $subscriber = EmailSubscriber::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Send Confirmation Email
        Mail::raw('Thank you for subscribing!', function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Subscription Confirmation');
        });

        return response()->json(['success' => 'Subscription successful ✔']);
    }

    public function contact_view()
    {
        $jsonData2 = PagesContantManage::first(); // Fetch the data from the database
        $jsonData = PagesContantManage::first(); // Fetch the data from the database
        $PagesContantManage = json_decode($jsonData->contant_page_content, true); // Assuming JSON is stored 
        $ServiceServices = Service::latest()->where('status', 'active')->get();

        $Faqs = Faq::latest()->where('status', 'active')->get();
        return view('frontend.contact', compact('Faqs', 'PagesContantManage', 'ServiceServices'));
    }


    public function index()
    {
        $services = Service::latest()->where('status', 'active')->get();
        $specialists = Specialist::latest()->where('status', 'active')->get();
        $Testimonials = Testimonial::latest()->where('status', 'active')->get();
        $Faqs = Faq::latest()->where('status', 'active')->get();
        $Blogs = Blog::latest()->where('status', 'active')->get();

        $jsonData = PagesContantManage::first(); // Fetch the data from the database
        $PagesContantManage = json_decode($jsonData->home_page_content, true);
        //dd($PagesContantManage);

        //dd($Blogs);
        return view('frontend.index', compact('services', 'specialists', 'Testimonials', 'Faqs', 'Blogs', 'PagesContantManage'));
    }

    public function userchangepass()
    {
        return view('frontend.passwordchange');
    }
    public function passwordupdate(Request $request)
    {
        //dd($request->all());

        $errormsg = Validator::make($request->all(), [
            'current_password' => 'required|min:6',
            'new_password' => 'required|min:6|confirmed',
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

        return redirect()->back()->with('success', 'Password successfully updated ✔');
    }

    public function frontuserprofile()
    {
        $userdata = Auth::guard('front_user')->user();
        //dd($userdata);
        return view('frontend.profile', compact('userdata'));
    }

    public function frontuser_edit_profile()
    {
        $userdata = Auth::guard('front_user')->user();
        //dd($userdata);
        return view('frontend.profile_edit', compact('userdata'));
    }

    public function about_view()
    {
        $Manage_about = Manage_about::first();
        $services = Service::latest()->where('status', 'active')->get();
        $specialists = Specialist::where('status', 'active')
            ->latest() // Latest data fetch karega
            ->take(3)  // Sirf 3 records lega
            ->get();

        $jsonData = PagesContantManage::first(); // Fetch the data from the database
        $PagesContantManage = json_decode($jsonData->home_page_content, true);

        //dd($specialists);

        return view('frontend.aboute', compact('Manage_about', 'services', 'specialists', 'PagesContantManage'));
    }
}
