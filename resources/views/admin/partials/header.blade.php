<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin Dashboard | NashikPhoto</title>
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
                <span class="text-2xl font-black tracking-tight text-white"><span class="text-primary">Admin</span></span>
            </div>
            <nav class="p-5 space-y-2">
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/20 border border-primary/30 text-white font-semibold"
                    href="#">
                    <span class="material-symbols-outlined text-base">dashboard</span> Dashboard
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-white/5 hover:text-white transition-colors"
                    href="{{ route('admin.about.edit') }}">
                    <span class="material-symbols-outlined text-base">info</span> About Content
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-white/5 hover:text-white transition-colors"
                   href="{{ route('admin.services.index') }}">
                   <span class="material-symbols-outlined text-base">design_services</span> Services
                </a>

                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-white/5 hover:text-white transition-colors"
                    href="{{ route('admin.brands.index') }}">
                    <span class="material-symbols-outlined text-base">branding_watermark</span> Brands
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-white/5 hover:text-white transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-base">photo_camera</span> Projects
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-white/5 hover:text-white transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-base">groups</span> Clients
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-white/5 hover:text-white transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-base">inventory_2</span> Packages
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-white/5 hover:text-white transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-base">mail</span> Inquiries
                </a>
            </nav>
        </aside>
         <div class="min-h-screen flex flex-col">
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
