<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-white">Dashboard</h2>
            <p class="mt-1 text-sm text-zinc-400">
                Welcome back. Here’s an overview of your portfolio.
            </p>
        </div>
    </x-slot>

    <div class="space-y-8">
        {{-- Stats --}}
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 p-6">
                <p class="text-sm text-zinc-400">Projects</p>
                <h3 class="mt-2 text-3xl font-bold text-white">{{ $projectsCount }}</h3>
            </div>

            <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 p-6">
                <p class="text-sm text-zinc-400">Education</p>
                <h3 class="mt-2 text-3xl font-bold text-white">{{ $educationsCount }}</h3>
            </div>

            <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 p-6">
                <p class="text-sm text-zinc-400">Messages</p>
                <h3 class="mt-2 text-3xl font-bold text-white">{{ $messagesCount }}</h3>
            </div>

            <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 p-6">
                <p class="text-sm text-zinc-400">Profile Status</p>
                <h3 class="mt-2 text-lg font-semibold {{ $profile ? 'text-[#00FF00]' : 'text-red-400' }}">
                    {{ $profile ? 'Completed' : 'Missing' }}
                </h3>
            </div>
        </div>

        {{-- Quick actions --}}
        <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 p-6">
            <h3 class="text-lg font-semibold text-white mb-4">Quick Actions</h3>

            <div class="flex flex-wrap gap-4">
                <a href="{{ route('projects.create') }}" class="rounded-xl bg-[#00FF00] px-5 py-3 font-semibold text-black">
                    + Add Project
                </a>

                <a href="{{ route('education.create') }}" class="rounded-xl border border-zinc-700 bg-zinc-800 px-5 py-3 font-medium text-zinc-300">
                    + Add Education
                </a>

                <a href="{{ route('messages.index') }}" class="rounded-xl border border-zinc-700 bg-zinc-800 px-5 py-3 font-medium text-zinc-300">
                    View Messages
                </a>

                <a href="{{ route('profile.custom.edit') }}" class="rounded-xl border border-zinc-700 bg-zinc-800 px-5 py-3 font-medium text-zinc-300">
                    Edit Profile
                </a>
            </div>
        </div>

        {{-- Latest messages --}}
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
            <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 p-6">
                <h3 class="text-lg font-semibold text-white mb-4">Latest Messages</h3>

                <div class="space-y-4">
                    @forelse($latestMessages as $message)
                        <div class="rounded-2xl border border-zinc-800 bg-zinc-950/60 p-4">
                            <div class="flex items-center justify-between gap-4">
                                <h4 class="font-semibold text-white">{{ $message->name }}</h4>
                                <span class="text-xs text-zinc-500">{{ $message->created_at->format('Y-m-d') }}</span>
                            </div>
                            <p class="mt-1 text-sm text-zinc-400">{{ $message->email }}</p>
                            <p class="mt-3 text-sm text-zinc-300 line-clamp-2">{{ $message->message }}</p>
                        </div>
                    @empty
                        <p class="text-zinc-400">No messages yet.</p>
                    @endforelse
                </div>
            </div>

            <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 p-6">
                <h3 class="text-lg font-semibold text-white mb-4">Latest Projects</h3>

                <div class="space-y-4">
                    @forelse($latestProjects as $project)
                        <div class="rounded-2xl border border-zinc-800 bg-zinc-950/60 p-4">
                            <h4 class="font-semibold text-white">{{ $project->title }}</h4>
                            <p class="mt-2 text-sm text-zinc-400 line-clamp-2">{{ $project->description }}</p>
                        </div>
                    @empty
                        <p class="text-zinc-400">No projects yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
