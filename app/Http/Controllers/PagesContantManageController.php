<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PagesContantManage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PagesContantManageController extends Controller
{
    public function bannerEditstore(Request $request)
    {
        //dd($request->all());

        // Check if Page Exists
        $PagesContantManage = PagesContantManage::find($request->Service_banner_id);

        if (!$PagesContantManage) {
            return redirect()->back()->with('error', 'Invalid Page ID.');
        }

        // Organizing Data Systematically
        $contactpage = [

            "banner_title" => $request->banner_title,
            "banner_description" => $request->banner_description,

        ];

        // Handling Image Uploads
        if ($request->hasFile('bannerImage')) {
            // New Image Upload
            $imageName = time() . '_bannerimage.' . $request->bannerImage->extension();
            $request->bannerImage->move(public_path('uploads'), $imageName);
            $contactpage['bannerImage'] = $imageName;
        } else {
            // Retain Old Image
            $contactpage['bannerImage'] = $request->bannerImage ?? null;
        }

        //dd($contactpage);

        // Save Data to Database
        $PagesContantManage->services_page_content = json_encode($contactpage, JSON_PRETTY_PRINT);
        $PagesContantManage->save();

        return redirect()->back()->with('success', 'Services Banner updated successfully.');
    }

    public function contactpageupdate(Request $request)
    {
        // Check if Page Exists
        $PagesContantManage = PagesContantManage::find($request->Manage_contact_id);

        if (!$PagesContantManage) {
            return redirect()->back()->with('error', 'Invalid Page ID.');
        }

        // Organizing Data Systematically
        $contactpage = [
            "hero_section" => [
                "hero_section_title" => $request->hero_section_title,
                "description" => $request->hero_section_description
            ],
            "home_section" => [
                "home_section_office_timings" => $request->home_section_office_timings,
                "emai_address" => $request->emai_address,
                "home_section_phone_number" => $request->home_section_phone_number,
                "home_section_faq_title" => $request->home_section_faq_title,
                "home_section_faq_description" => $request->home_section_faq_description
            ]
        ];

        // Save Data to Database
        $PagesContantManage->contant_page_content = json_encode($contactpage, JSON_PRETTY_PRINT);
        $PagesContantManage->save();

        return redirect()->route('Manage_contact.show')->with('success', 'Homepage content updated successfully.');
    }


    public function homepageupdate(Request $request)
    {
        //dd($request->all());
        // Check if Page Exists
        $PagesContantManage = PagesContantManage::find($request->Manage_homepage_id);
        if (!$PagesContantManage) {
            return redirect()->back()->with('error', 'Invalid Page ID.');
        }

        // Organizing Data Systematically
        $homePageContent = [
            "hero_section" => [
                "banner_title" => $request->hero_section_banner_title,
                "description" => $request->hero_section_description,
                "bannerImage" => ($request->hero_section_bannerImage) ? $request->hero_section_bannerImage : "default_bannerimage.jpg",
                "emergency_number" => $request->hero_section_emergency_number,
                "linkedin" => [
                    "name" => $request->hero_section_linkedin_name,
                    "description" => $request->hero_section_linkedin_description,
                    "profile_link" => $request->hero_section_linkedin_profile_link,
                    "profile_image" => ($request->hero_section_linkedin_profileimage) ? $request->hero_section_linkedin_profileimage : "default_linkedin.jpg", // default image
                ],
            ],
            "home_section" => [
                "email_subscribe" => [
                    "title" => $request->home_section_email_subscribe_title,
                    "description" => $request->home_section_email_subscribe_description,
                    "image" => ($request->home_section_email_subscribe_image) ? $request->home_section_email_subscribe_image : "default_email_subscribe.jpg", // default image
                ],
                "dental_treatments_content" => $request->home_section_dental_treatments_contant,
                "dental_treatments_image" => ($request->home_section_dental_treatments_image) ? $request->home_section_dental_treatments_image : "default_dental_treatments.jpg", // default image
                "smile_content" => $request->home_section_smile_content,
                "smile_image" => ($request->home_section_smile_image) ? $request->home_section_smile_image : "default_smile.jpg", // default image
                "video" => [
                    "title" => $request->home_section_video_title,
                    "description" => $request->home_section_video_description,
                    "url" => $request->home_section_video_url,
                ],
                "footer" => [
                    "title" => $request->home_section_footer_title,
                    "description" => $request->home_section_footer_description,
                    "image" => ($request->home_section_footer_image) ? $request->home_section_footer_image : "default_footer.jpg", // default image
                ],
            ],
        ];

        // Handling Image Uploads
        if ($request->hasFile('hero_section_bannerImage')) {
            $imageName = time() . '_bannerimage.' . $request->hero_section_bannerImage->extension();
            $request->hero_section_bannerImage->move(public_path('uploads'), $imageName);
            $homePageContent['hero_section']['bannerImage'] = $imageName;
        }

        if ($request->hasFile('hero_section_linkedin_profileimage')) {
            $imageName = time() . '_linkedin.' . $request->hero_section_linkedin_profileimage->extension();
            $request->hero_section_linkedin_profileimage->move(public_path('uploads'), $imageName);
            $homePageContent['hero_section']['linkedin']['profile_image'] = $imageName;
        }

        if ($request->hasFile('home_section_email_subscribe_image')) {
            $imageName = time() . '_email_subscribe.' . $request->home_section_email_subscribe_image->extension();
            $request->home_section_email_subscribe_image->move(public_path('uploads'), $imageName);
            $homePageContent['home_section']['email_subscribe']['image'] = $imageName;
        }

        if ($request->hasFile('home_section_dental_treatments_image')) {
            $imageName = time() . '_dental_treatments.' . $request->home_section_dental_treatments_image->extension();
            $request->home_section_dental_treatments_image->move(public_path('uploads'), $imageName);
            $homePageContent['home_section']['dental_treatments_image'] = $imageName;
        }

        if ($request->hasFile('home_section_smile_image')) {
            $imageName = time() . '_smile.' . $request->home_section_smile_image->extension();
            $request->home_section_smile_image->move(public_path('uploads'), $imageName);
            $homePageContent['home_section']['smile_image'] = $imageName;
        }

        if ($request->hasFile('home_section_footer_image')) {
            $imageName = time() . '_footer.' . $request->home_section_footer_image->extension();
            $request->home_section_footer_image->move(public_path('uploads'), $imageName);
            $homePageContent['home_section']['footer']['image'] = $imageName;
        }

        // Convert Data to JSON & Save
        //dd($homePageContent);

        $PagesContantManage->home_page_content = json_encode($homePageContent, JSON_PRETTY_PRINT);
        $PagesContantManage->save();

        return redirect()->route('Manage_homepage.show')->with('success', 'Homepage content updated successfully.');
    }


    public function homepageShow()
    {
        $jsonData2 = PagesContantManage::first(); // Fetch the data from the database
        $jsonData = PagesContantManage::first(); // Fetch the data from the database
        $PagesContantManage = json_decode($jsonData->home_page_content, true); // Assuming JSON is stored in a column called 'json_data'
        //dd($PagesContantManage);
        return view('admin.manage_homepage.add', compact('PagesContantManage', 'jsonData2'));
    }

    public function contactpageShow()
    {
        $jsonData2 = PagesContantManage::first(); // Fetch the data from the database
        $jsonData = PagesContantManage::first(); // Fetch the data from the database
        $PagesContantManage = json_decode($jsonData->contant_page_content, true); // Assuming JSON is stored in a column called 'json_data'
        //dd($PagesContantManage);
        return view('admin.manage_contact.add', compact('PagesContantManage', 'jsonData2'));
    }
    public function editbanner()
    {

        $jsonData2 = PagesContantManage::first(); // Fetch the data from the database
        $jsonData = PagesContantManage::first(); // Fetch the data from the database
        $PagesContantManage = json_decode($jsonData->services_page_content, true); // Assuming JSON is stored in a column called 'json_data'
        //dd($PagesContantManage);
        return view('admin.services.editbanner', compact('PagesContantManage', 'jsonData2'));
    }
}
