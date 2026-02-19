<footer class="bg-[#080808] text-slate-300 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-4 gap-10">
        <div class="md:col-span-2">
            <h3 class="text-2xl font-black text-white mb-4">NashikPhoto</h3>
            <p class="text-slate-400 max-w-md">
                Professional photography for weddings, portraits, and brands. Built around storytelling, precision,
                and timeless editing.
            </p>
        </div>

        <div>
            <h4 class="text-white font-bold uppercase tracking-widest text-xs mb-4">Pages</h4>
            <ul class="space-y-2">
                <li><a class="hover:text-primary transition-colors" href="{{ url('/') }}">Home</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ url('/about') }}">About</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ url('/service') }}">Services</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ url('/portfolio') }}">Portfolio</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-white font-bold uppercase tracking-widest text-xs mb-4">Contact</h4>
            <ul class="space-y-2 text-slate-400">
                <li>hello@nashikphoto.com</li>
                <li>+91 90000 00000</li>
                <li>Nashik, Maharashtra</li>
            </ul>
        </div>
    </div>

    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-5 text-sm text-slate-500 flex flex-col sm:flex-row gap-2 sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} Photo. All rights reserved.</p>
            <p>Crafted with visual precision.</p>
        </div>
    </div>
</footer>

<div aria-hidden="true" id="pageTransitionOverlay"></div>
<style>
    body {
        animation: pageFadeIn 280ms ease both;
    }

    #pageTransitionOverlay {
        position: fixed;
        inset: 0;
        background: rgba(8, 8, 8, 0.14);
        opacity: 0;
        pointer-events: none;
        transition: opacity 240ms ease;
        z-index: 9999;
    }

    html.page-transitioning #pageTransitionOverlay {
        opacity: 1;
    }

    @keyframes pageFadeIn {
        from {
            opacity: 0;
            transform: translateY(8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (prefers-reduced-motion: reduce) {
        body {
            animation: none !important;
        }

        #pageTransitionOverlay {
            transition: none !important;
        }
    }
</style>
<script>
    (function() {
        const root = document.documentElement;

        function isInternalNavigableLink(link) {
            if (!link || link.target === '_blank' || link.hasAttribute('download')) return false;
            const rawHref = link.getAttribute('href');
            if (!rawHref || rawHref.startsWith('#')) return false;
            if (/^(mailto:|tel:|javascript:)/i.test(rawHref)) return false;

            const url = new URL(link.href, window.location.href);
            if (url.origin !== window.location.origin) return false;
            if (url.pathname === window.location.pathname && url.search === window.location.search && url.hash) return false;
            return true;
        }

        document.addEventListener('click', function(event) {
            if (event.defaultPrevented || event.button !== 0) return;
            if (event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) return;

            const link = event.target.closest('a[href]');
            if (!isInternalNavigableLink(link)) return;

            event.preventDefault();
            root.classList.add('page-transitioning');

            window.setTimeout(function() {
                window.location.href = link.href;
            }, 220);
        });

        window.addEventListener('pageshow', function() {
            root.classList.remove('page-transitioning');
        });
    })();
</script>
