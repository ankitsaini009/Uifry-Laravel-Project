<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FAQController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {
            $data = Faq::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('faq.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('faq.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.faq.index');
    }

    public function faqstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->Faq_id) && !empty($request->Faq_id)) {
            $validator = Validator::make($request->all(), [
                'question' => 'required',
                'answer' => 'required',
                'status' => 'required|in:active,inactive',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Faq = Faq::find($request->Faq_id);
            $Faq->question = $request->question;
            $Faq->answer = $request->answer;
            $Faq->status = $request->status;
            $Faq->save();

            return redirect()->route('faq.index')->with('success', 'Faq update successfully.');
        } else {
            $validator = Validator::make($request->all(), [
                'question' => 'required',
                'answer' => 'required',
                'status' => 'required|in:active,inactive',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Faq = new Faq();
            $Faq->question = $request->question;
            $Faq->answer = $request->answer;
            $Faq->status = $request->status;
            $Faq->save();
            return redirect()->route('faq.index')->with('success', 'Faq created successfully.');
        }
    }

    public function faqcreate()
    {
        return view('admin.faq.add');
    }

    public function Faqedit($id)
    {
        $Faq = Faq::find($id);
        return view('admin.faq.add', compact('Faq'));
    }

    public function faqdestroy($id)
    {
        $Faq = Faq::find($id);
        if (!$Faq) {
            return redirect()->back()->with('error', 'Faq Not Found!');
        }
        $Faq->delete();
        return redirect()->back()->with('success', 'Faq Delete successfully.');
    }
}
