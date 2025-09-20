<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
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
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span>{{ $staffs->count() }} nhân viên</span>
                </div>

                <button wire:click="addStaff()" class="header-button w-full sm:w-auto">
                    <flux:icon.plus class="w-4 h-4 sm:w-5 sm:h-5" />
                    <span class="hidden sm:inline">Thêm nhân viên</span>
                    <span class="sm:hidden">Thêm</span>
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
                    <input type="text" wire:model.live="search" placeholder="Họ và tên hoặc Account code..."
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
        <div class="theme-table-pink">
            {{-- Desktop Table View --}}
            <div class="hidden md:block overflow-x-auto">
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
                        <tr wire:key="staff-desktop-{{ $staff->id }}">
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

        {{-- Mobile Card View --}}
        <div class="md:hidden space-y-3">
            @forelse ($staffs as $index => $staff)
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                     x-data="{ expanded: false }" 
                     wire:key="staff-mobile-{{ $staff->id }}">
                    
                    {{-- Main Row --}}
                    <div class="p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <img class="h-8 w-8 rounded-full object-cover"
                                src="{{ $staff->detail?->avatar ?? asset('storage/images/avatars/default-avatar.png') }}"
                                alt="{{ $staff->name }}">
                            <div>
                                <div class="font-medium text-gray-900">{{ $staff->name }}</div>
                                <div class="text-sm text-gray-500">ID: {{ $staff->account_code }}</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-2">

                            
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


                            {{-- Số điện thoại --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Số điện thoại:</span>
                                <span class="text-sm text-gray-900">{{ $staff->detail?->phone ?? 'Chưa cập nhật' }}</span>
                            </div>

                            {{-- Cơ sở --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Cơ sở:</span>
                                <div class="text-right">
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
                                        <span class="text-gray-500 text-xs">Chưa có cơ sở</span>
                                    @endif
                                </div>
                            </div>

                            {{-- Chức vụ --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Chức vụ:</span>
                                <span class="text-sm text-gray-900">{{ $staff->roles->pluck('name')->implode(', ') ?: 'Chưa có chức vụ' }}</span>
                            </div>

                            {{-- Actions --}}
                            <div class="pt-3 border-t border-gray-200">
                                <div class="flex space-x-2">
                                    <button wire:click="editStaff({{ $staff->id }})"
                                            class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                        <span>Sửa thông tin</span>
                                    </button>
                                    
                                    <button wire:click="deleteStaff({{ $staff->id }})"
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
                        <flux:icon.users class="w-12 h-12 mb-4 text-gray-400" />
                        <h3 class="text-lg font-medium mb-2 text-gray-500">
                            Không có nhân viên nào
                        </h3>
                        <p class="text-gray-400">
                            Hiện tại không có nhân viên nào trong các cơ sở của bạn
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
        {{-- Pagination if needed --}}
        {{-- @if ($staffs->hasPages())
            <div class="pagination-container">
                {{ $staffs->links() }}
            </div>
        @endif --}}
    </div>
</div>

    {{-- Bảng nhân viên không có location --}}
    @if($staffsWithoutLocation->count() > 0)
        {{-- Header Section for Staff Without Location --}}
        <div class="theme-header-pink mt-6">
            <div class="flex items-center justify-between">
                <div class="header-content">
                    <div class="flex items-center space-x-3 mb-2">
                        <div class="header-icon">
                            <flux:icon.exclamation-triangle class="size-12" />
                        </div>
                        <div>
                            <h1 class="header-title">Nhân viên chưa được phân cơ sở</h1>
                            <p class="header-subtitle">Danh sách nhân viên chưa được gán cơ sở</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="header-counter">
                        <span>{{ $staffsWithoutLocation->count() }} nhân viên</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main content area --}}
        <div class="mt-6">
            <div class="theme-table-pink">
                {{-- Desktop Table View --}}
                <div class="hidden md:block overflow-x-auto">
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
                                <tr wire:key="staff-no-location-desktop-{{ $staff->id }}">
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

                {{-- Mobile Card View --}}
                <div class="md:hidden space-y-3">
                    @forelse ($staffsWithoutLocation as $index => $staff)
                        <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                             x-data="{ expanded: false }" 
                             wire:key="staff-no-location-mobile-{{ $staff->id }}">
                            
                            {{-- Main Row --}}
                            <div class="p-4 flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ $staff->detail?->avatar ?? asset('storage/images/avatars/default-avatar.png') }}"
                                        alt="{{ $staff->name }}">
                                    <div>
                                        <div class="font-medium text-gray-900">{{ $staff->name }}</div>
                                        <div class="text-sm text-gray-500">ID: {{ $staff->account_code }}</div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-2">
                                    <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        Chưa có cơ sở
                                    </span>
                                    
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


                                    {{-- Số điện thoại --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Số điện thoại:</span>
                                        <span class="text-sm text-gray-900">{{ $staff->detail?->phone ?? 'Chưa cập nhật' }}</span>
                                    </div>

                                    {{-- Cơ sở --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Cơ sở:</span>
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            Chưa có cơ sở
                                        </span>
                                    </div>

                                    {{-- Chức vụ --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Chức vụ:</span>
                                        <span class="text-sm text-gray-900">{{ $staff->roles->pluck('name')->implode(', ') ?: 'Chưa có chức vụ' }}</span>
                                    </div>

                                    {{-- Actions --}}
                                    <div class="pt-3 border-t border-gray-200">
                                        <div class="flex space-x-2">
                                            <button wire:click="editStaff({{ $staff->id }})"
                                                    class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                                <span>Sửa thông tin</span>
                                            </button>
                                            
                                            <button wire:click="deleteStaff({{ $staff->id }})"
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
                                <flux:icon.users class="w-12 h-12 mb-4 text-gray-400" />
                                <h3 class="text-lg font-medium mb-2 text-gray-500">
                                    Không có nhân viên nào
                                </h3>
                                <p class="text-gray-400">
                                    Hiện tại không có nhân viên nào chưa được phân cơ sở
                                </p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    @endif

</div>
