<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex items-center justify-between">
            <div class="header-content">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.users class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Nhân viên</h1>
                        <p class="header-subtitle">Quản lý thông tin nhân viên trong hệ thống</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Danh sách nhân viên</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span>{{ $staffs->count() }} nhân viên</span>
                </div>
                <button wire:click="addStaff()" class="header-button">
                    <flux:icon.plus class="w-5 h-5" />
                    <span>Thêm nhân viên</span>
                </button>
            </div>
        </div>
    </div>

    <livewire:back.personnel.employee.actions-staff />

    <!-- Bộ lọc -->
    <div class="theme-card-pink mt-4 mb-4">

        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div>
                    <label class="card-label">Tìm kiếm</label>
                    <input type="text" wire:model.live="search" placeholder="Tìm theo họ và tên hoặc Account code..."
                        class="card-input">
                </div>
                @if ($locations->count() > 1)
                    <div>
                        <label class="card-label">Cơ sở</label>
                        <select wire:model.live="filterLocationId" class="card-input">
                            <option value="">Tất cả cơ sở</option>
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
                <div>
                    <label class="card-label">Chức vụ</label>
                    <select wire:model.live="filterRoleId" class="card-input">
                        <option value="">Tất cả chức vụ</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <div class="table-full-width">
            <div class="theme-table-pink">
                <div class="overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center w-16">STT</th>
                                <th>Họ và tên</th>
                                <th class="hidden md:table-cell">Số điện thoại</th>
                                <th class="text-center">Cơ sở</th>
                                <th class="text-center hidden sm:table-cell">Chức vụ</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($staffs as $index => $staff)
                            <tr wire:key="staff-{{ $staff->id }}">
                                <td class="text-center font-medium">
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ $staff->detail?->avatar ?? asset('storage/images/avatars/default-avatar.png') }}"
                                            alt="{{ $staff->name }}">
                                        <div>
                                            <div class="font-medium">{{ $staff->name }}</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                                {{ $staff->account_code }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="hidden md:table-cell">
                                    {{ $staff->detail?->phone ?? 'Chưa cập nhật' }}
                                </td>
                                <td class="text-center">
                                    @if ($staff->locations->count() > 0)
                                        @foreach ($staff->locations as $location)
                                            <flux:badge color="blue" size="sm" class="mb-1">
                                                {{ $location->name }}
                                            </flux:badge>
                                            @if (!$loop->last)
                                                <br>
                                            @endif
                                        @endforeach
                                    @else
                                        <span class="text-gray-500 dark:text-gray-400 text-xs">Chưa có cơ sở</span>
                                    @endif
                                </td>
                                <td class="text-center hidden sm:table-cell">
                                    <div>
                                        {{ $staff->roles->pluck('name')->implode(', ') }}
                                    </div>
                                </td>
                                <td class="text-center">
                                    <flux:dropdown>
                                        <flux:button icon:trailing="chevron-down">Thao tác</flux:button>

                                        <flux:menu>
                                            <flux:menu.item  icon="pencil"
                                                wire:click="editStaff({{ $staff->id }})">Sửa thông tin
                                            </flux:menu.item>

                                            <flux:menu.separator />

                                            <flux:menu.item variant="danger" icon="trash"
                                                wire:click="deleteStaff({{ $staff->id }})">Xóa
                                            </flux:menu.item>
                                        </flux:menu>
                                    </flux:dropdown>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-12">
                                    <div class="empty-state flex flex-col items-center">
                                        <flux:icon.users class="w-12 h-12 mb-4" />
                                        <h3 class="text-lg font-medium mb-2">
                                            Không có nhân viên nào
                                        </h3>
                                        <p>
                                            Hiện tại không có nhân viên nào trong các cơ sở của bạn
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{-- Pagination if needed --}}
            {{-- @if ($staffs->hasPages())
                <div class="pagination-container">
                    {{ $staffs->links() }}
                </div>
            @endif --}}
            </div>
        </div>
    </div>

    {{-- Bảng nhân viên không có location --}}
    @if($staffsWithoutLocation->count() > 0)
        <div class="mt-6">
            <div class="theme-card-pink mb-4">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Nhân viên chưa được phân cơ sở
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                {{ $staffsWithoutLocation->count() }} nhân viên chưa được gán cơ sở
                            </p>
                        </div>
                        <div class="header-counter">
                            <span>{{ $staffsWithoutLocation->count() }} nhân viên</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-full-width">
                <div class="theme-table-pink">
                    <div class="overflow-x-auto">
                        <table>
                            <thead>
                                <tr>
                                    <th class="text-center w-16">STT</th>
                                    <th>Họ và tên</th>
                                    <th class="hidden md:table-cell">Số điện thoại</th>
                                    <th class="text-center">Cơ sở</th>
                                    <th class="text-center hidden sm:table-cell">Chức vụ</th>
                                    <th class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($staffsWithoutLocation as $index => $staff)
                                <tr wire:key="staff-no-location-{{ $staff->id }}">
                                    <td class="text-center font-medium">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="{{ $staff->detail?->avatar ?? asset('storage/images/avatars/default-avatar.png') }}"
                                                alt="{{ $staff->name }}">
                                            <div>
                                                <div class="font-medium">{{ $staff->name }}</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                                    {{ $staff->account_code }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden md:table-cell">
                                        {{ $staff->detail?->phone ?? 'Chưa cập nhật' }}
                                    </td>
                                    <td class="text-center">
                                        <span class="text-red-500 dark:text-red-400 text-xs font-medium">
                                            Chưa có cơ sở
                                        </span>
                                    </td>
                                    <td class="text-center hidden sm:table-cell">
                                        <div>
                                            {{ $staff->roles->pluck('name')->implode(', ') }}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <flux:dropdown>
                                            <flux:button icon:trailing="chevron-down">Thao tác</flux:button>
    
                                            <flux:menu>
                                                <flux:menu.item  icon="pencil"
                                                    wire:click="editStaff({{ $staff->id }})">Sửa thông tin
                                                </flux:menu.item>
    
                                                <flux:menu.separator />
    
                                                <flux:menu.item variant="danger" icon="trash"
                                                    wire:click="deleteStaff({{ $staff->id }})">Xóa
                                                </flux:menu.item>
                                            </flux:menu>
                                        </flux:dropdown>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-12">
                                        <div class="empty-state flex flex-col items-center">
                                            <flux:icon.users class="w-12 h-12 mb-4" />
                                            <h3 class="text-lg font-medium mb-2">
                                                Không có nhân viên nào
                                            </h3>
                                            <p>
                                                Hiện tại không có nhân viên nào chưa được phân cơ sở
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif

</div>
