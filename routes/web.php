<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SpecificationController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Public\PriceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\RedirectIfAuthenticatedWithRole;

Route::get('/', function () {
    return view('pages.client.home.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/feature', function () {
    return view('pages.client.feature.index');
})->name('feature');
Route::get('/portfolio', function () {
    return view('pages.client.portfolio.index');
})->name('portfolio');
Route::get('/contact', function () {
    return view('pages.client.contact.index');
})->name('contact');

Route::get('/price', [PriceController::class, 'index'])->name('price');
Route::get('/price/data', [PriceController::class, 'data']);
Route::get('/price/{product:slug}', [PriceController::class, 'show'])->name('price.show');


//admin
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('specifications', SpecificationController::class);
    Route::resource('portfolios', PortfolioController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
