<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Category;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with('category')->orderBy('id', 'desc')->paginate(10);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.portfolios.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'category_id' => 'nullable|string|max:100',
            'demo_url' => 'nullable|url',
            'status' => 'required|in:active,inactive',
        ]);

        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->category_id = $request->category_id;
        $portfolio->demo_url = $request->demo_url;
        $portfolio->status = $request->status;

        if ($request->hasFile('image')) {
            $portfolio->image = $request->file('image')->store('portfolios', 'public');
        }

        $portfolio->save();

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio item created successfully.');
    }

    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolios.show', compact('portfolio'));
    }

    public function edit(Portfolio $portfolio)
    {
        $categories = Category::all();
        return view('admin.portfolios.edit', compact('portfolio', 'categories'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'category_id' => 'nullable|string|max:100',
            'demo_url' => 'nullable|url',
            'status' => 'required|in:active,inactive',
        ]);

        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->category_id = $request->category_id;
        $portfolio->demo_url = $request->demo_url;
        $portfolio->status = $request->status;

        if ($request->hasFile('image')) {
            $portfolio->image = $request->file('image')->store('portfolios', 'public');
        }

        $portfolio->save();

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {

        $portfolio->delete();
        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio item deleted successfully.');
    }
}