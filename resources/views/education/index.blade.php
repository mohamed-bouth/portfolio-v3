<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <div>
                <h2 class="text-2xl font-bold text-white">Education</h2>
                <p class="mt-1 text-sm text-zinc-400">
                    Manage your education timeline.
                </p>
            </div>

            <a href="{{ route('education.create') }}"
               class="rounded-xl bg-[#00FF00] px-5 py-3 font-semibold text-black transition hover:bg-[#00FF00]/90">
                + Add Education
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
                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-zinc-400">Institution</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-zinc-400">Degree</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-zinc-400">Location</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-zinc-400">Period</th>
                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-zinc-400">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-zinc-800">
                    @forelse($educations as $education)
                        <tr class="hover:bg-zinc-800/30 transition">
                            <td class="px-6 py-4">
                                <div class="font-semibold text-white">{{ $education->institution }}</div>
                                <div class="mt-1 text-sm text-zinc-500 line-clamp-2">
                                    {{ $education->description }}
                                </div>
                            </td>

                            <td class="px-6 py-4 text-zinc-300">
                                {{ $education->degree }}
                            </td>

                            <td class="px-6 py-4 text-zinc-300">
                                {{ $education->location ?: '-' }}
                            </td>

                            <td class="px-6 py-4 text-zinc-300">
                                {{ $education->start_year }} -
                                {{ $education->end_year ?: 'Present' }}
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center justify-end gap-3">
                                    <a href="{{ route('education.edit', $education) }}"
                                       class="rounded-xl border border-zinc-700 bg-zinc-800 px-4 py-2 text-sm text-white transition hover:border-[#00FF00] hover:text-[#00FF00]">
                                        Edit
                                    </a>

                                    <form method="POST"
                                          action="{{ route('education.destroy', $education) }}"
                                          onsubmit="return confirm('Are you sure you want to delete this education entry?')">
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
                                No education entries found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6">
        {{ $educations->links() }}
    </div>
</x-app-layout>