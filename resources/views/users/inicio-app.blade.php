<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-component-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST">
            @csrf

            <div class="mt-4 relative">
                <x-jet-label for="first_name" value="{{ __('Name:') }}" />
                <x-jet-input id="first_name" maxlength="35" class="block mt-1 w-full" type="text" name="first_name"
                    :value="old('first_name')" required autofocus autocomplete="first_name" />
            </div>

            <div class="mt-4 relative">
                <x-jet-label for="email" value="{{ __('Email:') }}" />
                <x-jet-input id="email" maxlength="35" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required />
            </div>

            <div class="mt-4 relative">
                <x-jet-label for="phone" value="{{ __('Phone:') }}" />
                <x-jet-input id="phone" maxlength="12" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                    required />
            </div>

            <div class="container mt-4 flex space-x-2">
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <div class="mt-4 relative pl-3">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>


            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
