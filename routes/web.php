<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\BrandController as AdminBrandController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'index'])->name('index');
Route::get('/about', [UserController::class,'about'])->name('user.about');
Route::get('/contact', [UserController::class,'contact'])->name('contact');
Route::get('/service', [UserController::class,'service'])->name('service');
Route::get('/user/portfolio', [UserController::class,'portfolio'])->name('user.portfolio');


// Guest Admin Routes
Route::middleware('guest')->group(function (): void {
    Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
});

// Authenticated Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function (): void {
    Route::redirect('/', '/admin/dashboard');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/about', [AdminAboutController::class, 'edit'])->name('about.edit');
    Route::post('/about', [AdminAboutController::class, 'store'])->name('about.store');
    Route::put('/about/{about}', [AdminAboutController::class, 'update'])->name('about.update');
    Route::get('/brands', [AdminBrandController::class, 'index'])->name('brands.index');
    Route::get('/brands/create', [AdminBrandController::class, 'create'])->name('brands.create');
    Route::post('/brands', [AdminBrandController::class, 'store'])->name('brands.store');
    Route::get('/brands/{brand}/edit', [AdminBrandController::class, 'edit'])->name('brands.edit');
    Route::put('/brands/{brand}', [AdminBrandController::class, 'update'])->name('brands.update');
    Route::delete('/brands/{brand}', [AdminBrandController::class, 'destroy'])->name('brands.destroy');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    
    // Portfolio CRUD
    Route::resource('portfolio', AdminPortfolioController::class);
    
    // Services CRUD
    Route::resource('services', ServiceController::class);
});
