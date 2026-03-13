<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::get('/sarees/{slug?}', [ProductController::class, 'category'])->name('category');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/women', [ProductController::class, 'category'])->defaults('slug', 'women')->name('women');
Route::get('/mens', [ProductController::class, 'category'])->defaults('slug', 'mens')->name('mens');
Route::get('/kids', [ProductController::class, 'category'])->defaults('slug', 'kids')->name('kids');

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

/* ---------- ADD THESE TWO ROUTES ---------- */

Route::post('/login', function (Request $request) {
    return back()->with('success', 'Login request received');
})->name('login.submit');

Route::post('/register', function (Request $request) {
    return back()->with('success', 'Register request received');
})->name('register');

/* ------------------------------------------ */

Route::get('/search', function () {
    return view('search');
});

// Account Routes
Route::get('/my-account', function () {
    return view('my-account');
});

Route::get('/my-orders', function () {
    return view('my-orders');
});

Route::get('/my-profile', function () {
    return view('my-profile');
});

Route::get('/my-addresses', function () {
    return view('my-addresses');
});

Route::get('/my-reviews', function () {
    return view('my-reviews');
});

Route::get('/order-confirmation', function () {
    return view('order-confirmation');
});

Route::get('/order-detail', function () {
    return view('order-detail');
});

// Policy Routes
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/shipping-policy', function () {
    return view('shipping-policy');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/cancellation', function () {
    return view('cancellation');
});

Route::get('/exchange-policy', function () {
    return view('exchange-policy');
});

Route::get('/fabric-care', function () {
    return view('fabric-care');
});

// Admin Panel Routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->names('admin.users');
    Route::resource('events', \App\Http\Controllers\Admin\EventController::class)->names('admin.events');
    Route::get('/settings', [\App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('admin.settings');
});