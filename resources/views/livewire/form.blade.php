<div>
    <form method="POST" action="{{ url('users') }}">
        @csrf
        <div class="mt-4 flex flex-wrap">
            <div class="mt-4 w-full sm:w-auto relative">
                <x-jet-label for="first_name" value="{{ __('First name') }}" />
                <x-jet-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" autofocus
                autocomplete="first_name" wire:model="first_name" />
                    @error('first_name')
                    <span class="error text-red-600 text-bold">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 w-full sm:w-auto relative sm:ml-3">
                <x-jet-label for="last_name" value="{{ __('Last name') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" wire:model='last_name'
                    :value="old('last_name')" required autofocus autocomplete="last_name" />
                    @error('last_name')
                    <span class="error text-red-600 text-bold">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mt-4 flex flex-wrap">
            <div class="mt-4 w-full sm:w-auto relative">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" wire:model.lazy='email'
                    :value="old('email')" required autofocus autocomplete="email" />
                    @error('email')
                    <span class="error text-red-600 text-bold">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 w-full sm:w-auto relative sm:ml-3">
                <x-jet-label for="phone" value="{{ __('phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" wire:model.lazy='phone'
                    required autofocus autocomplete="phone" />
                    @error('phone')
                    <span class="error text-red-600 text-bold">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mt-4 flex">
            <div class="mt-4 flex-1 sm:w-auto relative">
                <x-jet-label for="bussines" value="{{ __('Bussines:') }}" />
                <select name="business" id="business"
                    class="block mt-1 w-full border-gray-300 focus:border-sea-300 focus:ring focus:ring-sea-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    placeholder="Regular input" wire:model='cod_emp'>
                    <option value="">Select Company</option>
                    @foreach ($business as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                    @error('cod_emp')
                    <span class="error text-red-600 text-bold">{{ $message }}</span>
                @enderror
                </select>
            </div>
            <div class="mt-4 w-1/3 relative ml-2 sm:ml-3">
                <x-jet-label for="work_hours" value="{{ __('Work hours:') }}" />
                <x-jet-input id="work_hours" maxlength="12" class="block mt-1 w-full" type="number"
                    name="work_hours" :value="old('work_hours')" required />
            </div>
        </div>

        <div class="container mt-4 flex space-x-2">
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" wire:model.lazy='password'
                    required autocomplete="new-password" />
                    @error('password')
                    <span class="error text-red-600 text-bold">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4 relative pl-3">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" wire:model='password2' />
            </div>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4">
                {{ __('Register') }}
            </x-jet-button>
        </div>
    </form>
</div>
