<x-app-layout>
    <div class="antialiased bg-gray-100">
        <a href="{{ route('users.index') }}">
            <button
                class="mt-3 ml-3 bg-sea-500 hover:bg-sea-400 text-white font-bold py-2 px-4 border-b-4 border-sea-700 hover:border-sea-500 rounded uppercase">
                back
            </button>
        </a>
        <div class="flex flex-col w-full  min-h-full justify-center items-center ">
            <div class="mt-4 border-2 bg-ochre-200 border-sea-200 p-8 rounded-lg">
                <h1 class="font-bold text-ochre-400 text-center">Add New User</h1>
                @livewire('form')
            </div>
        </div>
    </div>


</x-app-layout>
{{-- <form method="POST" action="{{ url('users') }}">
        @csrf

        <div class="container mt-4 flex">
            <div class="mt-4 relative">
                <x-jet-label for="first_name" value="{{ __('First name') }}" />
                <x-jet-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"
                    required autofocus autocomplete="first_name" />
            </div>
            <div class="mt-4 relative pl-3">
                <x-jet-label for="last_name" value="{{ __('Last name') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                    required autofocus autocomplete="last_name" />
            </div>
        </div>


        <div class="container mt-4 flex space-x-2">
            <div class="mt-4 relative">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4 relative pl-3">
                <x-jet-label for="phone" value="{{ __('Phone:') }}" />
                <x-jet-input id="phone" maxlength="12" class="block mt-1 w-full" type="text" name="phone"
                    :value="old('phone')" required />
            </div>
        </div>

        <div class="container mt-4 flex space-x-2">
            <div class="mt-4 relative">
                <x-jet-label for="bussines" value="{{ __('Bussines:') }}" />
                <select name="business" id="business"
                    class="block mt-1 w-full border-gray-300 focus:border-sea-300 focus:ring focus:ring-sea-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    placeholder="Regular input">
                    <option value="">Select Company</option>
                    @foreach ($business as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach

                </select>
            </div>

            <div class="mt-4 relative pl-3 w-24">
                <x-jet-label for="work_hours" value="{{ __('Work hours:') }}" />
                <x-jet-input id="work_hours" maxlength="12" class="block mt-1 w-full" type="number" name="work_hours"
                    :value="old('work_hours')" required />
            </div>

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
    </form> --}}
