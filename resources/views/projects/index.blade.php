<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <div>
                <h2 class="text-2xl font-bold text-white">Projects</h2>
                <p class="mt-1 text-sm text-zinc-400">
                    Manage your portfolio projects.
                </p>
            </div>

            <a href="{{ route('projects.create') }}"
               class="rounded-xl bg-[#00FF00] px-5 py-3 font-semibold text-black transition hover:bg-[#00FF00]/90">
                + Add Project
            </a>
        </div>
    </x-slot>

    @if(session('success'))
        <div class="mb-6 rounded-2xl border border-green-500/30 bg-green-500/10 px-4 py-3 text-green-400">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-3xl border border-zinc-800 bg-zinc-900/60">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-zinc-800">
                <thead class="bg-zinc-950/70">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-zinc-400">Image</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-zinc-400">Title</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-zinc-400">Tech</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-zinc-400">Links</th>
                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-zinc-400">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-800">
                    @forelse($projects as $project)
                        <tr class="hover:bg-zinc-800/30 transition">
                            <td class="px-6 py-4">
                                @if($project->image_path)
                                    <img src="{{ $project->image_path }}"
                                         alt="{{ $project->title }}"
                                         class="h-14 w-20 rounded-lg object-cover border border-zinc-700">
                                @else
                                    <div class="h-14 w-20 rounded-lg bg-zinc-800 border border-zinc-700"></div>
                                @endif
                            </td>

                            <td class="px-6 py-4">
                                <div class="font-semibold text-white">{{ $project->title }}</div>
                                <div class="mt-1 text-sm text-zinc-500 line-clamp-2">
                                    {{ $project->description }}
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex flex-wrap gap-2">
                                    @foreach(($project->tech ?? []) as $tech)
                                        <span class="rounded-md border border-zinc-700 bg-zinc-800 px-2 py-1 text-xs text-[#00FF00]">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex flex-col gap-1 text-sm">
                                    @if($project->github)
                                        <a href="{{ $project->github }}" target="_blank" class="text-zinc-300 hover:text-[#00FF00]">
                                            GitHub
                                        </a>
                                    @endif

                                    @if($project->live)
                                        <a href="{{ $project->live }}" target="_blank" class="text-zinc-300 hover:text-[#00FF00]">
                                            Live
                                        </a>
                                    @endif
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center justify-end gap-3">
                                    <a href="{{ route('projects.edit', $project) }}"
                                       class="rounded-xl border border-zinc-700 bg-zinc-800 px-4 py-2 text-sm text-white transition hover:border-[#00FF00] hover:text-[#00FF00]">
                                        Edit
                                    </a>

                                    <form method="POST" action="{{ route('projects.destroy', $project) }}"
                                          onsubmit="return confirm('Are you sure you want to delete this project?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="rounded-xl border border-red-500/20 bg-red-500/10 px-4 py-2 text-sm text-red-400 transition hover:bg-red-500/15">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-zinc-400">
                                No projects found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6">
        {{ $projects->links() }}
    </div>
</x-app-layout>