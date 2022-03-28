<div>
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Users</h1>
            <p class="mt-2 text-sm text-gray-700">A list of all the users including user account of the patients</p>
        </div>
        <div class="flex space-x-3">
            <x-native-select wire:model="filter">
                <option value="" selected disabled>Filter (ALL)</option>
                <option value="patient">Patient</option>
                <option value="admin">Admin</option>
                <option value="healthworker">Health Worker</option>
                <option value="officestaff">Office Staff</option>
            </x-native-select>
            <div class="mt-4 space-x-2 sm:mt-0 sm:ml-16 sm:flex-none">
                <x-button positive>
                    Add user
                </x-button>
            </div>
        </div>
    </div>
    <div class="flex flex-col mt-3">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role
                                </th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($users as $user)
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                    {{ $user->name }}</td>
                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $user->email }}</td>

                                <td class="px-3 py-4 text-sm text-gray-500 uppercase whitespace-nowrap">{{ $user->role
                                    }}</td>
                                <td
                                    class="relative py-2 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                    <x-button wire:click="resetPasswordConfirmation({{ $user->id }})">
                                        Reset password
                                    </x-button>
                                </td>
                            </tr>
                            @empty
                            <tr class="py-3">
                                <td colspan="4" class="text-center">No users found</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>