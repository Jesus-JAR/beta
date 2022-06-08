<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="container mt-4 flex space-x-2">
                <div class="mt-4 relative">
                    <x-jet-label for="first_name" value="{{ __('First name:') }}" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute pt-2 mr-1 pr-2 right-0 w-10 text-sea-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    <x-jet-input id="first_name" maxlength="35" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
                </div>
                <div class="mt-4 relative pl-3">
                    <x-jet-label for="last_name" value="{{ __('Last name:') }}" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute pt-2 mr-1 pr-2 right-0 w-10 text-sea-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    <x-jet-input id="last_name" maxlength="35" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="name" />
                </div>
            </div>

            <div class="mt-4 relative">
                <x-jet-label for="email" value="{{ __('Email:') }}" />
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute pt-2 mr-1 pr-2 right-0 w-10 text-sea-600" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>
                <x-jet-input id="email" maxlength="35" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4 relative">
                <x-jet-label for="phone" value="{{ __('Phone:') }}" />
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute pt-2 mr-1 pr-2 right-0 w-10 text-sea-600" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                </svg>
                <x-jet-input id="phone" maxlength="12" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            </div>

            <div class="mt-4 relative">
                <x-jet-label for="bussines" value="{{ __('Bussines:') }}" />
                <select name="business" id="business" class="block mt-1 w-full border-gray-300 focus:border-sea-300 focus:ring focus:ring-sea-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Regular input">
                    <option value="">Select Company</option>
                @foreach($business as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4 relative">
                <x-jet-label for="dni" value="{{ __('Dni:') }}" />
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute pt-2 mr-1 pr-2 right-0 w-10 text-sea-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <x-jet-input id="dni" maxlength="12"  class="block mt-1 w-full" type="text" name="dni" :value="old('dni')" required />
            </div>

            <div class="container mt-4 flex space-x-2">

                <div class="relative" x-data="{ show: false }">
                    <x-jet-label for="password" value="{{ __('Password:') }}" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute pt-2 mr-1 pr-2 right-0 w-10 text-sea-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <x-input-password/>
                </div>

                <div class="relative" x-data="{ show: false }">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password:') }}" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute pt-2 mr-1 pr-2 right-0 w-10 text-sea-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <x-input-password2/>
                </div>

            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
