<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrganizationType;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $orders = Order::with(['organizationType', 'package'])->latest()->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $captcha = rand(1000, 9999);
        Session::put('captcha', $captcha);

        $packages = Price::all();
        $orgTypes = OrganizationType::all();
        return view('frontend.order', compact('packages', 'orgTypes', 'captcha'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'org_type_id'            => 'required|exists:organization_types,id',
            'organization_name'      => 'required|string|max:255',
            'address'                => 'required|string',
            'image'                  => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'mobile_no'              => 'required|string|max:20',
            'organization_head_name' => 'required|string|max:255',
            'national_id'            => 'nullable|string|max:20',
            'email'                  => 'nullable|email|max:255',
            'package_id'             => 'required|exists:prices,id',
            'captcha_code'           => 'required',
        ]);

        // Check captcha first
        if ($request->captcha_code != Session::get('captcha')) {
            return back()->withErrors(['captcha_code' => 'ভুল ক্যাপচা!']);
        }

        // Handle file upload
        $imagePath = $this->uploadFile($request->file('image'), 'organization-logos');

        $order = Order::create([
            'org_type_id'            => $request->org_type_id,
            'organization_name'      => $request->organization_name,
            'address'                => $request->address,
            'image'                  => $imagePath,
            'mobile_no'              => $request->mobile_no,
            'organization_head_name' => $request->organization_head_name,
            'national_id'            => $request->national_id,
            'email'                  => $request->email,
            'package_id'             => $request->package_id,
            'status'                 => 'pending',
        ]);

        return redirect()->back()->with('success', 'অর্ডার সফলভাবে জমা দেওয়া হয়েছে!');
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $packages = Price::all();
        $orgTypes = OrganizationType::all();
        return view('admin.orders.edit', compact('order', 'packages', 'orgTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'org_type_id'            => 'required|exists:organization_types,id',
            'organization_name'      => 'required|string|max:255',
            'address'                => 'required|string',
            'image'                  => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'mobile_no'              => 'required|string|max:20',
            'organization_head_name' => 'required|string|max:255',
            'national_id'            => 'nullable|string|max:20',
            'email'                  => 'nullable|email|max:255',
            'package_id'             => 'required|exists:prices,id',
            'status'                 => 'required|in:pending,approved,rejected',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            // Delete old image
            $oldPath = public_path('uploads/organization-logos/' . $order->image);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }

            // Upload new image
            $data['image'] = $this->uploadFile($request->file('image'), 'organization-logos');
        }

        $order->update($data);

        return redirect()->route('orders.index')->with('success', 'Order updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        // Delete the organization logo
        if ($order->image) {
            $imagePath = public_path('uploads/organization-logos/' . $order->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully!');
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $order->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'অর্ডারের স্ট্যাটাস আপডেট করা হয়েছে!');
    }

    private function uploadFile($file, $folder)
    {
        $fileName = time() . '_' . $file->getClientOriginalName();
        $path     = public_path('uploads/' . $folder);

        // Create directory if it doesn't exist
        if (! file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file->move($path, $fileName);
        return $fileName;
    }
}
