<div>
    <div class="space-y-6">
        <div class="px-4 py-5 bg-white  sm:rounded-lg sm:p-6 border">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Update Travel History Information</h3>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form>
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6">
                                <label for="place" class="block text-sm font-medium text-gray-700">
                                    Place
                                </label>
                                <input wire:model.defer="new_place" type="text" name="place" id="place"
                                    autocomplete="place"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('new_place')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="date_start" class="block text-sm font-medium text-gray-700">
                                    Date Start
                                </label>
                                <input wire:model.defer="new_date_start" type="date" name="date_start" id="date_start"
                                    autocomplete="date_start"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('new_date_start')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="date_end" class="block text-sm font-medium text-gray-700">
                                    Date End
                                </label>
                                <input wire:model.defer="new_date_end" type="date" name="date_end" id="date_end"
                                    autocomplete="email"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('new_date_end')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="no_days" class="block text-sm font-medium text-gray-700">
                                    Number of Days
                                </label>
                                <input wire:model.defer="new_number_of_days" type="text" name="no_days" id="no_days"
                                    autocomplete="no_days"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('new_number_of_days')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex justify-end space-x-3">
            <x-button wire:click="showList">Cancel</x-button>
            <x-button wire:click.prevent="updateTravelHistory" info>Save</x-button>
        </div>
    </div>
</div>