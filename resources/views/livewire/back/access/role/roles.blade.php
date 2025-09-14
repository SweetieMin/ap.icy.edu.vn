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

    <flux:separator variant="subtle" />

    <livewire:back.access.role.actions-role />

    {{-- Main content area --}}
    <div class="mt-6">
        <div class="theme-table-pink">
            <div class="overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center w-16">ID</th>
                                <th>Tên vai trò</th>
                                <th class="hidden sm:table-cell">Mô tả</th>
                                <th class="text-center">Loại</th>
                                <th class="text-center hidden sm:table-cell">Người tạo</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($roles as $role)
                                <tr wire:key="role-{{ $role->id }}">
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
                                    <td class="text-center hidden sm:table-cell">
                                        {{ $role->createdBy->name ?? 'Hệ thống' }}
                                    </td>
                                    <td class="text-center">
                                        @if ($role->type === 'custom')
                                            <flux:dropdown>
                                                <flux:button icon:trailing="chevron-down">Thao tác</flux:button>

                                                <flux:menu>
                                                    <flux:menu.item icon="pencil"
                                                        wire:click="editRole({{ $role->id }})">Sửa thông tin
                                                    </flux:menu.item>

                                                    <flux:menu.separator />

                                                    <flux:menu.item variant="danger" icon="trash"
                                                        wire:click="deleteRole({{ $role->id }})">Xóa
                                                    </flux:menu.item>
                                                </flux:menu>
                                            </flux:dropdown>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-12">
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

            @if ($roles->hasPages())
                <div class="pagination-container">
                    {{ $roles->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
