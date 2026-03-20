@php
    $techValue = old('tech', isset($project) ? implode(', ', $project->tech ?? []) : '');
@endphp

<div class="space-y-6">
    <div>
        <label for="title" class="block text-sm font-medium text-zinc-300 mb-2">Title</label>
        <input
            id="title"
            type="text"
            name="title"
            value="{{ old('title', $project->title ?? '') }}"
            class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
        >
        @error('title')
            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="description" class="block text-sm font-medium text-zinc-300 mb-2">Description</label>
        <textarea
            id="description"
            name="description"
            rows="5"
            class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
        >{{ old('description', $project->description ?? '') }}</textarea>
        @error('description')
            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="image" class="block text-sm font-medium text-zinc-300 mb-2">Project Image</label>
        <input
            id="image"
            type="file"
            name="image"
            class="block w-full text-sm text-zinc-300 file:mr-4 file:rounded-xl file:border-0 file:bg-[#00FF00] file:px-4 file:py-2 file:font-semibold file:text-black hover:file:bg-[#00FF00]/90"
        >
        @error('image')
            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
        @enderror

        @if(!empty($project?->image_path))
            <img src="{{ $project->image_path }}"
                 alt="{{ $project->title }}"
                 class="mt-4 h-28 w-40 rounded-xl object-cover border border-zinc-700">
        @endif
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label for="github" class="block text-sm font-medium text-zinc-300 mb-2">GitHub URL</label>
            <input
                id="github"
                type="url"
                name="github"
                value="{{ old('github', $project->github ?? '') }}"
                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            @error('github')
                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="live" class="block text-sm font-medium text-zinc-300 mb-2">Live URL</label>
            <input
                id="live"
                type="url"
                name="live"
                value="{{ old('live', $project->live ?? '') }}"
                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            @error('live')
                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div>
        <label for="tech" class="block text-sm font-medium text-zinc-300 mb-2">
            Technologies
        </label>
        <input
            id="tech"
            type="text"
            name="tech"
            value="{{ $techValue }}"
            placeholder="Laravel, Tailwind, MySQL"
            class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
        >
        <p class="mt-2 text-xs text-zinc-500">Separate technologies with commas.</p>
        @error('tech')
            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>
</div>