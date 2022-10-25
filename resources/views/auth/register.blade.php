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
        {{-- {{$entreprises->id}} --}}
        <x-slot name="logo">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                <div class="flex items-center justify-center flex-col">
                    <img src="{{$entreprises->logo}}" class="w-30 h-20" alt="alt text">
                    <div class="mb-2">
                        By <a class="primary-color-txt">IceCube</a>
                    </div>
                </div>
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nom')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

                        <!-- Firstname -->
            <div>
                <x-input-label for="firstname" :value="__('Prénom')" />

                <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />

                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
            </div>

                       <!-- Telephone -->
            <div>
                <x-input-label for="telephone" :value="__('Téléphone')" />

                <x-text-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autofocus />

                <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('E-mail')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmer votre mot de passe')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center flex-col mt-4">
                <a class="mb-4 underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà enregistrer ?') }}
                </a>

                <x-primary-button class="ml-4 primary-color-btn">
                    {{ __("S'enregistrer") }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
