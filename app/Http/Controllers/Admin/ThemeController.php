<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\{Category, Theme};
use App\Http\Controllers\Controller;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $themes = Theme::with('category')->latest()->paginate(10); 
        return view('admin.themes.index', compact('themes'));
    }

    /**
     * Show the form for creating a new theme.
     */
    public function create()
    {
         $categories = Category::latest()->paginate(10);
        return view('admin.themes.create', compact('categories'));
    }

    /**
     * Store a newly created theme in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'demo_url' => 'nullable|url',
            'status' => 'required|in:active,inactive',
        ]);

        $theme = new Theme();
        $theme->title = $request->title;
        $theme->description = $request->description;
        $theme->category_id = $request->category_id;
        $theme->price = $request->price;
        $theme->demo_url = $request->demo_url;
        $theme->status = $request->status;

        // Handle image upload
        if ($request->hasFile('image')) {
            $theme->image = $request->file('image')->store('themes', 'public');
        }

        $theme->save();

        return redirect()->route('admin.themes.index')->with('success', 'Theme created successfully.');
    }

    /**
     * Show the form for editing the specified theme.
     */
    public function edit(Theme $theme)
    {
        $categories = Category::all();
        return view('admin.themes.edit', compact('theme', 'categories'));
    }

    /**
     * Update the specified theme in storage.
     */
    public function update(Request $request, Theme $theme)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'demo_url' => 'nullable|url',
            'status' => 'required|in:active,inactive',
        ]);

        $theme->title = $request->title;
        $theme->description = $request->description;
        $theme->category_id = $request->category_id;
        $theme->price = $request->price;
        $theme->demo_url = $request->demo_url;
        $theme->status = $request->status;

        // Handle image upload and replace old image
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($theme->image) {
                Storage::disk('public')->delete($theme->image);
            }

            $theme->image = $request->file('image')->store('themes', 'public');
        }

        $theme->save();

        return redirect()->route('admin.themes.index')->with('success', 'Theme updated successfully.');
    }


    /**
     * Remove the specified theme from storage.
     */
    public function destroy(Theme $theme)
    {
        if ($theme->image) {
            Storage::disk('public')->delete($theme->image);
        }

        $theme->delete();

        return redirect()->route('admin.themes.index')->with('success', 'Theme deleted successfully.');
    }


    public function show(Theme $theme)
    {
        return view('admin.themes.show', compact('theme'));
    }
}
