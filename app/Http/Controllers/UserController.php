<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Brand;
use App\Models\Feature;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $featureCategory = $request->query('feature_category');
        $featureQuery = Feature::query();

        if ($featureCategory) {
            $featureQuery->where('category', $featureCategory);
        }
        // Get features filtered by category (if any)
        $features = $featureQuery->latest()->get();

        // Also include latest portfolio items so adding a portfolio image shows up on the homepage
        $portfolioQuery = Portfolio::query();
        if ($featureCategory) {
            $portfolioQuery->where('category', $featureCategory);
        }
        $latestPortfolios = $portfolioQuery->latest()->take(6)->get();

        // Merge features and portfolios, unique by image path, limit to 6 for the gallery
        $combined = $features->concat($latestPortfolios)
            ->unique(function ($item) {
                return $item->image ?? ($item->image_path ?? null);
            })
            ->values()
            ->take(6);

        return view('user.landing', [
            'about' => About::query()->first(),
            'brands' => Brand::query()->orderBy('sort_order')->orderBy('id')->get(),
            'services' => Service::query()->orderBy('position')->orderBy('id')->get(),
            'features' => $combined,
            // Provide first 6 portfolio items for the landing page (still available if used elsewhere)
            'portfolios' => Portfolio::query()->latest()->take(6)->get(),
            'featureCategories' => Feature::query()
                ->select('category')
                ->distinct()
                ->pluck('category')
                ->filter()
                ->values(),
            'selectedFeatureCategory' => $featureCategory,
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
            'categories' => Portfolio::query()
                ->select('category')
                ->distinct()
                ->pluck('category')
                ->filter()
                ->values(),
        ]);
    }


    public function feature(Request $request)
    {
        return $this->index($request);
    }
}
