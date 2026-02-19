<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Manage About | NashikPhoto Admin</title>
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
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/20 border border-primary/30 text-white font-semibold"
                    href="{{ route('admin.about.edit') }}">
                    <span class="material-symbols-outlined text-base">info</span> About Content
                </a>
            </nav>
        </aside>

        <div class="min-h-screen flex flex-col">
            @include('admin.partials.header')

            <main class="p-6 lg:p-10 flex-1">
                <div class="max-w-4xl mx-auto rounded-2xl border border-white/10 bg-[#111111] overflow-hidden">
                    <div class="px-6 py-5 border-b border-white/10">
                        <h2 class="text-xl font-bold">{{ $about ? 'Update About Section' : 'Create About Section' }}</h2>
                        <p class="text-sm text-slate-400 mt-1">
                            {{ $about ? 'You can update the existing about content.' : 'Create this once. After creation, only update is allowed.' }}
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

                        <form
                            action="{{ $about ? route('admin.about.update', $about) : route('admin.about.store') }}"
                            class="space-y-5" enctype="multipart/form-data" method="POST">
                            @csrf
                            @if ($about)
                                @method('PUT')
                            @endif

                            <div>
                                <label class="block text-sm font-semibold text-slate-300 mb-2" for="title">Title</label>
                                <input
                                    class="w-full rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                                    id="title" name="title" required type="text"
                                    value="{{ old('title', $about?->title) }}">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-300 mb-2" for="description">Description</label>
                                <textarea
                                    class="w-full min-h-40 rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                                    id="description" name="description" required>{{ old('description', $about?->description) }}</textarea>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-300 mb-2" for="image">
                                    Image {{ $about ? '(leave empty to keep existing)' : '' }}
                                </label>
                                <input
                                    class="w-full rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white file:mr-4 file:rounded-md file:border-0 file:bg-primary file:px-3 file:py-2 file:text-white hover:file:bg-red-600"
                                    id="image" name="image" {{ $about ? '' : 'required' }}
                                    type="file" accept=".jpg,.jpeg,.png,.webp">
                            </div>

                            @if ($about?->image_path)
                                @php
                                    $adminImageUrl = file_exists(public_path($about->image_path))
                                        ? asset($about->image_path)
                                        : asset('storage/' . $about->image_path);
                                @endphp
                                <div>
                                    <p class="text-sm text-slate-400 mb-2">Current image:</p>
                                    <img alt="About image"
                                        class="rounded-xl border border-white/10 w-56 h-40 object-cover"
                                        src="{{ $adminImageUrl }}">
                                </div>
                            @endif

                            <button
                                class="rounded-lg bg-primary hover:bg-red-600 text-white font-semibold px-6 py-3 transition-colors"
                                type="submit">
                                {{ $about ? 'Update About' : 'Create About' }}
                            </button>
                        </form>
                    </div>
                </div>
            </main>

            @include('admin.partials.footer')
        </div>
    </div>
</body>

</html>
