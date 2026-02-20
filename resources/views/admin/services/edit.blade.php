@include('admin.partials.header')

<main class="p-6 lg:p-10 flex-1">
    <div class="max-w-4xl mx-auto rounded-2xl border border-white/10 bg-[#111111] overflow-hidden">
        <div class="px-6 py-5 border-b border-white/10">
            <h2 class="text-xl font-bold">Edit Service</h2>
            <p class="text-sm text-slate-400 mt-1">
                Update the service details, features, and image below.
            </p>
        </div>

        <div class="p-6">
            @if (session('success'))
                <div class="mb-5 rounded-lg border border-emerald-500/40 bg-emerald-500/10 text-emerald-300 px-4 py-3 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-5 rounded-lg border border-red-500/40 bg-red-500/10 text-red-300 px-4 py-3 text-sm">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-5 rounded-lg border border-red-500/40 bg-red-500/10 text-red-300 px-4 py-3 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.services.update', $service) }}" class="space-y-5" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2" for="title">Title</label>
                    <input
                        class="w-full rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                        id="title" name="title" required type="text"
                        value="{{ old('title', $service->title) }}">
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2" for="description">Description</label>
                    <textarea
                        class="w-full min-h-40 rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                        id="description" name="description" required>{{ old('description', $service->description) }}</textarea>
                </div>

                <!-- Features -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label class="block text-sm font-semibold text-slate-300">Features</label>
                        <button type="button" class="text-primary text-sm font-semibold hover:text-red-500 transition-colors" onclick="addFeature()">
                            + Add Feature
                        </button>
                    </div>
                    <div id="features-container" class="space-y-2">
                        @if (old('features') || $service->features)
                            @foreach (old('features', $service->features ?? []) as $feature)
                                <div class="flex gap-2">
                                    <input
                                        class="flex-1 rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                                        name="features[]" placeholder="Feature text (e.g., 8-12 hours of professional coverage)" type="text"
                                        value="{{ $feature }}">
                                    <button type="button" class="px-4 py-3 rounded-lg bg-red-500/20 border border-red-500/40 text-red-300 font-semibold hover:bg-red-500/30 transition-colors" onclick="removeFeature(this)">
                                        Remove
                                    </button>
                                </div>
                            @endforeach
                        @else
                            <div class="flex gap-2">
                                <input
                                    class="flex-1 rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                                    name="features[]" placeholder="Feature text (e.g., 8-12 hours of professional coverage)" type="text">
                                <button type="button" class="px-4 py-3 rounded-lg bg-red-500/20 border border-red-500/40 text-red-300 font-semibold hover:bg-red-500/30 transition-colors" onclick="removeFeature(this)">
                                    Remove
                                </button>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Image -->
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2" for="image">
                        Image (leave empty to keep existing)
                    </label>
                    <input
                        class="w-full rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white file:mr-4 file:rounded-md file:border-0 file:bg-primary file:px-3 file:py-2 file:text-white hover:file:bg-red-600"
                        id="image" name="image" type="file" accept=".jpg,.jpeg,.png,.webp">
                </div>

                @if ($service->image_path)
                    @php
                        $imageUrl = file_exists(public_path($service->image_path))
                            ? asset($service->image_path)
                            : asset('storage/' . $service->image_path);
                    @endphp
                    <div>
                        <p class="text-sm text-slate-400 mb-2">Current image:</p>
                        <img alt="Service image"
                            class="rounded-xl border border-white/10 w-56 h-40 object-cover"
                            src="{{ $imageUrl }}">
                    </div>
                @endif

                <div class="flex gap-3 pt-6">
                    <button
                        class="rounded-lg bg-primary hover:bg-red-600 text-white font-semibold px-6 py-3 transition-colors"
                        type="submit">
                        Update Service
                    </button>
                    <a href="{{ route('admin.services.index') }}"
                        class="rounded-lg border border-white/10 text-slate-300 hover:text-white font-semibold px-6 py-3 transition-colors">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>

<script>
function addFeature() {
    const container = document.getElementById('features-container');
    const div = document.createElement('div');
    div.className = 'flex gap-2';
    div.innerHTML = `
        <input
            class="flex-1 rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
            name="features[]" placeholder="Feature text (e.g., 8-12 hours of professional coverage)" type="text">
        <button type="button" class="px-4 py-3 rounded-lg bg-red-500/20 border border-red-500/40 text-red-300 font-semibold hover:bg-red-500/30 transition-colors" onclick="removeFeature(this)">
            Remove
        </button>
    `;
    container.appendChild(div);
}

function removeFeature(btn) {
    btn.parentElement.remove();
}
</script>

@include('admin.partials.footer')