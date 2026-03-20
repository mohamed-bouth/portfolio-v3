<section>
    <header>
        <h2 class="text-lg font-semibold text-white">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-2 text-sm text-zinc-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="update_password_current_password" class="block text-sm font-medium text-zinc-300 mb-2">
                {{ __('Current Password') }}
            </label>
            <input
                id="update_password_current_password"
                name="current_password"
                type="password"
                autocomplete="current-password"
                class="block w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white placeholder:text-zinc-600 focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-red-400" />
        </div>

        <div>
            <label for="update_password_password" class="block text-sm font-medium text-zinc-300 mb-2">
                {{ __('New Password') }}
            </label>
            <input
                id="update_password_password"
                name="password"
                type="password"
                autocomplete="new-password"
                class="block w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white placeholder:text-zinc-600 focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-red-400" />
        </div>

        <div>
            <label for="update_password_password_confirmation" class="block text-sm font-medium text-zinc-300 mb-2">
                {{ __('Confirm Password') }}
            </label>
            <input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                autocomplete="new-password"
                class="block w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white placeholder:text-zinc-600 focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-red-400" />
        </div>

        <div class="flex items-center gap-4">
            <button
                type="submit"
                class="rounded-xl bg-[#00FF00] px-5 py-3 font-semibold text-black transition hover:bg-[#00FF00]/90 hover:shadow-[0_0_20px_rgba(0,255,0,0.3)]"
            >
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-[#00FF00]"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>