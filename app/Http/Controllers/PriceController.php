<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $page_data["prices"] = Price::all();
        return view('frontend.price', $page_data);
    }

    public function list()
    {
        $page_data["prices"] = Price::all();
        return view('admin.price.index', $page_data);
    }

    public function create()
    {
        return view('admin.price.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'package_name'       => 'required|string|max:255',
            'software_price'     => 'required|string|max:255',
            'annual_server_fee'  => 'required|string|max:255',
            'monthly_server_fee' => 'required|string|max:255',
        ]);

        $price = new Price;

        $price->package_name       = $request->package_name;
        $price->software_price     = $request->software_price;
        $price->annual_server_fee  = $request->annual_server_fee;
        $price->monthly_server_fee = $request->monthly_server_fee;

        $price->save();

        return redirect()->route('price.list')->with('success', 'Price added successfully!');
    }

    public function edit($id)
    {
        $page_data['price'] = Price::findOrFail($id);
        return view('admin.price.edit', $page_data);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        $request->validate([
            'package_name'       => 'required|string|max:255',
            'software_price'     => 'required|string|max:255',
            'annual_server_fee'  => 'required|string|max:255',
            'monthly_server_fee' => 'required|string|max:255',
        ]);

        $price = Price::findOrFail($id);

        $price->package_name       = $request->package_name;
        $price->software_price     = $request->software_price;
        $price->annual_server_fee  = $request->annual_server_fee;
        $price->monthly_server_fee = $request->monthly_server_fee;

        $price->update();

        return redirect()->route('price.list');
    }

    public function delete($id)
    {
        // check user data exists or not
        $query = Price::where('id', $id);
        if ($query->doesntExist()) {
            return redirect()->back();
        }

        // delete data
        $query->delete();
        return redirect()->back();
    }
}
