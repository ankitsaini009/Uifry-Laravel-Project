<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogcoment;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;
use App\Models\User;

class ComentsController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {
            $data = Blogcoment::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('coment.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('coment.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.coments.index');
    }

    public function comentstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->Blogcoment_id) && !empty($request->Blogcoment_id)) {
            $validator = Validator::make($request->all(), [
                'blog_id' => 'required',
                'user_id' => 'required',
                'description' => 'required',
                'status' => 'required|in:active,inactive',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Blogcoment = Blogcoment::find($request->Blogcoment_id);
            $Blogcoment->blog_id = $request->blog_id;
            $Blogcoment->user_id = $request->user_id;
            $Blogcoment->description = $request->description;
            $Blogcoment->status = $request->status;
            $Blogcoment->name = $request->name;
            $Blogcoment->email = $request->email;
            $Blogcoment->website = $request->website;
            $Blogcoment->save();

            return redirect()->route('coment.index')->with('success', 'Coment update successfully.');
        } else {
            $validator = Validator::make($request->all(), [
                'blog_id' => 'required',
                'user_id' => 'required',
                'description' => 'required',
                'status' => 'required|in:active,inactive',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Blogcoment = new Blogcoment();
            $Blogcoment->blog_id = $request->blog_id;
            $Blogcoment->user_id = $request->user_id;
            $Blogcoment->description = $request->description;
            $Blogcoment->status = $request->status;
            $Blogcoment->name = $request->name;
            $Blogcoment->email = $request->email;
            $Blogcoment->website = $request->website;
            $Blogcoment->save();
            return redirect()->route('coment.index')->with('success', 'Coment created successfully.');
        }
    }

    public function comentcreate()
    {
        $Blogs = Blog::all();
        $Users = User::all();
        return view('admin.coments.add', compact('Users', 'Blogs'));
    }

    public function comentedit($id)
    {
        $Blogs = Blog::all();
        $Users = User::all();
        $Blogcoment = Blogcoment::find($id);
        return view('admin.coments.add', compact('Blogcoment', 'Users', 'Blogs'));
    }

    public function comentdestroy($id)
    {
        $Blogcoment = Blogcoment::find($id);
        if (!$Blogcoment) {
            return redirect()->back()->with('error', 'Coment Not Found!');
        }
        $Blogcoment->delete();
        return redirect()->back()->with('success', 'Coment Delete successfully.');
    }
}
