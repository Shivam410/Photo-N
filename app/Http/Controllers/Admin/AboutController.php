<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function edit(): View
    {
        return view('admin.about.edit', [
            'about' => About::query()->first(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        if (About::query()->exists()) {
            return redirect()->route('admin.about.edit')
                ->with('error', 'About section is already created. You can only update it.');
        }

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $imagePath = $this->storePublicImage($request);

        About::query()->create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.about.edit')->with('success', 'About section created successfully.');
    }

    public function update(Request $request, About $about): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $imagePath = $about->image_path;

        if ($request->hasFile('image')) {
            $this->deleteImageIfExists($about->image_path);
            $imagePath = $this->storePublicImage($request);
        }

        $about->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.about.edit')->with('success', 'About section updated successfully.');
    }

    private function storePublicImage(Request $request): string
    {
        $file = $request->file('image');
        $directory = public_path('about');

        if (! File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $filename = time() . '_' . uniqid('about_', true) . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $filename);

        return 'about/' . $filename;
    }

    private function deleteImageIfExists(?string $path): void
    {
        if (! $path) {
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
