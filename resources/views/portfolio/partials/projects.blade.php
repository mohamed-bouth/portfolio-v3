<section id="projects" class="py-24 bg-zinc-950 relative border-t border-zinc-900">
    <div class="container mx-auto px-6 md:px-12">
        
        <div class="mb-16 md:flex md:items-end md:justify-between animate-[fadeInUp_0.6s_ease-out]">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <svg class="text-[#00FF00] w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7a2 2 0 0 1 2-2h3l2 2h9a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"/>
                    </svg>
                    <h2 class="text-sm font-semibold tracking-widest text-[#00FF00] uppercase">Portfolio</h2>
                </div>

                <h3 class="text-3xl md:text-5xl font-bold text-white tracking-tight">
                    Featured Projects
                </h3>
            </div>

            <p class="text-gray-400 mt-4 md:mt-0 max-w-md text-sm md:text-base">
                A selection of my recent work focusing on modern interfaces and performant full-stack solutions.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects ?? [] as $project)
                <div class="group relative rounded-2xl bg-zinc-900 overflow-hidden border border-zinc-800 hover:border-[#00FF00]/50 transition-colors duration-300">
                    
                    <div class="relative h-56 overflow-hidden bg-black">
                        <img
                            src="{{ $project->image_path}}"
                            alt="{{ $project->title }}"
                            class="w-full h-full object-cover opacity-70 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700 ease-[cubic-bezier(0.25,0.46,0.45,0.94)]"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-zinc-900 to-transparent"></div>
                    </div>

                    <div class="p-6 relative z-10">
                        <div class="flex justify-between items-start mb-4 gap-4">
                            <h4 class="text-xl font-bold text-white group-hover:text-[#00FF00] transition-colors">
                                {{ $project->title }}
                            </h4>

                            <div class="flex gap-3 shrink-0">
                                @if(!empty($project->github))
                                    <a
                                        href="{{ $project->github }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="text-gray-400 hover:text-white transition-colors"
                                        aria-label="GitHub"
                                    >
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 .5C5.73.5.75 5.48.75 11.75c0 5.02 3.25 9.28 7.76 10.79.57.1.78-.25.78-.56 0-.27-.01-1.17-.02-2.12-3.16.69-3.83-1.34-3.83-1.34-.52-1.3-1.26-1.65-1.26-1.65-1.03-.7.08-.69.08-.69 1.14.08 1.74 1.17 1.74 1.17 1.01 1.74 2.66 1.24 3.31.95.1-.73.4-1.24.72-1.52-2.52-.29-5.17-1.26-5.17-5.6 0-1.24.44-2.25 1.16-3.04-.12-.29-.5-1.46.11-3.05 0 0 .95-.31 3.11 1.16a10.7 10.7 0 0 1 5.66 0c2.15-1.47 3.1-1.16 3.1-1.16.62 1.59.24 2.76.12 3.05.72.79 1.16 1.8 1.16 3.04 0 4.35-2.65 5.3-5.18 5.59.41.35.77 1.03.77 2.09 0 1.5-.01 2.71-.01 3.08 0 .31.2.67.79.55 4.5-1.51 7.74-5.77 7.74-10.78C23.25 5.48 18.27.5 12 .5Z"/>
                                        </svg>
                                    </a>
                                @endif

                                @if(!empty($project->live))
                                    <a
                                        href="{{ $project->live }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="text-gray-400 hover:text-[#00FF00] transition-colors"
                                        aria-label="Live Project"
                                    >
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 3h7v7"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14 21 3"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 14v4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>

                        <p class="text-gray-400 text-sm mb-6 line-clamp-3">
                            {{ $project->description }}
                        </p>

                        <div class="flex flex-wrap gap-2 mt-auto">
                            @php
                                $techs = is_array($project->tech ?? null)
                                    ? $project->tech
                                    : (json_decode($project->tech ?? '[]', true) ?: []);
                            @endphp

                            @foreach($techs as $tech)
                                <span class="px-2.5 py-1 text-xs font-mono rounded-md bg-zinc-800 text-[#00FF00]/80 border border-zinc-700">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12 border border-zinc-800 rounded-2xl bg-zinc-900/50">
                    <p class="text-gray-400">No projects found.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>