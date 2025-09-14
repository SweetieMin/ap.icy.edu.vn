<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.shield-check class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Quyền hạn</h1>
                        <p class="header-subtitle">Quản lý quyền hạn và phân quyền trong hệ thống</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Quyền hạn</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span>{{ $permissions->count() }} quyền hạn</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
                    <button wire:click='addPermission' class="header-button w-full sm:w-auto">
                        <flux:icon.plus class="w-4 h-4 sm:w-5 sm:h-5" />
                        <span class="hidden sm:inline">Thêm quyền hạn</span>
                        <span class="sm:hidden">Thêm</span>
                    </button>
                    
                    <button wire:click='addBulkPermission' class="header-button w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white">
                        <flux:icon.plus class="w-4 h-4 sm:w-5 sm:h-5" />
                        <span class="hidden sm:inline">Thêm nhiều</span>
                        <span class="sm:hidden">Nhiều</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <livewire:back.access.permission.actions-permission />

    {{-- Main content area --}}
    <div class="mt-6">
        <div class="theme-table-pink">
            <div class="overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th>Router</th>
                                <th>Tên hiển thị</th>
                                <th class="text-center">Hiển thị</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($permissions as $permission)
                            <tr wire:key="permission-{{ $permission->id }}">
                                <td>
                                    {{ $permission->router }}
                                </td>
                                <td>
                                    {{ $permission->displayName }}
                                </td>
                                <td class="text-center">
                                    <flux:badge variant="solid" color="{{ $permission->isShow ? 'green' : 'zinc' }}">
                                        {{ $permission->isShow ? 'Có' : 'Không' }}
                                    </flux:badge>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <flux:button size="sm" variant="primary" icon="square-pen"
                                            wire:click="editPermission({{ $permission->id }})" class="cursor-pointer">
                                            Sửa
                                        </flux:button>
                                        <flux:button size="sm" variant="danger" icon="trash"
                                            wire:click="deletePermission({{ $permission->id }})" class="cursor-pointer">
                                            Xóa
                                        </flux:button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-12">
                                    <div class="empty-state flex flex-col items-center">
                                        <flux:icon.shield-check class="w-12 h-12 mb-4" />
                                        <h3 class="text-lg font-medium mb-2">
                                            Không có quyền hạn nào
                                        </h3>
                                        <p>
                                            Chưa có quyền hạn nào được tạo trong hệ thống
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($permissions->hasPages())
                <div class="pagination-container">
                    {{ $permissions->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
