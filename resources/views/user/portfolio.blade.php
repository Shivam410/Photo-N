<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Photo Studio Portfolio | Studio Alpha</title>

    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />

    <style>
        .masonry-grid {
            column-count: 3;
            column-gap: 1.5rem;
        }

        @media (max-width: 1024px) {
            .masonry-grid {
                column-count: 2;
            }
        }

        @media (max-width: 640px) {
            .masonry-grid {
                column-count: 1;
            }
        }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }

        .glass-nav {
            backdrop-filter: blur(12px);
            background-color: rgba(10, 10, 10, 0.8);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white transition-colors duration-300">

<!-- Sticky Header -->
@include('user.partials.header')

<main class="max-w-7xl mx-auto px-6 py-16">

    <!-- Page Header -->
    <section class="text-center mb-16">
        <h1 class="text-5xl md:text-6xl font-black mb-6 tracking-tight">Our Portfolio</h1>
        <p class="text-slate-500 dark:text-slate-400 text-lg max-w-2xl mx-auto leading-relaxed">
            Capturing moments that tell your unique story through a professional lens. A fusion of technical mastery and artistic vision.
        </p>
    </section>

    <!-- Category Filter Bar -->
    <div class="flex justify-center mb-16 overflow-x-auto pb-4">
        <div class="flex items-center gap-2 p-1.5 bg-neutral-dark rounded-xl border border-white/5">
            <a href="{{ route('user.portfolio') }}" class="px-6 py-2 rounded-lg {{ !$selectedCategory ? 'bg-primary text-white' : 'text-slate-400 hover:text-white' }} text-sm font-bold transition-colors">All</a>
            @foreach ($categories as $cat)
                <a href="{{ route('user.portfolio', ['category' => $cat]) }}" class="px-6 py-2 rounded-lg {{ $selectedCategory === $cat ? 'bg-primary text-white' : 'text-slate-400 hover:text-white' }} text-sm font-medium transition-colors">{{ ucfirst($cat) }}</a>
            @endforeach
        </div>
    </div>

    <!-- Masonry Gallery -->
    <div class="masonry-grid mb-24">
        <!-- Dynamic Portfolio Items from Admin -->
        @forelse ($portfolios as $portfolio)
        <div class="masonry-item group relative overflow-hidden rounded-xl bg-neutral-dark cursor-pointer">
            <img class="w-full h-auto object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
                 alt="Portfolio Item"
                 src="{{ asset($portfolio->image) }}" />

            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <p class="text-primary text-xs font-bold uppercase tracking-widest mb-2">{{ ucfirst($portfolio->category) }}</p>
                <h3 class="text-xl font-bold mb-3 text-white">Portfolio Item</h3>
                <a href="#" class="flex items-center gap-2 text-sm font-bold text-white hover:underline underline-offset-4">
                    View Project
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>
        @empty
        @endforelse
    </div>

</main>

@include('user.partials.footer')

</body>
</html>