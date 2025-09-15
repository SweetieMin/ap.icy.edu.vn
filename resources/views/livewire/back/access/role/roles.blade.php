<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.user-lock class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Vai trò</h1>
                        <p class="header-subtitle">Quản lý vai trò và quyền hạn trong hệ thống</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Vai trò</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span>{{ $roles->count() }} vai trò</span>
                </div>

                <button wire:click='addRole' class="header-button w-full sm:w-auto">
                    <flux:icon.plus class="w-4 h-4 sm:w-5 sm:h-5" />
                    <span class="hidden sm:inline">Thêm vai trò</span>
                    <span class="sm:hidden">Thêm</span>
                </button>
            </div>
        </div>
    </div>


    <livewire:back.access.role.actions-role />

    {{-- Main content area --}}
    <div class="mt-6">
        <div class="theme-table-pink">
            {{-- Desktop Table View --}}
            <div class="hidden md:block overflow-x-auto">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center w-16">ID</th>
                            <th>Tên vai trò</th>
                            <th class="hidden sm:table-cell">Mô tả</th>
                            <th class="text-center">Loại</th>
                            <th class="text-center hidden lg:table-cell">Quyền hạn</th>
                            <th class="text-center hidden sm:table-cell">Người tạo</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role)
                            <tr wire:key="role-desktop-{{ $role->id }}">
                                <td class="text-center font-medium">
                                    {{ $role->id }}
                                </td>
                                <td>
                                    {{ $role->name }}
                                </td>
                                <td class="hidden sm:table-cell">
                                    {{ Str::limit($role->description, 70) }}
                                </td>
                                <td class="text-center">
                                    <flux:badge variant="solid"
                                        color="{{ $role->type === 'system' ? 'green' : 'zinc' }}">
                                        {{ $role->type }}
                                    </flux:badge>
                                </td>
                                <td class="text-center hidden lg:table-cell">
                                    <div class="flex flex-wrap gap-1 justify-center max-w-xs">
                                        @if ($role->permissions->count() > 0)
                                            @foreach ($role->permissions->take(3) as $permission)
                                                <flux:badge variant="outline" color="blue" size="sm">
                                                    {{ Str::limit($permission->displayName, 15) }}
                                                </flux:badge>
                                            @endforeach
                                            @if ($role->permissions->count() > 3)
                                                <flux:badge variant="outline" color="gray" size="sm">
                                                    +{{ $role->permissions->count() - 3 }}
                                                </flux:badge>
                                            @endif
                                        @else
                                            <span class="text-xs text-gray-500">Chưa có quyền</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-center hidden sm:table-cell">
                                    {{ $role->createdBy->name ?? 'Hệ thống' }}
                                </td>
                                <td class="text-center">

                                    <flux:dropdown>
                                        <flux:button icon:trailing="chevron-down">Thao tác</flux:button>

                                        <flux:menu>
                                            <flux:menu.item icon="key"
                                                wire:click="assignPermissions({{ $role->id }})">
                                                Gán quyền
                                            </flux:menu.item>
                                            @if ($role->type === 'custom')
                                                <flux:menu.item icon="pencil"
                                                    wire:click="editRole({{ $role->id }})">Sửa thông tin
                                                </flux:menu.item>
                                                <flux:menu.separator />

                                                <flux:menu.item variant="danger" icon="trash"
                                                    wire:click="deleteRole({{ $role->id }})">Xóa
                                                </flux:menu.item>
                                            @endif

                                        </flux:menu>
                                    </flux:dropdown>


                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-12">
                                    <div class="empty-state flex flex-col items-center">
                                        <flux:icon.user-lock class="w-12 h-12 mb-4" />
                                        <h3 class="text-lg font-medium mb-2">
                                            Không có vai trò nào
                                        </h3>
                                        <p>
                                            Chưa có vai trò nào được tạo trong hệ thống
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
                @forelse ($roles as $role)
                    <div class="bg-white rounded-lg border border-gray-200 shadow-sm" x-data="{ expanded: false }"
                        wire:key="role-mobile-{{ $role->id }}">

                        {{-- Main Row --}}
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-violet-100 rounded-full flex items-center justify-center">
                                    <flux:icon.user-lock class="w-4 h-4 text-violet-600" />
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">{{ $role->name }}</div>
                                </div>
                            </div>

                            <div class="flex items-center space-x-2">

                                <button @click="expanded = !expanded" class="p-2 rounded-full hover:bg-gray-100">
                                    <svg class="w-5 h-5 text-gray-400" :class="{ 'rotate-180': expanded }"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        {{-- Expanded Details --}}
                        <div x-show="expanded" class="border-t border-gray-100 bg-gray-50">

                            <div class="p-4 space-y-3">

                                {{-- Mô tả --}}
                                <div class="flex justify-between items-start">
                                    <span class="text-sm font-medium text-gray-600">Mô tả:</span>
                                    <span
                                        class="text-sm text-gray-900 text-right max-w-[200px]">{{ $role->description ?: 'Chưa có mô tả' }}</span>
                                </div>

                                {{-- Loại --}}
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Loại:</span>
                                    <flux:badge variant="solid"
                                        color="{{ $role->type === 'system' ? 'green' : 'zinc' }}">
                                        {{ $role->type }}
                                    </flux:badge>
                                </div>

                                {{-- Quyền hạn --}}
                                <div class="flex justify-between items-start">
                                    <span class="text-sm font-medium text-gray-600">Quyền hạn:</span>
                                    <div class="flex flex-wrap gap-1 max-w-[200px] justify-end">
                                        @if ($role->permissions->count() > 0)
                                            @foreach ($role->permissions->take(2) as $permission)
                                                <span
                                                    class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                    {{ Str::limit($permission->displayName, 12) }}
                                                </span>
                                            @endforeach
                                            @if ($role->permissions->count() > 2)
                                                <span
                                                    class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                                                    +{{ $role->permissions->count() - 2 }}
                                                </span>
                                            @endif
                                        @else
                                            <span class="text-xs text-gray-500">Chưa có quyền</span>
                                        @endif
                                    </div>
                                </div>

                                {{-- Người tạo --}}
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Người tạo:</span>
                                    <span
                                        class="text-sm text-gray-900">{{ $role->createdBy->name ?? 'Hệ thống' }}</span>
                                </div>

                                {{-- Actions --}}

                                <div class="pt-3 border-t border-gray-200">
                                    <div class="grid grid-cols-3 gap-2">

                                        <button wire:click="assignPermissions({{ $role->id }})"
                                            class="bg-green-600 text-white px-3 py-2 rounded-md text-xs font-medium hover:bg-green-700 transition-colors flex items-center justify-center space-x-1">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z">
                                                </path>
                                            </svg>
                                            <span>Phân quyền</span>
                                        </button>
                                        @if ($role->type === 'custom')
                                            <button wire:click="editRole({{ $role->id }})"
                                                class="bg-blue-600 text-white px-3 py-2 rounded-md text-xs font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-1">
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                                <span>Sửa</span>
                                            </button>



                                            <button wire:click="deleteRole({{ $role->id }})"
                                                class="bg-red-600 text-white px-3 py-2 rounded-md text-xs font-medium hover:bg-red-700 transition-colors flex items-center justify-center space-x-1">
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                                <span>Xóa</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-white rounded-lg border border-gray-200 p-8">
                        <div class="empty-state flex flex-col items-center">
                            <flux:icon.user-lock class="w-12 h-12 mb-4 text-gray-400" />
                            <h3 class="text-lg font-medium mb-2 text-gray-500">
                                Không có vai trò nào
                            </h3>
                            <p class="text-gray-400">
                                Chưa có vai trò nào được tạo trong hệ thống
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>

            @if ($roles->hasPages())
                <div class="pagination-container">
                    {{ $roles->links() }}
                </div>
            @endif
        </div>
    </div>

    {{-- Assign Permissions Modal --}}
    <livewire:back.access.role.assign-permissions />
</div>
