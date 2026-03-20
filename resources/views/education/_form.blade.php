<div class="space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label for="institution" class="block text-sm font-medium text-zinc-300 mb-2">
                Institution
            </label>
            <input
                id="institution"
                type="text"
                name="institution"
                value="{{ old('institution', $education->institution ?? '') }}"
                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            @error('institution')
                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="degree" class="block text-sm font-medium text-zinc-300 mb-2">
                Degree
            </label>
            <input
                id="degree"
                type="text"
                name="degree"
                value="{{ old('degree', $education->degree ?? '') }}"
                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            @error('degree')
                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="location" class="block text-sm font-medium text-zinc-300 mb-2">
                Location
            </label>
            <input
                id="location"
                type="text"
                name="location"
                value="{{ old('location', $education->location ?? '') }}"
                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            @error('location')
                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="start_year" class="block text-sm font-medium text-zinc-300 mb-2">
                Start Year
            </label>
            <input
                id="start_year"
                type="number"
                name="start_year"
                value="{{ old('start_year', $education->start_year ?? '') }}"
                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            @error('start_year')
                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="end_year" class="block text-sm font-medium text-zinc-300 mb-2">
                End Year
            </label>
            <input
                id="end_year"
                type="number"
                name="end_year"
                value="{{ old('end_year', $education->end_year ?? '') }}"
                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            @error('end_year')
                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div>
        <label for="description" class="block text-sm font-medium text-zinc-300 mb-2">
            Description
        </label>
        <textarea
            id="description"
            name="description"
            rows="5"
            class="w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
        >{{ old('description', $education->description ?? '') }}</textarea>
        @error('description')
            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
        @enderror
    </div>
</div>