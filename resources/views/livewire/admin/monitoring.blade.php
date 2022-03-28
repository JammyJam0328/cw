<div class="py-6">
    <div class="px-4 mx-auto space-y-4 max-w-7xl sm:px-6 md:px-8">
        <div class="flex items-center justify-between p-4 mx-auto bg-white border rounded-md">
            <h1 class="text-2xl font-semibold text-gray-900">Monitoring</h1>

        </div>
        <div class="p-4 bg-white border rounded-md">
            <div>
                @if ($action=='showList')
                <div>
                    @include('admin.monitoring.list')
                </div>
                @endif
            </div>
            <div>
                @if ($action=='create')
                <div>
                    @include('admin.monitoring.create')
                </div>
                @endif
            </div>
            <div>
                @if ($action=='viewDetails')
                <div>
                    @include('admin.monitoring.view-details')
                </div>
                @endif
            </div>
            <div>
                @if ($action=='deleting')
                <div>
                    @include('admin.monitoring.delete-confirmation')
                </div>
                @endif
            </div>
        </div>
    </div>
</div>