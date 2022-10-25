<x-guest-layout>
    <style>
        .primary-color-btn {
            background-color: #FF2C55;
        }
        .primary-color-txt {
            color: #FF2C55;
        }
    </style>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                {{-- <h1>{{$entreprises->nom_clt}}</h1> --}}
                <div class="flex items-center justify-center flex-col">
                    <img src="{{$entreprises->logo}}" class="w-30 h-20" alt="alt text">
                    <div class="mb-2">
                        By <a class="primary-color-txt">IceCube</a>
                    </div>
                </div>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="flex items-center flex-row justify-center">
            <h2>Bienvenue ! </h2>
            <p class='ml-1'> Table n°{{$table}}</p>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4 flex-col">

                <x-primary-button class="primary-color-btn">
                    {{ __('Se connecter') }}
                </x-primary-button>
                @if (Route::has('password.request'))
                    <a class="mt-3 underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif
                <div class="mt-8 flex justify-center items-center flex-col">
                    <div class="mb-2">
                        Pas de compte ? <a href={{ route('register', [
                            'uid' => $entreprises->id,
                            'table' => $table
                        ]) }} class="primary-color-txt">Inscrivez-vous</a>
                    </div>
                    <p class="mb-2">ou</p>
                    <a>Se connecter en tant qu'invité</a>
                </div>

            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
