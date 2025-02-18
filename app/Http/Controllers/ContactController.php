<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Service;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {
            $data = Contact::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('contact.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('contact.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])->addColumn('fullname', function ($row) {
                    return $row->fname . ' ' . $row->lname;
                })
                ->make(true);
        }

        return view('admin.contact.index');
    }

    public function contactstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->Contact_id) && !empty($request->Contact_id)) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'message' => 'required',
                'email' => 'required',
                'date' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Contact = Contact::find($request->Contact_id);
            $Contact->name = $request->name;
            $Contact->email = $request->email;
            $Contact->phone = $request->phone;
            $Contact->date = $request->date;
            $Contact->services = $request->services;
            $Contact->time = $request->time;
            $Contact->message = $request->message;
            $Contact->save();

            return redirect()->route('contact.index')->with('success', 'Contact update successfully.');
        }
    }

    public function contactedit($id)
    {
        $ServiceServices = Service::latest()->where('status', 'active')->get();
        $Contact = Contact::find($id);
        return view('admin.contact.add', compact('Contact', 'ServiceServices'));
    }

    public function contactdestroy($id)
    {
        $Contact = Contact::find($id);
        if (!$Contact) {
            return redirect()->back()->with('error', 'Contact Not Found!');
        }
        $Contact->delete();
        return redirect()->back()->with('success', 'Contact Delete successfully.');
    }
}
