<div class="py-6">
    <div class="px-4 mx-auto space-y-4 max-w-7xl sm:px-6 md:px-8">
        <div class="p-4 mx-auto bg-white border rounded-md">
            <h1 class="text-2xl font-semibold text-gray-900">Manage Quarantine</h1>
        </div>
        <div class="p-4 bg-white border rounded-md">
            <div>
                @if ($action=='showList')
                <div>
                    @include('admin.manage-quarantine.lists')
                </div>
                @endif
            </div>
            <div>
                @if ($action=='create')
                <div>
                    @include('admin.manage-quarantine.create')
                </div>
                @endif
            </div>
            <div>
                @if ($action=='edit')
                <div>
                    @include('admin.manage-quarantine.edit')
                </div>
                @endif
            </div>
            <div>
                @if ($action=='view-details')
                <div>
                    @include('admin.manage-quarantine.view-details')
                </div>
                @endif
            </div>

        </div>
    </div>
</div>