<x-app-layout>
    <div class="p-6 sm:px-20 bg-white border-gray-200">
        <div class="flex w-full justify-center flex-col">
            <div class="mt-3 text-2xl flex justify-around">
                <div class="text-gray-600 font-bold text-2xl md:text-4xl">{{ __('Users') }}</div>
                <button
                    class="bg-sea-600 hover:bg-sea-500 text-white font-bold py-1 px-2 border-b-4 border-sea-700 hover:border-sea-500 rounded">
                    <a href="{{ route('users.create') }}">Add New Users</a>
                </button>
            </div>
            <div class="container flex justify-center rounded-lg">
                <table class="table-auto mt-3 shadow-lg rounded-lg border-2 border-gray-200 hidden md:inline-block">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">First name</th>
                            <th class="px-4 py-2">Last name</th>
                            <th class="px-4 py-2">Email</th>
                            @if (auth()->user()->hasRole('Super Admin'))
                                <th class="px-4 py-2">Company</th>
                            @endif
                            @if (auth()->user()->hasRole('Super Admin'))
                            <th class="px-4 py-2">Rol</th>
                        @endif

                            @if (auth()->user()->hasRole('Super Admin') xor
                                auth()->user()->hasRole('Admin'))
                                <th class="px-4 py-2">
                                    Actions
                                </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        <!-- body -->
                        @foreach ($users as $user)
                            <tr class="border-2 border-gray-200">
                                <td class="px-4 py-2 w-3 border-r-2 border-gray-100">{{ $user->id }}</td>
                                <td class="px-4 py-2 border-r-2 border-gray-100">{{ $user->first_name }}</td>
                                <td class="px-4 py-2 border-r-2 border-gray-100">{{ $user->last_name }}</td>
                                <td class="px-4 py-2 w-3 border-r-2 border-gray-100">{{ $user->email }}</td>

                                @if (auth()->user()->hasRole('Super Admin'))
                                    <td class="px-4 py-2 border-r-2 border-gray-100">{{ $user->business->name }}</td>
                                @endif

                                @if (auth()->user()->hasRole('Super Admin'))
                                <td class="px-4 py-2 border-r-2 border-gray-100">
                                    @foreach ($user->getRoleNames() as $role)
                                        {{ $role }}
                                    @endforeach
                                </td>
                                @endif
                                @if (auth()->user()->hasRole('Super Admin') xor
                                    auth()->user()->hasRole('Admin'))
                                    <td class="px-4 py-2 w-auton flex justify-around">
                                        Edit

                                        @if (auth()->user()->hasRole('Super Admin') xor
                                            auth()->user()->hasRole('Admin'))
                                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="ml-3">
                                                    {{ __('Delete') }}
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="">
            {{-- Display mobile --}}
            <div class="bg-white p-4 md:hidden">

                <div class="grid pt-2 mt-2 grid-cols-1 sm:grid-cols-2 gap-4 md:grid-cols-2 lg:hidden">

                    @foreach ($users as $user)
                        <div class="bg-sea-100 space-y-3 p-4 rounded-lg shadow">
                            <div class="flex items-center space-x-2 text-sm">
                                <div>
                                    <a href="#" class="text-blue-500 font-bold hover:underline">{{ $user->id }}</a>
                                </div>
                                <div class="text-gray-500">{{ $user->first_name }}, {{ $user->last_name }}</div>
                                <div>
                                    @foreach ($user->getRoleNames() as $role)
                                        {{ $role }}
                                    @endforeach
                                </div>
                            </div>
                            @if (auth()->user()->hasRole('Super Admin'))
                                <td class="border px-4 py-2">Company: {{ $user->business->name }}</td>
                            @endif
                            <div>
                                <span
                                    class="p-1.5 text-xs font-bold tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-40">{{ $user->email }}</span>
                            </div>
                            @if (auth()->user()->hasRole('Super Admin'))
                                <div class="flex justify-around px-4 py-1 my-1">
                                    <button wire:click="showModal({{ $user->id }})"
                                        class="bg-ochre-500 hover:bg-ochre-400 px-2 text-white font-bold border-ochre-700 hover:border-ochre-500 rounded">
                                        Edit
                                    </button>
                                    <x-jet-danger-button wire:click="confirmUserDeletion({{ $user->id }})"
                                        wire:loading.attr="disabled">
                                        {{ __('Delete') }}
                                    </x-jet-danger-button>
                                </div>
                            @endif
                        </div>
                    @endforeach

                </div>
                <div class="bg-white px-4 py-3  items-center justify-between border-t border-gray-200 sm:px-6">
                    {{ $users->links() }}
                </div>

            </div>
            {{-- Display mobile --}}
        </div>
</x-app-layout>
