<header class="h-20 border-b border-white/10 bg-black/40 backdrop-blur-xl">
    <div class="h-full px-6 lg:px-10 flex items-center justify-between">
        <div>
            <p class="text-xs uppercase tracking-[0.25em] text-slate-500">Admin Dashboard</p>
            <h1 class="text-xl md:text-2xl font-bold">Welcome back, {{ auth()->user()->name }}</h1>
        </div>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button class="px-4 py-2 rounded-lg bg-primary hover:bg-red-600 text-white font-semibold transition-colors"
                type="submit">
                Logout
            </button>
        </form>
    </div>
</header>
