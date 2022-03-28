<div>
    <div class="space-y-6">
        <div class="px-4 py-5 bg-white  sm:rounded-lg sm:p-6 border">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Visited Places and Stablishment</h3>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form>
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6">
                                <label for="place" class="block text-sm font-medium text-gray-700">
                                    Specific Place or Stablisment
                                </label>
                                <div>
                                    @if (count($visit_places)>0)
                                    <ul class="p-2">
                                        @foreach ($visit_places as $key=>$visit_place)
                                        <li wire:key="{{ $key }}-{{ $visit_place }}">{{ $visit_place }} <button
                                                wire:click.prevent="removeVisitedPlace('{{ $key }}')" type="button"
                                                class="ml-2 text-red-600">remove</button></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="w-full flex space-x-2">
                                    <input wire:model.defer="place_or_stablishment" type="text" name="place" id="place"
                                        autocomplete="place"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <x-button wire:click="addVisitedPlace">
                                        Add
                                    </x-button>
                                </div>
                                @error('place_or_stablishment')
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
            <x-button wire:click.prevent="saveVisitedPlace" info>Save</x-button>
        </div>
    </div>
</div>