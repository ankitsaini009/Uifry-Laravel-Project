<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {
            $data = Testimonial::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('testimonials.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('testimonials.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.testimonials.index');
    }

    public function testimonialsstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->Testimonial_id) && !empty($request->Testimonial_id)) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'feedback' => 'required',
                'image' => 'required',
                'status' => 'required|in:active,inactive',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Testimonial = Testimonial::find($request->Testimonial_id);
            $Testimonial->name = $request->name;
            $Testimonial->feedback = $request->feedback;
            $Testimonial->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $Testimonial->image = $imageName;
            }
            $Testimonial->save();

            return redirect()->route('testimonials.index')->with('success', 'Testimonial update successfully.');
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'feedback' => 'required',
                'image' => 'required',
                'status' => 'required|in:active,inactive',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Testimonial = new Testimonial();
            $Testimonial->name = $request->name;
            $Testimonial->feedback = $request->feedback;
            $Testimonial->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $Testimonial->image = $imageName;
            }
            $Testimonial->save();
            return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
        }
    }

    public function testimonialscreate()
    {
        return view('admin.testimonials.add');
    }

    public function testimonialsedit($id)
    {
        $Testimonial = Testimonial::find($id);
        return view('admin.testimonials.add', compact('Testimonial'));
    }

    public function testimonialsdestroy($id)
    {
        $Testimonial = Testimonial::find($id);
        if (!$Testimonial) {
            return redirect()->back()->with('error', 'Testimonial Not Found!');
        }
        $Testimonial->delete();
        return redirect()->back()->with('success', 'Testimonial Delete successfully.');
    }
}
