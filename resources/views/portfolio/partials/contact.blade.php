<section id="contact" class="py-24 bg-zinc-950 relative border-t border-zinc-900">
    <div class="container mx-auto px-6 md:px-12">
        <div class="text-center mb-16 animate-[fadeInUp_0.6s_ease-out]">
            <div class="inline-flex items-center gap-3 justify-center mb-4">
                <svg class="text-[#00FF00] w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h16v16H4z" opacity=".15"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8 6 8-6"></path>
                </svg>
                <h2 class="text-sm font-semibold tracking-widest text-[#00FF00] uppercase">Connect</h2>
            </div>

            <h3 class="text-3xl md:text-5xl font-bold text-white tracking-tight">Get In Touch</h3>

            <p class="text-gray-400 mt-4 max-w-2xl mx-auto">
                Have a project in mind or want to discuss opportunities? I'm always open to talking about product design, new frameworks, and software architecture.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row gap-16 max-w-6xl mx-auto">
            {{-- Contact Info --}}
            <div class="lg:w-1/3 space-y-8">
                <div class="flex items-start gap-6 group">
                    <div class="p-4 rounded-2xl bg-zinc-900 border border-zinc-800 text-[#00FF00] group-hover:bg-[#00FF00] group-hover:text-black transition-all duration-300 transform group-hover:-translate-y-1">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8 6 8-6"></path>
                            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white font-medium mb-1">Email</h4>
                        <a href="mailto:{{ $profile?->email ?? 'hello@example.com' }}" class="text-gray-400 hover:text-[#00FF00] transition-colors">
                            {{ $profile?->email ?? 'hello@example.com' }}
                        </a>
                    </div>
                </div>

                <div class="flex items-start gap-6 group">
                    <div class="p-4 rounded-2xl bg-zinc-900 border border-zinc-800 text-[#00FF00] group-hover:bg-[#00FF00] group-hover:text-black transition-all duration-300 transform group-hover:-translate-y-1">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.11 4.18 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.77.63 2.6a2 2 0 0 1-.45 2.11L8 9.91a16 16 0 0 0 6.09 6.09l1.48-1.28a2 2 0 0 1 2.11-.45c.83.3 1.7.51 2.6.63A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white font-medium mb-1">Phone</h4>
                        <a href="tel:{{ $profile?->phone ?? '+212600000000' }}" class="text-gray-400 hover:text-[#00FF00] transition-colors">
                            {{ $profile?->phone ?? '+212600000000' }}
                        </a>
                    </div>
                </div>

                <div class="flex items-start gap-6 group">
                    <div class="p-4 rounded-2xl bg-zinc-900 border border-zinc-800 text-[#00FF00] group-hover:bg-[#00FF00] group-hover:text-black transition-all duration-300 transform group-hover:-translate-y-1">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0Z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-white font-medium mb-1">Location</h4>
                        <span class="text-gray-400">
                            {{ $profile?->location ?? 'Morocco' }}
                        </span>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:w-2/3">
                @if(session('success'))
                    <div class="mb-6 rounded-2xl border border-green-500/30 bg-green-500/10 px-4 py-3 text-green-400">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="bg-zinc-900/50 backdrop-blur-sm p-8 rounded-3xl border border-zinc-800 space-y-6">
                    @csrf

                    {{-- Honeypot --}}
                    <input type="text" name="website" class="hidden" tabindex="-1" autocomplete="off">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2 relative">
                            <label for="name" class="text-sm font-medium text-gray-400 pl-1">Name</label>
                            <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                class="w-full bg-zinc-950/50 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#00FF00] focus:ring-1 focus:ring-[#00FF00] transition-all duration-300 placeholder-zinc-700"
                                placeholder="John Doe"
                            >
                            @error('name')
                                <span class="text-red-500 text-xs absolute -bottom-5 left-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-2 relative">
                            <label for="email" class="text-sm font-medium text-gray-400 pl-1">Email</label>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="w-full bg-zinc-950/50 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#00FF00] focus:ring-1 focus:ring-[#00FF00] transition-all duration-300 placeholder-zinc-700"
                                placeholder="john@example.com"
                            >
                            @error('email')
                                <span class="text-red-500 text-xs absolute -bottom-5 left-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="space-y-2 relative pb-4">
                        <label for="message" class="text-sm font-medium text-gray-400 pl-1">Message</label>
                        <textarea
                            id="message"
                            rows="5"
                            name="message"
                            class="w-full bg-zinc-950/50 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#00FF00] focus:ring-1 focus:ring-[#00FF00] transition-all duration-300 placeholder-zinc-700 resize-none"
                            placeholder="Tell me about your project..."
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-red-500 text-xs absolute bottom-0 left-1">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- هنا تقدر تحط reCAPTCHA الحقيقي من بعد --}}
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-zinc-800/50">
                        <div class="flex items-center gap-2 text-zinc-500 text-xs bg-zinc-950 px-3 py-1.5 rounded-md border border-zinc-800">
                            <svg class="w-[14px] h-[14px] text-[#00FF00]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                            <span>Protected by reCAPTCHA</span>
                        </div>

                        <button
                            type="submit"
                            class="w-full sm:w-auto px-8 py-3 bg-[#00FF00] text-black font-semibold rounded-xl hover:bg-[#00FF00]/90 transition-all duration-300 flex items-center justify-center gap-2 group hover:shadow-[0_0_20px_rgba(0,255,0,0.3)] hover:-translate-y-1"
                        >
                            <span>Send Message</span>
                            <svg class="w-[18px] h-[18px] group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M22 2 11 13"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M22 2 15 22l-4-9-9-4 20-7z"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>