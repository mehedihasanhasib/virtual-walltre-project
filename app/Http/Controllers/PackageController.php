<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    // create the page to create package
    public function create()
    {
        return view('admin.pages.create_package');
    }

    // package upload function
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'package_name' => 'required',
            'price' => 'required',
            'features.*' => 'required'
        ]);
        Package::create($validated_data);

        return redirect()
            ->route('admin.dashboard')
            ->with('message', 'Package Created Successfully');
    }
}
