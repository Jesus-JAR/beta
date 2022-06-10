<div>
              <!-- <table> -->
                <div class="mt-2">
                    <div class="flex text-gray-500">
                        <select wire:model="perPage" class="h-10 mr-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="">Select</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                        <x-jet-input id="search" placeholder="Search..." class="block w-full mb-3" type="text"
                            name="search" wire:model="search"/>

                    </div>
                    {{ $search }}
                    <table class="border-2 border-gray-200 table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">
                                    <div class="flex items-center cursor-pointer w-3">
                                        <button>ID</button>
                                    </div>
                                </th>
                                <th class="px-4 py-2">
                                    <div class="flex items-center cursor-pointer w-20">
                                        <button>First name</button>

                                    </div>
                                </th>
                                <th class="px-4 py-2">
                                    <div class="flex items-center cursor-pointer w-20">
                                        <button>Last name</button>

                                    </div>
                                </th>
                                <th class="px-4 py-2">
                                    <div class="flex items-center cursor-pointer">
                                        <button>Email</button>
                                    </div>
                                </th>

                                <th class="px-4 py-2">
                                    <div class="flex items-center cursor-pointer">
                                        <button>Phone</button>
                                    </div>
                                </th>

                                <th class="px-4 py-2">
                                    <div class="flex items-center cursor-pointer">
                                        <button>Business</button>
                                    </div>
                                </th>

                                <th class="px-4 py-2">
                                    Edit
                                </th>
                                <th class="px-4 py-2">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- body -->
                            @foreach ($users as $user)
                                <tr>
                                    <td class="border px-4 py-2 w-3">{{ $user->id }}</td>
                                    <td class="border px-4 py-2">{{ $user->first_name }}</td>
                                    <td class="border px-4 py-2">{{ $user->last_name }}</td>
                                    <td class="border px-4 py-2">{{ $user->email }}</td>
                                    <td class="border px-4 py-2">{{ $user->phone }}</td>
                                    <td class="border px-4 py-2">{{ $user->business->name }}</td>

                                    <td class="border px-4 py-2">
                                        <a class="pr-4 uppercase" href="">edit</a>
                                    </td>
                                    <td class="border px-4 py-2">
                                        <a class="pr-4 uppercase" href="">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="bg-white px-4 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
