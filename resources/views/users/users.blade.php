<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mt-2">
                    <table class="table table-bordered table-striped users_table">
                        <thead>
                            <!-- head -->
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">First name</th>
                                <th scope="col">email</th>
                                <th scope="col">phone</th>
                                <th scope="col">business</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- body -->
                            @foreach ($users as $user)
                                <tr>
                                    <th>{{ $user->first_name }}</th>
                                    <th>{{ $user->last_name }}</th>
                                    <th>{{ $user->email }}</th>
                                    <th>{{ $user->phone }}</th>
                                    <td>{{ $user->business->name }}</td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
$('.users_table').DataTable({
    processing: true,
            serverSide: true,
            responsive: true,
            ajax: "{{route('users')}}",
            dataType: 'json',
            type: "POST",
            columns: [{
                    data: 'first_name',
                    name: 'first_name'
                },
                {
                    data: 'last_name',
                    name: 'last_name',
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'phone',
                    name: 'phone',
                },
                {
                    data: 'dni',
                    name: 'dni',
                },
                {
                    data: 'rol',
                    name: 'rol',
                },
                {
                    data: 'actions',
                    name: 'actions',
                    searchable: false,
                    orderable: false
                }
            ],
});
        });
    </script>
</x-app-layout>
