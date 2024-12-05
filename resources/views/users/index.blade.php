<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between mb-6">
                        <h2 class="text-2xl font-bold"></h2>
                        <a href="users/create" class="btn btn-secondary">Tambah Akun</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="table w-full">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ str_replace('@gmail.com', '', $user->email) }}</td>
                                    <td>{{ $user->roles->pluck('name')->join(', ') }}</td>
                                    <td class="flex gap-2">
                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm">Edit</a>
                                        @if(!$user->roles->pluck('name')->contains('admin'))
                                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-error" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>