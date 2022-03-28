<form>
    @csrf
    <div class="space-y-8 divide-y divide-gray-200">
        <div>
            <div>
                <h3 class="text-lg font-medium leading-6 text-gray-900">Update Information</h3>
            </div>
            <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium text-gray-700"> First name </label>
                    <div class="mt-1">
                        <input wire:model.defer="edit_firstname" type="text" name="first-name" id="first-name"
                            autocomplete="given-name"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('edit_firstname')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="middle-name" class="block text-sm font-medium text-gray-700"> Middle name </label>
                    <div class="mt-1">
                        <input wire:model.defer="edit_middlename" type="text" name="middle-name" id="middle-name"
                            autocomplete="middle-name"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('edit_middlename')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium text-gray-700"> Last name </label>
                    <div class="mt-1">
                        <input wire:model.defer="edit_lastname" type="text" name="last-name" id="last-name"
                            autocomplete="family-name"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('edit_lastname')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="sex" class="block text-sm font-medium text-gray-700"> Sex </label>
                    <div class="mt-1">
                        <select wire:model.defer="edit_sex" id="sex" name="sex" autocomplete="sex"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    @error('edit_sex')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth </label>
                    <div class="mt-1">
                        <input wire:model.defer="edit_date_of_birth" id="dob" name="dob" type="date" autocomplete="dob"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('edit_date_of_birth')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                    <div class="mt-1">
                        <input wire:model.defer="edit_age" id="age" name="age" type="number" autocomplete="age"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('edit_age')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-6">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <div class="mt-1">
                        <input wire:model.defer="edit_address" id="address" name="address" type="text"
                            autocomplete="address"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('edit_address')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="contact_number" class="block text-sm font-medium text-gray-700">Contact Number</label>
                    <div class="mt-1">
                        <input wire:model.defer="edit_contact" id="contact_number" name="contact_number" type="number"
                            autocomplete="contact_number"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('edit_contact')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="purok" class="block text-sm font-medium text-gray-700"> Purok </label>
                    <div class="mt-1">
                        <select wire:model.defer="edit_purok_id" id="purok" name="purok" autocomplete="purok"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value=""></option>
                            @php
                            $puroks = \App\Models\Purok::all();
                            @endphp
                            @foreach ($puroks as $purok)
                            <option value="{{$purok->id}}">{{$purok->name}}</option>
                            @endforeach
                            @endphp
                        </select>
                    </div>
                    @error('edit_purok_id')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>


            </div>
        </div>

    </div>

    <div class="pt-5">
        <div class="flex justify-end">
            <button wire:click="showList" type="button"
                class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
            <button wire:click.prevent="update" type="button"
                class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
        </div>
    </div>
</form>