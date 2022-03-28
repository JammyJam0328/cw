<div>
    <form>
        @csrf
        <div class="my-2">
            <h1 class="text-xl font-semibold text-gray-600">Edit Product</h1>
        </div>
        <div class="mb-6">
            <label for="item_name" class="block mb-2 text-sm font-medium text-gray-900 ">
                Product Name
            </label>
            <input type="text" id="item_name" wire:model.defer="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="e.g Lucky Me Noodles" required="">
            @error('name')
            <span class="text-red-500 ">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="product_type" class="block mb-2 text-sm font-medium text-gray-900 ">
                Product Type
            </label>
            <select id="product_type" name="product_type" wire:model.defer="product_type"
                class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="" selected>Select Item Type</option>
                @foreach ($itemTypes as $type)
                <option value="{{ $type }}">{{ $type }}</option>
                @endforeach
            </select>
            @error('item_type')
            <span class="text-red-500 ">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end space-x-2">
            <x-button wire:click="showList">Cancel</x-button>
            <x-button wire:click.prevent="saveItemWithRation" info>
                Save
            </x-button>
        </div>
    </form>
</div>