<div>
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Patients</h1>
            <p class="mt-2 text-sm text-gray-700">A list of all the Patients</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <x-button wire:click="$set('action','create')" positive>
                Add
                patient
            </x-button>

        </div>
    </div>
    <div class="flex flex-col mt-3">
        <div>
            @if (session()->has('message'))
            <div class="mb-2">
                <x-alert message="{{ session('message') }}" />
            </div>
            @endif
        </div>
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-300 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                    Name
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Sex
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Address
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Contact
                                </th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($patients as $patient)
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                    {{ $patient->firstname }}
                                    {{ $patient->middlename }}
                                    {{ $patient->lastname }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    {{ $patient->sex}}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    {{ $patient->address}}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    {{ $patient->contact}}
                                </td>

                                <td
                                    class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                    <div class="flex justify-end space-x-2">
                                        <x-button title="View Details" wire:click="viewDetails({{ $patient->id }})"
                                            type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                <path fill-rule="evenodd"
                                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </x-button>
                                        <x-button wire:click="edit({{ $patient->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </x-button>
                                        <x-button wire:click="deleteConfirmation({{ $patient->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </x-button>
                                        <x-button title="Quarantine" href="{{ route('admin.manage.quarantine',[
                                                    'patient_id'=>$patient->id
                                            ]) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-green-600"
                                                enable-background="new 0 0 100 100" viewBox="0 0 100 100">
                                                <path
                                                    d="M17.8,46.2L17,46.9v37.4h66V46.9l-0.8-0.6L50,20.8L17.8,46.2z M51.8,29.8l8.9,16.5l16.1,29.5c0.3,0.6,0.3,1.4,0,2
                                                                                                                            		c-0.4,0.6-1,1-1.7,1H25c-0.7,0-1.4-0.4-1.7-1c-0.4-0.6-0.4-1.3,0-2l16.1-29.5l8.9-16.5c0.4-0.6,1-1,1.8-1S51.4,29.1,51.8,29.8z" />
                                                <path
                                                    d="M10.8 44.5c1.1.5 2.3.4 3.3-.4l34.7-27.5c.7-.6 1.8-.6 2.5 0L86 44.1c1 .8 2.2.9 3.3.4 1.1-.5 1.8-1.6 1.8-2.8 0-1-.4-1.8-1.2-2.4L50 7.8 10.2 39.3C9.4 39.9 9 40.7 9 41.7 9 42.9 9.7 44 10.8 44.5zM93 88.2H7c-1.1 0-2 .9-2 2 0 1.1.9 2 2 2h86c1.1 0 2-.9 2-2C95 89.1 94.1 88.2 93 88.2z" />
                                                <path
                                                    d="M28.4,74.7h43.3L50,34.9L28.4,74.7z M50,68.7c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C52,67.8,51.1,68.7,50,68.7z
                                                                                                                            		 M52,49.2v9c0,1.1-0.9,2-2,2s-2-0.9-2-2v-9c0-1.1,0.9-2,2-2S52,48.1,52,49.2z" />
                                            </svg>

                                        </x-button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="py-4 text-center">
                                    <p class="text-gray-500">No patients found</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>