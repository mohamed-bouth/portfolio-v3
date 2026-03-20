<nav x-data="{ open: false }" class="sticky top-0 z-50 border-b border-zinc-800 bg-zinc-950/80 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            
            <div class="flex items-center">
                {{-- Logo --}}
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('portfolio.index') }}" class="text-2xl font-black tracking-tight text-white hover:text-[#00FF00] transition-colors">
                        DEV<span class="text-[#00FF00]">.</span>
                    </a>
                </div>

                {{-- Desktop Links --}}
                <div class="hidden sm:flex items-center space-x-8 sm:ms-10">
                    <a
                        href="{{ route('dashboard') }}"
                        class="text-sm font-medium tracking-wide transition-colors {{ request()->routeIs('dashboard') ? 'text-[#00FF00]' : 'text-zinc-400 hover:text-[#00FF00]' }}"
                    >
                        Dashboard
                    </a>
                    <a
                        href="{{ route('profile.custom.edit') }}"
                        class="text-sm font-medium tracking-wide transition-colors {{ request()->routeIs('profile.custom.edit') ? 'text-[#00FF00]' : 'text-zinc-400 hover:text-[#00FF00]' }}" 
                    >
                        Profile Information
                    </a>
                    <a
                        href="{{ route('projects.index') }}"
                        class="text-sm font-medium tracking-wide transition-colors {{ request()->routeIs('dashboard.projects.*') ? 'text-[#00FF00]' : 'text-zinc-400 hover:text-[#00FF00]' }}"
                    >
                        Projects
                    </a>
                    <a
                        href="{{ route('education.index') }}"
                        class="text-sm font-medium tracking-wide transition-colors {{ request()->routeIs('education.*') ? 'text-[#00FF00]' : 'text-zinc-400 hover:text-[#00FF00]' }}"
                    >
                        Education
                    </a>
                    <a
                        href="{{ route('messages.index') }}"
                        class="text-sm font-medium tracking-wide transition-colors {{ request()->routeIs('messages.*') ? 'text-[#00FF00]' : 'text-zinc-400 hover:text-[#00FF00]' }}"
                    >
                        Messages
                    </a>
                </div>
            </div>

            {{-- Desktop User Menu --}}
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center gap-3 rounded-xl border border-zinc-800 bg-zinc-900/70 px-4 py-2 text-sm font-medium text-zinc-300 hover:border-[#00FF00]/40 hover:text-white transition">
                            <div class="flex flex-col items-start leading-tight">
                                <span class="text-sm font-semibold text-white">{{ Auth::user()->name }}</span>
                                <span class="text-xs text-zinc-500">{{ Auth::user()->email }}</span>
                            </div>

                            <svg class="h-4 w-4 text-zinc-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 1 1 1.08 1.04l-4.25 4.5a.75.75 0 0 1-1.08 0l-4.25-4.5a.75.75 0 0 1 .02-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="bg-zinc-950 border border-zinc-800 rounded-2xl overflow-hidden shadow-2xl">
                            <a href="{{ route('profile.edit') }}"
                               class="block px-4 py-3 text-sm text-zinc-300 hover:bg-zinc-900 hover:text-[#00FF00] transition">
                                Profile
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button
                                    type="submit"
                                    class="block w-full text-left px-4 py-3 text-sm text-red-400 hover:bg-zinc-900 transition"
                                >
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            {{-- Mobile Hamburger --}}
            <div class="flex items-center sm:hidden">
                <button
                    @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-xl text-zinc-400 hover:text-[#00FF00] hover:bg-zinc-900 transition"
                >
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path
                            :class="{ 'hidden': open, 'inline-flex': !open }"
                            class="inline-flex"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                        <path
                            :class="{ 'hidden': !open, 'inline-flex': open }"
                            class="hidden"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden border-t border-zinc-800 bg-zinc-950/95">
        <div class="px-4 pt-4 pb-3 space-y-2">
            <a
                href="{{ route('dashboard') }}"
                class="block rounded-xl px-4 py-3 text-sm font-medium transition {{ request()->routeIs('dashboard') ? 'bg-[#00FF00]/10 text-[#00FF00]' : 'text-zinc-300 hover:bg-zinc-900 hover:text-[#00FF00]' }}"
            >
                Dashboard
            </a>

            <a
                href="{{ route('profile.edit') }}"
                class="block rounded-xl px-4 py-3 text-sm font-medium transition {{ request()->routeIs('profile.edit') ? 'bg-[#00FF00]/10 text-[#00FF00]' : 'text-zinc-300 hover:bg-zinc-900 hover:text-[#00FF00]' }}"
            >
                Profile
            </a>
            <a
                href="{{ route('profile.custom.edit') }}"
                class="block rounded-xl px-4 py-3 text-sm font-medium transition {{ request()->routeIs('profile.edit') ? 'bg-[#00FF00]/10 text-[#00FF00]' : 'text-zinc-300 hover:bg-zinc-900 hover:text-[#00FF00]' }}"
            >
                Profile Information
            </a>
            <a
                href="{{ route('projects.index') }}"
                class="block rounded-xl px-4 py-3 text-sm font-medium transition {{ request()->routeIs('dashboard.projects.*') ? 'bg-[#00FF00]/10 text-[#00FF00]' : 'text-zinc-300 hover:bg-zinc-900 hover:text-[#00FF00]' }}"
            >
                Projects
            </a>
            <a
                href="{{ route('education.index') }}"
                class="block rounded-xl px-4 py-3 text-sm font-medium transition {{ request()->routeIs('education.*') ? 'bg-[#00FF00]/10 text-[#00FF00]' : 'text-zinc-300 hover:bg-zinc-900 hover:text-[#00FF00]' }}"
            >
                Education
            </a>
            <a
                href="{{ route('messages.index') }}"
                class="block rounded-xl px-4 py-3 text-sm font-medium transition {{ request()->routeIs('messages.*') ? 'bg-[#00FF00]/10 text-[#00FF00]' : 'text-zinc-300 hover:bg-zinc-900 hover:text-[#00FF00]' }}"
            >
                Messages
            </a>
        </div>

        <div class="border-t border-zinc-800 px-4 py-4">
            <div class="mb-4">
                <div class="font-semibold text-white">{{ Auth::user()->name }}</div>
                <div class="text-sm text-zinc-500">{{ Auth::user()->email }}</div>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    type="submit"
                    class="block w-full rounded-xl border border-red-500/20 bg-red-500/10 px-4 py-3 text-left text-sm font-medium text-red-400 hover:bg-red-500/15 transition"
                >
                    Log Out
                </button>
            </form>
        </div>
    </div>
</nav>