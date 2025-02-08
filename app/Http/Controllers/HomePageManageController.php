<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manage_homepage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomePageManageController extends Controller
{
    public function aboutupdate(Request $request)
    {
        dd($request->all());

        if (isset($request->Manage_homepages_id) && !empty($request->Manage_homepages_id)) {
            $validator = Validator::make($request->all(), [
                'mission_statement' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Manage_homepage = Manage_homepage::find($request->Manage_homepages_id);
            $Manage_homepage->mission_statement = $request->mission_statement;

            $Manage_homepage->latest_technology_title = $request->latest_technology_title;
            $Manage_homepage->latest_technology_sub_description = $request->latest_technology_sub_description;
            $Manage_homepage->latest_technology_description = $request->latest_technology_description;
            $Manage_homepage->about_patients_overview_title = $request->about_patients_overview_title;
            $Manage_homepage->about_patients_overview_description = $request->about_patients_overview_description;
            $Manage_homepage->about_patients_overview_video = $request->about_patients_overview_video;

            if ($request->hasFile('about_image')) {
                $imageName = time() . '.' . $request->about_image->extension();
                $request->about_image->move(public_path('images'), $imageName);
                $Manage_homepage->about_image = $imageName;
            }

            if ($request->hasFile('latest_technology_image')) {
                $imageName = time() . '.' . $request->latest_technology_image->extension();
                $request->latest_technology_image->move(public_path('images'), $imageName);
                $Manage_homepage->latest_technology_image = $imageName;
            }
            $Manage_homepage->save();

            return redirect()->route('Manage_homepage.show')->with('success', 'Abouts update successfully.');
        } else {
            return redirect()->route('Manage_homepage.show')->with('error', 'Abouts not updated.');
        }
    }

    public function homepageShow()
    {
        // $Manage_homepage = Manage_homepage::first();
        return view('admin.manage_homepage.add');
    }
}
