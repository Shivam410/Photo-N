<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Lumina Studio | Professional Photography</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <style>
        .glass-nav {
            backdrop-filter: blur(12px);
            background-color: rgba(10, 10, 10, 0.8);
        }

        .hero-gradient {
            background: linear-gradient(to bottom, rgba(10, 10, 10, 0) 0%, rgba(10, 10, 10, 1) 100%);
        }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }

        .step-line::after {
            content: '';
            position: absolute;
            top: 2rem;
            left: 3rem;
            right: -3rem;
            height: 1px;
            background: rgba(239, 68, 68, 0.3);
            z-index: -1;
        }

        @media (max-width: 768px) {
            .step-line::after {
                display: none;
            }
        }

        .brand-loop {
            overflow: hidden;
            position: relative;
        }

        .brand-loop-track {
            display: flex;
            width: max-content;
            animation: brand-loop-scroll 26s linear infinite;
            will-change: transform;
            --brand-loop-distance: 0px;
        }

        .brand-loop-set {
            display: flex;
            gap: 1rem;
            flex-shrink: 0;
        }

        @media (min-width: 640px) {
            .brand-loop-set {
                gap: 1.5rem;
            }
        }

        .brand-loop:hover .brand-loop-track {
            animation-play-state: paused;
        }

        @keyframes brand-loop-scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(calc(-1 * var(--brand-loop-distance)));
            }
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-sans selection:bg-primary selection:text-white">
    @include('user.partials.header')
    @php
        $aboutTitle = $about?->title ?? 'Beyond Just A Simple Snapshot';
        $aboutDescription = $about?->description ?? 'At Lumina Studio, we believe photography is about feeling, not just seeing. Every shutter click is an opportunity to preserve a legacy. Our high-end facility is equipped with state-of-the-art lighting and backdrops, designed to provide a comfortable, professional environment for creativity to flourish.';
        $aboutImage = 'https://lh3.googleusercontent.com/aida-public/AB6AXuDFQxNwxQ-3ijOX9atK6YGFCvgT48IiUu0P6_aHpxEAfFhFhnKqEa5FaXLpoAePTZjgufdyIUsr2U-52CjyHpOptfnN4db65ocvd09obmJ6P8wSt-Y2ztLYAw6QLPM_KiovwHqmuLPDEceaj9bnQzJn2fqy13SUzpFIEPp_pLkcqvG650TKK4aDr5oazZBP188PzeFW-y6ZD9cS9tJCt_ZXhLTprjg0z85SuTXy2oiFOuY5v0OeTuCed_M0tOvkGmb3F642i_WHVsCM';

        if ($about?->image_path) {
            $aboutImage = file_exists(public_path($about->image_path))
                ? asset($about->image_path)
                : asset('storage/' . $about->image_path);
        }
    @endphp
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <img alt="Cinematic Studio Background" class="absolute inset-0 w-full h-full object-cover"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxtGIoyYyMfI8X-BBgiIJLk05xeJpUTvWTqdWyrTqRbGXeY1ecKywyuw7ZhtC1jO4TT3bBfBM-5lQDpa3oPbQRaVEeoreGqmLgN2qWxAPR3gFI3h6kXQE5JwBLwKWxzYESKZJuNe7xcKMfx141P0WsGeV3x_shZ8_R1O367DUM9AfeKpL8v83hSl8Q6MZXkEFrnqpbgIAZnh85c2aM8hz81yTOFcAKaVciiF0dEd6DZslNzH5WrgDSNrCK_UA6QJg9k1PjHhWcclIi" />
        <div class="absolute inset-0 bg-black/60 hero-gradient"></div>
        <div class="relative z-10 text-center px-6 max-w-4xl mx-auto">
            <span
                class="inline-block py-1 px-4 rounded-full border border-primary/30 bg-primary/10 text-primary text-xs font-bold uppercase tracking-widest mb-6">Premium
                Photography Studio</span>
            <h1 class="text-5xl md:text-7xl font-display font-extrabold mb-8 leading-[1.1]">
                Capturing Your Most <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-rose-400">Timeless
                    Moments</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed">
                We blend technical precision with artistic vision to create stunning visuals that tell your unique
                story.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a class="bg-primary hover:bg-red-600 text-white px-8 py-4 rounded-full font-bold text-lg transition-all flex items-center gap-2"
                    href="#portfolio">
                    View Portfolio
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
                <a class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/20 px-8 py-4 rounded-full font-bold text-lg transition-all"
                    href="#services">
                    Explore Services
                </a>
            </div>
        </div>
    </section>
    <section class="brand-section">
    <div class="brand-container">
        <div class="brand-track" id="brandTrack">
            <span>Adobe</span>
            <span>Canon</span>
            <span>Nikon</span>
            <span>Sony</span>
            <span>Fujifilm</span>
            <span>Panasonic</span>
            <span>Leica</span>
            <span>GoPro</span>
        </div>
    </div>
