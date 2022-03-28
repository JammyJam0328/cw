<div>
    <form>
        @csrf
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div>
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Monitoring Details</h3>
                    <p class="mt-1 text-sm text-gray-500">Please be guided of the last No. of Day recorded</p>
                </div>
                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="day" class="block text-sm font-medium text-gray-700"> Day </label>
                        <div class="mt-1">
                            <select id="day" name="day" autocomplete="day" wire:model.defer="day_no"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @php
                                $days = 30;
                                @endphp
                                @for ($i = 1; $i < $days; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                            @error('day_no')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="date" class="block text-sm font-medium text-gray-700"> Date
                        </label>
                        <div class="mt-1">
                            <input type="date" name="date" id="date" autocomplete="date" wire:model.defer="date"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @error('date')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="status" class="block text-sm font-medium text-gray-700"> Status update </label>
                        <div class="mt-1">
                            <select id="status" name="status" autocomplete="status" wire:model.defer="status"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="undifined">Undifined</option>
                                <option value="negative">Negative</option>
                                <option value="positive">Positive</option>
                            </select>
                            @error('status-update')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>

            <div class="pt-8">
                <div>
                    <h3 class="text-lg font-medium leading-6 text-gray-900">New Symptoms (if neccessary)</h3>
                </div>
                <div class="mt-2">
                    <fieldset class="space-y-5">
                        <legend class="sr-only">Symptoms</legend>
                        @php
                        $symptoms = \App\Models\Symptom::all();
                        @endphp
                        @foreach ($symptoms as $key=>$symptom)
                        <div wire:click="selectSymptoms('{{ $symptom->id }}')" class="relative flex items-start">
                            <div class="flex items-center h-5">
                                <div>
                                    @if (in_array($symptom->id, $selected_symptoms))
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8"
                                        enable-background="new 0 0 64 64" viewBox="0 0 64 64">
                                        <linearGradient id="a" x1="34.098" x2="34.098" y1="13.164" y2="63.882"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#fff" stop-opacity=".25" />
                                            <stop offset="1" stop-color="#9495fa" />
                                        </linearGradient>
                                        <path fill="url(#a)"
                                            d="M8.8,42.1c-1.6-2.6-1.5-6-0.4-8.8c1.2-2.8,3.2-5.2,5.5-7.2c8-7.4,18.5-11.9,29.4-12.7
                                        		c3.4-0.3,6.9-0.1,10.1,1.1c3.2,1.3,6,3.8,6.9,7.1c1.2,4.4-1.2,9-4.1,12.5c-2.9,3.5-6.5,6.6-8.4,10.7c-1.5,3.4-1.8,7.3-3.4,10.6
                                        		c-2.7,5.8-9.4,9.3-15.7,8.4c-5.1-0.8-9.4-4.4-11.6-9c-0.9-1.9-1.3-4-2.4-5.9C13.1,46.3,10.4,44.6,8.8,42.1z" />
                                        <path fill="#ff9d23"
                                            d="M24.2,3.6c-0.2,0-0.4-0.1-0.5-0.2c-0.3-0.3-0.3-0.8,0-1.1l1.6-1.6c0.3-0.3,0.8-0.3,1.1,0l1.4,1.4
                                        			c0.3,0.3,0.3,0.8,0,1.1c-0.3,0.3-0.8,0.3-1.1,0l-0.9-0.9l-1.1,1.1C24.6,3.5,24.4,3.6,24.2,3.6z" />
                                        <path fill="#9495fa"
                                            d="M58.4 41.9c-.2 0-.4-.1-.5-.2-.3-.3-.3-.8 0-1.1l1.6-1.6c.3-.3.8-.3 1.1 0l1.4 1.4c.3.3.3.8 0 1.1-.3.3-.8.3-1.1 0L60 40.6 59 41.7C58.8 41.8 58.6 41.9 58.4 41.9zM2.5 27.3c-.2 0-.4-.1-.5-.2-.3-.3-.3-.8 0-1.1l2.1-2.1c.3-.3.8-.3 1.1 0 .3.3.3.8 0 1.1l-2.1 2.1C2.9 27.3 2.7 27.3 2.5 27.3z" />
                                        <path fill="#ff4b4d" d="M42.8,10.1c-0.2,0-0.4-0.1-0.5-0.2c-0.3-0.3-0.3-0.8,0-1.1l2.5-2.5C45,6,45.5,6,45.8,6.3
                                        			c0.3,0.3,0.3,0.8,0,1.1l-2.5,2.5C43.2,10,43,10.1,42.8,10.1z" />
                                        <path fill="#0000db" d="M8.9,57.6c-0.2,0-0.4-0.1-0.5-0.2c-0.3-0.3-0.3-0.8,0-1.1l2.5-2.5c0.3-0.3,0.8-0.3,1.1,0
                                        			c0.3,0.3,0.3,0.8,0,1.1l-2.5,2.5C9.3,57.5,9.1,57.6,8.9,57.6z" />
                                        <path fill="#ff9d23" d="M51.6,56c-0.2,0-0.4-0.1-0.5-0.2c-0.3-0.3-0.3-0.8,0-1.1l2.5-2.5c0.3-0.3,0.8-0.3,1.1,0
                                        			c0.3,0.3,0.3,0.8,0,1.1l-2.5,2.5C52,55.9,51.8,56,51.6,56z" />
                                        <path fill="#f86c66" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.236"
                                            d="M47.6,34c0,8.3-6.7,15-15,15c-8.3,0-15-6.7-15-15s6.7-15,15-15C40.9,19,47.6,25.7,47.6,34z" />
                                        <path fill="#ff9d23" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.321"
                                            d="M27.9,14c0,1.2-1,2.2-2.2,2.2c-1.2,0-2.2-1-2.2-2.2c0-1.2,1-2.2,2.2-2.2C26.9,11.8,27.9,12.8,27.9,14z" />
                                        <path fill="#fed3be" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.236"
                                            d="M34.9 31.3c0 1.2-1 2.2-2.2 2.2-1.2 0-2.2-1-2.2-2.2 0-1.2 1-2.2 2.2-2.2C33.9 29.1 34.9 30.1 34.9 31.3zM41.5 35.6c0 1.2-1 2.2-2.2 2.2-1.2 0-2.2-1-2.2-2.2 0-1.2 1-2.2 2.2-2.2C40.5 33.4 41.5 34.4 41.5 35.6z" />
                                        <path fill="#ff9d23" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.321"
                                            d="M55.1,24.6c0,1.2-1,2.2-2.2,2.2c-1.2,0-2.2-1-2.2-2.2c0-1.2,1-2.2,2.2-2.2C54.2,22.4,55.1,23.4,55.1,24.6z" />
                                        <path fill="#9495fa" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.394"
                                            d="M17.6 49c0 1.2-1 2.2-2.2 2.2-1.2 0-2.2-1-2.2-2.2 0-1.2 1-2.2 2.2-2.2C16.6 46.7 17.6 47.7 17.6 49zM19.3 17.4c0 .9-.7 1.6-1.6 1.6S16 18.3 16 17.4c0-.9.7-1.6 1.6-1.6S19.3 16.5 19.3 17.4z" />
                                        <path fill="#ff9d23" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.321" d="M39.7,12.6c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6
                                        			C39,10.9,39.7,11.7,39.7,12.6z" />
                                        <path fill="#9495fa" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.394" d="M46.6,16.8c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6
                                        			C45.9,15.1,46.6,15.9,46.6,16.8z" />
                                        <path fill="#ff9d23" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.321"
                                            d="M13,23.4c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6C12.3,21.8,13,22.5,13,23.4z" />
                                        <path fill="#fed3be" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.236"
                                            d="M29 27.3c0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6 0-.9.7-1.6 1.6-1.6C28.3 25.6 29 26.4 29 27.3zM27.9 36.2c0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6 0-.9.7-1.6 1.6-1.6C27.2 34.6 27.9 35.3 27.9 36.2zM35.3 41.1c0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6 0-.9.7-1.6 1.6-1.6C34.6 39.5 35.3 40.2 35.3 41.1zM40.4 27.4c0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6 0-.9.7-1.6 1.6-1.6C39.7 25.8 40.4 26.5 40.4 27.4z" />
                                        <path fill="#9495fa" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.394" d="M14.8,31.3c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6
                                        			C14.1,29.6,14.8,30.4,14.8,31.3z" />
                                        <path fill="#ff9d23" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.321" d="M12.8,39.5c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6
                                        			C12.1,37.8,12.8,38.6,12.8,39.5z" />
                                        <path fill="#9495fa" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.394" d="M51.1,48.1c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6
                                        			C50.4,46.5,51.1,47.2,51.1,48.1z" />
                                        <path fill="#ff9d23" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.321" d="M54.9,40.7c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6
                                        			C54.1,39.1,54.9,39.8,54.9,40.7z" />
                                        <path fill="#9495fa" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.394" d="M53.4,33.3c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6
                                        			C52.7,31.6,53.4,32.4,53.4,33.3z" />
                                        <path fill="#ff9d23" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.321" d="M43.7,51.9c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6C43,50.3,43.7,51,43.7,51.9z
                                        			" />
                                        <path fill="#9495fa" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.394" d="M35.9,55.6c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6
                                        			C35.2,53.9,35.9,54.7,35.9,55.6z" />
                                        <path fill="#ff9d23" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.321" d="M26.1,53.6c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6c0-0.9,0.7-1.6,1.6-1.6
                                        			C25.4,51.9,26.1,52.7,26.1,53.6z" />
                                        <polyline fill="none" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.407"
                                            points="28.3 22.4 27.5 19.9 26.4 16.2" />
                                        <polyline fill="none" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.407"
                                            points="35.3 22.7 36.2 19.5 37.6 14.2" />
                                        <line x1="44" x2="41.3" y1="18.1" y2="21.8" fill="none" stroke="#0000db"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.407" />
                                        <polyline fill="none" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.407"
                                            points="42.3 29.1 46.1 27.5 50.9 25.5" />
                                        <line x1="50.1" x2="47.6" y1="33.3" y2="33.3" fill="none" stroke="#0000db"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.407" />
                                        <line x1="51.6" x2="46.7" y1="40.3" y2="39.1" fill="none" stroke="#0000db"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.407" />
                                        <polyline fill="none" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.407"
                                            points="42.1 41.7 44.2 43.5 48.2 47" />
                                        <line x1="41.3" x2="39.7" y1="50.4" y2="47.2" fill="none" stroke="#0000db"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.407" />
                                        <polyline fill="none" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.407"
                                            points="33.1 46.5 33.4 48.9 34.1 53.9" />
                                        <polyline fill="none" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.407"
                                            points="28.7 43.6 26.9 47.8 25.1 52.1" />
                                        <line x1="21.4" x2="17.1" y1="43.9" y2="47.5" fill="none" stroke="#0000db"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.407" />
                                        <polyline fill="none" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.407"
                                            points="21.4 36.8 18.1 37.7 12.8 39.1" />
                                        <line x1="14.8" x2="17.8" y1="31.6" y2="32.3" fill="none" stroke="#0000db"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.407" />
                                        <polyline fill="none" stroke="#0000db" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.407"
                                            points="21.2 27.8 19.4 27 12.9 24.1" />
                                        <line x1="18.7" x2="22.5" y1="18.7" y2="22.7" fill="none" stroke="#0000db"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.407" />
                                    </svg>
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8"
                                        enable-background="new 0 0 64 64" viewBox="0 0 64 64">
                                        <path fill="#070707"
                                            d="M41.4,30.1c-2.2,0-3.9,1.8-3.9,3.9c0,2.2,1.8,3.9,3.9,3.9c2.2,0,3.9-1.8,3.9-3.9
                                                                		C45.3,31.9,43.5,30.1,41.4,30.1z M41.4,36.1c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2c1.1,0,2,0.9,2,2C43.4,35.2,42.5,36.1,41.4,36.1z" />
                                        <path fill="#070707"
                                            d="M59.6,15.4c-2.2,0-3.9,1.8-3.9,3.9c0,0.2,0,0.4,0.1,0.6l-4.8,2c-2.6-4.9-7.1-8.6-12.5-10.2l1.4-5.4
                                                                		c1.7-0.1,3-1.5,3-3.2c0-1.8-1.4-3.2-3.2-3.2c-1.8,0-3.2,1.4-3.2,3.2c0,1.1,0.6,2.1,1.5,2.7l-1.4,5.4c-1.3-0.3-2.7-0.4-4.1-0.4
                                                                		c-2.2,0-4.2,0.3-6.2,0.9l-1-3.3c1.1-0.7,1.9-1.9,1.9-3.3c0-2.2-1.8-3.9-3.9-3.9c-2.2,0-3.9,1.8-3.9,3.9c0,2.2,1.8,3.9,3.9,3.9
                                                                		c0.1,0,0.1,0,0.2,0l1.1,3.4c-4.3,1.8-7.8,4.9-10.1,8.8l-7.2-3.2c0-0.1,0-0.2,0-0.3c0-1.8-1.4-3.2-3.2-3.2c-1.8,0-3.2,1.4-3.2,3.2
                                                                		c0,1.8,1.4,3.2,3.2,3.2c0.9,0,1.8-0.4,2.4-1.1l7.1,3.2c-1.3,2.7-2,5.7-2,8.9c0,1.4,0.1,2.9,0.4,4.2l-5.5,1.4
                                                                		c-0.6-0.9-1.6-1.5-2.7-1.5c-1.8,0-3.2,1.4-3.2,3.2c0,1.8,1.4,3.2,3.2,3.2c1.7,0,3.1-1.3,3.2-3l5.5-1.4c1.7,5.7,5.8,10.4,11.2,12.9
                                                                		L21.7,55c-0.1,0-0.2,0-0.3,0c-1.8,0-3.2,1.4-3.2,3.2c0,1.8,1.4,3.2,3.2,3.2c1.8,0,3.2-1.4,3.2-3.2c0-1-0.4-1.8-1.1-2.4l1.8-4.1
                                                                		c2.2,0.8,4.6,1.3,7.2,1.3c0.1,0,0.1,0,0.2,0l0.7,5.1c-1.1,0.5-1.8,1.6-1.8,2.9c0,1.8,1.4,3.2,3.2,3.2c1.8,0,3.2-1.4,3.2-3.2
                                                                		c0-1.6-1.1-2.9-2.6-3.1l-0.6-4.9c5.3-0.5,10-3,13.4-6.8l4.1,3.6c-0.2,0.4-0.3,0.8-0.3,1.2c0,1.8,1.4,3.2,3.2,3.2
                                                                		c1.8,0,3.2-1.4,3.2-3.2c0-1.8-1.4-3.2-3.2-3.2c-0.6,0-1.2,0.2-1.6,0.5l-4.1-3.6c2.7-3.5,4.2-7.9,4.2-12.7c0-2.9-0.6-5.7-1.7-8.2
                                                                		l4.7-2c0.7,1,1.9,1.6,3.1,1.6c2.2,0,3.9-1.8,3.9-3.9C63.5,17.2,61.8,15.4,59.6,15.4z M39.7,1.9c0.7,0,1.2,0.6,1.2,1.2
                                                                		c0,0.7-0.6,1.2-1.2,1.2c-0.7,0-1.2-0.6-1.2-1.2C38.4,2.5,39,1.9,39.7,1.9z M21.1,5.1c0-1.1,0.9-2,2-2s2,0.9,2,2c0,1.1-0.9,2-2,2
                                                                		S21.1,6.2,21.1,5.1z M3.9,19c-0.7,0-1.2-0.6-1.2-1.2s0.6-1.2,1.2-1.2c0.7,0,1.2,0.6,1.2,1.2S4.6,19,3.9,19z M3.6,40.5
                                                                		c-0.7,0-1.2-0.6-1.2-1.2c0-0.7,0.6-1.2,1.2-1.2s1.2,0.6,1.2,1.2C4.9,39.9,4.3,40.5,3.6,40.5z M21.4,59.4c-0.7,0-1.2-0.6-1.2-1.2
                                                                		c0-0.7,0.6-1.2,1.2-1.2c0.7,0,1.2,0.6,1.2,1.2C22.7,58.8,22.1,59.4,21.4,59.4z M35.9,60.8c0,0.7-0.6,1.2-1.2,1.2
                                                                		c-0.7,0-1.2-0.6-1.2-1.2c0-0.7,0.6-1.2,1.2-1.2C35.3,59.6,35.9,60.1,35.9,60.8z M56.2,50.8c0,0.7-0.6,1.2-1.2,1.2
                                                                		c-0.7,0-1.2-0.6-1.2-1.2s0.6-1.2,1.2-1.2C55.7,49.6,56.2,50.1,56.2,50.8z M51.5,31.9c0,4.3-1.4,8.2-3.8,11.4l-2.1-1.8
                                                                		c-0.4-0.3-1-0.3-1.4,0.1c-0.3,0.4-0.3,1,0.1,1.4l2.1,1.8c-3.1,3.4-7.4,5.7-12.2,6.1L34,48.5c-0.1-0.5-0.6-0.9-1.1-0.8
                                                                		c-0.5,0.1-0.9,0.6-0.8,1.1l0.3,2.2c-2.2,0-4.3-0.4-6.3-1.1l2-4.7c0.2-0.5,0-1.1-0.5-1.3c-0.5-0.2-1.1,0-1.3,0.5l-2,4.7
                                                                		c-4.8-2.3-8.5-6.5-10.1-11.6l3.4-0.9c0.5-0.1,0.8-0.7,0.7-1.2c-0.1-0.5-0.7-0.8-1.2-0.7l-3.4,0.9c-0.2-1.2-0.4-2.5-0.4-3.7
                                                                		c0-2.9,0.7-5.6,1.8-8.1l1.5,0.7c0.1,0.1,0.3,0.1,0.4,0.1c0.4,0,0.7-0.2,0.9-0.6c0.2-0.5,0-1.1-0.5-1.3l-1.4-0.6
                                                                		c2.1-3.4,5.2-6.2,8.9-7.8l0.7,2.4c0.1,0.4,0.5,0.7,0.9,0.7c0.1,0,0.2,0,0.3,0c0.5-0.2,0.8-0.7,0.6-1.2l-0.8-2.4
                                                                		c1.8-0.6,3.7-0.8,5.6-0.8c1.2,0,2.4,0.1,3.6,0.3l-0.9,3.4c-0.1,0.5,0.2,1,0.7,1.2c0.1,0,0.2,0,0.2,0c0.4,0,0.8-0.3,0.9-0.7l0.9-3.5
                                                                		c4.8,1.4,8.8,4.7,11.2,9.1l-4.2,1.7c-0.5,0.2-0.7,0.8-0.5,1.3c0.2,0.4,0.5,0.6,0.9,0.6c0.1,0,0.3,0,0.4-0.1l4.3-1.8
                                                                		C51,26.7,51.5,29.2,51.5,31.9z M59.6,21.3c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2c1.1,0,2,0.9,2,2C61.6,20.4,60.7,21.3,59.6,21.3z" />
                                        <path fill="#070707"
                                            d="M25.3 19.7c-1.8 0-3.2 1.4-3.2 3.2 0 1.8 1.4 3.2 3.2 3.2 1.8 0 3.2-1.4 3.2-3.2C28.5 21.1 27.1 19.7 25.3 19.7zM25.3 24.1c-.7 0-1.2-.6-1.2-1.2 0-.7.6-1.2 1.2-1.2s1.2.6 1.2 1.2C26.6 23.6 26 24.1 25.3 24.1zM23.9 31.7c-1.8 0-3.2 1.4-3.2 3.2 0 1.8 1.4 3.2 3.2 3.2 1.8 0 3.2-1.4 3.2-3.2C27.1 33.1 25.6 31.7 23.9 31.7zM23.9 36.1c-.7 0-1.2-.6-1.2-1.2 0-.7.6-1.2 1.2-1.2.7 0 1.2.6 1.2 1.2C25.1 35.5 24.6 36.1 23.9 36.1zM33.8 38.3c-1.8 0-3.2 1.4-3.2 3.2 0 1.8 1.4 3.2 3.2 3.2 1.8 0 3.2-1.4 3.2-3.2C37 39.7 35.6 38.3 33.8 38.3zM33.8 42.7c-.7 0-1.2-.6-1.2-1.2 0-.7.6-1.2 1.2-1.2.7 0 1.2.6 1.2 1.2C35.1 42.1 34.5 42.7 33.8 42.7zM40.6 26.3c1.8 0 3.2-1.4 3.2-3.2 0-1.8-1.4-3.2-3.2-3.2-1.8 0-3.2 1.4-3.2 3.2C37.4 24.8 38.9 26.3 40.6 26.3zM40.6 21.8c.7 0 1.2.6 1.2 1.2 0 .7-.6 1.2-1.2 1.2-.7 0-1.2-.6-1.2-1.2C39.4 22.4 39.9 21.8 40.6 21.8z" />
                                    </svg>
                                    @endif
                                </div>
                            </div>
                            <div class="ml-3 ">
                                <label for="selectedSymtoms{{ $key }}"
                                    class="{{ in_array($symptom->id,$selected_symptoms) ? 'font-bold text-green-700':'font-medium text-gray-700' }}">{{
                                    $symptom->name }}</label>
                            </div>
                        </div>
                        @endforeach
                    </fieldset>
                    <div class="mt-7">
                        <label for="comment" class="block text-sm font-medium text-gray-700 ">Other Symptoms</label>
                        <div class="mt-1">
                            <textarea rows="4" name="other_symptoms" id="other_symptoms"
                                wire:model.defer="other_symptoms" placeholder="Optional"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="flex justify-end space-x-3">
                <x-button wire:click="showList">Cancel</x-button>
                <x-button wire:click.prevent="save" info>Save</x-button>
            </div>
        </div>
    </form>
</div>