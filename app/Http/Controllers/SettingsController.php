<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function settingsupdate(Request $request)
    {
        //dd($request->all());

        if (isset($request->settings_id) && !empty($request->settings_id)) {
            $validator = Validator::make($request->all(), [
                'site_name' => 'required',
                'contect_phone' => 'min:10|numeric',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Setting = Setting::find($request->settings_id);
            $Setting->site_name = $request->site_name;
            $Setting->contact_email = $request->contact_email;
            $Setting->contect_phone = $request->contect_phone;
            $Setting->site_description = $request->site_description;
            $Setting->facebook_url = $request->facebook_url;
            $Setting->instagram_url = $request->instagram_url;
            $Setting->twitter_url = $request->twitter_url;
            $Setting->linkedIn_url = $request->linkedIn_url;
            $Setting->youtub_url = $request->youtub_url;
            $Setting->site_address = $request->site_address;
            if ($request->hasFile('site_logo')) {
                $imageName = time() . '.' . $request->site_logo->extension();
                $request->site_logo->move(public_path('images'), $imageName);
                $Setting->site_logo = $imageName;
            }

            if ($request->hasFile('site_footerlogo')) {

                $imageName = time() . '.' . $request->site_footerlogo->extension();
                $request->site_footerlogo->move(public_path('images'), $imageName);
                $Setting->site_footerlogo = $imageName;
            }
            if ($request->hasFile('admin_penal_logo')) {

                $imageName = time() . '.' . $request->admin_penal_logo->extension();
                $request->admin_penal_logo->move(public_path('images'), $imageName);
                $Setting->admin_penal_logo = $imageName;
            }
            $Setting->save();

            return redirect()->route('settings.show')->with('success', 'Settings update successfully.');
        } else {
            return redirect()->route('settings.show')->with('error', 'Settings not updated.');
        }
    }

    public function settingsShow()
    {
        $Setting = Setting::first();
        return view('admin.settings.add', compact('Setting'));
    }
}
