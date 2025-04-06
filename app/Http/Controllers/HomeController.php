<?php

namespace App\Http\Controllers;

use App\Models\HomeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $page_data["homeContent"] = HomeContent::all();
        return view('frontend.home', $page_data);
    }

    public function list()
    {
        $page_data["homeContent"] = HomeContent::all();
        return view('admin.home-content.index', $page_data);
    }

    public function create()
    {
        return view('admin.home-content.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'company_address'   => 'required|string|max:255',
            'company_phone'     => 'required|string|max:20',
            'whatsapp_number'   => 'required|string|max:20',
            'company_email'     => 'required|email|max:255',
            'messenger'         => 'required|string|max:255',
            'facebook'          => 'nullable|url',
            'youtube_link'      => 'nullable|url',
            'website_link'      => 'nullable|url',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'iframe_link'       => 'nullable|url',
            'title'             => 'required|string|max:255',
            'software_features' => 'required|string|max:255',
            'description'       => 'nullable|string',
            'features'          => 'nullable|string',
            'software_tagline'  => 'nullable|string',
        ]);

        $homeContent                    = new HomeContent();
        $homeContent->company_address   = $request->company_address;
        $homeContent->company_phone     = $request->company_phone;
        $homeContent->whatsapp_number   = $request->whatsapp_number;
        $homeContent->company_email     = $request->company_email;
        $homeContent->messenger         = $request->messenger;
        $homeContent->facebook          = $request->facebook;
        $homeContent->youtube_link      = $request->youtube_link;
        $homeContent->website_link      = $request->website_link;
        $homeContent->image             = $request->hasFile('image') ? $this->uploadFile($request->file('image'), 'home') : null;
        $homeContent->iframe_link       = $request->iframe_link;
        $homeContent->title             = $request->title;
        $homeContent->software_features = $request->software_features;
        $homeContent->description       = $request->description;
        $homeContent->features          = $request->features ? json_encode(explode("\n", trim($request->features))) : null;
        $homeContent->software_tagline  = $request->software_tagline;

        $homeContent->save(); // ডাটাবেজে ডাটা সংরক্ষণের জন্য

        return redirect()->route('home.list')->with('success', 'Content added successfully!');
    }

    //file upload method
    private function uploadFile($file, $folder)
    {
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/' . $folder), $fileName);
        return $fileName;
    }

    public function edit($id)
    {
        $page_data['homeContent'] = HomeContent::findOrFail($id);
        return view('admin.home-content.edit', $page_data);
    }

    public function delete($id)
    {

        // check user data exists or not
        $query = HomeContent::where('id', $id);
        if ($query->doesntExist()) {
            return redirect()->back();
        }

        // delete data
        $query->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'company_address'   => 'required|string|max:255',
            'company_phone'     => 'required|string|max:20',
            'whatsapp_number'   => 'required|string|max:20',
            'company_email'     => 'required|email|max:255',
            'messenger'         => 'required|string|max:255',
            'facebook'          => 'required|nullable|url',
            'youtube_link'      => 'required|nullable|url',
            'website_link'      => 'required|nullable|url',
            'image'             => 'required|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'iframe_link'       => 'required|nullable|url',
            'title'             => 'required|string|max:255',
            'software_features' => 'required|string|max:255',
            'description'       => 'required|nullable|string',
            'features'          => 'required|nullable|string',
            'software_tagline'  => 'required|nullable|string',
        ]);

        $homeContent                    = HomeContent::findOrFail($id);
        $homeContent->company_address   = $request->company_address;
        $homeContent->company_phone     = $request->company_phone;
        $homeContent->whatsapp_number   = $request->whatsapp_number;
        $homeContent->company_email     = $request->company_email;
        $homeContent->messenger         = $request->messenger;
        $homeContent->facebook          = $request->facebook;
        $homeContent->youtube_link      = $request->youtube_link;
        $homeContent->website_link      = $request->website_link;
        $homeContent->image             = $request->hasFile('image') ? $this->uploadFile($request->file('image'), 'home') : null;
        $homeContent->iframe_link       = $request->iframe_link;
        $homeContent->title             = $request->title;
        $homeContent->software_features = $request->software_features;
        $homeContent->description       = $request->description;
        $homeContent->features          = $request->features ? json_encode(explode("\n", trim($request->features))) : null;
        $homeContent->software_tagline  = $request->software_tagline;
        $homeContent->save();
        return redirect()->route('home.list', $id)->with('success', 'Content updated successfully!');
    }
}
