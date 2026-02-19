<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Contact &amp; Inquiry | Timeless Studio</title>
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
        body {
            font-family: 'Manrope', sans-serif;
        }

        .form-input-focus:focus {
            border-color: #ea2a33 !important;
            ring-color: #ea2a33 !important;
            outline: none;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white transition-colors duration-300">
    <!-- Sticky Header -->
    @include('user.partials.header')
    <main class="max-w-7xl mx-auto px-6 py-16 lg:py-24">
        <!-- Page Header -->
        <div class="text-center mb-16 space-y-4">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight dark:text-white">Let's Create Something
                Timeless</h1>
            <p class="text-slate-500 dark:text-slate-400 text-lg max-w-2xl mx-auto">
                Whether it's a milestone celebration or a commercial vision, we're here to capture the essence of your
                story with artistic precision.
            </p>
        </div>
        <div class="grid lg:grid-cols-12 gap-16">
            <!-- Left Side: Inquiry Form -->
            <div
                class="lg:col-span-7 bg-white dark:bg-surface-dark p-8 md:p-10 rounded-xl shadow-xl border border-slate-100 dark:border-border-dark">
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label
                                class="text-sm font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Full
                                Name</label>
                            <input
                                class="w-full bg-slate-50 dark:bg-background-dark border-slate-200 dark:border-border-dark rounded-lg py-3 px-4 text-white form-input-focus focus:ring-1 focus:ring-primary transition-all"
                                placeholder="John Doe" type="text" />
                        </div>
                        <div class="space-y-2">
                            <label
                                class="text-sm font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Email
                                Address</label>
                            <input
                                class="w-full bg-slate-50 dark:bg-background-dark border-slate-200 dark:border-border-dark rounded-lg py-3 px-4 text-white form-input-focus focus:ring-1 focus:ring-primary transition-all"
                                placeholder="john@example.com" type="email" />
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label
                                class="text-sm font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Service
                                Interest</label>
                            <select
                                class="w-full bg-slate-50 dark:bg-background-dark border-slate-200 dark:border-border-dark rounded-lg py-3 px-4 text-slate-900 dark:text-white form-input-focus focus:ring-1 focus:ring-primary transition-all appearance-none">
                                <option>Wedding Photography</option>
                                <option>Portrait Session</option>
                                <option>Commercial Shoot</option>
                                <option>Event Coverage</option>
                                <option>Editorial</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label
                                class="text-sm font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Preferred
                                Date</label>
                            <input
                                class="w-full bg-slate-50 dark:bg-background-dark border-slate-200 dark:border-border-dark rounded-lg py-3 px-4 text-white form-input-focus focus:ring-1 focus:ring-primary transition-all"
                                type="date" />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label
                            class="text-sm font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Message</label>
                        <textarea
                            class="w-full bg-slate-50 dark:bg-background-dark border-slate-200 dark:border-border-dark rounded-lg py-3 px-4 text-white form-input-focus focus:ring-1 focus:ring-primary transition-all resize-none"
                            placeholder="Tell us about your project or vision..." rows="5"></textarea>
                    </div>
                    <button
                        class="w-full md:w-auto bg-primary hover:bg-primary/90 text-white font-bold py-4 px-10 rounded-lg transition-all transform hover:-translate-y-1 shadow-lg shadow-primary/20"
                        type="submit">
                        Send Inquiry
                    </button>
                </form>
            </div>
            <!-- Right Side: Studio Details -->
            <div class="lg:col-span-5 flex flex-col justify-between space-y-12">
                <div class="space-y-10">
                    <div class="flex gap-5">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div class="space-y-3 flex-1">
                            <h3 class="text-xl font-bold">Our Studio</h3>
                            <p class="text-slate-500 dark:text-slate-400 leading-relaxed">
                                482 Creative Plaza, Arts District<br />
                                New York, NY 10013
                            </p>
                            <div
                                class="w-full h-40 rounded-xl overflow-hidden grayscale hover:grayscale-0 transition-all duration-500 border border-border-dark">
                                <img class="w-full h-full object-cover"
                                    data-alt="Dark aesthetic map location of the studio" data-location="New York City"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAe41w1zilXprbYa6HDqeTLggMd2n6vbTUk96umvdwhfiY88rAmHQZQ3OBL0xZxVyX73UzCAvsFTi6GI8O_l48S3XlhZQJP3nfZjKqFgGWD7l_v0eICJYX5gxakQMK1Rc86-WdniYdEuBd6O3s-BSFZ5bhRGzu4J_yxByIJQp_YYZ-Ij36ETq6zCvxaYSzc62F8Ne43R_gJXuIzw-HsI4PqQWHd3qvehffatPsQiLRmeioZ7IxQ_oHv41ilpL3Wi9EiGryZywYzrL9_" />
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">alternate_email</span>
                        </div>
                        <div class="space-y-1">
                            <h3 class="text-xl font-bold">Email Us</h3>
                            <a class="text-slate-500 dark:text-slate-400 hover:text-primary transition-colors text-lg"
                                href="mailto:hello@timeless.studio">hello@timeless.studio</a>
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">call</span>
                        </div>
                        <div class="space-y-1">
                            <h3 class="text-xl font-bold">Call Us</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-lg">+1 (212) 555-0198</p>
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">schedule</span>
                        </div>
                        <div class="space-y-1">
                            <h3 class="text-xl font-bold">Operating Hours</h3>
                            <p class="text-slate-500 dark:text-slate-400">Mon - Fri: 9:00 AM - 6:00 PM</p>
                            <p class="text-slate-500 dark:text-slate-400">Weekend: By Appointment Only</p>
                        </div>
                    </div>
                </div>
                <!-- Social Media Showcase -->
                <div class="pt-8 border-t border-slate-200 dark:border-border-dark flex items-center justify-between">
                    <span class="text-sm font-bold tracking-widest uppercase text-slate-400">@timeless_studio</span>
                    <div class="flex gap-4">
                        <a class="w-10 h-10 border border-slate-200 dark:border-border-dark rounded-full flex items-center justify-center hover:bg-primary hover:border-primary hover:text-white transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-xl">camera_alt</span>
                        </a>
                        <a class="w-10 h-10 border border-slate-200 dark:border-border-dark rounded-full flex items-center justify-center hover:bg-primary hover:border-primary hover:text-white transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-xl">public</span>
                        </a>
                        <a class="w-10 h-10 border border-slate-200 dark:border-border-dark rounded-full flex items-center justify-center hover:bg-primary hover:border-primary hover:text-white transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-xl">group</span>
                        </a>
                        <a class="w-10 h-10 border border-slate-200 dark:border-border-dark rounded-full flex items-center justify-center hover:bg-primary hover:border-primary hover:text-white transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-xl">grid_view</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Section -->
        <section class="mt-32 max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
            <div class="space-y-4">
                <details
                    class="group bg-white dark:bg-surface-dark rounded-xl border border-slate-100 dark:border-border-dark overflow-hidden transition-all duration-300">
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                        <span class="text-lg font-semibold">What is your turnaround time?</span>
                        <span
                            class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="px-6 pb-6 text-slate-500 dark:text-slate-400">
                        Standard portrait sessions are delivered within 2 weeks. Weddings typically take 6-8 weeks for a
                        fully curated and edited gallery.
                    </div>
                </details>
                <details
                    class="group bg-white dark:bg-surface-dark rounded-xl border border-slate-100 dark:border-border-dark overflow-hidden transition-all duration-300">
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                        <span class="text-lg font-semibold">Do you travel for shoots?</span>
                        <span
                            class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="px-6 pb-6 text-slate-500 dark:text-slate-400">
                        Yes, we love capturing stories worldwide. Travel fees apply for locations 50 miles outside of
                        New York City.
                    </div>
                </details>
                <details
                    class="group bg-white dark:bg-surface-dark rounded-xl border border-slate-100 dark:border-border-dark overflow-hidden transition-all duration-300">
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                        <span class="text-lg font-semibold">How do I secure a date?</span>
                        <span
                            class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="px-6 pb-6 text-slate-500 dark:text-slate-400">
                        A signed contract and a 30% non-refundable retainer are required to officially book your session
                        date.
                    </div>
                </details>
                <details
                    class="group bg-white dark:bg-surface-dark rounded-xl border border-slate-100 dark:border-border-dark overflow-hidden transition-all duration-300">
                    <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                        <span class="text-lg font-semibold">Do you offer raw files?</span>
                        <span
                            class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="px-6 pb-6 text-slate-500 dark:text-slate-400">
                        We take pride in our editing process as it is half of our artistic voice. We do not provide raw
                        files, but we guarantee a high-resolution edited gallery.
                    </div>
                </details>
            </div>
        </section>
        <!-- Final CTA -->
        <div
            class="mt-32 p-12 rounded-3xl bg-slate-100 dark:bg-surface-dark flex flex-col items-center text-center space-y-6 border border-slate-200 dark:border-border-dark relative overflow-hidden group">
            <div
                class="absolute inset-0 bg-primary/5 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
            </div>
            <h2 class="text-3xl font-bold">Want to see more of our work?</h2>
            <p class="text-slate-500 dark:text-slate-400 max-w-lg">Explore our diverse portfolio of timeless moments
                and professional campaigns.</p>
            <a class="inline-flex items-center gap-2 text-primary font-bold hover:gap-4 transition-all uppercase tracking-widest text-sm group-hover:text-primary/80"
                href="#">
                Back to Portfolio <span class="material-symbols-outlined">arrow_forward</span>
            </a>
        </div>
    </main>
    <!-- Footer -->
    @include('user.partials.footer')
</body>

</html>

