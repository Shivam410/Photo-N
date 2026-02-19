<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Professional Photo Studio | Services</title>
    @vite('resources/css/app.css')
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }

        .glass-header {
            background: rgba(10, 10, 10, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display transition-colors duration-300">
    <!-- Sticky Header -->
    @include('user.partials.header')
    <main class="pt-20">
        <!-- Page Hero -->
        <section class="relative h-[450px] w-full flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center opacity-30 scale-105"
                data-alt="Photographer working in a professional studio setup"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD54_pfkggrQgG_fwt9_tBcKgNTw6oyexbJdwgLbfIzkLjkxL-jEAtqgPT5biizwZZbrXZmBGGg55ASBVkTl96T-C-Go3BSr44LVMWWk1ZebludMH7jfUCE3FQFsA8wAqfgpJqLdClSMPbSdv74ML9IEsMz9WxvK-jfw7Z9tBiuDgLifycLohA23RZXILPPD2B2PRR3fNgNwr8Xq3yk_0_otY9pgS3_7tRZBztFyk-xIj_qdhEz6ONmd8PE2j77YCP4YpCWpyEL3rsB')">
            </div>
            <div
                class="absolute inset-0 bg-gradient-to-b from-background-dark/80 via-background-dark/40 to-background-dark">
            </div>
            <div class="relative z-10 text-center px-4">
                <span class="text-primary font-bold tracking-[0.2em] uppercase text-sm mb-4 block">Expertise</span>
                <h1 class="text-5xl md:text-7xl font-extrabold text-white tracking-tight mb-6">Our Services</h1>
                <p class="max-w-xl mx-auto text-slate-400 text-lg leading-relaxed">
                    Elevating brands and capturing legacies through precision lighting, artistic composition, and
                    high-end post-production.
                </p>
            </div>
        </section>
        <!-- Main Services Section -->
        <section class="py-24 px-6">
            <div class="max-w-7xl mx-auto space-y-32">
                <!-- Wedding & Engagement -->
                <div class="flex flex-col lg:flex-row items-center gap-16">
                    <div class="w-full lg:w-1/2 aspect-[4/3] rounded-xl overflow-hidden shadow-2xl group">
                        <img alt="Luxury wedding ceremony photography"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            data-alt="Elegant wedding couple in a soft natural light setting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLc9iz9lp1jhoJo_mdRrif4tNdQ_kgsUWQBzRxF2lB0QhjCD5O3brtOCydcX3c9d2zjHWgTHrcStTyh8vw1owPUyeE6uMgDgnwUmuQgF--p6spvyfOIkKAcw8KcpPQrJ6TQ_Hf6TXvvf7FwCKFyolrDyLu3U1RW2t_iBr6efLtT9IVmsgrEWdrX5qkMFvXAeJRlsryoZvlDd77hvAEvRgjaNQ_zEdw1GFF4GLboA-qz4Im9VaHBVt14Yuk5z1ZOTaQyf1-FH8-IVrk" />
                    </div>
                    <div class="w-full lg:w-1/2 space-y-6">
                        <h2 class="text-3xl md:text-4xl font-bold">Wedding &amp; Engagement</h2>
                        <p class="text-slate-400 text-lg leading-relaxed">
                            We document your love story with a blend of cinematic documentary and editorial portraiture.
                            Every subtle glance and grand celebration is preserved in timeless detail.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span> 8-12
                                hours of professional coverage
                            </li>
                            <li class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span> 400+
                                High-resolution edited images
                            </li>
                            <li class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span> Private
                                online viewing gallery
                            </li>
                            <li class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                Fine-art prints and leather album
                            </li>
                        </ul>
                        <div class="pt-4">
                            <button
                                class="bg-card-dark border border-border-dark hover:border-primary text-white px-8 py-3 rounded-lg font-bold transition-all inline-flex items-center gap-2">
                                View Package <span class="material-symbols-outlined text-sm">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Portrait & Lifestyle (Reversed) -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-16">
                    <div class="w-full lg:w-1/2 aspect-[4/3] rounded-xl overflow-hidden shadow-2xl group">
                        <img alt="Professional portrait photography"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            data-alt="High-end professional studio headshot of a man"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQ4zlVsQA_o0ADciLvw-3eQ_Ub1YYvtHtP2QKZaiaoN1D1x05GLgElWTBRc2dyVT0h6Ky4v9qKUSg_T0kVQFkTaW8JBEs51zJpCl_ZCB-CBPB8W59yYFh7vob5TnUsD7ODmWa6l7LsbE7m-q58SxCNHrlNLaoS-8Hst-2Fv9bpiSi6NHB3KU3qL7MFVIogzsZaKCed9G8Umez8r1AtDywIHEjvy4g63vibbF83endWUjZ3XuOjkcGUArbr4haoByBm-h-xRvMHUL15" />
                    </div>
                    <div class="w-full lg:w-1/2 space-y-6">
                        <h2 class="text-3xl md:text-4xl font-bold">Portrait &amp; Lifestyle</h2>
                        <p class="text-slate-400 text-lg leading-relaxed">
                            Perfect for entrepreneurs, artists, and families who value authentic expression. We focus on
                            natural posing and lighting that highlights your unique personality.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span> 2-hour
                                studio or location session
                            </li>
                            <li class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span> Up to 3
                                wardrobe changes
                            </li>
                            <li class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                Professional skin retouching
                            </li>
                            <li class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                Commercial usage license
                            </li>
                        </ul>
                        <div class="pt-4">
                            <button
                                class="bg-card-dark border border-border-dark hover:border-primary text-white px-8 py-3 rounded-lg font-bold transition-all inline-flex items-center gap-2">
                                View Package <span class="material-symbols-outlined text-sm">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Commercial & Editorial -->
                <div class="flex flex-col lg:flex-row items-center gap-16">
                    <div class="w-full lg:w-1/2 aspect-[4/3] rounded-xl overflow-hidden shadow-2xl group">
                        <img alt="Fashion editorial photography"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            data-alt="Stylized fashion editorial shot with high contrast lighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuACe3qxdw2HYN58UCs07jTR5nUfo6QCIOIWen5_G8jZx-07dPAgLLLD0rdIu6S6VJSZqmEc0qnu2uNyYcZPi2i7YuQf7e4TgnjWCGi9xAM1mWQFFMtELvtudKRsWuoT9Tj5YFRXUdmDE0xCZlG09Nf-2bhPMWz7ab0crgrtjulpJpTFyBXms53X5BSUPfE0kFYRjTAGNvR8laAEU8bN8UzoCjv95NcTj9bQI7BztApSd2JJIUlyoYZBPia1_d191PuJD2h7-2YsJndj" />
                    </div>
                    <div class="w-full lg:w-1/2 space-y-6">
                        <h2 class="text-3xl md:text-4xl font-bold">Commercial &amp; Editorial</h2>
                        <p class="text-slate-400 text-lg leading-relaxed">
                            Visual storytelling for brands that demand excellence. From fashion lookbooks to corporate
                            marketing assets, we deliver high-impact imagery that drives engagement.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span> Full
                                day production team
                            </li>
                            <li class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span> Art
                                direction &amp; storyboard planning
                            </li>
                            <li class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                Advanced color grading
                            </li>
                            <li class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                Multi-platform delivery
                            </li>
                        </ul>
                        <div class="pt-4">
                            <button
                                class="bg-card-dark border border-border-dark hover:border-primary text-white px-8 py-3 rounded-lg font-bold transition-all inline-flex items-center gap-2">
                                View Package <span class="material-symbols-outlined text-sm">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Specialized Services Grid -->
        <section class="py-24 bg-card-dark/30 border-y border-border-dark px-6">
            <div class="max-w-7xl mx-auto">
                <div class="mb-16 text-center">
                    <h2 class="text-3xl font-bold mb-4">Specialized Solutions</h2>
                    <p class="text-slate-400">Niche photography services tailored for specific professional needs.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Card 1 -->
                    <div
                        class="bg-card-dark p-8 rounded-xl border border-border-dark hover:border-primary/50 transition-all group">
                        <div
                            class="bg-primary/10 text-primary w-12 h-12 flex items-center justify-center rounded-lg mb-6 group-hover:bg-primary group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">shopping_bag</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Product</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">Crisp, clean product shots for
                            e-commerce and catalogs.</p>
                        <a class="text-primary text-sm font-bold flex items-center gap-2" href="#">Explore <span
                                class="material-symbols-outlined text-xs">open_in_new</span></a>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="bg-card-dark p-8 rounded-xl border border-border-dark hover:border-primary/50 transition-all group">
                        <div
                            class="bg-primary/10 text-primary w-12 h-12 flex items-center justify-center rounded-lg mb-6 group-hover:bg-primary group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">apartment</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Real Estate</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">Architectural photography that captures
                            the soul of a space.</p>
                        <a class="text-primary text-sm font-bold flex items-center gap-2" href="#">Explore <span
                                class="material-symbols-outlined text-xs">open_in_new</span></a>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="bg-card-dark p-8 rounded-xl border border-border-dark hover:border-primary/50 transition-all group">
                        <div
                            class="bg-primary/10 text-primary w-12 h-12 flex items-center justify-center rounded-lg mb-6 group-hover:bg-primary group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">flight</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Drone Shoots</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">Breathtaking aerial views using
                            cinema-grade drone tech.</p>
                        <a class="text-primary text-sm font-bold flex items-center gap-2" href="#">Explore <span
                                class="material-symbols-outlined text-xs">open_in_new</span></a>
                    </div>
                    <!-- Card 4 -->
                    <div
                        class="bg-card-dark p-8 rounded-xl border border-border-dark hover:border-primary/50 transition-all group">
                        <div
                            class="bg-primary/10 text-primary w-12 h-12 flex items-center justify-center rounded-lg mb-6 group-hover:bg-primary group-hover:text-white transition-all">
                            <span class="material-symbols-outlined">print</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Fine Art Prints</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">Gallery-quality archival prints for your
                            home or office.</p>
                        <a class="text-primary text-sm font-bold flex items-center gap-2" href="#">Explore <span
                                class="material-symbols-outlined text-xs">open_in_new</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Process Section -->
        <section class="py-24 px-6 overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="mb-20 text-center">
                    <h2 class="text-3xl font-bold mb-4">Our Process</h2>
                    <p class="text-slate-400 max-w-2xl mx-auto">From the first spark of an idea to the final delivery,
                        we ensure a seamless and professional experience.</p>
                </div>
                <div class="relative grid grid-cols-1 md:grid-cols-3 gap-12">
                    <!-- Connection Line (Desktop only) -->
                    <div class="hidden md:block absolute top-12 left-1/4 right-1/4 h-0.5 bg-border-dark z-0"></div>
                    <!-- Step 1 -->
                    <div class="relative z-10 text-center group">
                        <div
                            class="w-20 h-20 bg-background-dark border-4 border-primary text-white text-2xl font-black rounded-full flex items-center justify-center mx-auto mb-8 group-hover:bg-primary transition-colors">
                            01
                        </div>
                        <h3 class="text-xl font-bold mb-4 uppercase tracking-widest text-primary">Booking</h3>
                        <p class="text-slate-400 leading-relaxed">Discovery call, mood boarding, and securing your date
                            with a tailored contract.</p>
                    </div>
                    <!-- Step 2 -->
                    <div class="relative z-10 text-center group">
                        <div
                            class="w-20 h-20 bg-background-dark border-4 border-primary text-white text-2xl font-black rounded-full flex items-center justify-center mx-auto mb-8 group-hover:bg-primary transition-colors">
                            02
                        </div>
                        <h3 class="text-xl font-bold mb-4 uppercase tracking-widest text-primary">The Shoot</h3>
                        <p class="text-slate-400 leading-relaxed">On-site session with expert lighting guidance and
                            artistic direction throughout.</p>
                    </div>
                    <!-- Step 3 -->
                    <div class="relative z-10 text-center group">
                        <div
                            class="w-20 h-20 bg-background-dark border-4 border-primary text-white text-2xl font-black rounded-full flex items-center justify-center mx-auto mb-8 group-hover:bg-primary transition-colors">
                            03
                        </div>
                        <h3 class="text-xl font-bold mb-4 uppercase tracking-widest text-primary">Delivery</h3>
                        <p class="text-slate-400 leading-relaxed">Post-production magic followed by high-res delivery
                            via your personal gallery.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Final CTA -->
        <section class="py-24 px-6">
            <div class="max-w-5xl mx-auto rounded-3xl bg-primary overflow-hidden relative p-12 md:p-20 text-center">
                <div
                    class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]">
                </div>
                <div class="relative z-10">
                    <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-8 tracking-tight">Ready to tell your
                        story?</h2>
                    <p class="text-white/80 text-lg mb-10 max-w-2xl mx-auto">
                        We're currently booking for 2024 and 2025. Inquire today to secure your dates with Studio One.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button
                            class="bg-white text-primary hover:bg-slate-100 px-10 py-4 rounded-xl font-black text-lg transition-all shadow-xl">
                            Inquire Now
                        </button>
                        <button
                            class="bg-black/20 hover:bg-black/30 text-white border border-white/20 px-10 py-4 rounded-xl font-black text-lg transition-all backdrop-blur-sm">
                            Our Portfolio
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    @include('user.partials.footer')
</body>

</html>

