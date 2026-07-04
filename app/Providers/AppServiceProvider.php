<?php

namespace App\Providers;

use App\Models\Contact;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
 public function boot()
{
    View::composer('layout.footer', function ($view) {
        $contacts = Cache::remember('footer_contacts', 3600, function () {
            return Contact::first();
        });
        $view->with('contacts', $contacts);
    });
}
}
