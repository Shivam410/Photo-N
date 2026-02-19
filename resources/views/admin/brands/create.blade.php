
@include('admin.partials.header')
            <main class="p-6 lg:hp-10 flex-1">
                <div class="max-w-2xl mx-auto rounded-2xl border border-white/10 bg-[#111111] overflow-hidden">
                    <div class="px-6 py-5 border-b border-white/10 flex items-center justify-between">
                        <h2 class="text-xl font-bold">Create Brand</h2>
                        <a class="text-sm text-slate-300 hover:text-white transition-colors" href="{{ route('admin.brands.index') }}">Back</a>
                    </div>
                    <div class="p-6">
                        @if ($errors->any())
                            <div class="mb-5 rounded-lg border border-red-500/40 bg-red-500/10 text-red-300 px-4 py-3 text-sm">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form action="{{ route('admin.brands.store') }}" class="space-y-4" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div>
                                <label class="block text-sm font-semibold text-slate-300 mb-2">Brand Name</label>
                                <input class="w-full rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                                    name="name" required type="text" value="{{ old('name') }}">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-300 mb-2">Sort Order</label>
                                <input class="w-full rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                                    name="sort_order" type="number" min="0" value="{{ old('sort_order', 0) }}">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-300 mb-2">Logo Image</label>
                                <input class="w-full rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white file:mr-4 file:rounded-md file:border-0 file:bg-primary file:px-3 file:py-2 file:text-white hover:file:bg-red-600"
                                    name="image" required type="file" accept=".jpg,.jpeg,.png,.webp,.svg">
                            </div>
                            <button class="rounded-lg bg-primary hover:bg-red-600 text-white font-semibold px-6 py-3 transition-colors"
                                type="submit">Create Brand</button>
                        </form>
                    </div>
                </div>
            </main>
@include('admin.partials.footer')


