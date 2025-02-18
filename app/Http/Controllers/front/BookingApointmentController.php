<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class BookingApointmentController extends Controller
{
    public function bookapintment_view()
    {
        $ServiceServices = Service::where('status', 'active')->get();
        //dd($Services);
        return view('frontend.book_apointment', compact('ServiceServices'));
    }


    public function bookapintment_store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'first_name'       => 'required',
            'last_name'        => 'required',
            'email'            => 'required',
            'phone'            => 'required|min:10',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'service'          => 'required',
            'message'          => 'nullable',
        ]);

        $appointment = new Appointment();
        $appointment->name = $request->first_name . ' ' . $request->last_name;;
        $appointment->email = $request->email;
        $appointment->user_id = $request->user_id;
        $appointment->phone_number = $request->phone;
        $appointment->date = $request->appointment_date;
        $appointment->time = $request->appointment_time;
        $appointment->sevrices = $request->service;
        $appointment->massage = $request->message;
        $appointment->save();

        // Store Notification in Session Array
        Session::push('notifications', [
            'message' => "Your appointment has been booked successfully. 📅",
            'time' => now()->diffForHumans(),
        ]);

        Mail::raw("Dear {$request->first_name},\n\nThank you for booking with us! We have received your booking request and will get back to you shortly with further details.\n\nIf you have any questions, feel free to reply to this email.\n\nBest Regards,\nUifry", function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Booking Confirmation - Your Request Has Been Received');
        });


        return response()->json(['success' => 'Appointment booked successfully! ✔']);
    }
}
