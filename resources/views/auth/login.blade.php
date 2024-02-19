<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="d-flex flex-column">
            <!-- Email Address -->
            <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                    autocomplete="username" placeholder="Inserisci email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mb-3">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" type="password" name="password" required autocomplete="current-password"
                    placeholder="Inserisci password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="row mx-0 justify-content-between">
                <div class="col-3">
                    <!-- Remember Me -->
                    <div class="mb-3 form-check">
                        <label for="remember_me" class="form-check-label">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <span>{{ __('Ricordami') }}</span>
                        </label>
                    </div>
                </div>
                <div class="col-6 pr-0">
                    @if (Route::has('password.request'))
                        <a class="text-decoration-none text-black" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </div>
            <x-primary-button>
                {{ __('Accedi') }}
            </x-primary-button>
        </div>
    </form>
    <hr>
    <h4>Sono un nuovo cliente</h4>
    <div>
        <a href="/register" class="btn btn-outline-dark rounded-0 w-100">Registrati</a>
    </div>
</x-guest-layout>
