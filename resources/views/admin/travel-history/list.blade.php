<div>
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Travel History</h1>
            <p class="mt-2 text-sm text-gray-700">
                List of all the travel history of the patient
            </p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <x-button wire:click="$set('action','create')" positive>
                Add new record
            </x-button>
        </div>
    </div>
    <div class="flex flex-col mt-8">
        <div>
            @if (session()->has('message'))
            <div class="mb-2">
                <x-alert message="{{ session('message') }}" />
            </div>
            @endif
        </div>
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                    Place
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Date Start
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Date End
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Number of Days
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    No. Visited Places
                                </th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($travelHistories as $travelHistory)
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                    {{ $travelHistory->place }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    {{ $travelHistory->date_start }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    {{ $travelHistory->date_end }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    {{ $travelHistory->number_of_days }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    {{ $travelHistory->visits_count }}
                                </td>
                                <td
                                    class="relative py-2 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                    <x-button wire:click="editTravelHistory({{ $travelHistory->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                            <path fill-rule="evenodd"
                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </x-button>
                                    <x-button wire:click="deleteConfirmation({{ $travelHistory->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </x-button>
                                    <x-button wire:click="viewDetails({{ $travelHistory->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="ml-1">View Details</span>
                                    </x-button>
                                    <x-button wire:click="addRecord({{ $travelHistory->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                            enable-background="new 0 0 135 135" viewBox="0 0 135 135">
                                            <rect width="37.136" height="109.727" x="94.361" y="18.615"
                                                fill="#4fc6b3" />
                                            <rect width="25.104" height="102.524" x="100.377" y="25.818" fill="#fff" />
                                            <rect width="25.104" height="4.676" x="100.377" y="25.818" fill="#32667b" />
                                            <rect width="25.104" height="4.676" x="100.377" y="35.171" fill="#32667b" />
                                            <rect width="25.104" height="4.676" x="100.377" y="44.524" fill="#32667b" />
                                            <rect width="25.104" height="4.676" x="100.377" y="53.877" fill="#32667b" />
                                            <rect width="25.104" height="4.676" x="100.377" y="63.23" fill="#32667b" />
                                            <rect width="25.104" height="4.676" x="100.377" y="72.583" fill="#32667b" />
                                            <rect width="25.104" height="4.676" x="100.377" y="81.936" fill="#32667b" />
                                            <rect width="25.104" height="4.676" x="100.377" y="91.289" fill="#32667b" />
                                            <rect width="25.104" height="4.676" x="100.377" y="100.642"
                                                fill="#32667b" />
                                            <rect width="25.104" height="4.676" x="100.377" y="109.995"
                                                fill="#32667b" />
                                            <rect width="25.104" height="4.676" x="100.377" y="119.348"
                                                fill="#32667b" />
                                            <rect width="1.063" height="102.524" x="112.398" y="25.818" fill="#fff" />
                                            <rect width="1.429" height="102.524" x="124.052" y="25.818"
                                                fill="#3eb59e" />
                                            <rect width="1.429" height="102.524" x="100.377" y="25.818"
                                                fill="#3eb59e" />
                                            <rect width="25.104" height="1.392" x="100.377" y="25.818" fill="#3eb59e" />
                                            <rect width="33.325" height="103.277" x="6.156" y="25.065" fill="#226e7f" />
                                            <rect width="29.325" height="101.277" x="8.155" y="27.065" fill="#9fd0e0" />
                                            <rect width="29.325" height="2" x="8.155" y="42.203" fill="#226e7f" />
                                            <rect width="29.325" height="2" x="8.155" y="65.203" fill="#226e7f" />
                                            <rect width="29.325" height="2" x="8.155" y="88.204" fill="#226e7f" />
                                            <rect width="29.325" height="2" x="8.155" y="111.204" fill="#226e7f" />
                                            <rect width="2" height="103.277" x="21.818" y="25.065" fill="#226e7f" />
                                            <rect width="128" height="3.16" x="3.5" y="128.34" fill="#7a8490" />
                                            <g>
                                                <rect width="57.981" height="120.53" x="38.51" y="7.812"
                                                    fill="#eded91" />
                                                <rect width="57.981" height="2.567" x="38.51" y="7.812" fill="#2c2c34"
                                                    opacity=".08" />
                                                <rect width="4.259" height="94.767" x="38.51" y="7.812" fill="#2c2c34"
                                                    opacity=".08" />
                                                <rect width="2.871" height="94.767" x="38.51" y="7.812" fill="#ff9" />
                                                <rect width="4.259" height="94.767" x="92.231" y="7.812" fill="#2c2c34"
                                                    opacity=".08" />
                                                <rect width="2.871" height="94.767" x="93.62" y="7.812" fill="#ff9" />
                                                <rect width="62.685" height="4.312" x="36.157" y="3.5" fill="#f28625" />
                                                <rect width="62.685" height="25.754" x="36.157" y="102.588"
                                                    fill="#f28625" />
                                                <rect width="62.685" height="2.152" x="36.157" y="102.588"
                                                    fill="#ff9" />
                                                <rect width="12.432" height="6.948" x="44.506" y="13.799"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="61.284" y="13.799"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="78.062" y="13.799"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="44.506" y="23.622"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="61.284" y="23.622"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="78.062" y="23.622"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="44.506" y="33.445"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="61.284" y="33.445"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="78.062" y="33.445"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="44.506" y="43.268"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="61.284" y="43.268"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="78.062" y="43.268"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="44.506" y="53.092"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="61.284" y="53.092"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="78.062" y="53.092"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="44.506" y="62.915"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="61.284" y="62.915"
                                                    fill="#44433f" />
                                                <rect width="12.432" height="6.948" x="78.062" y="62.915"
                                                    fill="#44433f" />
                                                <g>
                                                    <rect width="12.432" height="6.948" x="44.506" y="72.738"
                                                        fill="#44433f" />
                                                    <rect width="12.432" height="6.948" x="61.284" y="72.738"
                                                        fill="#44433f" />
                                                    <rect width="12.432" height="6.948" x="78.062" y="72.738"
                                                        fill="#44433f" />
                                                </g>
                                                <g>
                                                    <rect width="12.432" height="6.948" x="44.506" y="82.561"
                                                        fill="#44433f" />
                                                    <rect width="12.432" height="6.948" x="61.284" y="82.561"
                                                        fill="#44433f" />
                                                    <rect width="12.432" height="6.948" x="78.062" y="82.561"
                                                        fill="#44433f" />
                                                </g>
                                                <g>
                                                    <rect width="12.432" height="6.948" x="44.506" y="92.384"
                                                        fill="#44433f" />
                                                    <rect width="12.432" height="6.948" x="61.284" y="92.384"
                                                        fill="#44433f" />
                                                    <rect width="12.432" height="6.948" x="78.062" y="92.384"
                                                        fill="#44433f" />
                                                </g>
                                                <g>
                                                    <rect width="13.666" height="19.574" x="60.667" y="108.768"
                                                        fill="#44433f" />
                                                    <polygon fill="#ff9"
                                                        points="74.878 128.341 73.788 128.341 73.788 109.313 61.212 109.313 61.212 128.341 60.122 128.341 60.122 108.223 74.878 108.223" />
                                                </g>
                                                <g>
                                                    <rect width="6.414" height="9.187" x="39.736" y="111.599"
                                                        fill="#44433f" />
                                                    <polygon fill="#ff9"
                                                        points="46.406 120.786 45.895 120.786 45.895 111.855 39.992 111.855 39.992 120.786 39.481 120.786 39.481 111.343 46.406 111.343" />
                                                    <rect width="8.453" height=".858" x="38.717" y="120.782"
                                                        fill="#ff9" />
                                                    <rect width="6.414" height="9.187" x="49.954" y="111.599"
                                                        fill="#44433f" />
                                                    <polygon fill="#ff9"
                                                        points="56.624 120.786 56.113 120.786 56.113 111.855 50.21 111.855 50.21 120.786 49.699 120.786 49.699 111.343 56.624 111.343" />
                                                    <rect width="8.453" height=".858" x="48.935" y="120.782"
                                                        fill="#ff9" />
                                                    <g>
                                                        <rect width="6.414" height="9.187" x="78.631" y="111.599"
                                                            fill="#44433f" />
                                                        <polygon fill="#ff9"
                                                            points="85.301 120.786 84.79 120.786 84.79 111.855 78.887 111.855 78.887 120.786 78.376 120.786 78.376 111.343 85.301 111.343" />
                                                        <rect width="8.453" height=".858" x="77.612" y="120.782"
                                                            fill="#ff9" />
                                                        <rect width="6.414" height="9.187" x="88.849" y="111.599"
                                                            fill="#44433f" />
                                                        <polygon fill="#ff9"
                                                            points="95.519 120.786 95.008 120.786 95.008 111.855 89.105 111.855 89.105 120.786 88.594 120.786 88.594 111.343 95.519 111.343" />
                                                        <rect width="8.453" height=".858" x="87.83" y="120.782"
                                                            fill="#ff9" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ml-1">Add Records</span>
                                    </x-button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-2">
                                    <p class="text-gray-500">No records found</p>
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