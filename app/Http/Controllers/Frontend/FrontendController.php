<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\{Blog, Category, Contact, ContactMessage, HeroSlider, Partner, Portfolio, Product, Team, Theme};
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = HeroSlider::where('status', true)
                    ->orderBy('sort_order')
                    ->get();
        $products = Product::with('category')->where('status', 'active')
                    ->latest()
                    ->paginate(12);
        $blogs = Blog::where('status', 'active')->latest()->take(3)->get();
        $portfolios = Portfolio::with('category')->latest()->take(6)->get();
        $partners = Partner::latest()->take(10)->get();
        return view('frontend.pages.index', compact('blogs', 'portfolios', 'partners', 'sliders', 'products'));
    }

    public function about()
    {
        $partners = Partner::latest()->take(10)->get();
        $teams = Team::where('status', 1)->get();
        return view('frontend.pages.about', compact('teams', 'partners'));
    }

    public function blogAll()
    {
        $blogs = Blog::where('status', 'active')
            ->latest()
            ->paginate(10);

        return view('frontend.pages.blog', compact('blogs'));
    }

    public function blogSingle($slug)
{
    $blog = Blog::where('status', 'active')
                ->where('slug', $slug)
                ->firstOrFail();

    $related = Blog::where('status', 'active')
        ->where('category', $blog->category)
        ->where('id', '!=', $blog->id)
        ->latest()
        ->take(3)
        ->get();

    return view('frontend.pages.single_blog', compact('blog', 'related'));
}


    public function services()
    {
        return view('frontend.pages.services');
    }

   public function portfolio()
{
    $categories = Category::latest()->paginate(10);
    $portfolios = Portfolio::with('category')->where('status', 'active')->latest()->get();
    return view('frontend.pages.portfolio', compact('portfolios', 'categories'));
}

public function portfolioShow($id)
{
    $portfolio = Portfolio::with('category')->findOrFail($id);
    return view('frontend.pages.portfolio_single', compact('portfolio'));
}

public function product()
{
    $products = Product::with('category')->where('status', 'active')->latest()->paginate(12);
    return view('frontend.pages.product', compact('products'));
}

    public function career()
    {
        return view('frontend.pages.career');
    }

    public function contact()

    {
        $contacts = Contact::latest()->paginate(10);
        return view('frontend.pages.contact', compact('contacts'));
    }

    public function softwareDevelopment()
    {
        return view('frontend.pages.software_development');
    }

    public function appsDevelopment()
    {
        $products = Product::with('category')->where('category_id', 2)->paginate(12);
        return view('frontend.pages.apps_development', compact('products'));
    }

    public function webDevelopment()
    {
        $products = Product::with('category')->where('category_id', 1)->paginate(12);
        return view('frontend.pages.web_development', compact('products'));
    }

    public function showTeamPage()
    {
        $teams = Team::where('is_active', 1)->get();
        return view('frontend.components.our_team', compact('teams'));
    }

    public function themeAll()
    {
        $themes = Theme::with('category')->where('status', 'active')
            ->latest()
            ->paginate(12);
        $categories = Category::select('id', 'name')->get();    
        return view('frontend.pages.theme', compact('themes', 'categories'));
    }

    //  public function contactMessage()
    // {
    //     return view('frontend.pages.contact');
    // }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|max:120',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|max:2000',
        ]);

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back()->with('success', ' Thank you for contacting us! We’ll get back to you soon.');
    }


}