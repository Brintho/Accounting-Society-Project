<?php

namespace App\Http\Controllers;

use App\Models\OrganizationType;
use Illuminate\Http\Request;

class OrganizationTypeController extends Controller
{
    // সব Organization Type দেখানোর জন্য
    public function index()
    {
        $orgTypes = OrganizationType::all();
        return view('admin.organization_type.index', compact('orgTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|',
        ]);

        $orgType       = new OrganizationType();
        $orgType->name = $request->name;
        $orgType->save();

        return redirect()->back()->with('success', 'প্রতিষ্ঠানের ধরন সফলভাবে যোগ করা হয়েছে!');
    }

    public function edit($id)
    {
        $orgType = OrganizationType::findOrFail($id);
        return view('admin.organization_type.edit', compact('orgType'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:organization_types,name,' . $id,
        ]);

        $orgType = OrganizationType::findOrFail($id);
        $orgType->update([
            'name' => $request->name,
        ]);

        return redirect()->route('organization.index')->with('success', 'প্রতিষ্ঠানের ধরন সফলভাবে আপডেট হয়েছে!');
    }

    public function destroy($id)
    {
        OrganizationType::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'প্রতিষ্ঠানের ধরন সফলভাবে মুছে ফেলা হয়েছে!');
    }
}
