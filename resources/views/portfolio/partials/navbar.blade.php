<header id="header"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent py-6">
    
    <div class="container mx-auto px-6 md:px-12 flex items-center justify-between">
        
        {{-- Logo --}}
        <a href="#home"
            class="text-2xl font-bold tracking-tighter text-white transition-colors hover:text-[#00FF00]">
            DEV<span class="text-[#00FF00]">.</span>
        </a>

        {{-- Desktop Nav --}}
        <nav class="hidden md:flex items-center gap-8">
            <a href="#home" class="nav-link text-sm font-medium tracking-wide text-gray-400 hover:text-[#00FF00]">Home</a>
            <a href="#projects" class="nav-link text-sm font-medium tracking-wide text-gray-400 hover:text-[#00FF00]">Projects</a>
            <a href="#education" class="nav-link text-sm font-medium tracking-wide text-gray-400 hover:text-[#00FF00]">Education</a>
            <a href="#contact" class="nav-link text-sm font-medium tracking-wide text-gray-400 hover:text-[#00FF00]">Contact</a>

            <a href="#contact"
                class="px-5 py-2.5 rounded-full border border-[#00FF00] text-[#00FF00] text-sm font-medium hover:bg-[#00FF00] hover:text-black transition-all duration-300">
                Hire Me
            </a>
        </nav>

        {{-- Mobile Button --}}
        <button id="menuBtn"
            class="md:hidden text-white hover:text-[#00FF00] transition-colors">
            
            <!-- menu icon -->
            <svg id="menuIcon" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <!-- close icon -->
            <svg id="closeIcon" class="w-7 h-7 hidden" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Mobile Nav --}}
    <div id="mobileMenu"
        class="hidden md:hidden absolute top-full left-0 right-0 bg-black/95 backdrop-blur-xl border-t border-white/10 py-4 px-6 flex flex-col gap-4 shadow-xl">
        
        <a href="#home" class="mobile-link text-lg text-gray-300">Home</a>
        <a href="#projects" class="mobile-link text-lg text-gray-300">Projects</a>
        <a href="#education" class="mobile-link text-lg text-gray-300">Education</a>
        <a href="#contact" class="mobile-link text-lg text-gray-300">Contact</a>
    </div>
</header>