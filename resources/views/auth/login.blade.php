<x-guest-layout>
    @if (session('status'))
        <div class="mb-6 rounded-2xl border border-green-500/30 bg-green-500/10 px-4 py-3 text-sm text-green-400">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <div>
            <label for="email" class="block text-sm font-medium text-zinc-300 mb-2">
                Email
            </label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
                placeholder="you@example.com"
                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white placeholder:text-zinc-600 focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            @error('email')
                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <div class="flex items-center justify-between mb-2">
                <label for="password" class="block text-sm font-medium text-zinc-300">
                    Password
                </label>

                @if (Route::has('password.request'))
                    <a
                        href="{{ route('password.request') }}"
                        class="text-sm text-zinc-400 hover:text-[#00FF00] transition-colors"
                    >
                        Forgot password?
                    </a>
                @endif
            </div>

            <input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="••••••••"
                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white placeholder:text-zinc-600 focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            @error('password')
                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center gap-3 text-sm text-zinc-400 cursor-pointer">
                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                    class="rounded border-zinc-700 bg-zinc-900 text-[#00FF00] focus:ring-[#00FF00]"
                >
                <span>Remember me</span>
            </label>
        </div>

        <button
            type="submit"
            class="group w-full rounded-xl bg-[#00FF00] px-5 py-3 font-semibold text-black transition-all duration-300 hover:bg-[#00FF00]/90 hover:shadow-[0_0_20px_rgba(0,255,0,0.3)]"
        >
            <span class="inline-flex items-center justify-center gap-2">
                Log in
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="m13 5 7 7-7 7"></path>
                </svg>
            </span>
        </button>
    </form>
</x-guest-layout>