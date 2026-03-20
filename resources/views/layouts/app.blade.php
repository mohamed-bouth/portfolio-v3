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
        <div class="min-h-screen relative overflow-hidden bg-black">
            
            {{-- Background effects --}}
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-[10%] left-[8%] w-[26rem] h-[26rem] bg-[#00FF00]/10 rounded-full blur-[110px]"></div>
                <div class="absolute bottom-[8%] right-[6%] w-[22rem] h-[22rem] bg-[#00FF00]/5 rounded-full blur-[90px]"></div>
                <div
                    class="absolute inset-0 opacity-30"
                    style="
                        background-image: radial-gradient(circle at center, rgba(0,255,0,0.04) 1px, transparent 1px);
                        background-size: 24px 24px;
                    "
                ></div>
            </div>

            <div class="relative z-10">
                @include('layouts.navigation')

                @isset($header)
                    <header class="border-b border-zinc-800 bg-zinc-950/70 backdrop-blur-md">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    {{ $header }}
                                </div>
                            </div>
                        </div>
                    </header>
                @endisset

                <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <div class="rounded-3xl border border-zinc-800 bg-zinc-900/50 backdrop-blur-sm shadow-[0_10px_40px_rgba(0,0,0,0.35)] p-6 md:p-8">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>