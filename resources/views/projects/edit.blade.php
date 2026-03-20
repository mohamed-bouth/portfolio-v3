<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-white">Edit Project</h2>
            <p class="mt-1 text-sm text-zinc-400">Update your project information.</p>
        </div>
    </x-slot>

    @if(session('success'))
        <div class="mb-6 rounded-2xl border border-green-500/30 bg-green-500/10 px-4 py-3 text-green-400">
            {{ session('success') }}
        </div>
    @endif

    <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 p-6 md:p-8">
        <form method="POST" action="{{ route('projects.update', $project) }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            @include('projects._form')

            <div class="flex items-center gap-4">
                <button
                    type="submit"
                    class="rounded-xl bg-[#00FF00] px-5 py-3 font-semibold text-black transition hover:bg-[#00FF00]/90"
                >
                    Update Project
                </button>

                <a href="{{ route('projects.index') }}"
                   class="rounded-xl border border-zinc-700 bg-zinc-800 px-5 py-3 font-medium text-zinc-300 transition hover:text-white">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</x-app-layout>