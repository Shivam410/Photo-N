@include('admin.partials.header')

<main class="p-6 lg:p-10 flex-1">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-3xl font-bold">Services Management</h2>
                <p class="text-slate-400 text-sm mt-2">Manage and update all your services with features</p>
            </div>
            <a class="rounded-lg bg-primary hover:bg-red-600 text-white font-semibold px-6 py-3 transition-colors"
                href="{{ route('admin.services.create') }}">
                + Add New Service
            </a>
        </div>

        @if (session('success'))
            <div class="mb-6 rounded-lg border border-emerald-500/40 bg-emerald-500/10 text-emerald-300 px-4 py-3 text-sm">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-500/40 bg-red-500/10 text-red-300 px-4 py-3 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        @forelse ($services as $service)
            @php
                $imageUrl = file_exists(public_path($service->image_path))
                    ? asset($service->image_path)
                    : asset('storage/' . $service->image_path);
            @endphp
            
            <div class="mb-8 rounded-2xl border border-white/10 bg-[#111111] overflow-hidden">
                <div class="flex flex-col lg:flex-row gap-8 p-6">
                    <!-- Image Section -->
                    <div class="flex-shrink-0 w-48 lg:w-56">
                       <img
                         src="{{ $imageUrl }}"
                         alt="{{ $service->title }}"
                         class="w-full h-40 object-cover rounded-xl border border-white/10">
                    </div>

                    <!-- Content Section -->
                    <div class="flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-2">{{ $service->title }}</h3>
                            <p class="text-slate-300 text-base leading-relaxed mb-4">
                                {{ $service->description }}
                            </p>

                            <!-- Features List -->
                            @if ($service->features && count($service->features) > 0)
                                <div class="mt-4">
                                    <p class="text-sm text-slate-400 mb-2">Features:</p>
                                    <ul class="space-y-2">
                                        @foreach ($service->features as $feature)
                                            <li class="flex items-center gap-2 text-slate-300 text-sm">
                                                <span class="material-symbols-outlined text-primary text-xs">check_circle</span>
                                                {{ $feature }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="flex gap-2 text-sm text-slate-400 mt-4">
                                <div>
                                    <span class="font-semibold text-slate-300">Position:</span> {{ $service->position }}
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-3 pt-6 border-t border-white/10 mt-6">
                            <a href="{{ route('admin.services.edit', $service) }}" 
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-blue-500/20 border border-blue-500/40 text-blue-300 text-sm font-semibold hover:bg-blue-500/30 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                Edit
                            </a>
                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline"
                                onsubmit="return confirm('Are you sure you want to delete this service?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                    class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-red-500/20 border border-red-500/40 text-red-300 text-sm font-semibold hover:bg-red-500/30 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center py-16 bg-[#111] border border-white/10 rounded-xl">
                <svg class="w-16 h-16 mx-auto text-slate-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
                <p class="text-slate-400 text-lg mb-4">No services added yet.</p>
                <a href="{{ route('admin.services.create') }}" class="text-primary hover:text-red-500 font-semibold transition-colors">
                    Create your first service →
                </a>
            </div>
        @endforelse
    </div>
</main>

@include('admin.partials.footer')
