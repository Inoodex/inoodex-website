<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::latest()->paginate(10);
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/partners', 'public');
        }

        Partner::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.partners.index')->with('success', 'Partner added successfully!');
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = $partner->image;

        if ($request->hasFile('image')) {
            if ($imagePath && File::exists(public_path('storage/' . $imagePath))) {
                File::delete(public_path('storage/' . $imagePath));
            }
            $imagePath = $request->file('image')->store('uploads/partners', 'public');
        }

        $partner->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.partners.index')->with('success', 'Partner updated successfully!');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        if ($partner->image && File::exists(public_path('storage/' . $partner->image))) {
            File::delete(public_path('storage/' . $partner->image));
        }
        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Partner deleted successfully!');
    }
}