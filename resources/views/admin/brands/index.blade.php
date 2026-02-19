<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Brands | NashikPhoto Admin</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet">
</head>

<body class="min-h-screen bg-[#090909] text-slate-100" style="font-family: 'Manrope', sans-serif;">
    <div class="min-h-screen lg:grid lg:grid-cols-[280px_1fr]">
        <aside class="border-r border-white/10 bg-black/70 backdrop-blur-xl">
            <div class="h-20 px-6 flex items-center border-b border-white/10">
                <a class="text-2xl font-black tracking-tight text-white" href="{{ route('admin.dashboard') }}">Nashik<span class="text-primary">Admin</span></a>
            </div>
            <nav class="p-5 space-y-2">
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-white/5 hover:text-white transition-colors"
                    href="{{ route('admin.dashboard') }}">
                    <span class="material-symbols-outlined text-base">dashboard</span> Dashboard
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-white/5 hover:text-white transition-colors"
                    href="{{ route('admin.about.edit') }}">
                    <span class="material-symbols-outlined text-base">info</span> About Content
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/20 border border-primary/30 text-white font-semibold"
                    href="{{ route('admin.brands.index') }}">
                    <span class="material-symbols-outlined text-base">branding_watermark</span> Brands
                </a>
            </nav>
        </aside>

        <div class="min-h-screen flex flex-col">
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
        </div>
    </div>
</body>

</html>

