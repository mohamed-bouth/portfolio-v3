<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-white">Portfolio Profile</h2>
    </x-slot>

    <form method="POST" action="{{ route('profile.custom.update') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        {{-- Name --}}
        <div>
            <label class="text-zinc-300">Full Name</label>
            <input type="text" name="full_name"
                value="{{ old('full_name', $profile->full_name ?? '') }}"
                class="w-full mt-2 bg-zinc-900 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:border-[#00FF00]">
        </div>

        {{-- Bio --}}
        <div>
            <label class="text-zinc-300">Bio</label>
            <textarea name="bio" rows="4"
                class="w-full mt-2 bg-zinc-900 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:border-[#00FF00]">{{ old('bio', $profile->bio ?? '') }}</textarea>
        </div>

        {{-- Image --}}
        <div>
            <label class="text-zinc-300">Profile Image</label>
            <input type="file" name="image"
                class="w-full mt-2 text-white">

            @if(isset($profile->image_path))
                <img src="{{ $profile->image_path }}"
                     class="mt-4 w-24 h-24 rounded-full object-cover border border-zinc-700">
            @endif
        </div>

        {{-- Socials --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input type="text" name="linkedin" placeholder="LinkedIn"
                value="{{ old('linkedin', $profile->linkedin ?? '') }}"
                class="bg-zinc-900 border border-zinc-800 rounded-xl px-4 py-3 text-white">

            <input type="text" name="github" placeholder="GitHub"
                value="{{ old('github', $profile->github ?? '') }}"
                class="bg-zinc-900 border border-zinc-800 rounded-xl px-4 py-3 text-white">

            <input type="email" name="gmail" placeholder="Gmail"
                value="{{ old('gmail', $profile->gmail ?? '') }}"
                class="bg-zinc-900 border border-zinc-800 rounded-xl px-4 py-3 text-white">
        </div>

        {{-- Submit --}}
        <button
            class="bg-[#00FF00] text-black px-6 py-3 rounded-xl font-semibold hover:shadow-[0_0_20px_rgba(0,255,0,0.3)]">
            Save Profile
        </button>

        @if(session('success'))
            <p class="text-green-400 mt-3">{{ session('success') }}</p>
        @endif
    </form>
</x-app-layout>