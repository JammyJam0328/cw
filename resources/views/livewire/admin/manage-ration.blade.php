<div class="py-6">
    <div class="px-4 mx-auto space-y-4 max-w-7xl sm:px-6 md:px-8">
        <div class="flex items-end justify-between p-4 mx-auto bg-white border rounded-md">
            <h1 class="text-2xl font-semibold text-gray-900">Manage Ration</h1>

        </div>
        <div class="p-4 bg-white border rounded-md">
            <div class="space-y-5">
                @if ($action=='showList')
                <div wire:key="item-list-12345">
                    @include('admin.manage-ration.item-lists')
                </div>
                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center">
                        <span class="px-2 text-sm text-gray-500 bg-white"> </span>
                    </div>
                </div>
                <div wire:key="ration-list-12345">
                    @include('admin.manage-ration.lists')
                </div>
                @endif
            </div>
            <div>
                @if ($action=='create-item')
                <div>
                    @include('admin.manage-ration.create-item')
                </div>
                @endif
                @if ($action=='edit-item')
                <div>
                    @include('admin.manage-ration.edit-item')
                </div>
                @endif
            </div>
            <div>
                @if ($action=='create-ration')
                Create Ration
                @endif
            </div>
        </div>
    </div>
</div>