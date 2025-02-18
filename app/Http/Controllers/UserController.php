<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frontuser;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {
            $data = Frontuser::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('user.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('user.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.users.index');
    }

    public function userstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->user_id) && !empty($request->user_id)) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required',
                'phone' => 'required|string|max:15',
                'status' => 'required|in:active,inactive',
                'password' => 'confirmed',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user = Frontuser::find($request->user_id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->status = $request->status;
            if (isset($request->password) && !empty($request->password)) {
                $user->password = Hash::make($request->password);
            }
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $user->image = $imageName;
            }
            $user->save();
            return redirect()->route('user.index')->with('success', 'User update successfully.');
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:frontusers,email',
                'password' => 'required|string|min:6|confirmed',
                'phone' => 'required|string|max:15',
                'status' => 'required|in:active,inactive',
                'image' => 'nullable|image',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user = new Frontuser();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->status = $request->status;

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $user->image = $imageName;
            }
            $user->save();
            return redirect()->route('user.index')->with('success', 'User created successfully.');
        }
    }

    public function usercreate()
    {
        return view('admin.users.add');
    }

    public function useredit($id)
    {
        $userdata = Frontuser::find($id);
        return view('admin.users.add', compact('userdata'));
    }

    public function userdestroy($id)
    {
        $userdata = Frontuser::find($id);
        if (!$userdata) {
            return redirect()->back()->with('error', 'User Not Found!');
        }
        $userdata->delete();
        return redirect()->back()->with('success', 'User Delete successfully.');
    }
}
