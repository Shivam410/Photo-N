
            @include('admin.partials.header')

            <main class="p-6 lg:p-10 flex-1">
                <div class="max-w-6xl mx-auto rounded-2xl border border-white/10 bg-[#111111] overflow-hidden">
                    <div class="px-6 py-5 border-b border-white/10 flex items-center justify-between">
                        <h2 class="text-xl font-bold">All Brands</h2>
                        <a class="rounded-lg bg-primary hover:bg-red-600 text-white font-semibold px-4 py-2 transition-colors"
                            href="{{ route('admin.brands.create') }}">
                            Add Brand
                        </a>
                    </div>

                    <div class="p-6">
                        @if (session('success'))
                            <div class="mb-5 rounded-lg border border-emerald-500/40 bg-emerald-500/10 text-emerald-300 px-4 py-3 text-sm">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="mb-5 rounded-lg border border-red-500/40 bg-red-500/10 text-red-300 px-4 py-3 text-sm">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <div class="overflow-x-auto">
                            <table class="w-full text-sm">
                                <thead class="text-left text-slate-400 border-b border-white/10">
                                    <tr>
                                        <th class="py-3 pr-4">Logo</th>
                                        <th class="py-3 pr-4">Name</th>
                                        <th class="py-3 pr-4">Order</th>
                                        <th class="py-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-white/10">
                                    @forelse ($brands as $brand)
                                        <tr>
                                            <td class="py-4 pr-4">
                                                <img class="w-16 h-12 object-contain rounded bg-black/30 border border-white/10"
                                                    src="{{ asset($brand->image_path) }}" alt="{{ $brand->name }}">
                                            </td>
                                            <td class="py-4 pr-4 font-semibold">{{ $brand->name }}</td>
                                            <td class="py-4 pr-4">{{ $brand->sort_order }}</td>
                                            <td class="py-4">
                                                <div class="flex items-center gap-2">
                                                    <a class="px-3 py-2 rounded-lg bg-blue-500/20 border border-blue-500/40 text-blue-300 text-xs font-semibold hover:bg-blue-500/30 transition-colors"
                                                        href="{{ route('admin.brands.edit', $brand) }}">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('admin.brands.destroy', $brand) }}" method="POST"
                                                        onsubmit="return confirm('Delete this brand?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="px-3 py-2 rounded-lg bg-red-500/20 border border-red-500/40 text-red-300 text-xs font-semibold hover:bg-red-500/30 transition-colors"
                                                            type="submit">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="py-4 text-slate-400" colspan="4">No brands added yet.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

            @include('admin.partials.footer')


