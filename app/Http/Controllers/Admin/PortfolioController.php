<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        return view('admin.portfolio.index', [
            'portfolios' => Portfolio::all(),
        ]);
    }

    public function create(): View
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'category' => ['required', 'in:wedding,portrait,commercial,editorial,landscape'],
        ]);

        $imagePath = $this->storePublicImage($request);

        Portfolio::create([
            'image' => $imagePath,
            'category' => $validated['category'],
        ]);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item created successfully.');
    }

    public function edit(Portfolio $portfolio): View
    {
        return view('admin.portfolio.edit', [
            'portfolio' => $portfolio,
        ]);
    }

    public function update(Request $request, Portfolio $portfolio): RedirectResponse
    {
        $validated = $request->validate([
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'category' => ['required', 'in:wedding,portrait,commercial,editorial,landscape'],
        ]);

        $imagePath = $portfolio->image;

        if ($request->hasFile('image')) {
            $this->deleteImageIfExists($portfolio->image);
            $imagePath = $this->storePublicImage($request);
        }

        $portfolio->update([
            'image' => $imagePath,
            'category' => $validated['category'],
        ]);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy(Portfolio $portfolio): RedirectResponse
    {
        $this->deleteImageIfExists($portfolio->image);
        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item deleted successfully.');
    }

    private function storePublicImage(Request $request): string
    {
        $file = $request->file('image');
        $directory = public_path('portfolio');

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $filename = time() . '_' . uniqid('portfolio_', true) . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $filename);

        return 'portfolio/' . $filename;
    }

    private function deleteImageIfExists(?string $path): void
    {
        if (!$path) {
            return;
        }

        $publicFile = public_path($path);
        if (File::exists($publicFile)) {
            File::delete($publicFile);
            return;
        }

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
