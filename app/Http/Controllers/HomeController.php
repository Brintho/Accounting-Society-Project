<?php

namespace App\Http\Controllers;

use App\Models\HomeContent;
use Illuminate\Http\Request;

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
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'iframe_link' => 'nullable|url',
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'features'    => 'nullable|string',
        ]);

        $homeContent              = new HomeContent();
        $homeContent->image       = $request->hasFile('image') ? $this->uploadFile($request->file('image'), 'home') : null;
        $homeContent->iframe_link = $request->iframe_link;
        $homeContent->title       = $request->title;
        $homeContent->description = $request->description;
        $homeContent->features    = $request->features ? json_encode(explode("\n", trim($request->features))) : null;

        $homeContent->save();

        return redirect()->route('home.list')->with('success', 'Content added successfully!');
    }

    // ফাইল আপলোড করার মেথড
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
        // dd($request->image);
        $request->validate([
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'iframe_link' => 'nullable|url',
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'features'    => 'nullable|string',
        ]);
        // dd($request->all());

        $homeContent              = HomeContent::findOrFail($id);
        $homeContent->image       = $request->hasFile('image') ? $this->uploadFile($request->file('image'), 'home') : $homeContent->image;
        $homeContent->iframe_link = $request->iframe_link;
        $homeContent->title       = $request->title;
        $homeContent->description = $request->description;
        $homeContent->features    = $request->features ? json_encode(explode("\n", trim($request->features))) : null;
        $homeContent->update();

        return redirect()->route('home.list', $id)->with('success', 'Content updated successfully!');
    }
}
