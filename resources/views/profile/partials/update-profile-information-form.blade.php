<section>
    <header>
        <h2 class="text-lg font-semibold text-white">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-2 text-sm text-zinc-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <label for="name" class="block text-sm font-medium text-zinc-300 mb-2">
                {{ __('Name') }}
            </label>
            <input
                id="name"
                name="name"
                type="text"
                value="{{ old('name', $user->name) }}"
                required
                autofocus
                autocomplete="name"
                class="block w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white placeholder:text-zinc-600 focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('name')" />
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-zinc-300 mb-2">
                {{ __('Email') }}
            </label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email', $user->email) }}"
                required
                autocomplete="username"
                class="block w-full rounded-xl border border-zinc-800 bg-zinc-950/70 px-4 py-3 text-white placeholder:text-zinc-600 focus:border-[#00FF00] focus:outline-none focus:ring-1 focus:ring-[#00FF00]"
            >
            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-3 rounded-2xl border border-yellow-500/20 bg-yellow-500/10 px-4 py-3">
                    <p class="text-sm text-yellow-300">
                        {{ __('Your email address is unverified.') }}

                        <button
                            form="send-verification"
                            class="ml-1 underline underline-offset-4 hover:text-white transition"
                        >
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm font-medium text-[#00FF00]">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button
                type="submit"
                class="rounded-xl bg-[#00FF00] px-5 py-3 font-semibold text-black transition hover:bg-[#00FF00]/90 hover:shadow-[0_0_20px_rgba(0,255,0,0.3)]"
            >
                {{ __('Save') }}
            </button>

            @if (session('status') === 'profile-updated')
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