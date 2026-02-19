<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Brand;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.landing', [
            'about' => About::query()->first(),
            'brands' => Brand::query()->orderBy('sort_order')->orderBy('id')->get(),
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
        return view('user.service');
    }
    public function portfolio()
    {
        return view('user.portfolio');
    }
}
