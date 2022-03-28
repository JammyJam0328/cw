<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
    <div class="px-4 py-12 mx-auto text-center max-w-7xl sm:px-6 lg:py-16 lg:px-8">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            <span class="block">
                Are you sure you want to delete this Quarantine Record?
            </span>
            <span class="block">
                You will not be able to recover this record.
            </span>
        </h2>
        <div class="flex justify-center mt-8">
            <div class="inline-flex border rounded-md">
                <button wire:click="showList" type="button"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-gray-500 bg-white border-transparent rounded-md hover:bg-gray-50">
                    Cancel
                </button>
            </div>
            <div class="inline-flex ml-3">
                <button wire:click="delete" type="button"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-red-600 border border-transparent rounded-md hover:bg-red-500">
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>