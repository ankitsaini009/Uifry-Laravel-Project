<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {
            $data = Service::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('services.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('services.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.services.index');
    }

    public function servicesstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->Service_id) && !empty($request->Service_id)) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'description' => 'required',
                'image' => 'required',
                'status' => 'required|in:active,inactive',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Service = Service::find($request->Service_id);
            $Service->name = $request->name;
            $Service->price = $request->price;
            $Service->description = $request->description;
            $Service->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $Service->image = $imageName;
            }
            $Service->save();

            return redirect()->route('services.index')->with('success', 'Service update successfully.');
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'description' => 'required',
                'image' => 'required',
                'status' => 'required|in:active,inactive',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Service = new Service();
            $Service->name = $request->name;
            $Service->price = $request->price;
            $Service->description = $request->description;
            $Service->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $Service->image = $imageName;
            }
            $Service->save();
            return redirect()->route('services.index')->with('success', 'Service created successfully.');
        }
    }

    public function servicescreate()
    {
        return view('admin.services.add');
    }

    public function servicesedit($id)
    {
        $Service = Service::find($id);
        return view('admin.services.add', compact('Service'));
    }

    public function servicesdestroy($id)
    {
        $Service = Service::find($id);
        if (!$Service) {
            return redirect()->back()->with('error', 'Service Not Found!');
        }
        $Service->delete();
        return redirect()->back()->with('success', 'Service Delete successfully.');
    }
}
