<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Portfolio;
use App\Models\ContactMessage;
use App\Models\Team;
use App\Models\Partner;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{

   public function index()
    {
        $stats = Cache::remember('dashboard_stats', 300, function () {
            return [
                'portfolioCount' => Portfolio::count(),
                'productCount' => Product::count(),
                'blogCount' => Blog::count(),
                'messageCount' => ContactMessage::count(),
                'teamCount' => Team::count(),
                'partnerCount' => Partner::count(),
                'categoryCount' => Category::count(),
            ];
        });

        return view('layouts.main_content', array_merge($stats, [
            'portfolioItems' => Portfolio::latest()->take(5)->get(),
            'products' => Product::latest()->take(5)->get(),
            'blogPosts' => Blog::latest()->take(5)->get(),
            'messages' => ContactMessage::latest()->take(5)->get(),
            'teamMembers' => Team::latest()->take(6)->get(),
            'categories' => Category::latest()->take(5)->get(),
            'partners' => Partner::latest()->take(4)->get(),
        ]));
    }
}
