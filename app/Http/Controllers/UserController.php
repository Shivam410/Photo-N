<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Brand;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.landing', [
            'about' => About::query()->first(),
            'brands' => Brand::query()->orderBy('sort_order')->orderBy('id')->get(),
            'services' => Service::query()->orderBy('position')->orderBy('id')->get(),
        ]);
    }
    public function about()
    {
        return view('user.about', [
            'about' => About::query()->first(),
        ]);
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function service()
    {
        return view('user.service', [
            'services' => Service::query()->orderBy('position')->orderBy('id')->get(),
        ]);
    }
    public function portfolio(Request $request)
    {
        $category = $request->query('category');
        
        $query = Portfolio::query();
        
        if ($category) {
            $query->where('category', $category);
        }
        
        return view('user.portfolio', [
            'portfolios' => $query->get(),
            'selectedCategory' => $category,
            'categories' => ['wedding', 'portrait', 'commercial', 'editorial', 'landscape'],
        ]);
    }
}
