<header class="fixed top-0 left-0 right-0 z-50 h-20 border-b border-white/10 transition-all duration-300 backdrop-blur-xl bg-black/80">
    <div class="max-w-7xl mx-auto h-full px-6 flex items-center justify-between">
        <a class="flex items-center gap-3" href="{{ url('/') }}">
            <span class="text-primary text-2xl font-black tracking-tight">Photo</span>
        </a>

        <nav class="hidden md:flex items-center gap-8 text-sm font-semibold uppercase tracking-wider text-slate-200">
            <a class="hover:text-primary transition-colors" href="{{ route('index') }}">Home</a>
            <a class="hover:text-primary transition-colors" href="{{ route('user.about') }}">About</a>
            <a class="hover:text-primary transition-colors" href="{{ route('service') }}">Services</a>
            <a class="hover:text-primary transition-colors" href="{{ route('user.portfolio') }}">Portfolio</a>
            <a class="hover:text-primary transition-colors" href="{{ route('contact') }}">Contact</a>
        </nav>

        <a class="hidden sm:inline-flex items-center gap-2 bg-primary hover:bg-red-600 text-white px-5 py-2.5 rounded-full font-bold transition-all"
            href="{{ route('contact') }}">
            Book Now
            <span class="material-symbols-outlined text-base">arrow_forward</span>
        </a>

        <button aria-controls="mobileNavMenu" aria-expanded="false"
            aria-label="Toggle navigation menu"
            class="md:hidden inline-flex items-center justify-center w-11 h-11 rounded-lg border border-white/15 text-white hover:bg-white/10 transition-colors"
            id="mobileNavToggle" type="button">
            <svg aria-hidden="true" class="w-6 h-6" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                <path d="M4 7h16M4 12h16M4 17h16"></path>
            </svg>
        </button>
    </div>

    <div class="md:hidden border-t border-white/10 bg-black max-h-0 opacity-0 overflow-hidden transition-all duration-300"
        id="mobileNavMenu">
        <nav class="px-6 py-5 flex flex-col gap-4 text-sm font-semibold uppercase tracking-wider text-slate-200" >
            <a class="hover:text-primary transition-colors" href="{{ route('index') }}">Home</a>
            <a class="hover:text-primary transition-colors" href="{{ route('user.about') }}">About</a>
            <a class="hover:text-primary transition-colors" href="{{ route('service') }}">Services</a>
            <a class="hover:text-primary transition-colors" href="{{ route('user.portfolio') }}"> Portfolio</a>
            <a class="hover:text-primary transition-colors" href="{{ route('contact') }}">Contact</a>
            <a class="inline-flex items-center justify-center gap-2 bg-primary hover:bg-red-600 text-white px-5 py-3 rounded-full font-bold transition-all mt-2"
                href="{{ route('contact') }}">
                Book Now
                <span class="material-symbols-outlined text-base">arrow_forward</span>
            </a>
        </nav>
    </div>
</header>

<script>
    (function() {
        const toggle = document.getElementById('mobileNavToggle');
        const menu = document.getElementById('mobileNavMenu');
        if (!toggle || !menu) return;

        function closeMenu() {
            menu.classList.add('max-h-0', 'opacity-0');
            menu.classList.remove('max-h-[80vh]', 'opacity-100');
            toggle.setAttribute('aria-expanded', 'false');
        }

        function openMenu() {
            menu.classList.remove('max-h-0', 'opacity-0');
            menu.classList.add('max-h-[80vh]', 'opacity-100');
            toggle.setAttribute('aria-expanded', 'true');
        }

        toggle.addEventListener('click', function() {
            const expanded = toggle.getAttribute('aria-expanded') === 'true';
            if (expanded) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        menu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', closeMenu);
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) closeMenu();
        });
    })();
</script>
