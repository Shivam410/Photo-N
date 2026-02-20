<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        return view('admin.services.index', [
            'services' => Service::query()->orderBy('position')->orderBy('id')->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.services.create', [
            'services' => Service::query()->orderBy('position')->orderBy('id')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'array'],
            'title.*' => ['required', 'string', 'max:255'],
            'description' => ['required', 'array'],
            'description.*' => ['required', 'string'],
            'features' => ['nullable', 'array'],
            'features.*' => ['nullable', 'array'],
            'features.*.*' => ['required_with:features', 'string', 'max:255'],
            'position' => ['nullable', 'array'],
            'position.*' => ['nullable', 'integer', 'min:0'],
            'image' => ['required', 'array'],
            'image.*' => ['required', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:4096'],
        ]);

        $titles = $validated['title'];
        $descriptions = $validated['description'];
        $features = $validated['features'] ?? [];
        $positions = $validated['position'] ?? [];
        $images = $request->file('image') ?? [];

        foreach ($titles as $key => $title) {
            if (! isset($images[$key])) {
                continue;
            }

            $request->offsetSet('image', $images[$key]);

            Service::query()->create([
                'title' => $title,
                'description' => $descriptions[$key] ?? '',
                'features' => isset($features[$key]) ? array_filter($features[$key]) : [],
                'position' => (int) ($positions[$key] ?? 0),
                'image_path' => $this->storePublicImageForKey($images[$key]),
            ]);
        }

        return redirect()->route('admin.services.index')->with('success', 'Services created successfully.');
    }

    public function edit(Service $service): View
    {
        return view('admin.services.edit', [
            'service' => $service,
        ]);
    }

    public function update(Request $request, Service $service): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'features' => ['nullable', 'array'],
            'features.*' => ['required_with:features', 'string', 'max:255'],
            'position' => ['nullable', 'integer', 'min:0'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:4096'],
        ]);

        $imagePath = $service->image_path;
        if ($request->hasFile('image')) {
            $this->deleteImageIfExists($service->image_path);
            $imagePath = $this->storePublicImage($request);
        }

        $service->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'features' => isset($validated['features']) ? array_filter($validated['features']) : [],
            'position' => (int) ($validated['position'] ?? 0),
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service): RedirectResponse
    {
        $this->deleteImageIfExists($service->image_path);
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }

    private function storePublicImage(Request $request): string
    {
        $file = $request->file('image');
        $directory = public_path('services');

        if (! File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $filename = time() . '_' . uniqid('service_', true) . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $filename);

        return 'services/' . $filename;
    }

    private function storePublicImageForKey($file): string
    {
        $directory = public_path('services');

        if (! File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $filename = time() . '_' . uniqid('service_', true) . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $filename);

        return 'services/' . $filename;
    }

    private function deleteImageIfExists(?string $path): void
    {
        if (! $path) {
            return;
        }

        $file = public_path($path);
        if (File::exists($file)) {
            File::delete($file);
        }
    }
}