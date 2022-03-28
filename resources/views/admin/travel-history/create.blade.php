<div>
    <div class="space-y-6">
        <div class="px-4 py-5 bg-white  sm:rounded-lg sm:p-6 border">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Travel History Information</h3>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form>
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6">
                                <label for="place" class="block text-sm font-medium text-gray-700">
                                    Place
                                </label>
                                <input wire:model.defer="place" type="text" name="place" id="place" autocomplete="place"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('place')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="date_start" class="block text-sm font-medium text-gray-700">
                                    Date Start
                                </label>
                                <input wire:model.defer="date_start" type="date" name="date_start" id="date_start"
                                    autocomplete="date_start"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('date_start')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="date_end" class="block text-sm font-medium text-gray-700">
                                    Date End
                                </label>
                                <input wire:model.defer="date_end" type="date" name="date_end" id="date_end"
                                    autocomplete="email"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('date_end')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="no_days" class="block text-sm font-medium text-gray-700">
                                    Number of Days
                                </label>
                                <input wire:model.defer="number_of_days" type="text" name="no_days" id="no_days"
                                    autocomplete="no_days"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('number_of_days')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="flex justify-end">
            <button wire:click="$set('action','showList')" type="button"
                class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
            <button wire:click.prevent="saveTravelHistory" type="button" wire:loading.attr="disabled"
                wire:target="saveTravelHistory"
                class="inline-flex disabled:bg-gray-700 disabled:cursor-wait justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Save</button>
        </div>
    </div>
</div>