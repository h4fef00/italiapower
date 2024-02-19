<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="d-flex flex-column">
            <!-- Name -->
            <div class="mb-3">
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" placeholder="Inserisci nome" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <!-- Email Address -->
            <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" placeholder="Inserisci email" type="email" name="email"
                    :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mb-3">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" placeholder="Inserisci password" type="password" name="password" required
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <x-input-label for="password_confirmation" :value="__('Conferma Password')" />
                <x-text-input id="password_confirmation" placeholder="Conferma password" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="d-flex justify-content-end mb-3">
                <a class="text-decoration-none text-black" href="{{ route('login') }}">
                    {{ __('Hai un account?') }}
                </a>
            </div>
            <x-primary-button>
                {{ __('Registrati') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
