@include('admin.partials.header')
<main class="p-6 lg:p-10 flex-1">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-2xl font-bold">Portfolio Management</h2>
                <p class="text-sm text-slate-400 mt-1">Manage your portfolio items with categories</p>
            </div>
            <a class="rounded-lg bg-primary hover:bg-red-600 text-white font-semibold px-6 py-3 transition-colors"
                href="{{ route('admin.portfolio.create') }}">
                + Add Portfolio Item
            </a>
        </div>

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

        <div class="rounded-2xl border border-white/10 bg-[#111111] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-white/10">
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-300">Image</th>
                            <!-- <th class="px-6 py-4 text-left text-sm font-semibold text-slate-300">Title</th> -->
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-300">Category</th>
                            <!-- <th class="px-6 py-4 text-left text-sm font-semibold text-slate-300">Description</th> -->
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-300">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($portfolios as $portfolio)
                            <tr class="border-b border-white/10 hover:bg-white/5 transition-colors">
                                <td class="px-6 py-4">
                                    @if ($portfolio->image)
                                        <img alt="Portfolio Item"
                                            class="rounded-lg w-16 h-16 object-cover border border-white/10"
                                            src="{{ asset($portfolio->image) }}">
                                    @else
                                        <div class="w-16 h-16 bg-slate-700 rounded-lg flex items-center justify-center">
                                            <span class="text-xs text-slate-400">No Image</span>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-primary/20 text-primary">
                                        {{ ucfirst($portfolio->category) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <a class="rounded-lg bg-blue-500/20 hover:bg-blue-500/30 text-blue-300 px-3 py-2 text-sm font-semibold transition-colors"
                                            href="{{ route('admin.portfolio.edit', $portfolio) }}">
                                            Edit
                                        </a>
                                        <form
                                            action="{{ route('admin.portfolio.destroy', $portfolio) }}"
                                            class="inline" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this portfolio item?');">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="rounded-lg bg-red-500/20 hover:bg-red-500/30 text-red-300 px-3 py-2 text-sm font-semibold transition-colors"
                                                type="submit">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-6 py-8 text-center text-slate-400" colspan="5">
                                    No portfolio items yet. <a class="text-primary hover:underline"
                                        href="{{ route('admin.portfolio.create') }}">Create one now</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@include('admin.partials.footer')
