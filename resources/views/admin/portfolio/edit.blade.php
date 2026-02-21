@include('admin.partials.header')
<main class="p-6 lg:p-10 flex-1">
    <div class="max-w-4xl mx-auto rounded-2xl border border-white/10 bg-[#111111] overflow-hidden">
        <div class="px-6 py-5 border-b border-white/10">
            <h2 class="text-xl font-bold">Edit Portfolio Item</h2>
            <p class="text-sm text-slate-400 mt-1">Update the portfolio item details</p>
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
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('admin.portfolio.update', $portfolio) }}" class="space-y-5" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                <!-- <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2" for="title">Title</label>
                    <input
                        class="w-full rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                        id="title" name="title" placeholder="e.g., Wedding Ceremony" required type="text"
                        value="{{ old('title', $portfolio->title) }}">
                </div> -->

                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2" for="category">Category</label>
                    <select
                        class="w-full rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                        id="category" name="category" required>
                        <option value="">-- Select a Category --</option>
                        <option value="wedding" {{ old('category', $portfolio->category) == 'wedding' ? 'selected' : '' }}>Wedding</option>
                        <option value="portrait" {{ old('category', $portfolio->category) == 'portrait' ? 'selected' : '' }}>Portrait</option>
                        <option value="commercial" {{ old('category', $portfolio->category) == 'commercial' ? 'selected' : '' }}>Commercial</option>
                        <option value="editorial" {{ old('category', $portfolio->category) == 'editorial' ? 'selected' : '' }}>Editorial</option>
                        <option value="landscape" {{ old('category', $portfolio->category) == 'landscape' ? 'selected' : '' }}>Landscape</option>
                    </select>
                </div>

                <!-- <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2" for="description">Description</label>
                    <textarea
                        class="w-full min-h-32 rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                        id="description" name="description" placeholder="Add a description for this portfolio item">{{ old('description', $portfolio->description) }}</textarea>
                </div>
 -->
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2" for="image">Image (leave empty to keep existing)</label>
                    <input
                        class="w-full rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white file:mr-4 file:rounded-md file:border-0 file:bg-primary file:px-3 file:py-2 file:text-white hover:file:bg-red-600"
                        id="image" name="image" type="file" accept=".jpg,.jpeg,.png,.webp">
                </div>

                @if ($portfolio->image)
                    <div>
                        <p class="text-sm text-slate-400 mb-2">Current image:</p>
                        <img alt="{{ $portfolio->title }}"
                            class="rounded-xl border border-white/10 w-56 h-40 object-cover"
                            src="{{ asset($portfolio->image) }}">
                    </div>
                @endif

                <div class="flex gap-3 pt-4">
                    <button
                        class="rounded-lg bg-primary hover:bg-red-600 text-white font-semibold px-6 py-3 transition-colors"
                        type="submit">
                        Update Portfolio Item
                    </button>
                    <a class="rounded-lg border border-white/10 hover:bg-white/5 text-white font-semibold px-6 py-3 transition-colors"
                        href="{{ route('admin.portfolio.index') }}">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>
@include('admin.partials.footer')
