<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.banknotes class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Lịch sử đóng học phí</h1>
                        <p class="header-subtitle">Quản lý và theo dõi lịch sử thanh toán học phí</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Lịch sử đóng học phí</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span>{{ $tuitions->count() }} giao dịch</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
                    <button wire:click="loadTuitions" class="bg-blue-600 hover:bg-blue-700 text-white px-4 sm:px-6 py-2 sm:py-3 rounded-lg font-medium transition-all duration-300 flex items-center justify-center space-x-2 w-full sm:w-auto">
                        <flux:icon.arrow-path class="w-4 h-4 sm:w-5 sm:h-5" />
                        <span class="hidden sm:inline">Làm mới</span>
                        <span class="sm:hidden">Mới</span>
                    </button>
                    <button wire:click="clearFilters" class="bg-red-600 hover:bg-red-700 text-white px-4 sm:px-6 py-2 sm:py-3 rounded-lg font-medium transition-all duration-300 flex items-center justify-center space-x-2 w-full sm:w-auto">
                        <flux:icon.x-mark class="w-4 h-4 sm:w-5 sm:h-5" />
                        <span class="hidden sm:inline">Xóa bộ lọc</span>
                        <span class="sm:hidden">Xóa lọc</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bộ lọc -->
    <div class="theme-card-pink mt-4 mb-4">

        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-3">
                <!-- Tìm kiếm theo tên -->
                <div>
                    <label class="card-label">Tìm kiếm</label>
                    <input type="text" wire:model.live="search" placeholder="Tên hoặc mã học viên..."
                        class="card-input">
                </div>

                <!-- Lọc theo cơ sở -->
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

                <!-- Lọc theo chương trình -->
                <div>
                    <label class="card-label">Chương trình</label>
                    <select wire:model.live="filterProgramId" class="card-input">
                        <option value="">Tất cả chương trình</option>
                        @foreach ($programs as $program)
                            <option value="{{ $program->id }}">{{ $program->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Lọc theo học kỳ -->
                <div>
                    <label class="card-label">Học kỳ</label>
                    <select wire:model.live="filterSeasonId" class="card-input">
                        <option value="">Tất cả học kỳ</option>
                        @foreach ($seasons as $season)
                            <option value="{{ $season->id }}">{{ $season->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Lọc theo phương thức thanh toán -->
                <div>
                    <label class="card-label">Phương thức</label>
                    <select wire:model.live="filterPaymentMethod" class="card-input">
                        <option value="">Tất cả phương thức</option>
                        <option value="cash">Tiền mặt</option>
                        <option value="bank_transfer">Chuyển khoản</option>
                    </select>
                </div>

                <!-- Lọc theo thời gian -->
                <div>
                    <label class="card-label">Thời gian</label>
                    <select wire:model.live="filterMonth" class="card-input">
                        <option value="">Tất cả thời gian</option>
                        <option value="this_month">Tháng này</option>
                        <option value="last_month">Tháng trước</option>
                        <option value="this_year">Năm nay</option>
                        <option value="last_year">Năm trước</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Bảng lịch sử đóng tiền -->
    <div class="mt-6">
        <div class="theme-table-pink">
            {{-- Desktop Table View --}}
            <div class="hidden md:block overflow-x-auto max-h-[calc(100vh-300px)]">
                <table>
                    <thead class="sticky top-0 z-10">
                        <tr>
                            <th class="text-center w-16">STT</th>
                            <th>Học viên</th>
                            <th class="hidden lg:table-cell">Chương trình</th>
                            <th class="text-center hidden md:table-cell">Học kỳ</th>
                            <th class="text-center hidden xl:table-cell">Nôi dung</th>
                            <th class="text-center">Số tiền</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center hidden sm:table-cell">Phương thức</th>
                            <th class="text-center hidden 2xl:table-cell">Ngày đóng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tuitions as $index => $tuition)
                            <tr wire:key="tuition-desktop-{{ $tuition->id }}">
                                <td class="text-center font-medium">
                                    {{ $index + 1 }}
                                </td>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ $tuition->user->detail?->avatar ?? asset('storage/images/avatars/default-avatar.png') }}"
                                            alt="{{ $tuition->user->name }}">
                                        <div>
                                            <div class="font-medium">{{ $tuition->user->name }}</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                                {{ $tuition->user->account_code }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="hidden lg:table-cell">
                                    <div class="font-medium">
                                        {{ $tuition->program->name ?? 'N/A' }}
                                    </div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">
                                        {{ $tuition->program->english_name ?? '' }}
                                    </div>
                                </td>
                                <td class="text-center hidden md:table-cell">
                                    {{ $tuition->season->code ?? 'N/A' }}
                                </td>
                                <td class="text-center hidden xl:table-cell">
                                    <div class="font-mono">
                                        {{ $tuition->note ?? 'Chưa có' }}
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="font-bold text-green-600 dark:text-green-400">
                                        {{ $tuition->price_formatted }} VNĐ
                                    </div>
                                </td>
                                <td class="text-center">
                                    @switch($tuition->status)
                                        @case('paid')
                                            <flux:badge color="green" size="sm">Đã thanh toán</flux:badge>
                                        @break

                                        @case('pending')
                                            <flux:badge color="yellow" size="sm">Chờ xử lý</flux:badge>
                                        @break

                                        @case('failed')
                                            <flux:badge color="red" size="sm">Thất bại</flux:badge>
                                        @break

                                        @default
                                            <flux:badge color="gray" size="sm">{{ $tuition->status }}</flux:badge>
                                    @endswitch
                                </td>
                                <td class="text-center hidden sm:table-cell">
                                    @switch($tuition->payment_method)
                                        @case('cash')
                                            <div class="flex items-center justify-center">
                                                <flux:icon.banknotes class="size-4 mr-1 text-green-600" />
                                                <span class="text-xs">Tiền mặt</span>
                                            </div>
                                        @break

                                        @case('bank_transfer')
                                            <div class="flex items-center justify-center">
                                                <flux:icon.credit-card class="size-4 mr-1 text-blue-600" />
                                                <span class="text-xs">Chuyển khoản</span>
                                            </div>
                                        @break

                                        @default
                                            <span class="text-xs">{{ $tuition->payment_method }}</span>
                                    @endswitch
                                </td>
                                <td class="text-center hidden 2xl:table-cell">
                                    <div class="flex flex-col">
                                        <span class="font-medium">{{ $tuition->created_at->format('d/m/Y') }}</span>
                                        <span class="text-xs">{{ $tuition->created_at->format('H:i:s') }}</span>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center py-12">
                                        <div class="flex flex-col items-center">
                                            <flux:icon.document-text class="size-12 text-gray-400 dark:text-gray-500 mb-4" />
                                            <h3 class="text-lg font-medium text-gray-500 dark:text-gray-400 mb-2">
                                                Chưa có lịch sử đóng tiền
                                            </h3>
                                            <p class="text-gray-400 dark:text-gray-500">
                                                Học viên chưa thực hiện giao dịch đóng học phí nào
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            {{-- Mobile Card View --}}
            <div class="md:hidden space-y-3 max-h-[calc(100vh-300px)] overflow-y-auto">
                @forelse($tuitions as $index => $tuition)
                    <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                         x-data="{ expanded: false }" 
                         wire:key="tuition-mobile-{{ $tuition->id }}">
                        
                        {{-- Main Row --}}
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">{{ $tuition->user->name }}</div>
                                    <div class="text-sm text-gray-500">ID: {{ $tuition->user->account_code }}</div>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                @switch($tuition->status)
                                    @case('paid')
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            ✅ Đã thanh toán
                                        </span>
                                    @break
                                    @case('pending')
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            ⏳ Chờ xử lý
                                        </span>
                                    @break
                                    @case('failed')
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            ❌ Thất bại
                                        </span>
                                    @break
                                    @default
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                            {{ $tuition->status }}
                                        </span>
                                @endswitch
                                
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


                                {{-- Chương trình --}}
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Chương trình:</span>
                                    <div class="text-right">
                                        <div class="text-sm text-gray-900">{{ $tuition->program->name ?? 'N/A' }}</div>
                                        @if($tuition->program->english_name)
                                            <div class="text-xs text-gray-500">{{ $tuition->program->english_name }}</div>
                                        @endif
                                    </div>
                                </div>

                                {{-- Học kỳ --}}
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Học kỳ:</span>
                                    <span class="text-sm text-gray-900">{{ $tuition->season->code ?? 'N/A' }}</span>
                                </div>

                                {{-- Nội dung --}}
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Nội dung:</span>
                                    <span class="text-sm text-gray-900 font-mono">{{ $tuition->note ?? 'Chưa có' }}</span>
                                </div>

                                {{-- Số tiền --}}
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Số tiền:</span>
                                    <span class="text-sm font-bold text-green-600">{{ $tuition->price_formatted }} VNĐ</span>
                                </div>

                                {{-- Phương thức thanh toán --}}
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Phương thức:</span>
                                    @switch($tuition->payment_method)
                                        @case('cash')
                                            <div class="flex items-center space-x-1">
                                                <flux:icon.banknotes class="size-4 text-green-600" />
                                                <span class="text-sm text-gray-900">Tiền mặt</span>
                                            </div>
                                        @break
                                        @case('bank_transfer')
                                            <div class="flex items-center space-x-1">
                                                <flux:icon.credit-card class="size-4 text-blue-600" />
                                                <span class="text-sm text-gray-900">Chuyển khoản</span>
                                            </div>
                                        @break
                                        @default
                                            <span class="text-sm text-gray-900">{{ $tuition->payment_method }}</span>
                                    @endswitch
                                </div>

                                {{-- Trạng thái --}}
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Trạng thái:</span>
                                    @switch($tuition->status)
                                        @case('paid')
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                ✅ Đã thanh toán
                                            </span>
                                        @break
                                        @case('pending')
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                ⏳ Chờ xử lý
                                            </span>
                                        @break
                                        @case('failed')
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                ❌ Thất bại
                                            </span>
                                        @break
                                        @default
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                {{ $tuition->status }}
                                            </span>
                                    @endswitch
                                </div>

                                {{-- Ngày đóng --}}
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Ngày đóng:</span>
                                    <div class="text-right">
                                        <div class="text-sm text-gray-900 font-medium">{{ $tuition->created_at->format('d/m/Y') }}</div>
                                        <div class="text-xs text-gray-500">{{ $tuition->created_at->format('H:i:s') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-white rounded-lg border border-gray-200 p-8">
                        <div class="flex flex-col items-center">
                            <flux:icon.document-text class="size-12 text-gray-400 dark:text-gray-500 mb-4" />
                            <h3 class="text-lg font-medium text-gray-500 dark:text-gray-400 mb-2">
                                Chưa có lịch sử đóng tiền
                            </h3>
                            <p class="text-gray-400 dark:text-gray-500">
                                Học viên chưa thực hiện giao dịch đóng học phí nào
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

        @if ($tuitions->count() > 0)
            <div class="theme-card-pink mt-4">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <flux:icon.chart-bar class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Tổng kết</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Thống kê giao dịch</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-4 border border-green-200 dark:border-green-800">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-green-100 dark:bg-green-800 rounded-lg flex items-center justify-center">
                                    <flux:icon.document-text class="w-5 h-5 text-green-600 dark:text-green-400" />
                                </div>
                                <div>
                                    <div class="text-sm text-green-600 dark:text-green-400 font-medium">Tổng giao dịch</div>
                                    <div class="text-2xl font-bold text-green-700 dark:text-green-300">{{ $tuitions->count() }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-blue-50 dark:bg-blue-900/20 rounded-lg p-4 border border-blue-200 dark:border-blue-800">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-800 rounded-lg flex items-center justify-center">
                                    <flux:icon.currency-dollar class="w-5 h-5 text-blue-600 dark:text-blue-400" />
                                </div>
                                <div>
                                    <div class="text-sm text-blue-600 dark:text-blue-400 font-medium">Tổng tiền đã thanh toán</div>
                                    <div class="text-2xl font-bold text-blue-700 dark:text-blue-300">
                                        {{ number_format($tuitions->where('status', 'paid')->sum('price'), 0, ',', '.') }} VNĐ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-orange-50 dark:bg-orange-900/20 rounded-lg p-4 border border-orange-200 dark:border-orange-800">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-orange-100 dark:bg-orange-800 rounded-lg flex items-center justify-center">
                                    <flux:icon.exclamation-triangle class="w-5 h-5 text-orange-600 dark:text-orange-400" />
                                </div>
                                <div>
                                    <div class="text-sm text-orange-600 dark:text-orange-400 font-medium">Tổng công nợ</div>
                                    <div class="text-2xl font-bold text-orange-700 dark:text-orange-300">
                                        {{ number_format($tuitions->where('status', 'pending')->sum('price'), 0, ',', '.') }} VNĐ
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
