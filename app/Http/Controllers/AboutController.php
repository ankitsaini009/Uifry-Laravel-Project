<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manage_about;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function aboutupdate(Request $request)
    {
        //dd($request->all());

        if (isset($request->Manage_abouts_id) && !empty($request->Manage_abouts_id)) {
            $validator = Validator::make($request->all(), [
                'mission_statement' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Manage_about = Manage_about::find($request->Manage_abouts_id);
            $Manage_about->mission_statement = $request->mission_statement;

            $Manage_about->latest_technology_title = $request->latest_technology_title;
            $Manage_about->latest_technology_sub_description = $request->latest_technology_sub_description;
            $Manage_about->latest_technology_description = $request->latest_technology_description;
            $Manage_about->about_patients_overview_title = $request->about_patients_overview_title;
            $Manage_about->about_patients_overview_description = $request->about_patients_overview_description;
            $Manage_about->about_patients_overview_video = $request->about_patients_overview_video;

            if ($request->hasFile('about_image')) {
                $imageName = time() . '.' . $request->about_image->extension();
                $request->about_image->move(public_path('images'), $imageName);
                $Manage_about->about_image = $imageName;
            }

            if ($request->hasFile('latest_technology_image')) {
                $imageName = time() . '.' . $request->latest_technology_image->extension();
                $request->latest_technology_image->move(public_path('images'), $imageName);
                $Manage_about->latest_technology_image = $imageName;
            }
            $Manage_about->save();

            return redirect()->route('manage_about.show')->with('success', 'Abouts update successfully.');
        } else {
            return redirect()->route('manage_about.show')->with('error', 'Abouts not updated.');
        }
    }

    public function aboutShow()
    {
        $Manage_about = Manage_about::first();
        return view('admin.manage_about.add', compact('Manage_about'));
    }
}
