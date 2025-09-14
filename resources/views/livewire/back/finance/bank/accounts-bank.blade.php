<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="header-title">Tài khoản ngân hàng</h1>
                        <p class="header-subtitle">Quản lý các tài khoản ngân hàng trong hệ thống</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Tài khoản ngân hàng</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span>{{ $banks->total() ?? 0 }} tài khoản</span>
                </div>

                <button wire:click="addBank" class="header-button w-full sm:w-auto">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span class="hidden sm:inline">Thêm tài khoản</span>
                    <span class="sm:hidden">Thêm</span>
                </button>
            </div>
        </div>
    </div>

    <livewire:back.finance.bank.actions-account-bank />

    <div class="mt-6">
        <div class="theme-table-pink">
            <div class="overflow-x-auto">
                <table>
                    <thead>
                        <tr>
                            <th>Ngân hàng</th>
                            <th class="hidden sm:table-cell">Mã ngân hàng</th>
                            <th>Số tài khoản</th>
                            <th>Chủ tài khoản</th>
                            <th class="text-center hidden sm:table-cell">Trạng thái</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($banks as $bank)
                            <tr wire:key="bank-{{ $bank->id }}">
                                <td class="whitespace-nowrap font-medium">
                                    {{ $bank->bank_name }}</td>
                                <td class="hidden sm:table-cell">
                                    {{ $bank->bank_code }}</td>
                                <td>
                                    {{ $bank->account_number }}</td>
                                <td>{{ $bank->account_name }}
                                </td>
                                <td class="whitespace-nowrap text-center hidden sm:table-cell">
                                    <span
                                        class="px-2 py-1 rounded-full text-xs {{ $bank->status === 'active' ? 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400' : 'bg-gray-100 text-gray-700 dark:bg-gray-800/60 dark:text-gray-300' }}">
                                        {{ $bank->status === 'active' ? 'Hoạt động' : 'Ngưng' }}
                                    </span>
                                </td>
                                <td class="whitespace-nowrap text-center">
                                    <flux:dropdown>
                                        <flux:button icon:trailing="chevron-down">Thao tác</flux:button>

                                        <flux:menu>
                                            <flux:menu.item  icon="pencil"
                                                wire:click="editBank({{ $bank->id }})">Sửa thông tin
                                            </flux:menu.item>

                                            <flux:menu.separator />

                                            <flux:menu.item variant="danger" icon="trash"
                                                wire:click="deleteBank({{ $bank->id }})">Xóa
                                            </flux:menu.item>
                                        </flux:menu>
                                    </flux:dropdown>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-8 sm:hidden">
                                    <div class="empty-state flex flex-col items-center">
                                        <flux:icon.banknotes class="w-8 h-8 mb-2" />
                                        <div class="text-sm">Chưa có tài khoản ngân hàng</div>
                                    </div>
                                </td>
                                <td colspan="6" class="px-6 py-8 hidden sm:table-cell">
                                    <div class="empty-state flex flex-col items-center">
                                        <flux:icon.banknotes class="w-8 h-8 mb-2" />
                                        <div class="text-sm">Chưa có tài khoản ngân hàng</div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($banks->hasPages())
                <div class="pagination-container">
                    {{ $banks->links() }}
                </div>
            @endif
        </div>
    </div>

</div>
