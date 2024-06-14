<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        $title = 'Locations';
        return view('admin.location.index', compact('locations', 'title'));
    }

    public function create()
    {
        $title = 'Create Location';
        return view('admin.location.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'open' => 'nullable|date_format:H:i',
            'close' => 'nullable|date_format:H:i',
        ]);

        $data = $request->only(['name', 'description', 'open', 'close']);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        Location::create($data);
        return redirect()->route('adminlocations.index')->with('success', 'Location created successfully.');
    }

    public function show(Location $adminlocation)
    {
        $title = 'Location Details';
        return view('admin.location.show', compact('adminlocation', 'title'));
    }

    public function edit(Location $adminlocation)
    {
        $title = 'Edit Location';
        return view('admin.location.edit', compact('adminlocation', 'title'));
    }

    public function update(Request $request, Location $adminlocation)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'open' => 'nullable|date_format:H:i',
            'close' => 'nullable|date_format:H:i',
        ]);

        $data = $request->only(['name', 'description', 'open', 'close']);
        if ($request->hasFile('image')) {
            if ($adminlocation->image) {
                Storage::disk('public')->delete($adminlocation->image);
            }
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $adminlocation->update($data);
        return redirect()->route('adminlocations.index')->with('success', 'Location updated successfully.');
    }

    public function destroy(Location $adminlocation)
    {
        if ($adminlocation->image) {
            Storage::disk('public')->delete($adminlocation->image);
        }
        $adminlocation->delete();
        return redirect()->route('adminlocations.index')->with('success', 'Location deleted successfully.');
    }

    public function mainPage()
    {
        $locations = Location::all();
        $title = 'Locations';
        return view('main.location', compact('locations', 'title'));
    }
}
