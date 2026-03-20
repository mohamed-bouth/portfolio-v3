<section
    id="home"
    class="min-h-screen flex items-center justify-center relative overflow-hidden bg-black pt-20 pb-16"
>
    {{-- Background gradients / patterns --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-[20%] left-[10%] w-[30rem] h-[30rem] bg-[#00FF00]/10 rounded-full blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[10%] right-[10%] w-[25rem] h-[25rem] bg-[#00FF00]/5 rounded-full blur-[80px]"></div>
        <div
            class="absolute inset-0"
            style="
                background-image: radial-gradient(circle at center, rgba(0,255,0,0.03) 1px, transparent 1px);
                background-size: 24px 24px;
            "
        ></div>
    </div>

    <div class="container mx-auto px-6 md:px-12 relative z-10 flex flex-col-reverse lg:flex-row items-center justify-between gap-16">
        
        {{-- Left content --}}
        <div class="lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left animate-[fadeInUp_0.8s_ease-out]">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-[#00FF00]/30 bg-[#00FF00]/5 text-[#00FF00] text-sm font-medium tracking-wide mb-6">
                <span class="w-2 h-2 rounded-full bg-[#00FF00] animate-ping"></span>
                Available for new opportunities
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white leading-[1.1] tracking-tighter mb-6">
                Hi, I'm <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#00FF00] to-emerald-400">
                    {{ $profile->full_name ?? 'no name' }}
                </span>
            </h1>

            <p class="text-lg md:text-xl text-gray-400 max-w-xl mb-10 leading-relaxed font-light">
                {{ $profile->bio ?? 'A passionate Full Stack Software Developer specializing in building modern, responsive, and performant web applications with futuristic designs.' }}
            </p>

            <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto">
                <a
                    href="#projects"
                    class="group relative inline-flex items-center justify-center gap-3 px-8 py-4 bg-[#00FF00] text-black font-semibold rounded-full overflow-hidden transition-all duration-300 hover:scale-105 w-full sm:w-auto"
                >
                    <span class="relative z-10 flex items-center gap-2">
                        View My Work
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/>
                        </svg>
                    </span>
                    <div class="absolute inset-0 h-full w-full scale-0 rounded-full transition-all duration-300 ease-out group-hover:scale-100 group-hover:bg-white/20"></div>
                </a>

                <div class="flex items-center gap-4 mt-4 sm:mt-0">
                    <a
                        href="{{ $profile->github ?? 'https://github.com' }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="GitHub"
                        class="p-3 rounded-full border border-gray-800 text-gray-400 hover:text-[#00FF00] hover:border-[#00FF00] bg-gray-900/50 hover:bg-[#00FF00]/10 transition-all duration-300 hover:-translate-y-1"
                    >
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 .5C5.73.5.75 5.48.75 11.75c0 5.02 3.25 9.28 7.76 10.79.57.1.78-.25.78-.56 0-.27-.01-1.17-.02-2.12-3.16.69-3.83-1.34-3.83-1.34-.52-1.3-1.26-1.65-1.26-1.65-1.03-.7.08-.69.08-.69 1.14.08 1.74 1.17 1.74 1.17 1.01 1.74 2.66 1.24 3.31.95.1-.73.4-1.24.72-1.52-2.52-.29-5.17-1.26-5.17-5.6 0-1.24.44-2.25 1.16-3.04-.12-.29-.5-1.46.11-3.05 0 0 .95-.31 3.11 1.16a10.7 10.7 0 0 1 5.66 0c2.15-1.47 3.1-1.16 3.1-1.16.62 1.59.24 2.76.12 3.05.72.79 1.16 1.8 1.16 3.04 0 4.35-2.65 5.3-5.18 5.59.41.35.77 1.03.77 2.09 0 1.5-.01 2.71-.01 3.08 0 .31.2.67.79.55 4.5-1.51 7.74-5.77 7.74-10.78C23.25 5.48 18.27.5 12 .5Z"/>
                        </svg>
                    </a>

                    <a
                        href="{{ $profile->linkedin ?? 'https://linkedin.com' }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="LinkedIn"
                        class="p-3 rounded-full border border-gray-800 text-gray-400 hover:text-[#00FF00] hover:border-[#00FF00] bg-gray-900/50 hover:bg-[#00FF00]/10 transition-all duration-300 hover:-translate-y-1"
                    >
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M4.98 3.5A2.48 2.48 0 1 0 5 8.46a2.48 2.48 0 0 0-.02-4.96ZM3 9h4v12H3zm7 0h3.83v1.64h.05c.53-1 1.84-2.05 3.79-2.05C21 8.59 21 11.06 21 14.27V21h-4v-5.96c0-1.42-.03-3.25-1.98-3.25-1.98 0-2.29 1.55-2.29 3.15V21h-4z"/>
                        </svg>
                    </a>

                    <a
                        href="mailto:{{ $profile->gmail ?? 'https://gmail.com' }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Gmail"
                        class="p-3 rounded-full border border-gray-800 text-gray-400 hover:text-[#00FF00] hover:border-[#00FF00] bg-gray-900/50 hover:bg-[#00FF00]/10 transition-all duration-300 hover:-translate-y-1"
                    >
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M2 5.5A1.5 1.5 0 0 1 3.5 4h17A1.5 1.5 0 0 1 22 5.5v13a1.5 1.5 0 0 1-1.5 1.5h-17A1.5 1.5 0 0 1 2 18.5v-13Zm1.5.317v.74L12 12.69l8.5-6.133v-.74h-17ZM20.5 18.5V8.403l-8.061 5.816a.75.75 0 0 1-.878 0L3.5 8.403V18.5h17Z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Right image --}}
        <div class="lg:w-1/2 flex justify-center lg:justify-end relative animate-[zoomIn_0.8s_ease-out]">
            <div class="relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96">
                <div class="absolute inset-0 rounded-full border-2 border-[#00FF00]/30 animate-[spin_10s_linear_infinite]"></div>
                <div class="absolute inset-4 rounded-full border border-[#00FF00]/20 animate-[spin_15s_linear_infinite_reverse]"></div>

                <div class="absolute inset-8 rounded-full overflow-hidden border-2 border-[#00FF00] shadow-[0_0_30px_rgba(0,255,0,0.3)] group z-10 bg-gray-900">
                    <img
                        src="{{ $profile->image_path ?? 'https://pub-6180c4620d87449486188286d6d526e5.r2.dev/profiles/defualt-image.png' }}"
                        alt="{{ $profile->full_name ?? 'no name'}}"
                        class="w-full h-full object-cover grayscale transition-all duration-500 group-hover:grayscale-0 group-hover:scale-110"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
            </div>
        </div>
    </div>
</section>