<div>
    <div class="p-6 sm:px-20 bg-white border-gray-200">
        <div class="mt-8 text-2xl flex justify-between">

            <div class="text-gray-600 font-bold text-2xl md:text-4xl">{{ __('Business') }}</div>
            <div>

                <button
                    class="bg-green-600 hover:bg-green-500 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                    <a href="">Add New Business</a>
                </button>
            </div>
        </div>
        <div class="py-10">
            <div class="justify-center mx-auto sm:px-6 lg:px-8">
                <div class="justify-center overflow-hidden sm:rounded-lg">
                    <!-- <table> -->
                    <div class="mt-2">
                        <div class="flex text-gray-500">
                            <select wire:model="perPage" class="h-10 mr-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="">Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <x-jet-input id="search" placeholder="Search..." class="block w-full mb-3" type="text"
                                name="search" wire:model="search"/>

                            <button wire:click="clear">
                                <span class="ml-2 fa-solid fa-eraser text-gray-500 text-4xl"></span>
                            </button>
                        </div>
                        <table class="border-2 border-gray-200 table-auto w-full">
                            <thead class="bg-sea-100">
                                <!-- head -->
                                <tr>
                                    <th class="px-4 py-2">
                                        <div class="flex items-center cursor-pointer w-10">
                                            <button wire:click="sortable('id')">ID</button>
                                            <span class="ml-2 fa fa-{{$camp === 'id' ? $icon: 'circle'}} text-gray-500 cursor-pointer"></span>
                                        </div>
                                    </th>
                                    <th class="px-4 py-2">
                                        <div class="flex items-center cursor-pointer w-20">
                                            <button wire:click="sortable('name')">Name</button>
                                            <span class="ml-2 fa fa-{{$camp === 'name' ? $icon: 'circle'}} text-gray-500"></span>
                                        </div>
                                    </th>
                                    <th class="px-4 py-2">
                                        <div class="flex items-center cursor-pointer ">
                                            <button wire:click="sortable('address')">Address</button>
                                            <span class="ml-2 fa fa-{{$camp === 'address' ? $icon: 'circle'}} text-gray-500"></span>
                                        </div>
                                    </th>

                                    <th class="px-4 py-2 text-sm font-medium">
                                        Edit
                                    </th>
                                    <th class="px-4 py-2 text-sm font-medium">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- body -->
                                @foreach ($business as $company)
                                    <tr>
                                        <td class="border px-4 py-2 w-3">{{ $company->id }}</td>
                                        <td class="border px-4 py-2">{{ $company->name }}</td>
                                        <td class="border px-4 py-2">{{ $company->address }}</td>
                                        <td class="border px-4 py-2 text-center">
                                            <a class="pr-4 uppercase" href="">edit</a>
                                        </td>
                                        <td class="border px-4 py-2 text-center">
                                            <a class="pr-4 uppercase" href="">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="bg-white px-4 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
                            {{ $business->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
