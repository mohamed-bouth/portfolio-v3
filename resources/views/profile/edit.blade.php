<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold tracking-tight text-white">
                {{ __('Profile Settings') }}
            </h2>
            <p class="mt-1 text-sm text-zinc-400">
                Manage your account information, password, and security settings.
            </p>
        </div>
    </x-slot>

    <div class="space-y-6">
        <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 backdrop-blur-sm shadow-[0_10px_40px_rgba(0,0,0,0.35)] p-4 sm:p-8">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="rounded-3xl border border-zinc-800 bg-zinc-900/60 backdrop-blur-sm shadow-[0_10px_40px_rgba(0,0,0,0.35)] p-4 sm:p-8">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="rounded-3xl border border-red-500/20 bg-red-500/5 backdrop-blur-sm shadow-[0_10px_40px_rgba(0,0,0,0.35)] p-4 sm:p-8">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>