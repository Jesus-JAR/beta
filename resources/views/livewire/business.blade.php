<table class="border-2 border-gray-200 table-auto w-full">
    <thead>
        <!-- head -->
        <tr>
            <th class="px-4 py-2">
                <div class="flex items-center cursor-pointer w-3">
                    <button>ID</button>
                </div>
            </th>
            <th class="px-4 py-2">
                <div class="flex items-center cursor-pointer w-20">
                    <button>Name</button>

                </div>
            </th>
            <th class="px-4 py-2">
                <div class="flex items-center cursor-pointer">
                    <button>Address</button>

                </div>
            </th>
            <th class="px-4 py-2">
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        <!-- body -->
        @foreach ($companies as $company)
            <tr>
                <td class="border px-4 py-2 w-3">{{ $company->id }}</td>
                <td class="border px-4 py-2">{{ $company->name }}</td>
                <td class="border px-4 py-2">{{ $company->address }}</td>
                <td class="border px-4 py-2 w-auton flex justify-around">
                    <button
                        class="bg-ochre-500 hover:bg-ochre-400 px-2 text-white border-ochre-700 hover:border-ochre-500 rounded uppercase">
                        Edit
                    </button>

                    <x-jet-danger-button
                        >
                        {{ __('Delete') }}
                    </x-jet-danger-button>

                </td>
            </tr>
    </tbody>
    @endforeach

</table>
