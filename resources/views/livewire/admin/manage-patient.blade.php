<div class="py-6">
    <div class="px-4 mx-auto space-y-4 max-w-7xl sm:px-6 md:px-8">
        <div class="flex items-end justify-between px-4 py-3 mx-auto bg-white border rounded-md">
            <h1 class="text-2xl font-semibold text-gray-900">Manage Patient</h1>
            <div>
                <div>
                    <input type="text" name="search" id="searc" wire:model.debounce.500ms="searchTerm"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Search Patient">
                </div>
            </div>
        </div>
        <div class="p-4 bg-white border rounded-md">
            <div>
                @if ($action=='showList')
                <div>
                    @include('admin.manage-patients.lists')
                </div>
                @endif
            </div>
            <div>
                @if ($action=='create')
                <div>
                    @include('admin.manage-patients.create')
                </div>
                @endif
            </div>
            <div>
                @if ($action=='edit')
                <div>
                    @include('admin.manage-patients.edit')
                </div>
                @endif
            </div>
            <div>
                @if ($action=='delete')
                <div>
                    @include('admin.manage-patients.delete-confirmation')
                </div>
                @endif
            </div>
            <div>
                @if ($action=='viewDetails')
                <div>
                    @include('admin.manage-patients.view-details')
                </div>
                @endif
            </div>

        </div>
    </div>
</div>