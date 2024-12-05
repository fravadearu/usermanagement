<x-app-layout>
    <div class="py-6 sm:py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 sm:p-6 text-gray-900">
                    <h2 class="text-xl sm:text-2xl font-bold mb-4">Create New User</h2>

                    <form method="POST" action="{{ route('users.store') }}" class="space-y-3 sm:space-y-4">
                        @csrf
                        
                        <div>
                            <x-input-label for="name" value="Name" class="text-sm" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full text-sm" required />
                            <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs" />
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('Username')" class="text-sm" />
                            <div class="flex items-center">
                                <x-text-input id="email" class="mt-1 block w-full text-sm" type="text"
                                    name="email" :value="old('email')" required />
                                <span style="display: none;"
                                    class="bg-gray-100 px-2 py-1.5 text-sm rounded-r-md border border-gray-300 text-gray-500">@gmail.com</span>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
                        </div>

                        <div>
                            <x-input-label for="password" value="Password" class="text-sm" />
                            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full text-sm" required />
                            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
                        </div>

                        <div>
                            <x-input-label for="password_confirmation" value="Confirm Password" class="text-sm" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full text-sm" required />
                        </div>

                        <div style="display: none;">
                            <x-input-label for="role" value="Role" class="text-sm" />
                            <select name="role" id="role" class="mt-1 block w-full text-sm border-gray-300 rounded-md shadow-sm">
                                @foreach($roles as $role)
                                    <option value="{{ $role->name }}" {{ $role->name === 'pengguna' ? 'selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-4 pt-2">
                            <x-primary-button class="w-full sm:w-auto justify-center">Create User</x-primary-button>
                            <a href="{{ route('users.index') }}" class="w-full sm:w-auto text-center btn btn-ghost">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
