<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin Login | NashikPhoto</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-background-dark text-slate-100 flex items-center justify-center px-6">
    <div class="w-full max-w-md bg-[#101010] border border-white/10 rounded-2xl p-8 shadow-2xl">
        <h1 class="text-3xl font-bold mb-2">Admin Login</h1>
        <p class="text-slate-400 mb-8">Sign in to access the admin panel.</p>

        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-500/40 bg-red-500/10 text-red-300 px-4 py-3 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" class="space-y-5" method="POST">
            @csrf
            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2" for="email">Email</label>
                <input
                    class="w-full rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                    id="email" name="email" required type="email" value="{{ old('email') }}">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2" for="password">Password</label>
                <input
                    class="w-full rounded-lg border border-white/10 bg-black/40 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                    id="password" name="password" required type="password">
            </div>

            <label class="inline-flex items-center gap-2 text-sm text-slate-300">
                <input class="rounded border-white/20 bg-black/40 text-primary focus:ring-primary" name="remember"
                    type="checkbox" value="1">
                Remember me
            </label>

            <button
                class="w-full rounded-lg bg-primary hover:bg-red-600 text-white font-bold py-3 transition-colors"
                type="submit">
                Login
            </button>
        </form>
    </div>
</body>

</html>

