<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex items-center justify-between">
            <div class="header-content">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.map-pin-house class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Cơ sở</h1>
                        <p class="header-subtitle">Quản lý các cơ sở trong hệ thống</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Cơ sở</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span>{{ $locations->total() ?? 0 }} cơ sở</span>
                </div>
                <button wire:click="addLocation" class="header-button">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span>Thêm cơ sở</span>
                </button>
            </div>
        </div>
    </div>

    <livewire:back.management.location.actions-location />

    {{-- Main content area --}}
    <div class="mt-6">
        <div class="theme-table-pink">
            <div class="overflow-x-auto">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center">Tên cơ sở</th>
                            <th class="text-center">Địa chỉ</th>
                            <th class="text-center hidden sm:table-cell">Người tạo</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($locations as $location)
                            <tr wire:key="location-{{ $location->id }}">
                                <td class="whitespace-nowrap text-center font-medium">
                                    {{ $location->name }}
                                </td>
                                <td class="whitespace-nowrap text-center font-medium">
                                    {{ $location->address }}
                                </td>
                                <td class="whitespace-nowrap text-center hidden sm:table-cell">
                                    {{ $location->createdBy->name }}
                                </td>
                                <td class="whitespace-nowrap text-center">
                                    <flux:dropdown>
                                        <flux:button icon:trailing="chevron-down">Thao tác</flux:button>

                                        <flux:menu>
                                            <flux:menu.item  icon="pencil"
                                                wire:click="editLocation({{ $location->id }})">Sửa thông tin
                                            </flux:menu.item>

                                            <flux:menu.separator />

                                            <flux:menu.item variant="danger" icon="trash"
                                                wire:click="deleteLocation({{ $location->id }})">Xóa
                                            </flux:menu.item>
                                        </flux:menu>
                                    </flux:dropdown>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-8">
                                    <div class="empty-state flex flex-col items-center">
                                        <flux:icon.map-pin class="w-8 h-8 mb-2" />
                                        <div class="text-sm">Không có cơ sở nào</div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($locations->hasPages())
                <div class="pagination-container">
                    {{ $locations->links() }}
                </div>
            @endif
        </div>
    </div>

</div>
