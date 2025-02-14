<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AppointmentsController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {
            $data = Appointment::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('appointments.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('appointments.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])->addColumn('fullname', function ($row) {
                    return $row->fname . ' ' . $row->lname;
                })
                ->make(true);
        }

        return view('admin.appointments.index');
    }

    public function appointmentsstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->Appointment_id) && !empty($request->Appointment_id)) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Appointment = Appointment::find($request->Appointment_id);
            $Appointment->name = $request->name;
            $Appointment->date = $request->date;
            $Appointment->time = $request->time;
            $Appointment->status = $request->status;
            $Appointment->sevrices = $request->services_id;
            $Appointment->massage = $request->massage;
            $Appointment->email = $request->email;
            $Appointment->phone_number = $request->phone;
            $Appointment->save();

            return redirect()->route('appointments.index')->with('success', 'Appointment update successfully.');
        }
    }

    public function appointmentsedit($id)
    {
        $services = Service::where('status', 'active')->get();

        $Appointment = Appointment::find($id);
        return view('admin.appointments.add', compact('Appointment', 'services'));
    }

    public function appointmentsdestroy($id)
    {
        $Appointment = Appointment::find($id);
        if (!$Appointment) {
            return redirect()->back()->with('error', 'Appointment Not Found!');
        }
        $Appointment->delete();
        return redirect()->back()->with('success', 'Appointment Delete successfully.');
    }
}
