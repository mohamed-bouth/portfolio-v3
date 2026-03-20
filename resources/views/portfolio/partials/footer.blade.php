<footer class="bg-black border-t border-zinc-900 pt-16 pb-8 relative overflow-hidden">
    <div class="container mx-auto px-6 md:px-12 relative z-10">
        
        <div class="flex flex-col md:flex-row items-center justify-between gap-8 mb-12">
            
            {{-- Brand --}}
            <div class="text-center md:text-left">
                <a href="#home" class="text-2xl font-bold tracking-tighter text-white inline-block mb-2">
                    DEV<span class="text-[#00FF00]">.</span>
                </a>
                <p class="text-gray-500 text-sm max-w-xs">
                    Building digital experiences that combine beautiful design with robust engineering.
                </p>
            </div>

            {{-- Social Links --}}
            <div class="flex items-center gap-4">
                <a href="{{ $profile?->github ?? 'https://github.com' }}" target="_blank"
                   class="w-10 h-10 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-gray-400 hover:text-[#00FF00] hover:border-[#00FF00] transition-all duration-300 hover:-translate-y-1">
                    <!-- GitHub -->
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 .5C5.73.5.75 5.48.75 11.75c0 5.02 3.25 9.28 7.76 10.79.57.1.78-.25.78-.56 0-.27-.01-1.17-.02-2.12-3.16.69-3.83-1.34-3.83-1.34-.52-1.3-1.26-1.65-1.26-1.65-1.03-.7.08-.69.08-.69 1.14.08 1.74 1.17 1.74 1.17 1.01 1.74 2.66 1.24 3.31.95.1-.73.4-1.24.72-1.52-2.52-.29-5.17-1.26-5.17-5.6 0-1.24.44-2.25 1.16-3.04-.12-.29-.5-1.46.11-3.05 0 0 .95-.31 3.11 1.16a10.7 10.7 0 0 1 5.66 0c2.15-1.47 3.1-1.16 3.1-1.16.62 1.59.24 2.76.12 3.05.72.79 1.16 1.8 1.16 3.04 0 4.35-2.65 5.3-5.18 5.59.41.35.77 1.03.77 2.09 0 1.5-.01 2.71-.01 3.08 0 .31.2.67.79.55 4.5-1.51 7.74-5.77 7.74-10.78C23.25 5.48 18.27.5 12 .5Z"/>
                    </svg>
                </a>

                <a href="{{ $profile?->linkedin ?? 'https://linkedin.com' }}" target="_blank"
                   class="w-10 h-10 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-gray-400 hover:text-[#00FF00] hover:border-[#00FF00] transition-all duration-300 hover:-translate-y-1">
                    <!-- LinkedIn -->
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M4.98 3.5A2.48 2.48 0 1 0 5 8.46a2.48 2.48 0 0 0-.02-4.96ZM3 9h4v12H3zm7 0h3.83v1.64h.05c.53-1 1.84-2.05 3.79-2.05C21 8.59 21 11.06 21 14.27V21h-4v-5.96c0-1.42-.03-3.25-1.98-3.25-1.98 0-2.29 1.55-2.29 3.15V21h-4z"/>
                    </svg>
                </a>

                <a href="{{ $profile?->twitter ?? 'https://twitter.com' }}" target="_blank"
                   class="w-10 h-10 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-gray-400 hover:text-[#00FF00] hover:border-[#00FF00] transition-all duration-300 hover:-translate-y-1">
                    <!-- Twitter -->
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18.9 2H22l-6.77 7.74L23.2 22h-6.26l-4.9-6.42L6.42 22H3.3l7.24-8.28L1 2h6.4l4.43 5.85L18.9 2Z"/>
                    </svg>
                </a>
            </div>

            {{-- Back to top --}}
            <button id="scrollTopBtn"
                class="w-12 h-12 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-gray-400 hover:text-black hover:bg-[#00FF00] hover:border-[#00FF00] transition-all duration-300">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 15 7-7 7 7"/>
                </svg>
            </button>
        </div>

        {{-- Copyright --}}
        <div class="text-center border-t border-zinc-900/50 pt-8">
            <p class="text-zinc-600 text-sm">
                &copy; {{ date('Y') }} {{ $profile?->full_name ?? 'Your Name' }}. All rights reserved.
            </p>
        </div>
    </div>
</footer>