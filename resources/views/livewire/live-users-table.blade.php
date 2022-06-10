<div>
              <!-- <table> -->
                <div class="mt-2">
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
