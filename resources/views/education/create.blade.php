<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-white">Create Education</h2>
            <p class="mt-1 text-sm text-zinc-400">
                Add a new education entry.
            </p>
        </div>
    </x-slot>

    <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 p-6 md:p-8">
        <form method="POST" action="{{ route('education.store') }}" class="space-y-6">
            @csrf

            @include('education._form')

            <div class="flex items-center gap-4">
                <button
                    type="submit"
                    class="rounded-xl bg-[#00FF00] px-5 py-3 font-semibold text-black transition hover:bg-[#00FF00]/90"
                >
                    Create Education
                </button>

                <a href="{{ route('education.index') }}"
                   class="rounded-xl border border-zinc-700 bg-zinc-800 px-5 py-3 font-medium text-zinc-300 transition hover:text-white">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</x-app-layout>