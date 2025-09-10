<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex items-center justify-between">
            <div class="header-content">
                <div class="flex items-center space-x-3 mb-2">
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
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span>{{ $tuitions->count() }} giao dịch</span>
                </div>
                <div class="flex gap-2">
                    <button wire:click="loadTuitions" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 flex items-center space-x-2">
                        <flux:icon.arrow-path class="w-4 h-4" />
                        <span>Làm mới</span>
                    </button>
                    <button wire:click="clearFilters" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 flex items-center space-x-2">
                        <flux:icon.x-mark class="w-4 h-4" />
                        <span>Xóa bộ lọc</span>
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
        <div class="table-full-width">
            <div class="theme-table-pink">
                <div class="overflow-x-auto max-h-[calc(100vh-300px)]">
                    <table>
                        <thead>
                        <tr>
                            <th class="text-center w-16">STT</th>
                            <th>Học viên</th>
                            <th class="hidden lg:table-cell">Chương trình</th>
                            <th class="text-center hidden md:table-cell">Học kỳ</th>
                            <th class="text-center hidden xl:table-cell">Số biên lai</th>
                            <th class="text-center">Số tiền</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center hidden sm:table-cell">Phương thức</th>
                            <th class="text-center hidden 2xl:table-cell">Ngày đóng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tuitions as $index => $tuition)
                            <tr wire:key="tuition-{{ $tuition->id }}">
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
                                        {{ $tuition->receipt_number ?? 'Chưa có' }}
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
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
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
                                    <div class="text-sm text-blue-600 dark:text-blue-400 font-medium">Tổng tiền</div>
                                    <div class="text-2xl font-bold text-blue-700 dark:text-blue-300">
                                        {{ number_format($tuitions->sum('price'), 0, ',', '.') }} VNĐ
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
