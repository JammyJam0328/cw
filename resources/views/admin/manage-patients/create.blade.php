<form>
    @csrf
    <div class="space-y-8 divide-y divide-gray-200">
        <div>
            <div>
                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
            </div>
            <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium text-gray-700"> First name </label>
                    <div class="mt-1">
                        <input wire:model.defer="firstname" type="text" name="first-name" id="first-name"
                            autocomplete="given-name"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('firstname')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="middle-name" class="block text-sm font-medium text-gray-700"> Middle name </label>
                    <div class="mt-1">
                        <input wire:model.defer="middlename" type="text" name="middle-name" id="middle-name"
                            autocomplete="middle-name"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('middlename')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium text-gray-700"> Last name </label>
                    <div class="mt-1">
                        <input wire:model.defer="lastname" type="text" name="last-name" id="last-name"
                            autocomplete="family-name"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('lastname')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="sex" class="block text-sm font-medium text-gray-700"> Sex </label>
                    <div class="mt-1">
                        <select wire:model.defer="sex" id="sex" name="sex" autocomplete="sex"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    @error('sex')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth </label>
                    <div class="mt-1">
                        <input wire:model.defer="date_of_birth" id="dob" name="dob" type="date" autocomplete="dob"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('date_of_birth')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                    <div class="mt-1">
                        <input wire:model.defer="age" id="age" name="age" type="number" autocomplete="age"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('age')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-6">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <div class="mt-1">
                        <input wire:model.defer="address" id="address" name="address" type="text" autocomplete="address"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('address')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="contact_number" class="block text-sm font-medium text-gray-700">Contact Number</label>
                    <div class="mt-1">
                        <input wire:model.defer="contact" id="contact_number" name="contact_number" type="number"
                            autocomplete="contact_number"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('contact')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="purok" class="block text-sm font-medium text-gray-700"> Purok </label>
                    <div class="mt-1">
                        <select wire:model.defer="purok_id" id="purok" name="purok" autocomplete="purok"
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
                    @error('purok_id')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="pt-5">
        <div class="flex justify-end space-x-3">
            <x-button wire:click="showList">
                Cancel
            </x-button>
            <x-button info wire:click.prevent="create">
                Save
            </x-button>
        </div>
    </div>
</form>