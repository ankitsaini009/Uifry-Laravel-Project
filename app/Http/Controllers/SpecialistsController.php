<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialist;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SpecialistsController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {
            $data = Specialist::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('specialists.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('specialists.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.specialists.index');
    }

    public function specialistsstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->Specialist_id) && !empty($request->Specialist_id)) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'specialization' => 'required',
                'contact_number' => 'required|min:10',
                'description' => 'required',
                'image' => 'required',
                'status' => 'required|in:active,inactive',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Specialist = Specialist::find($request->Specialist_id);
            $Specialist->name = $request->name;
            $Specialist->specialization = $request->specialization;
            $Specialist->experience = $request->experience;
            $Specialist->email = $request->email;
            $Specialist->contact_number = $request->contact_number;
            $Specialist->description = $request->description;
            $Specialist->linkdin_profile_link = $request->linkdin_profile_link;
            $Specialist->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $Specialist->profile_photo = $imageName;
            }
            $Specialist->save();

            return redirect()->route('specialists.index')->with('success', 'Specialist update successfully.');
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'specialization' => 'required',
                'contact_number' => 'required|min:10',
                'description' => 'required',
                'image' => 'required',
                'status' => 'required|in:active,inactive',
            ]);


            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Specialist = new Specialist();
            $Specialist->name = $request->name;
            $Specialist->specialization = $request->specialization;
            $Specialist->experience = $request->experience;
            $Specialist->linkdin_profile_link = $request->linkdin_profile_link;
            $Specialist->email = $request->email;
            $Specialist->contact_number = $request->contact_number;
            $Specialist->description = $request->description;
            $Specialist->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $Specialist->profile_photo = $imageName;
            }
            $Specialist->save();
            return redirect()->route('specialists.index')->with('success', 'Specialist created successfully.');
        }
    }

    public function specialistscreate()
    {
        return view('admin.specialists.add');
    }

    public function specialistsedit($id)
    {
        $Specialist = Specialist::find($id);
        return view('admin.specialists.add', compact('Specialist'));
    }

    public function specialistsdestroy($id)
    {
        $Specialist = Specialist::find($id);
        if (!$Specialist) {
            return redirect()->back()->with('error', 'Specialist Not Found!');
        }
        $Specialist->delete();
        return redirect()->back()->with('success', 'Specialist Delete successfully.');
    }
}
