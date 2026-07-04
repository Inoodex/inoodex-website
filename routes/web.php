<?php

use Illuminate\Support\Facades\{Response, Route, Storage};
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;


Route::get('/', [FrontendController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('frontend.pages.index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

        Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
        Route::resource('portfolios', App\Http\Controllers\Admin\PortfolioController::class);
        Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
        Route::resource('contacts', App\Http\Controllers\Admin\ContactController::class);
        Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
        Route::resource('teams', App\Http\Controllers\Admin\TeamController::class);
        Route::resource('themes', App\Http\Controllers\Admin\ThemeController::class);
        Route::resource('partners', App\Http\Controllers\Admin\PartnerController::class);
        Route::resource('sliders', App\Http\Controllers\Admin\HeroSliderController::class);

        // contact form
        Route::get('/contact-messages', [App\Http\Controllers\Admin\ContactMessageController::class, 'index'])->name('contact.index');
        Route::get('/contact-messages/{id}', [App\Http\Controllers\Admin\ContactMessageController::class, 'show'])->name('contact.show');
        Route::delete('/contact-messages/{id}', [App\Http\Controllers\Admin\ContactMessageController::class, 'destroy'])->name('contact.destroy');
    });

// Frontened
Route::
        namespace('App\Http\Controllers\Frontend')->group(function () {
            Route::get('/about', 'FrontendController@about');
            Route::get('/services', 'FrontendController@services');
            // Route::get('/portfolio', 'FrontendController@portfolio');
            Route::get('/products', 'FrontendController@product');
            Route::get('/career', 'FrontendController@career');
            Route::get('/contact', 'FrontendController@contact');
            Route::get('/software-development', 'FrontendController@softwareDevelopment');
            Route::get('/apps-development', 'FrontendController@appsDevelopment');
            Route::get('/web-development', 'FrontendController@webDevelopment');

            Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio.index');
            Route::get('/portfolio/{id}', [FrontendController::class, 'portfolioShow'])->name('portfolio.show');

            Route::get('/blogs', [FrontendController::class, 'blogAll'])->name('blogs');
            Route::get('/blogs/{slug}', [FrontendController::class, 'blogSingle'])->name('blogs.show');

            Route::get('/themes', [FrontendController::class, 'themeAll'])->name('themes');

            // Route::get('/contact', [FrontendController::class, 'contactMessage'])->name('contact');
            Route::post('/contact', [FrontendController::class, 'storeContact'])->name('contact.store');


        });

require __DIR__ . '/auth.php';
