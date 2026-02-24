<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        return view('admin.dashboard', [
            'featuresCount' => Feature::count(),
            'features' => Feature::latest()->limit(6)->get(),
        ]);
    }
}

