<x-app-layout>
    <div class="p-6 sm:px-20 bg-white border-gray-200">
        <div class="mt-8 text-2xl flex justify-between">

            <div class="text-gray-600 font-bold text-2xl md:text-4xl">{{ __('User') }}</div>
            <div>

                <button
                    class="bg-green-600 hover:bg-green-500 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                    <a href="{{ route('business.create') }}">Add New User</a>
                </button>
            </div>
        </div>

        <div class="py-10">
            <div class="justify-center mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center overflow-hidden sm:rounded-lg">
                    @livewire('live-users-table');
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
