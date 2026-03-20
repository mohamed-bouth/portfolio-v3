<section id="education" class="py-24 bg-black relative border-t border-zinc-900 overflow-hidden">
    {{-- Background glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-[#00FF00]/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <div class="text-center mb-16 animate-[fadeInUp_0.6s_ease-out]">
            <div class="inline-flex items-center gap-3 justify-center mb-4">
                <svg class="text-[#00FF00] w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M22 10 12 5 2 10l10 5 10-5Z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5"/>
                </svg>
                <h2 class="text-sm font-semibold tracking-widest text-[#00FF00] uppercase">Academic</h2>
            </div>

            <h3 class="text-3xl md:text-5xl font-bold text-white tracking-tight">
                Education Journey
            </h3>
        </div>

        <div class="max-w-4xl mx-auto relative">
            {{-- Timeline line --}}
            <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-[2px] bg-zinc-800 -translate-x-1/2"></div>

            <div class="flex flex-col gap-12">
                @forelse($educations ?? [] as $index => $item)
                    @php
                        $isEven = $index % 2 === 0;

                        $period = null;
                        if (!empty($item->start_year) && !empty($item->end_year)) {
                            $period = $item->start_year . ' - ' . $item->end_year;
                        } elseif (!empty($item->start_year)) {
                            $period = $item->start_year . ' - Present';
                        }

                        $location = $item->location ?? null;
                    @endphp

                    <div class="relative flex flex-col md:flex-row items-center w-full group">
                        {{-- Timeline dot --}}
                        <div class="absolute left-4 md:left-1/2 w-4 h-4 rounded-full bg-zinc-900 border-2 border-[#00FF00] shadow-[0_0_10px_rgba(0,255,0,0.5)] z-10 -translate-x-1/2 group-hover:scale-150 transition-transform duration-300"></div>

                        <div class="w-full md:w-1/2 pl-12 md:pl-0 {{ $isEven ? 'md:pr-12 md:text-right' : 'md:pl-12 md:ml-auto' }}">
                            <div class="bg-zinc-900/50 backdrop-blur-sm border border-zinc-800 p-6 rounded-2xl hover:border-[#00FF00]/30 transition-all duration-300 hover:shadow-[0_10px_30px_rgba(0,255,0,0.05)] {{ $isEven ? 'hover:-translate-x-2' : 'hover:translate-x-2' }}">
                                
                                <div class="flex flex-col {{ $isEven ? 'md:items-end' : 'md:items-start' }} mb-4">
                                    @if($period)
                                        <div class="inline-flex items-center gap-2 text-[#00FF00] font-mono text-xs mb-2 bg-[#00FF00]/10 px-3 py-1 rounded-full">
                                            <svg class="w-[14px] h-[14px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"></path>
                                            </svg>
                                            <span>{{ $period }}</span>
                                        </div>
                                    @endif

                                    <h4 class="text-xl font-bold text-white mb-1">
                                        {{ $item->degree }}
                                    </h4>

                                    <h5 class="text-zinc-400 font-medium">
                                        {{ $item->institution }}
                                    </h5>

                                    @if($location)
                                        <div class="flex items-center gap-1 text-zinc-500 text-sm mt-2">
                                            <svg class="w-[14px] h-[14px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0Z"></path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                            <span>{{ $location }}</span>
                                        </div>
                                    @endif
                                </div>

                                <p class="text-zinc-400 text-sm leading-relaxed {{ $isEven ? 'md:text-right' : 'md:text-left' }}">
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="pl-12 md:pl-0">
                        <div class="bg-zinc-900/50 border border-zinc-800 p-6 rounded-2xl text-center">
                            <p class="text-zinc-400">No education records found.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>