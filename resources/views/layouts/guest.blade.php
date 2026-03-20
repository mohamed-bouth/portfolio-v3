<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'mohamed-bouth') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600;700;800&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-black text-white">
        <div class="min-h-screen relative overflow-hidden flex items-center justify-center px-6 py-10">
            
            {{-- Background effects --}}
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-[15%] left-[10%] w-[28rem] h-[28rem] bg-[#00FF00]/10 rounded-full blur-[110px] animate-pulse"></div>
                <div class="absolute bottom-[10%] right-[8%] w-[24rem] h-[24rem] bg-[#00FF00]/5 rounded-full blur-[90px]"></div>
                <div
                    class="absolute inset-0 opacity-40"
                    style="
                        background-image: radial-gradient(circle at center, rgba(0,255,0,0.05) 1px, transparent 1px);
                        background-size: 24px 24px;
                    "
                ></div>
            </div>

            <div class="relative z-10 w-full max-w-md">
                
                {{-- Logo / Brand --}}
                <div class="text-center mb-8">
                    <a href="/" class="inline-block group">
                        <div class="text-3xl font-black tracking-tight text-white group-hover:text-[#00FF00] transition-colors duration-300">
                            DEV<span class="text-[#00FF00]">.</span>
                        </div>
                    </a>

                    <p class="mt-4 text-sm text-zinc-400 max-w-sm mx-auto leading-relaxed">
                        Welcome back. Sign in to access your portfolio dashboard.
                    </p>
                </div>

                {{-- Card --}}
                <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 backdrop-blur-xl shadow-[0_10px_40px_rgba(0,0,0,0.45)] overflow-hidden">
                    <div class="h-1 w-full bg-gradient-to-r from-[#00FF00]/0 via-[#00FF00] to-[#00FF00]/0"></div>

                    <div class="px-6 py-8 sm:px-8">
                        {{ $slot }}
                    </div>
                </div>

                {{-- Bottom link --}}
                <div class="mt-6 text-center">
                    <a href="/" class="text-sm text-zinc-500 hover:text-[#00FF00] transition-colors duration-300">
                        ← Back to portfolio
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>