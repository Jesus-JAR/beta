<x-app-layout>
    <div class="p-6 sm:px-20 bg-white border-gray-200">
        <div class="mt-8 text-2xl flex justify-between">

            <div class="text-gray-600 font-bold text-2xl md:text-4xl">{{ __('Business') }}</div>
            <div>

                <button
                    class="bg-green-600 hover:bg-green-500 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                    <a href="{{ route('business.create') }}">Add New Business</a>
                </button>
            </div>
        </div>
        @livewire('live-busines-table');
    </div>
</x-app-layout>
