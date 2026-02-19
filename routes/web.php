<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\BrandController as AdminBrandController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [UserController::class,'index'])->name('index');
Route::get('/about', [UserController::class,'about'])->name('about');

Route::get('/contact', [UserController::class,'contact'])->name('contact');
Route::get('/service', [UserController::class,'service'])->name('service');
Route::get('/portfolio', [UserController::class,'portfolio'])->name('portfolio');

Route::middleware('guest')->group(function (): void {
    Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function (): void {
    Route::redirect('/', '/admin/dashboard');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/about', [AdminAboutController::class, 'edit'])->name('admin.about.edit');
    Route::post('/about', [AdminAboutController::class, 'store'])->name('admin.about.store');
    Route::put('/about/{about}', [AdminAboutController::class, 'update'])->name('admin.about.update');
    Route::get('/brands', [AdminBrandController::class, 'index'])->name('admin.brands.index');
    Route::get('/brands/create', [AdminBrandController::class, 'create'])->name('admin.brands.create');
    Route::post('/brands', [AdminBrandController::class, 'store'])->name('admin.brands.store');
    Route::get('/brands/{brand}/edit', [AdminBrandController::class, 'edit'])->name('admin.brands.edit');
    Route::put('/brands/{brand}', [AdminBrandController::class, 'update'])->name('admin.brands.update');
    Route::delete('/brands/{brand}', [AdminBrandController::class, 'destroy'])->name('admin.brands.destroy');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
