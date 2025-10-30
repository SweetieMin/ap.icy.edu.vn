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
            {{-- Desktop Table View --}}
            <div class="hidden md:block overflow-x-auto">
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
                        <tr wire:key="permission-desktop-{{ $permission->id }}">
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

        {{-- Mobile Card View --}}
        <div class="md:hidden space-y-3">
            @forelse ($permissions as $permission)
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                     x-data="{ expanded: false }" 
                     wire:key="permission-mobile-{{ $permission->id }}">
                    
                    {{-- Main Row --}}
                    <div class="p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center">
                                <flux:icon.shield-check class="w-4 h-4 text-amber-600" />
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">{{ $permission->displayName }}</div>
                                <div class="text-sm text-gray-500">{{ $permission->router }}</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-2">
                            <flux:badge variant="solid" color="{{ $permission->isShow ? 'green' : 'zinc' }}">
                                {{ $permission->isShow ? 'Có' : 'Không' }}
                            </flux:badge>
                            
                            <button @click="expanded = !expanded" 
                                    class="p-2 rounded-full hover:bg-gray-100">
                                <svg class="w-5 h-5 text-gray-400" 
                                     :class="{ 'rotate-180': expanded }" 
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Expanded Details --}}
                    <div x-show="expanded" 
                         class="border-t border-gray-100 bg-gray-50">
                        
                        <div class="p-4 space-y-3">
                            {{-- Router --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Router:</span>
                                <span class="text-sm text-gray-900 font-mono">{{ $permission->router }}</span>
                            </div>

                            {{-- Tên hiển thị --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Tên hiển thị:</span>
                                <span class="text-sm text-gray-900">{{ $permission->displayName }}</span>
                            </div>

                            {{-- Hiển thị --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Hiển thị:</span>
                                <flux:badge variant="solid" color="{{ $permission->isShow ? 'green' : 'zinc' }}">
                                    {{ $permission->isShow ? 'Có' : 'Không' }}
                                </flux:badge>
                            </div>

                            {{-- Actions --}}
                            <div class="pt-3 border-t border-gray-200">
                                <div class="flex space-x-2">
                                    <button wire:click="editPermission({{ $permission->id }})"
                                            class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                        <span>Sửa</span>
                                    </button>
                                    
                                    <button wire:click="deletePermission({{ $permission->id }})"
                                            class="flex-1 bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-red-700 transition-colors flex items-center justify-center space-x-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        <span>Xóa</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="bg-white rounded-lg border border-gray-200 p-8">
                    <div class="empty-state flex flex-col items-center">
                        <flux:icon.shield-check class="w-12 h-12 mb-4 text-gray-400" />
                        <h3 class="text-lg font-medium mb-2 text-gray-500">
                            Không có quyền hạn nào
                        </h3>
                        <p class="text-gray-400">
                            Chưa có quyền hạn nào được tạo trong hệ thống
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
        
        @if($permissions->hasPages())
            <div class="pagination-container">
                {{ $permissions->links() }}
            </div>
        @endif
    </div>
</div>
</div>
