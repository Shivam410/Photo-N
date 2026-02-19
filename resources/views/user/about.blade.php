<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>About | NashikPhoto</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white">
    @include('user.partials.header')
    @php
        $aboutTitle = $about?->title ?? 'About NashikPhoto';
        $aboutDescription = $about?->description ?? 'We create premium photography experiences for weddings, portraits, and commercial brands with a focus on storytelling and timeless visual quality.';
        $aboutImage = 'https://lh3.googleusercontent.com/aida-public/AB6AXuDFQxNwxQ-3ijOX9atK6YGFCvgT48IiUu0P6_aHpxEAfFhFhnKqEa5FaXLpoAePTZjgufdyIUsr2U-52CjyHpOptfnN4db65ocvd09obmJ6P8wSt-Y2ztLYAw6QLPM_KiovwHqmuLPDEceaj9bnQzJn2fqy13SUzpFIEPp_pLkcqvG650TKK4aDr5oazZBP188PzeFW-y6ZD9cS9tJCt_ZXhLTprjg0z85SuTXy2oiFOuY5v0OeTuCed_M0tOvkGmb3F642i_WHVsCM';

        if ($about?->image_path) {
            $aboutImage = file_exists(public_path($about->image_path))
                ? asset($about->image_path)
                : asset('storage/' . $about->image_path);
        }
    @endphp

    <main class="max-w-7xl mx-auto px-6 py-16">
        <section class="text-center mb-12 mt-12">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">{{ $aboutTitle }}</h1>
            <p class="text-slate-600 dark:text-slate-300 max-w-3xl mx-auto text-lg">{{ $aboutDescription }}</p>
        </section>

        <section class="py-24 px-6 bg-white dark:bg-[#0E0E0E]" id="about">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative group">
                <div
                    class="absolute -inset-4 bg-primary/20 rounded-2xl blur-2xl group-hover:bg-primary/30 transition-all">
                </div>
                <img alt="Studio Interior" class="relative rounded-2xl shadow-2xl w-full aspect-square object-cover"
                    src="{{ $aboutImage }}" />
                <div
                    class="absolute bottom-6 right-6 bg-background-dark/80 backdrop-blur p-6 rounded-xl border border-white/10">
                    <p class="text-primary text-3xl font-bold">12+</p>
                    <p class="text-xs uppercase tracking-widest text-slate-400 font-semibold">Years of Mastery</p>
                </div>
            </div>
            <div>
                <h2 class="text-sm font-bold text-primary uppercase tracking-[0.3em] mb-4">Our Philosophy</h2>
                <h3 class="text-4xl md:text-5xl font-display font-bold mb-8 leading-tight">{{ $aboutTitle }}</h3>
                <p class="text-lg text-slate-600 dark:text-slate-400 mb-8 leading-relaxed">
                    {{ $aboutDescription }}
                </p>
                <div class="grid grid-cols-2 gap-8 mb-8">
                    <div>
                        <div class="flex items-center gap-2 mb-2 text-primary">
                            <span class="material-symbols-outlined">verified</span>
                            <span class="font-bold">Pro Quality</span>
                        </div>
                        <p class="text-sm text-slate-500">Industry-leading gear for the sharpest results.</p>
                    </div>
                    <div>
                        <div class="flex items-center gap-2 mb-2 text-primary">
                            <span class="material-symbols-outlined">auto_fix_high</span>
                            <span class="font-bold">Expert Retouch</span>
                        </div>
                        <p class="text-sm text-slate-500">Meticulous post-production for every image.</p>
                    </div>
                </div>
                <button
                    class="border-b-2 border-primary pb-1 font-bold text-primary hover:text-red-400 hover:border-red-400 transition-all">Learn
                    more about us</button>
            </div>
        </div>
    </section>

        <section class="grid md:grid-cols-2 gap-8">
            <div class="bg-white dark:bg-[#141414] border border-slate-200 dark:border-white/10 rounded-xl p-8">
                <h2 class="text-2xl font-bold mb-3">Our Mission</h2>
                <p class="text-slate-600 dark:text-slate-300 leading-relaxed">To capture moments that matter with creative direction, technical precision, and a smooth client experience from planning to final delivery.</p>
            </div>
            <div class="bg-white dark:bg-[#141414] border border-slate-200 dark:border-white/10 rounded-xl p-8">
                <h2 class="text-2xl font-bold mb-3">Why Clients Choose Us</h2>
                <p class="text-slate-600 dark:text-slate-300 leading-relaxed">To capture moments that matter with creative direction, technical precision, and a smooth client experience from planning to final delivery.</p>
            </div>
        </section>
    </main>

    @include('user.partials.footer')
</body>

</html>
