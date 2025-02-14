<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class FrontContactController extends Controller
{
    public function contact_user_store(Request $request)
    {
        //dd($request->all());

        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'message' => 'required',
            'email' => 'required',
            'phone' => 'required|min:10|max:12',
            'services' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $Contact = new Contact;
        $Contact->name = $request->fname . " " . $request->lname;
        $Contact->email = $request->email;
        $Contact->phone = $request->phone;
        $Contact->services = $request->services;
        $Contact->date = $request->date;
        $Contact->time = $request->time;
        $Contact->message = $request->message;
        $Contact->save();

        // Send Confirmation Email to User
        Mail::raw("Dear {$request->fname},\n\nThank you for reaching out to us! We have received your message and will get back to you soon.\n\nBest Regards,\nYour Company", function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Contact Form Submission Received');
        });


        return redirect()->back()->with('success', 'Your Contact Send successfully ✔');
    }
}
