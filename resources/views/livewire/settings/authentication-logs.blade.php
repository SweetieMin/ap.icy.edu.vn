<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Nhật ký đăng nhập')" :subheading="__('Xem lịch sử đăng nhập và hoạt động bảo mật của tài khoản')">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <!-- Total Logins -->
            <div class="theme-card-pink">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <flux:icon.check-circle class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Đăng nhập thành công</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Số lần đăng nhập thành công</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-pink-600 dark:text-pink-400 mb-2">{{ $stats['total_logins'] }}</div>
                    </div>
                </div>
            </div>

            <!-- Failed Attempts -->
            <div class="theme-card-pink">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <flux:icon.x-circle class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Thất bại</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Số lần đăng nhập thất bại</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-pink-600 dark:text-pink-400 mb-2">{{ $stats['failed_attempts'] }}</div>
                    </div>
                </div>
            </div>

            <!-- Unique Devices -->
            <div class="theme-card-pink">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <flux:icon.device-phone-mobile class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Thiết bị</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Số thiết bị đã sử dụng</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-pink-600 dark:text-pink-400 mb-2">{{ $stats['unique_devices'] }}</div>
                    </div>
                </div>
            </div>

            <!-- Unique IPs -->
            <div class="theme-card-pink">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <flux:icon.globe-alt class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Địa chỉ IP</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Số địa chỉ IP khác nhau</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-pink-600 dark:text-pink-400 mb-2">{{ $stats['unique_ips'] }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="theme-card-pink mb-6">
            <div class="card-header">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                        <flux:icon.funnel class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Bộ lọc tìm kiếm</h3>
                        <p class="text-pink-600 dark:text-pink-400 text-xs">Lọc và tìm kiếm nhật ký đăng nhập</p>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Search -->
                    <div>
                        <label class="card-label">Tìm kiếm</label>
                        <input type="text" wire:model.live="search" placeholder="IP, thiết bị, vị trí..."
                            class="card-input">
                    </div>

                    <!-- Status Filter -->
                    <div>
                        <label class="card-label">Trạng thái</label>
                        <select wire:model.live="filterStatus" class="card-input">
                            <option value="">Tất cả</option>
                            <option value="success">Thành công</option>
                            <option value="failed">Thất bại</option>
                            <option value="blocked">Bị chặn</option>
                            <option value="logout">Đăng xuất</option>
                        </select>
                    </div>

                    <!-- Days Filter -->
                    <div>
                        <label class="card-label">Thời gian</label>
                        <select wire:model.live="filterDays" class="card-input">
                            <option value="7">7 ngày qua</option>
                            <option value="30">30 ngày qua</option>
                            <option value="90">90 ngày qua</option>
                            <option value="">Tất cả</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logs Table -->
        <div class="theme-card-pink">
            <div class="card-header">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                        <flux:icon.document-text class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Nhật ký đăng nhập</h3>
                        <p class="text-pink-600 dark:text-pink-400 text-xs">Lịch sử hoạt động đăng nhập</p>
                    </div>
                </div>
            </div>
            <div class="table-full-width">
                <div class="theme-table-pink">
                    <div class="overflow-x-auto">
                        <table>
                            <thead>
                                <tr>
                                    <th>Trạng thái</th>
                                    <th>Thời gian</th>
                                    <th>Địa chỉ IP</th>
                                    <th>Trình duyệt & Hệ điều hành</th>
                                    <th>Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                        @forelse($logs as $log)
                            <tr>
                                <td>
                                    @switch($log->status)
                                        @case('success')
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Thành công
                                            </span>
                                        @break

                                        @case('failed')
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Thất bại
                                            </span>
                                        @break

                                        @case('blocked')
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Bị chặn
                                            </span>
                                        @break

                                        @case('logout')
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Đăng xuất
                                            </span>
                                        @break
                                    @endswitch
                                </td>
                                <td>
                                    <div>
                                        <div class="font-medium">{{ $log->login_at->format('d/m/Y H:i:s') }}</div>
                                        @if ($log->logout_at)
                                            <div class="text-xs text-zinc-500 dark:text-zinc-400">
                                                Đăng xuất: {{ $log->logout_at->format('H:i:s') }}
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="truncate max-w-[200px]" title="{{ $log->ip_address }}">{{ $log->ip_address }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="truncate max-w-[200px]" title="{{ $log->device }}">{{ $log->device }}</span>
                                    </div>
                                </td>
                                <td>
                                    @if ($log->failure_reason)
                                        @if(str_contains($log->failure_reason, 'Forced logout'))
                                            <span class="text-orange-600 dark:text-orange-400 flex items-center">
                                                <flux:icon.exclamation-triangle class="w-4 h-4 mr-1" />
                                                Đăng xuất tự động
                                            </span>
                                        @else
                                            <span class="text-red-600 dark:text-red-400">{{ $log->failure_reason }}</span>
                                        @endif
                                    @elseif($log->location)
                                        <span class="text-zinc-600 dark:text-zinc-400">{{ $log->location }}</span>
                                    @else
                                        <span class="text-zinc-400">-</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-12">
                                        <div class="empty-state flex flex-col items-center">
                                            <flux:icon.document-text class="w-12 h-12 mb-4" />
                                            <h3 class="text-lg font-medium mb-2">
                                                Không có nhật ký đăng nhập
                                            </h3>
                                            <p>
                                                Chưa có hoạt động đăng nhập nào được ghi lại với bộ lọc hiện tại.
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

        <!-- Pagination -->
        @if ($logs->hasPages())
            <div class="pagination-container">
                {{ $logs->links() }}
            </div>
        @endif
        </x-settings.layout>
    </section>
