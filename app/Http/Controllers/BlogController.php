<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCat;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function blog_catview()
    {
        $blogCategories = BlogCat::all();

        if (\request()->ajax()) {
            $data = Blog::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('blogs.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('blogs.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.blogs.creat_cat', compact('blogCategories'));
    }

    public function index()
    {
        if (\request()->ajax()) {
            $data = Blog::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('blogs.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('blogs.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.blogs.index');
    }

    public function blog_catstore(Request $request)
    {
        //dd($request->all());


        $validator = Validator::make($request->all(), [
            'blog_cat' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $Blog = new BlogCat();
        $Blog->cat_name = $request->blog_cat;
        $Blog->status = $request->status;
        $Blog->save();
        return redirect()->route('blogs.index')->with('success', 'Blog Categorie successfully.');
    }


    public function blogsstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->blog_id) && !empty($request->blog_id)) {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'description' => 'required',
                'image' => 'required',
                'status' => 'required|in:active,inactive',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Blog = Blog::find($request->blog_id);
            $Blog->title = $request->title;
            $Blog->blog_cat = $request->blog_cat;
            $Blog->description = $request->description;
            $Blog->status = $request->status;
            $Blog->auther = $request->auther;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $Blog->image = $imageName;
            }
            $Blog->save();

            return redirect()->route('blogs.index')->with('success', 'Blog update successfully.');
        } else {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'description' => 'required',
                'image' => 'required',
                'status' => 'required|in:active,inactive',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Blog = new Blog();
            $Blog->title = $request->title;
            $Blog->blog_cat = $request->blog_cat;
            $Blog->description = $request->description;
            $Blog->auther = $request->auther;
            $Blog->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $Blog->image = $imageName;
            }
            $Blog->save();
            return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
        }
    }
    public function blogscreate()
    {
        $blogCategories = BlogCat::all();

        return view('admin.blogs.add', ['blogCategories' => $blogCategories]);
    }

    public function blogsedit($id)
    {
        $blogCategories = BlogCat::all();

        $Blog = Blog::find($id);
        return view('admin.blogs.add', compact('Blog', 'blogCategories'));
    }

    public function blog_catdestroy($id)
    {
        $Blog = BlogCat::find($id);
        if (!$Blog) {
            return redirect()->back()->with('error', 'Blog Not Found!');
        }
        $Blog->delete();
        return redirect()->back()->with('success', 'Blog Categorie Delete successfully.');
    }

    public function blogsdestroy($id)
    {
        $Blog = Blog::find($id);
        if (!$Blog) {
            return redirect()->back()->with('error', 'Blog Not Found!');
        }
        $Blog->delete();
        return redirect()->back()->with('success', 'Blog Delete successfully.');
    }
}
