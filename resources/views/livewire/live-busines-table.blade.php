<div>
    <div class="py-10">
        <div class="justify-center mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center overflow-hidden sm:rounded-lg">
                <!-- <table> -->
                <div class="mt-2">
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
                                    Edit
                                </th>
                                <th class="px-4 py-2">
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
                        {{ $business->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

