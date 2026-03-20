<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <div>
                <h2 class="text-2xl font-bold text-white">Messages</h2>
                <p class="mt-1 text-sm text-zinc-400">
                    View and manage contact form submissions.
                </p>
            </div>

            @if($messages->count())
                <form method="POST" action="{{ route('messages.destroyAll') }}"
                      onsubmit="return confirm('Are you sure you want to delete all messages?')">
                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="rounded-xl border border-red-500/20 bg-red-500/10 px-5 py-3 font-semibold text-red-400 transition hover:bg-red-500/15"
                    >
                        Delete All
                    </button>
                </form>
            @endif
        </div>
    </x-slot>

    @if(session('success'))
        <div class="mb-6 rounded-2xl border border-green-500/30 bg-green-500/10 px-4 py-3 text-green-400">
            {{ session('success') }}
        </div>
    @endif

    <div class="space-y-4">
        @forelse($messages as $message)
            <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 p-6">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-6">
                    <div class="space-y-3 flex-1">
                        <div class="flex flex-wrap items-center gap-3">
                            <h3 class="text-lg font-semibold text-white">
                                {{ $message->name }}
                            </h3>

                            <span class="rounded-full border border-zinc-700 bg-zinc-800 px-3 py-1 text-xs text-zinc-300">
                                {{ $message->created_at->format('Y-m-d H:i') }}
                            </span>
                        </div>

                        <div class="text-sm text-zinc-400">
                            <span class="font-medium text-zinc-300">Email:</span>
                            <a href="mailto:{{ $message->email }}" class="hover:text-[#00FF00] transition">
                                {{ $message->email }}
                            </a>
                        </div>

                        @if($message->ip_address)
                            <div class="text-sm text-zinc-500">
                                <span class="font-medium text-zinc-400">IP:</span>
                                {{ $message->ip_address }}
                            </div>
                        @endif

                        <div class="rounded-2xl border border-zinc-800 bg-zinc-950/60 p-4 text-zinc-300 leading-relaxed whitespace-pre-line">
                            {{ $message->message }}
                        </div>
                    </div>

                    <div class="shrink-0">
                        <form method="POST"
                              action="{{ route('messages.destroy', $message) }}"
                              onsubmit="return confirm('Are you sure you want to delete this message?')">
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="rounded-xl border border-red-500/20 bg-red-500/10 px-4 py-2 text-sm font-medium text-red-400 transition hover:bg-red-500/15"
                            >
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 p-10 text-center">
                <p class="text-zinc-400">No messages found.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $messages->links() }}
    </div>
</x-app-layout>