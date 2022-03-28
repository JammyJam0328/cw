<div class="py-6">
    <div class="px-4 mx-auto space-y-4 max-w-7xl sm:px-6 md:px-8">
        <div class="p-4 mx-auto bg-white border rounded-md flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-gray-900">Manage User</h1>
            <x-input placeholder="Search" wire:model.debounce.500ms="searchTerm" />
        </div>
        <div class="p-4 bg-white border rounded-md">
            <div>
                @include('admin.manage-users.list')
            </div>
        </div>
    </div>
</div>