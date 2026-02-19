<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Photo Studio Portfolio | Studio Alpha</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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

<body
    class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white transition-colors duration-300">
    <!-- Sticky Header -->
    @include('user.partials.header')
    <main class="max-w-7xl mx-auto px-6 py-16">
        <!-- Page Header -->
        <section class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-black mb-6 tracking-tight">Our Portfolio</h1>
            <p class="text-slate-500 dark:text-slate-400 text-lg max-w-2xl mx-auto leading-relaxed">
                Capturing moments that tell your unique story through a professional lens. A fusion of technical mastery
                and artistic vision.
            </p>
        </section>
        <!-- Category Filter Bar -->
        <div class="flex justify-center mb-16 overflow-x-auto pb-4">
            <div class="flex items-center gap-2 p-1.5 bg-neutral-dark rounded-xl border border-white/5">
                <button class="px-6 py-2 rounded-lg bg-primary text-white text-sm font-bold">All</button>
                <button
                    class="px-6 py-2 rounded-lg text-slate-400 hover:text-white text-sm font-medium transition-colors">Wedding</button>
                <button
                    class="px-6 py-2 rounded-lg text-slate-400 hover:text-white text-sm font-medium transition-colors">Portrait</button>
                <button
                    class="px-6 py-2 rounded-lg text-slate-400 hover:text-white text-sm font-medium transition-colors">Commercial</button>
                <button
                    class="px-6 py-2 rounded-lg text-slate-400 hover:text-white text-sm font-medium transition-colors">Editorial</button>
                <button
                    class="px-6 py-2 rounded-lg text-slate-400 hover:text-white text-sm font-medium transition-colors">Landscape</button>
            </div>
        </div>
        <!-- Masonry Gallery -->
        <div class="masonry-grid mb-24">
            <!-- Item 1 -->
            <div class="masonry-item group relative overflow-hidden rounded-xl bg-neutral-dark cursor-pointer">
                <img class="w-full h-auto object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
                    data-alt="Elegant wedding couple in soft sunlight"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWxwxinS5bAIAc7NKbphYYFkWHB_AiS9ju_wCGQZc45uAPh__oxI6XcVVx9d5WS19D-TTgMDv8HiITpRWOATM_bJOOrF3e0aV6Z1jXCRc6pV9Qatl_rnovc1wq9c2CbUGlpq85My8JJqvKIO0UHcAjCOSHx6rmndR81TmuGcCw9MJDGBEJ2k1bbShUUKmpb1KRfqkm3_R6Kapu1ci4hn7rsXnxG4oemxzwMS3kuWOmeNam599B55_uDG6xFuK5sxDEXWZdh9HSf37V" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <p class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Wedding</p>
                    <h3 class="text-xl font-bold mb-3 text-white">The Eternal Vow</h3>
                    <a class="flex items-center gap-2 text-sm font-bold text-white hover:underline underline-offset-4"
                        href="#">
                        View Project <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="masonry-item group relative overflow-hidden rounded-xl bg-neutral-dark cursor-pointer">
                <img class="w-full h-auto object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
                    data-alt="Dramatic black and white male portrait"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1zUU_atjsD8AmdQa2GQHLQEb3xw5f6v2hAsTcR7k1_nDhOyT8Ay1GBlHOEInBZzH_n4IzllNhIErhoKWT_apaLe_1Of8-2sSH-pLTBt5OnLouc2Sw81hOElkTLiFznAuCZckhAJcsewQhDYkOSXezDSP3x4iXJlqPGTYWFHrT8Wl6sqhwirbZN8e8wOXHU42n8J9K1l5hj8W0STEW4yLMhGdxM_iXgAsNiD-58tqqH54v9LhaULmTQH0pc59f2TAWNULBDPoL_TUi" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <p class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Portrait</p>
                    <h3 class="text-xl font-bold mb-3 text-white">Shadow &amp; Soul</h3>
                    <a class="flex items-center gap-2 text-sm font-bold text-white hover:underline underline-offset-4"
                        href="#">
                        View Project <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="masonry-item group relative overflow-hidden rounded-xl bg-neutral-dark cursor-pointer">
                <img class="w-full h-auto object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
                    data-alt="Vibrant commercial product photography of high-end perfume"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBa5mHrZaP6Z4zWkI9rYecKwOfdUDCIOpe8kMTLkBR9Bu9LiD358hT-WKVcYY9efyjr_SWnIV71iInmn0WPk-z4HOCf0-haUqMqEqWwutnZ1sVvmZt5gb5Gs2nJGQUf3Kkt-Wg-W7tucEC_aK-uAfq-7Sn4CoaQnxgZH8OSE-bMRMYUvYAgZ4WrmMUbHbI-0i8m5M4lVRna6QerD2Mg9o3R_E-WjFJqoNzPv7dVmcyBY8Mkp6AuIsHOAHf_2E0DlMM34HGhu-0LDcjH" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <p class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Commercial</p>
                    <h3 class="text-xl font-bold mb-3 text-white">Lumina Scent</h3>
                    <a class="flex items-center gap-2 text-sm font-bold text-white hover:underline underline-offset-4"
                        href="#">
                        View Project <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="masonry-item group relative overflow-hidden rounded-xl bg-neutral-dark cursor-pointer">
                <img class="w-full h-auto object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
                    data-alt="High fashion editorial model with dramatic lighting"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4ElfVbJdmqTdHoJkorJf0NWtvPDA3ll2nEV0cN6x8MAW67zND6gwQNtcv88nQ1E0jqQ4BvUEf3nDXd-rSFLgYEjYaPrFL5SOSZdJXgisuA8YKuHZUO59IQDOpIJ4l1nDsOT74Atk0LoETrecgdFL52oAi423mVL0vaad2lnJ8NzqqJ8TJeosaYgd0SrrbFn4q4-t1a1R8iXz9YTv8gnc4UYuibDXvycmuaiOmGLzueJTOHHf_meSLEK8cmIyE5vy7vbtecZOdYPZD" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <p class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Editorial</p>
                    <h3 class="text-xl font-bold mb-3 text-white">Vogue Sessions</h3>
                    <a class="flex items-center gap-2 text-sm font-bold text-white hover:underline underline-offset-4"
                        href="#">
                        View Project <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="masonry-item group relative overflow-hidden rounded-xl bg-neutral-dark cursor-pointer">
                <img class="w-full h-auto object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
                    data-alt="Majestic mountain peaks at golden hour"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCx813jKDxeHvavn1JPzPsWTS-24I3Pt51tOQ1gZChvqyF4ARkmU1iEm4p8wqadqVxN_TuWwDyRLQOnKdNobCg7XEIgSvEGolqofRJcitPqc7gFE1l5tzKJmP-WgX6W1gl5xKPpBiS2QnaLT4BvK8F6lr98aZfPVYPVST-NopGekomN0r3P7PS9LJT9XELiYpsfT88KrqGiFoguygt5mCF8cFbjsfGd8jJ4BX58ZdEqR7R5-bqiqmiiaT-GMynio0IVyV6j1H2uEuPW" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <p class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Landscape</p>
                    <h3 class="text-xl font-bold mb-3 text-white">Peak Solitude</h3>
                    <a class="flex items-center gap-2 text-sm font-bold text-white hover:underline underline-offset-4"
                        href="#">
                        View Project <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
            <!-- Item 6 -->
            <div class="masonry-item group relative overflow-hidden rounded-xl bg-neutral-dark cursor-pointer">
                <img class="w-full h-auto object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
                    data-alt="Urban fashion shoot in a city alleyway"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtJ_2cKRd899eULoVPStiNstKEgKveQhRWeYZ7jK0lzUp6_OdL0HJmnqyZDavQC2536dW0nKftv078qxhbdI1QvXzxN7Z_ew7v4j97IOUOaq2CdXDc2CIFBtnpzOS1MB0_0Btzt0pOCXONL69TFSNxxIpxIi_wy0DG4EWTB7yYYbPIxp64a1xUDuf3h32x_L5xWKNp8pY4eVbhfif4BHXERUTXD045mKU8pMYFnXnulGiEWsepys8yBTCYmVekaMRAFLvavPQBfLti" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <p class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Editorial</p>
                    <h3 class="text-xl font-bold mb-3 text-white">Concrete Jungle</h3>
                    <a class="flex items-center gap-2 text-sm font-bold text-white hover:underline underline-offset-4"
                        href="#">
                        View Project <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Project of the Month Section -->
        <section class="mb-32">
            <div
                class="bg-neutral-dark rounded-3xl overflow-hidden border border-white/5 flex flex-col lg:flex-row min-h-[500px]">
                <div class="lg:w-1/2 relative min-h-[400px]">
                    <img class="absolute inset-0 w-full h-full object-cover"
                        data-alt="Highly artistic ethereal fashion portrait with silk fabrics"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBH68MdoAhDXcLSzM8ELuZBtHQ18suaXZC4-xnZY1bYftOIaD1BiOGoTpq8AqTcNWwnm2hNKrMiOSVXRY7piNKDDtmKjRQNFy7eaSVrHtR_lMNt-vYsfvT3NAyLRTqN2lcXXLJUFYNbIHvI2FkD4O_VX3HFtcev0eYLEBKkwsJJ_RqkX_F0D7z_6Z7WhjA878Xiy9fhEEXxnBGsdz94IN9UepyhLlIj9hFDT4e2-e-e_ci3qOxlKEi-6O5UcKdtbn2lp5DY7V8-x33J" />
                    <div
                        class="absolute top-8 left-8 bg-primary text-white text-[10px] font-black tracking-widest uppercase px-3 py-1.5 rounded">
                        Spotlight</div>
                </div>
                <div class="lg:w-1/2 p-12 md:p-16 flex flex-col justify-center">
                    <h2 class="text-xs font-black text-primary tracking-[0.2em] uppercase mb-4">Project of the Month
                    </h2>
                    <h3 class="text-4xl md:text-5xl font-bold mb-8 tracking-tight">The 'Ethereal' Collection</h3>
                    <p class="text-slate-400 text-lg italic mb-10 leading-relaxed">
                        "The Ethereal Collection was a masterclass in lighting and emotion. The studio perfectly
                        captured our brand's vision with artistic precision. Every frame tells a story of lightness and
                        grace."
                    </p>
                    <div class="flex items-center gap-4 mb-10">
                        <div class="w-12 h-12 rounded-full bg-cover bg-center" data-alt="Portrait of Elena V."
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAvtb9JYnJL2SI5hZ1kf_xqw0xeqvpEIkAbokGXMQM_Bv3hUrzkFYLUiOfgExvdXpG_G-DvI723aCnNjVhudpb-wm5y0osAF23lzfix-gAbPun2NYE0AHXiJGwTr9pMBsFHmbMBE4n39CI6fu0Y54MyzssIAUB0CSQZa2LbwIz3OL25MfhR4kk7QFkuFQpKisNnymFJPVQOFqqvFoQ0EgZvZ0VgqiNiC_hZQnN7ojBtPrcS7q27BqDgDYF0jeMLD8Zf2dRrajiy63U1')">
                        </div>
                        <div>
                            <p class="font-bold text-white">Elena V.</p>
                            <p class="text-xs text-slate-500 uppercase tracking-widest">Creative Director, Muse
                                Magazine</p>
                        </div>
                    </div>
                    <div>
                        <button
                            class="border border-white/20 hover:border-primary px-8 py-3 rounded-lg text-sm font-bold transition-all">Explore
                            the Collection</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="relative rounded-3xl overflow-hidden bg-primary/10 border border-primary/20 py-24 text-center">
            <div
                class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[300px] bg-primary/20 blur-[120px] rounded-full -z-10">
            </div>
            <h2 class="text-4xl md:text-5xl font-black mb-6 tracking-tight">Ready to create something beautiful?</h2>
            <p class="text-slate-400 max-w-xl mx-auto mb-10 text-lg">
                Let's collaborate to bring your vision to life through high-end professional photography.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button
                    class="bg-primary hover:bg-primary/90 text-white px-10 py-4 rounded-xl text-base font-bold transition-transform hover:scale-105">
                    Book Your Session
                </button>
                <button
                    class="bg-white/5 hover:bg-white/10 text-white border border-white/10 px-10 py-4 rounded-xl text-base font-bold transition-all">
                    View Pricing
                </button>
            </div>
        </section>
    </main>
    <!-- Footer -->
    @include('user.partials.footer')
</body>

</html>

