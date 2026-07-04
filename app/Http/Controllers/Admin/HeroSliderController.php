<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSliderController extends Controller
{
    public function index()
    {
    $sliders = HeroSlider::orderBy('sort_order', 'asc')->paginate(10);
    return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'subtitle'    => 'required|string|max:255',
            'description' => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status'      => 'boolean',
            'sort_order'  => 'integer',
        ]);

        $data = $request->all();
        $data['status'] = $request->has('status');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('hero-sliders', 'public');
        }

        HeroSlider::create($data);

        return redirect()->route('admin.sliders.index')
                         ->with('success', 'Slider created successfully!');
    }

    public function edit(HeroSlider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    public function show(HeroSlider $slider)
    {
        return view('admin.sliders.show', compact('slider'));
    }

public function update(Request $request, HeroSlider $slider)
{
    $validated = $request->validate([
        'title'       => 'required|string|max:255',
        'subtitle'    => 'required|string|max:255',
        'description' => 'required',
        'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'status'      => 'nullable|boolean',
        'sort_order'  => 'nullable|integer',
    ]);

    $validated['status'] = $request->boolean('status');

    if ($request->hasFile('image')) {
        if ($slider->image) {
            Storage::disk('public')->delete($slider->image);
        }
        $validated['image'] = $request->file('image')->store('hero-sliders', 'public');
    }

    $slider->update($validated);

    return redirect()
        ->route('admin.sliders.index')
        ->with('success', 'Slider updated successfully!');
}


    public function destroy(HeroSlider $slider)
    {
        if ($slider->image) {
            Storage::disk('public')->delete($slider->image);
        }
        $slider->delete();

        return redirect()->route('admin.sliders.index')
                         ->with('success', 'Slider deleted successfully!');
    }
}