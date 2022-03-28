<div>
    <form>
        @csrf
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div>
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Quarantine Information</h3>
                </div>
                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="facility" class="block text-sm font-medium text-gray-700"> Select Facility </label>
                        <div class="mt-1">
                            <select wire:model.defer="facility_id" id="facility" name="facility" autocomplete="facility"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value=""></option>
                                @php
                                $facilities = \App\Models\Facility::all();
                                @endphp
                                @foreach ($facilities as $facility)
                                <option value="{{$facility->id}}">{{$facility->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('facility_id')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-3">
                        <label for="start_date" class="block text-sm font-medium text-gray-700"> Start Date </label>
                        <div class="mt-1">
                            <input wire:model.defer="start_date" type="date" name="start_date" id="start_date"
                                autocomplete="start_date"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('start_date')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-3">
                        <label for="end_date" class="block text-sm font-medium text-gray-700"> End Date </label>
                        <div class="mt-1">
                            <input wire:model.defer="end_date" type="date" name="end_date" id="end_date"
                                autocomplete="end_date"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="initial_status" class="block text-sm font-medium text-gray-700"> Initial Status
                        </label>
                        <div class="mt-1">
                            <select wire:model.defer="initial_status" id="init_status" name="initial_status"
                                autocomplete="initial_status"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="undifined">Undifined</option>
                                <option value="negative">Negative</option>
                                <option value="positive">Positive</option>
                            </select>
                        </div>
                        @error('initial_status')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="inti_symptoms" class="block text-sm font-medium text-gray-700"> Initial Symptoms
                        </label>
                        <div class="mt-1">
                            <input wire:model.defer="initial_symptoms" id="inti_symptoms" name="inti_symptoms"
                                type="text" autocomplete="inti_symptoms"
                                placeholder="e.g. Fever, Cough, etc (separated by comma)"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('initial_symptoms')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="flex justify-end space-x-3">
                <x-button wire:click="showList">Cancel</x-button>
                <x-button wire:click.prevent="create" info>Save</x-button>
            </div>
        </div>
    </form>
</div>