</section>

<style>
.brand-section {
    background: #0e0e0e;
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

.brand-container {
    overflow: hidden;
    position: relative;
}

/* Gradient fade edges (Luxury look) */
.brand-container::before,
.brand-container::after {
    content: "";
    position: absolute;
    top: 0;
    width: 150px;
    height: 100%;
    z-index: 2;
    pointer-events: none;
}

.brand-container::before {
    left: 0;
    background: linear-gradient(to right, #0e0e0e 0%, transparent 100%);
}

.brand-container::after {
    right: 0;
    background: linear-gradient(to left, #0e0e0e 0%, transparent 100%);
}

.brand-track {
    display: flex;
    gap: 100px;
    white-space: nowrap;
    will-change: transform;
}

.brand-track span {
    font-size: 32px;
    font-weight: 600;
    color: #ffffff;
    opacity: 0.7;
    letter-spacing: 1px;
    transition: all 0.4s ease;
}

.brand-track span:hover {
    opacity: 1;
    transform: translateY(-3px);
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const track = document.getElementById("brandTrack");

    // Clone automatically for seamless scroll (no manual duplicate)
    track.innerHTML += track.innerHTML;

    let position = 0;
    const speed = 0.5; // Lower = slower luxury feel

    function animate() {
        position -= speed;

        if (Math.abs(position) >= track.scrollWidth / 2) {
            position = 0;
        }

        track.style.transform = `translateX(${position}px)`;
        requestAnimationFrame(animate);
    }

    animate();

    // Pause on hover
    track.addEventListener("mouseenter", () => speed = 0);
    track.addEventListener("mouseleave", () => speed = 0.5);
});
</script>

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
    <section class="py-24 px-6 bg-slate-50 dark:bg-background-dark" id="services">
        <div class="max-w-7xl mx-auto text-center mb-16">
            <h2 class="text-primary font-bold tracking-[0.4em] uppercase text-sm mb-4">Expertise</h2>
            <h3 class="text-4xl md:text-5xl font-display font-bold">Services We Provide</h3>
        </div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div
                class="group bg-white dark:bg-[#151515] p-10 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary/50 transition-all duration-500 hover:-translate-y-2">
                <div
                    class="w-16 h-16 bg-red-50 dark:bg-primary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-primary text-3xl">favorite</span>
                </div>
                <h4 class="text-2xl font-display font-bold mb-4">Wedding Sessions</h4>
                <p class="text-slate-500 dark:text-slate-400 mb-6 leading-relaxed">Capturing the intimate emotions and
                    grand celebrations of your most special day with a cinematic eye.</p>
                <a class="flex items-center gap-2 text-primary font-semibold group/link" href="#">
                    View
                    <span
                        class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
            <div
                class="group bg-white dark:bg-[#151515] p-10 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary/50 transition-all duration-500 hover:-translate-y-2">
                <div
                    class="w-16 h-16 bg-red-50 dark:bg-primary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-primary text-3xl">person</span>
                </div>
                <h4 class="text-2xl font-display font-bold mb-4">Premium Portraits</h4>
                <p class="text-slate-500 dark:text-slate-400 mb-6 leading-relaxed">Professional headshots, artistic
                    solos, and family legacies. We bring out the best version of you.</p>
                <a class="flex items-center gap-2 text-primary font-semibold group/link" href="#">
                    View
                    <span
                        class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
            <div
                class="group bg-white dark:bg-[#151515] p-10 rounded-3xl border border-slate-200 dark:border-white/5 hover:border-primary/50 transition-all duration-500 hover:-translate-y-2">
                <div
                    class="w-16 h-16 bg-red-50 dark:bg-primary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-primary text-3xl">business_center</span>
                </div>
                <h4 class="text-2xl font-display font-bold mb-4">Commercial Media</h4>
                <p class="text-slate-500 dark:text-slate-400 mb-6 leading-relaxed">Elevate your brand with high-end
                    product photography and editorial visual content for campaigns.</p>
                <a class="flex items-center gap-2 text-primary font-semibold group/link" href="#">
                    View
                    <span
                        class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 bg-white dark:bg-[#0E0E0E]" id="portfolio">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <h2 class="text-primary font-bold tracking-[0.4em] uppercase text-sm mb-4">The Gallery</h2>
                <h3 class="text-4xl md:text-5xl font-display font-bold">Featured Masterpieces</h3>
            </div>
            <div class="flex gap-4 overflow-x-auto pb-2 scrollbar-hide">
                <button class="bg-primary text-white px-6 py-2 rounded-full whitespace-nowrap">All Work</button>
                <button
                    class="bg-slate-100 dark:bg-white/5 hover:bg-white/10 px-6 py-2 rounded-full whitespace-nowrap">Portraits</button>
                <button
                    class="bg-slate-100 dark:bg-white/5 hover:bg-white/10 px-6 py-2 rounded-full whitespace-nowrap">Weddings</button>
                <button
                    class="bg-slate-100 dark:bg-white/5 hover:bg-white/10 px-6 py-2 rounded-full whitespace-nowrap">Architecture</button>
            </div>
        </div>
        <div class="max-w-7xl mx-auto columns-1 sm:columns-2 lg:columns-3 gap-6">
            <div class="masonry-item relative group overflow-hidden rounded-2xl">
                <img alt="Wedding Couple"
                    class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-110"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUo1vefjy72fnBTTsfy10WTRNaJa04dZZmMOhjI9UTj6fWMpVLx_QdL03HSDwKjQiAxF91wHNFL-wQ2c64nbeCON2axwojHqlbQt4OI3HxAu3qUj1-ntFn9A_wu-IC_b78VbUNoWnX-JdblnygdBhFWc3bzfXlnWzIDeFUjpLdDmT8jGvmOA3YXWjlaAUGHN38Ips34B1HhJLChpumzUAoqdQyU5Vv7ZBppsQgeGVWflY_dJrCzSFGRfCF_WWuYSFk-dBv4iGKL_2K" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8">
                    <span class="text-primary text-xs font-bold uppercase tracking-wider mb-2">Wedding</span>
                    <h5 class="text-xl font-bold">The Eternal Vow</h5>
                </div>
            </div>
            <div class="masonry-item relative group overflow-hidden rounded-2xl">
                <img alt="Studio Portrait"
                    class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-110"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJX3YJEVe5BYmZnOGt-Yp2QxWciCxXv0txHwuLgqTlY3Eg6dTE7nYOlyQJK_48UFFPHG5Y-1EcVQoH3sasnRLAqPbTBTzScLXQhOxTdDqNTHKlsExwrbJkB3WrIq8UTRFCOp6gYym1NWKvvrS6M274K6qm4XD2qZ-VF-mwu3MjeAtGtA9-TTVVLytLTH-3t6PMdaLoPNMS7orI_1d7Sx7KRGoQSjkOHc5lghbY-SMQLRwsP3BzdDTs0u6Ta0mhohCGVRmiBAiZJgbK" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8">
                    <span class="text-primary text-xs font-bold uppercase tracking-wider mb-2">Portrait</span>
                    <h5 class="text-xl font-bold">Silhouette Study</h5>
                </div>
            </div>
            <div class="masonry-item relative group overflow-hidden rounded-2xl">
                <img alt="Model Portrait"
                    class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-110"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjMkMPdUMK0FZwMpz5Wd5RVsmdbDsGL5yaaDglb3z4KIAkqPAviy6BDu2hPtN3TeH3B8Y3hOa_ThW_I1t7_kCIkcLtAvp5OMJ-dE2yhn-g7Dm9f3ThCZGxzIIf26RK2KTmoiTXsuzI1KVawvwnbuPR7KQ-Pw110CtSyX4iBqA_o8SDSsmkRqSx0kZr7V4wMKOSvAlsZ3EJXq80_Saz1jKF9Htn8x9X22UjAxtlTlTwUoWs3v2YCo6d34_igR9xz7hHceZVipBxegEL" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8">
                    <span class="text-primary text-xs font-bold uppercase tracking-wider mb-2">Fashion</span>
                    <h5 class="text-xl font-bold">Vibrant Expressions</h5>
                </div>
            </div>
            <div class="masonry-item relative group overflow-hidden rounded-2xl">
                <img alt="Nature Photography"
                    class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-110"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdNU-pVlUK3pSRqSHy1Vazr_cT-kGARNt5ge7ikRIf3MJAsYu7X2L9K5dS1a3yIo5LE-YP8YdCINLfJVLelnN51oqBnDAmxTHLvM2MFp6No4PYhd759p0o77hKDLRAxjYOKyzPqudCYgiW0fJl3XT8ytQ0WUpo10EA8xipbkZxEyVUlhQBsFG0ljOG8nkbUtm9P_Du4D66Oa4gsK0PkEbyb-UuvWKb3jF18FNGjzlDvib_4nhNDvWhvx53yU0uXWeV4Cm-D1y5OQRH" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8">
                    <span class="text-primary text-xs font-bold uppercase tracking-wider mb-2">Nature</span>
                    <h5 class="text-xl font-bold">Misty Highlands</h5>
                </div>
            </div>
            <div class="masonry-item relative group overflow-hidden rounded-2xl">
                <img alt="Commercial Shot"
                    class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-110"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBx8eOiIaVgdZrDS8iU-Zu70pSrjxBN4wpmDze7C0_4JYC1H9YaW5brLtsiSwfeGKizzDhlX70YTa_t40h7iGyd8HF9abZVIKAGN7Xys8GOOm4yhVg-XbQkpCYOuW3kYAVZQjfK8ONp7FVVcow-G19Siy56Q75yGodkRvBXq3PImrCrALUVZXC1Nni9eAb0FiQzPChQTNi7NHJZSKL9-PmHSwZnZKhcepAcvLzTTrNmaq6FoNZCCYM8Ta_KCRc7cjytdr0PkT2Caiwk" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8">
                    <span class="text-primary text-xs font-bold uppercase tracking-wider mb-2">Commercial</span>
                    <h5 class="text-xl font-bold">Luxe Branding</h5>
                </div>
            </div>
            <div class="masonry-item relative group overflow-hidden rounded-2xl">
                <img alt="Architecture"
                    class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-110"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRgIP2VfHrvPwdrPzX6vIK0rsk_RQMvIN0tpVAeLBIErHDKqUuuVVuHrG7wQueoOlbTCa87XdSPo1ajmTI5y0BYfgZp-YoIKE4Uc4tEkFMvd7jvU1VfuXJ7wBQg9-p_5wplr2ZOzbk-o8WLNOuGOj4QbtWUeWMDUhZCuOewVNejniHmKfGwjBLRizoWwqeyP-gN6fuEDtx6T8lmGpEmgSJn57qNU0rM3Nv-9qqAbY9qEVqM1ccK5SDhyolpwkIwbY-F7s8aHJKCqWY" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8">
                    <span class="text-primary text-xs font-bold uppercase tracking-wider mb-2">Architecture</span>
                    <h5 class="text-xl font-bold">Urban Geometry</h5>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <button
                class="bg-background-dark text-white dark:bg-white dark:text-background-dark px-10 py-4 rounded-full font-bold hover:scale-105 transition-all">Explore
                All Projects</button>
        </div>
    </section>

    <section class="py-24 px-6 bg-white dark:bg-[#0E0E0E]">
        <div class="max-w-7xl mx-auto text-center mb-16">
            <h2 class="text-primary font-bold tracking-[0.4em] uppercase text-sm mb-4">Reviews</h2>
            <h3 class="text-4xl md:text-5xl font-display font-bold">What Our Clients Say</h3>
        </div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 bg-slate-50 dark:bg-[#151515] rounded-3xl border border-slate-100 dark:border-white/5">
                <div class="flex text-primary mb-6">
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined">star</span>
                </div>
                <p class="text-lg text-slate-600 dark:text-slate-300 italic mb-8">"Lumina Studio captured our wedding
                    so beautifully. Every single shot feels like a movie scene. We couldn't be happier!"</p>
                <div class="flex items-center gap-4">
                    <img alt="Client" class="w-12 h-12 rounded-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6VjlhbyLdr1M3db1bUYa-9vENzVaSlUkt6_8BoUHEFYGybb9X3imQchUx-WeKIe1YTnNXhuczd0yJjGbjGSHM-qKZyPAcUJMu76lJg_XuLGrICkRqX7TJ4g05HlWqNaAiK6ZFaKaU5NIKPh26OZ8VoGi1iJq8MC8qhdKA5gQ9QYTlvUHbIq_mLjWaujAGLFr5mz3U5cZj06S8cowc5frOaScdhhlUrqlmgS8NnNgi7SggnZMncirKnCtvfBYcNduHAscYnjIl0N0V" />
                    <div>
                        <p class="font-bold">Sarah Jenkins</p>
                        <p class="text-xs text-slate-500 uppercase tracking-wider">Bride</p>
                    </div>
                </div>
            </div>
            <div class="p-8 bg-slate-50 dark:bg-[#151515] rounded-3xl border border-slate-100 dark:border-white/5">
                <div class="flex text-primary mb-6">
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined">star</span>
                </div>
                <p class="text-lg text-slate-600 dark:text-slate-300 italic mb-8">"As a brand owner, I needed
                    professional assets that stood out. Their commercial session exceeded all expectations."</p>
                <div class="flex items-center gap-4">
                    <img alt="Client" class="w-12 h-12 rounded-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDuDxLnhxaUpOj_KhpWxC59WyrE3lcF4KxrRjTRe0CFkklRpDgsJd5gPLyqqqRgmlx6GSbAwnUf8DGmsiMtu11dN_3_oVoQZmbvuJRnohhbzfhz4peYLtVHNCDA-JbZ0dDaBc2d6wZiFoHYs1Od_cZO9Ewr0sdvYlK4uiCBieqlcuseCOJhGHXG7w3OBxfMssl9MUbKbEogmNI0MA2lord3MnL8H516d2ElowOq5xrXognkwIVvpfG4kVOpSc911bj8m-gn_3Kogpod" />
                    <div>
                        <p class="font-bold">David Chen</p>
                        <p class="text-xs text-slate-500 uppercase tracking-wider">Entrepreneur</p>
                    </div>
                </div>
            </div>
            <div class="p-8 bg-slate-50 dark:bg-[#151515] rounded-3xl border border-slate-100 dark:border-white/5">
                <div class="flex text-primary mb-6">
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined">star</span>
                </div>
                <p class="text-lg text-slate-600 dark:text-slate-300 italic mb-8">"I've done several portrait sessions,
                    but never felt this comfortable. The team knows exactly how to make you look your best."</p>
                <div class="flex items-center gap-4">
                    <img alt="Client" class="w-12 h-12 rounded-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0ILvzy6FdaJg9iqrwhN8AaKN01zRmBVRMIbHAO2vKmBn4Xn6I_gHpF-PKDOxgjSgmEYTZYaM3ZUWal3LEMEgk4RZeZoZ26Toj0FfFu4oUdNq1kMUw8SAuXqepUeNIL38HM2M2AN-WxuaLzaEhcLCMyLhf4dKF39PkCLLjhqJ4hckYy8X3tEVUoQ12vvMMUP5IJmv1L86QL4WaShrSsIF1rY6EnQcOEI4ijtkZ6MHib9UeOqIG3wC6l2-N4APru9WMl83ysra8y-gK" />
                    <div>
                        <p class="font-bold">Elena Rodriguez</p>
                        <p class="text-xs text-slate-500 uppercase tracking-wider">Model</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 bg-slate-50 dark:bg-background-dark" id="pricing">
        <div class="max-w-7xl mx-auto text-center mb-20">
            <h2 class="text-primary font-bold tracking-[0.4em] uppercase text-sm mb-4">Investment</h2>
            <h3 class="text-4xl md:text-5xl font-display font-bold">Studio Packages</h3>
        </div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div
                class="bg-white dark:bg-[#151515] p-10 rounded-3xl border border-slate-200 dark:border-white/5 flex flex-col">
                <h4 class="text-xl font-bold mb-2">Essential</h4>
                <div class="mb-6">
                    <span class="text-4xl font-extrabold">$299</span>
                    <span class="text-slate-400">/ session</span>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        1 Hour Session
                    </li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        10 High-Res Digitals
                    </li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        Single Location
                    </li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        Standard Retouching
                    </li>
                </ul>
                <button
                    class="w-full py-4 rounded-xl border-2 border-slate-200 dark:border-white/10 font-bold hover:bg-slate-50 dark:hover:bg-white/5 transition-all">Get
                    Started</button>
            </div>
            <div
                class="bg-white dark:bg-[#151515] p-10 rounded-3xl border-2 border-primary relative transform md:scale-110 z-10 shadow-2xl flex flex-col">
                <div
                    class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-primary text-white px-6 py-1 rounded-full text-xs font-bold uppercase tracking-widest">
                    Most Popular</div>
                <h4 class="text-xl font-bold mb-2">Creative</h4>
                <div class="mb-6">
                    <span class="text-4xl font-extrabold">$599</span>
                    <span class="text-slate-400">/ session</span>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        3 Hour Session
                    </li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        30 High-Res Digitals
                    </li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        2 Locations / Setup
                    </li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        Premium Retouching
                    </li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        Commercial Rights
                    </li>
                </ul>
                <button
                    class="w-full py-4 rounded-xl bg-primary text-white font-bold hover:bg-red-600 transition-all">Book
                    Now</button>
            </div>
            <div
                class="bg-white dark:bg-[#151515] p-10 rounded-3xl border border-slate-200 dark:border-white/5 flex flex-col">
                <h4 class="text-xl font-bold mb-2">Signature</h4>
                <div class="mb-6">
                    <span class="text-4xl font-extrabold">$999</span>
                    <span class="text-slate-400">/ session</span>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        Full Day Access
                    </li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        All Digital Originals
                    </li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        Professional Hair &amp; Makeup
                    </li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                        Premium Hardcover Album
                    </li>
                </ul>
                <button
                    class="w-full py-4 rounded-xl border-2 border-slate-200 dark:border-white/10 font-bold hover:bg-slate-50 dark:hover:bg-white/5 transition-all">Contact
                    Us</button>
            </div>
        </div>
    </section>
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto relative rounded-[3rem] overflow-hidden">
            <img alt="CTA Background" class="absolute inset-0 w-full h-full object-cover"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBuXED3Wp8mxeV_bnrYqWJnWP6a-pVU_Cata1SI2SYP2LYqDeu8x10QXKmWZrXBYAIfUXbybzep89XvIpjoOZsYDN2L_OrnfEUHGGhA4RF8UbSRDCGcEqwE18VnrLjNRTtSWFCTIlZ-kBqLJ5WcNjk_OzPzPU5-6tJqFFuQd-x6M56yBqWOXHx1kRhRpyk79L2hBYnyuSZHuWNwMmKodk3sLh1ensyIDT4xb7a6QbgjOTM8rhr6stpjAjViZkoK4lCEa3X64IF7LFtg" />
            <div class="absolute inset-0 bg-black/80 backdrop-blur-sm"></div>
            <div class="relative z-10 px-8 py-20 text-center">
                <h3 class="text-4xl md:text-6xl font-display font-extrabold text-white mb-8">Ready to tell your story?
                </h3>
                <p class="text-slate-300 text-lg md:text-xl mb-12 max-w-2xl mx-auto">Join hundreds of satisfied clients
                    who have trusted Lumina Studio with their most precious memories.</p>
                <div class="flex flex-col items-center gap-8">
                    <button
                        class="bg-white text-black px-12 py-5 rounded-full font-bold text-xl hover:bg-primary hover:text-white transition-all transform hover:scale-105 flex items-center gap-3">
                        Start Your Journey
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                    <div class="flex flex-col items-center gap-4">
                        <div class="flex -space-x-4">
                            <img alt="User 1" class="w-12 h-12 rounded-full border-4 border-black object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA97ow5ycijmJczxcOEfz9WT4WZw5FQ-DcIwIKwzRul90DP1soNwniwQzWPi3MBJe4xXns4FzeRJutL6P2bs-Y01He1P-rb3IjRy6bkATep2ykU350ebuLojmMwcg5dJ4QQpaLSBMSLKPpmLlleS6rOho-uIPuNYvPfcyKireqsGURH-mYcxlWyWog5Tu2DpxJvm238hcR-u6ji_3HP1QGYpYSkUO3Q8XuLQpB_QopJdkpyybC8nLY3DHVbT6o8kMUY_yJ20bcDr9ye" />
                            <img alt="User 2" class="w-12 h-12 rounded-full border-4 border-black object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCrCxx23-01N_FX4kffyD2PpX6yGk76Cs5fyU7VB9jWgnqrTHjVgOMbNdJBZ-Hw_RJxj5G0nQGxjLfd0WQdLHo_a5nk9dp1o7veDFg0CHuD4vBkhsAp14D46qvDsHjHCSZqhZE4B6h23HYODr9wr7EYdmkucjP1eMFwvZMSDF4FKHLrVfPwEskshry_MZf5x4RYUFX6X1_y_iYVfSWjNy7_5Ln0mtxr-elWNnvJArHlkCcBdhVorqQJKB2r7yxRNOjkTc9iCpIo2Th" />
                            <img alt="User 3" class="w-12 h-12 rounded-full border-4 border-black object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBO80yWK4kJ7xqrrdN8iFMAWmwX5P8VqOPszyDF1nfZoLl6CctJ17mXgqm9fouyx9bRwTUUtfnnMEGzvdN7C1SlBJyQToYK4-mDbaT-aSWcUFueP2q1Cu132A3QMUv4Tw5rEdZ027rak-8ryD7ICqEkkkQHAFSAVM1qolVzX5buz4kqJ3_TpH0s7fPuamhCXMGPIapqxkwbyQUvuu711NTBpdXEmj96fbb-Mk1t4b7YxIZ5HdM-IDTGGm-1mVyow_xr2Lx4pA6d5DKd" />
                            <div
                                class="w-12 h-12 rounded-full border-4 border-black bg-primary flex items-center justify-center text-xs font-bold text-white">
                                500+</div>
                        </div>
                        <p class="text-white/60 text-sm font-medium">Trusted by creative professionals worldwide</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('user.partials.footer')
    <a class="fixed bottom-8 right-8 bg-[#25D366] text-white p-4 rounded-full shadow-2xl flex items-center gap-3 hover:scale-105 transition-all z-40"
        href="#">
        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
            <path
                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.588-5.946 0-6.556 5.332-11.891 11.893-11.891 3.181 0 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.481 8.403 0 6.557-5.332 11.892-11.893 11.892-1.99 0-3.974-.499-5.772-1.451l-6.321 1.669zm6.071-4.242l.345.205c1.46.868 3.141 1.325 4.864 1.325 5.104 0 9.256-4.152 9.256-9.256 0-2.475-.964-4.801-2.712-6.551-1.748-1.748-4.074-2.712-6.544-2.712-5.11 0-9.256 4.152-9.256 9.256 0 1.774.507 3.506 1.47 5.014l.225.352-1.08 3.945 4.043-1.069z">
            </path>
        </svg>
        <span class="font-bold text-sm hidden sm:inline">Chat with us</span>
    </a>
    <script>
        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('py-2', 'shadow-lg');
                header.classList.remove('h-20');
            } else {
                header.classList.remove('py-2', 'shadow-lg');
                header.classList.add('h-20');
            }
        });

        // Pixel-accurate marquee distance to avoid visible reset gaps.
        function syncBrandLoopDistance() {
            const track = document.getElementById('brandLoopTrack');
            const set = document.getElementById('brandLoopSet');
            if (!track || !set) return;
            const width = Math.round(set.getBoundingClientRect().width);
            track.style.setProperty('--brand-loop-distance', `${width}px`);
        }

        // Initialize after DOM is fully loaded and rendered
        function initBrandLoop() {
            // Small delay to ensure all elements are rendered
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    syncBrandLoopDistance();
                });
            });
        }

        // Run on DOM ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initBrandLoop);
        } else {
            initBrandLoop();
        }

        // Recalculate on resize with debounce
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(syncBrandLoopDistance, 150);
        });

        // Add dark mode manually for demonstration if needed,
        // but it follows system preference by default via Tailwind
        document.documentElement.classList.add('dark');
    </script>

</body>

</html>
