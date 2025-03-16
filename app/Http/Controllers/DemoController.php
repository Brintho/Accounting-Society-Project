<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use App\Models\OrganizationType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DemoController extends Controller
{
    public function index()
    {
        $captcha = rand(1000, 9999);
        Session::put('captcha', $captcha);
        return view('frontend.demo', compact('captcha'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'your_name'         => 'required|string|max:255',
            'org_type_id'       => 'required',
            'organization_name' => 'required|string|max:255',
            'address'           => 'required|string|max:255',
            'present_member'    => 'required|numeric',
            'mobile_no'         => 'required|digits:11',
            'email'             => 'required|email',
            'captcha_code'      => 'required|numeric',
        ]);

        // see the captcha code
        if ($request->captcha_code != Session::get('captcha')) {
            return back()->withErrors(['captcha_code' => 'ভুল ক্যাপচা!']);
        }

        // save the form data with default status
        $data           = $request->all();
        $data['status'] = 'Pending';
        DemoRequest::create($data);

        return back()->with('success', 'আপনার ফর্মটি সফলভাবে সাবমিট হয়েছে!');
    }

    // Admin panel methods
    public function list()
    {
        $demoRequests = DemoRequest::with('organizationType')->latest()->get();
        return view('admin.demo.index', compact('demoRequests'));
    }

    public function edit($id)
    {
        $orgTypes    = OrganizationType::all();
        $demoRequest = DemoRequest::findOrFail($id);
        return view('admin.demo.edit', compact('demoRequest', 'orgTypes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'your_name'         => 'required|string|max:255',
            'org_type_id'       => 'required',
            'organization_name' => 'required|string|max:255',
            'address'           => 'required|string|max:255',
            'present_member'    => 'required|numeric',
            'mobile_no'         => 'required|digits:11',
            'email'             => 'required|email',
        ]);

        $demoRequest                    = DemoRequest::findOrFail($id);
        $demoRequest->your_name         = $request->your_name;
        $demoRequest->org_type_id       = $request->org_type_id;
        $demoRequest->organization_name = $request->organization_name;
        $demoRequest->address           = $request->address;
        $demoRequest->present_member    = $request->present_member;
        $demoRequest->mobile_no         = $request->mobile_no;
        $demoRequest->email             = $request->email;
        $demoRequest->comment           = $request->comment;

        $demoRequest->update();
        return redirect()->route('demo.list')->with('success', 'ডেমো রিকোয়েস্ট সফলভাবে আপডেট করা হয়েছে!');
    }

    public function destroy($id)
    {
        $demo_request = DemoRequest::findOrFail($id);
        $demo_request->delete();
        return redirect()->route('demo.list')->with('success', 'ডেমো রিকোয়েস্ট সফলভাবে মুছে ফেলা হয়েছে!');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Pending,Active',
        ]);

        $demoRequest         = DemoRequest::findOrFail($id);
        $demoRequest->status = $request->status;
        $demoRequest->save();

        return redirect()->route('demo.list')->with('success', 'স্ট্যাটাস সফলভাবে আপডেট করা হয়েছে!');
    }
}
