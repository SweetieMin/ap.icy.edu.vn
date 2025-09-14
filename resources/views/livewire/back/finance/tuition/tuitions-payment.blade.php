<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.credit-card class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Thanh toán học phí</h1>
                        <p class="header-subtitle">Quản lý thanh toán học phí cho học sinh</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Thanh toán học phí</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span>{{ count($selectedItems) }} mục đã chọn</span>
                </div>

                <div class="flex gap-2 hidden sm:flex">
                    <button wire:click="mainMenuQRCode"
                        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 flex items-center space-x-2">
                        <flux:icon.qr-code class="w-4 h-4" />
                        <span>Main Menu QR</span>
                    </button>
                    <button wire:click="turnOffQRCode"
                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 flex items-center space-x-2">
                        <flux:icon.x-mark class="w-4 h-4" />
                        <span>Turn Off QR</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 mx-6 mt-4">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                {{ session('error') }}
            </div>
        </div>
    @endif


    {{-- Main Content --}}


    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 h-full">

        {{-- Right Side - Payment --}}
        <div class="theme-card-pink flex flex-col h-full">
            <div class="card-header">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                        <flux:icon.credit-card class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-pink-600 dark:text-pink-400">Chọn học viên</h2>
                        <p class="text-pink-600 dark:text-pink-400 text-xs">Chọn học viên để xử lý thanh toán học phí</p>
                    </div>
                </div>
            </div>
            <div class="p-6 flex flex-col h-full">

                {{-- Student Selection --}}
                <div class="mb-6 flex-shrink-0">
                    <h3 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">👨‍🎓 Chọn học sinh</h3>

                    @if ($selectedStudent)
                        {{-- Selected Student Display --}}
                        <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="w-10 h-10 bg-green-100 dark:bg-green-800 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-green-900 dark:text-green-100 font-medium">
                                            {{ $selectedStudent['name'] }}</div>
                                        <div class="text-green-700 dark:text-green-300 text-sm">Mã số:
                                            {{ $selectedStudent['account_code'] }}</div>
                                    </div>
                                </div>
                                <button wire:click="clearStudentSelection"
                                    class="cursor-pointer text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 p-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @else
                        {{-- Student Search --}}
                        <div class="space-y-3">
                            <input type="text" wire:model.live="searchStudent"
                                placeholder="Tìm kiếm học sinh theo tên hoặc mã số..." class="card-input">

                            {{-- Students List --}}
                            @if (count($filteredStudents) > 0)
                                <div class="max-h-35 overflow-y-auto space-y-2">
                                    @foreach ($filteredStudents as $student)
                                        <div
                                            class=" bg-gray-50 dark:bg-gray-700 rounded-lg p-3 hover:bg-gray-100 dark:hover:bg-gray-600 ">
                                            <button wire:click="selectStudent({{ $student['id'] }})"
                                                class="cursor-pointer w-full flex items-center space-x-3 text-left">
                                                <div
                                                    class="w-8 h-8 bg-blue-100 dark:bg-blue-800 rounded-full flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-blue-600 dark:text-blue-400"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="text-gray-900 dark:text-white font-medium text-sm">
                                                        {{ $student['name'] }}</div>
                                                    <div class="text-gray-600 dark:text-gray-400 text-xs">Mã số:
                                                        {{ $student['account_code'] }}</div>
                                                </div>
                                                <div class="text-blue-600 dark:text-blue-400">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            @elseif($searchStudent && count($filteredStudents) == 0)
                                <div class="text-center py-4">
                                    <div class="text-gray-500 dark:text-gray-400 text-sm">Không tìm thấy học sinh nào
                                    </div>
                                    <div class="text-gray-400 dark:text-gray-500 text-xs mt-1">Hãy thử tìm kiếm với từ
                                        khóa khác</div>
                                </div>
                            @else
                                <div class="text-center py-4">
                                    <div class="text-gray-500 dark:text-gray-400 text-sm">Nhập tên học sinh để tìm kiếm
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>

                {{-- Payment Summary --}}
                <div class="space-y-4 mb-6 flex-1 overflow-y-auto">
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-700 dark:text-gray-300 font-medium">Tổng tiền:</span>
                            <span
                                class="text-gray-900 dark:text-white font-bold text-lg">{{ number_format($totalAmount, 0, ',', '.') }}
                                VNĐ</span>
                        </div>

                        {{-- Item Discounts Summary --}}
                        @php
                            $totalItemDiscounts = 0;
                            foreach ($selectedItems as $item) {
                                if (isset($item['discount_amount']) && $item['discount_amount'] > 0) {
                                    // Chỉ tính giảm giá trên base_price, không tính trên giá sách
                                    $basePrice = isset($item['base_price']) ? $item['base_price'] : $item['price'];
                                    
                                    if (($item['discount_type'] ?? 'vnd') === 'percent') {
                                        $totalItemDiscounts += ($basePrice * $item['discount_amount']) / 100;
                                    } else {
                                        $totalItemDiscounts += $item['discount_amount'];
                                    }
                                }
                            }
                        @endphp

                        @if ($totalItemDiscounts > 0)
                            <div class="mb-2">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Giảm giá:</span>
                                    <span class="text-red-600 dark:text-red-400 font-bold">
                                        -{{ number_format($totalItemDiscounts, 0, ',', '.') }} VNĐ
                                    </span>
                                </div>
                            </div>
                        @endif

                        <div class="pt-2">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-900 dark:text-white font-bold text-lg">Thành tiền:</span>
                                <span
                                    class="text-blue-600 dark:text-blue-400 font-bold text-xl">{{ number_format($finalAmount, 0, ',', '.') }}
                                    VNĐ</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Payment Method --}}
                <div class="mb-6">
                    <label class="block text-gray-700 dark:text-gray-300 font-medium mb-3">💳 Phương thức thanh
                        toán</label>
                    <select wire:model="paymentMethod" wire:change="paymentMethodChanged" class="card-input">
                        <option value="cash">💵 Tiền mặt</option>
                        <option value="bank_transfer">🏦 Chuyển khoản</option>
                    </select>
                </div>

                {{-- Bank Selection (only show when bank_transfer is selected) --}}
                @if ($paymentMethod === 'bank_transfer')
                    <div class="mb-6">
                        <label class="block text-gray-700 dark:text-gray-300 font-medium mb-3">🏦 Chọn tài khoản ngân
                            hàng</label>
                        <div class="space-y-3">
                            @foreach ($banks as $bank)
                                <label
                                    class="flex items-center p-3 rounded-lg cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200 {{ $selectedBankId == $bank['id'] ? 'bg-blue-50 dark:bg-blue-900/20' : '' }}">
                                    <input type="radio" wire:model="selectedBankId" value="{{ $bank['id'] }}"
                                        wire:change="selectedBankChanged"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <div class="ml-3 flex-1">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">
                                                    {{ $bank['bank_name'] }}
                                                </div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                                    {{ $bank['account_number'] }} - {{ $bank['account_name'] }}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </label>
                            @endforeach

                            @if (count($banks) == 0)
                                <div class="text-center py-4 text-gray-500 dark:text-gray-400">
                                    Không có tài khoản ngân hàng nào đang hoạt động
                                </div>
                            @endif
                        </div>
                    </div>
                @endif



                {{-- Action Buttons --}}
                <div class="space-y-3">
                    {{-- Payment Button --}}
                    <button wire:click="processPayment" @if (count($selectedItems) == 0 || !$selectedStudent || ($paymentMethod === 'bank_transfer' && !$selectedBankId)) disabled @endif
                        class="cursor-pointer w-full bg-blue-600 hover:bg-blue-700 disabled:bg-gray-400 disabled:cursor-not-allowed text-white font-bold py-4 px-6 rounded-lg transition-all duration-300 flex items-center justify-center">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        @if (!$selectedStudent)
                            Chọn học sinh
                        @elseif(count($selectedItems) == 0)
                            Chọn chương trình
                        @elseif($paymentMethod === 'bank_transfer' && !$selectedBankId)
                            Chọn tài khoản ngân hàng
                        @else
                            Xác nhận thanh toán
                        @endif
                    </button>

                </div>
            </div>
        </div>

        {{-- Left Side - Programs and Selection --}}
        <div class="lg:col-span-2 space-y-4 flex flex-col">

            {{-- Program Search Section --}}
            <div class="theme-card-pink flex-shrink-0">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <flux:icon.magnifying-glass class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Tìm kiếm chương trình</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Tìm và chọn chương trình học</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">

                    {{-- Search Program --}}
                    <div class="mb-4">
                        <input type="text" wire:model.live="searchProgram" clearable
                            wire:focus="onProgramSearchFocus" wire:blur="onProgramSearchBlur"
                            placeholder="Tìm kiếm chương trình theo tên..." class="card-input">
                    </div>

                    {{-- Search Results --}}
                    @if (!$selectedStudent)
                        {{-- Chưa chọn học sinh --}}
                        <div class="text-center py-8">
                            <div class="text-gray-500 dark:text-gray-400 text-lg">Vui lòng chọn học sinh trước</div>
                            <div class="text-gray-400 dark:text-gray-500 text-sm mt-1">Sau khi chọn học sinh, danh sách
                                chương trình sẽ hiển thị</div>
                        </div>
                    @elseif (count($filteredPrograms) > 0)
                        <div class="max-h-64 overflow-y-auto space-y-2">
                            {{-- Uniform Item - Show when focused or when not searching --}}
                            @if ($isProgramSearchFocused || empty($searchProgram))
                                <div class="bg-purple-50 dark:bg-purple-900/20 rounded-lg p-3 hover:bg-purple-100 dark:hover:bg-purple-800/30 border border-purple-200 dark:border-purple-700">
                                    <button wire:click="addUniform"
                                        class="w-full flex items-center justify-between text-left">
                                        <div class="flex-1">
                                            <div class="text-purple-900 dark:text-purple-100 font-medium mb-1 flex items-center">
                                                <flux:icon.shirt class="w-4 h-4 mr-2" />
                                                Đồng phục
                                            </div>
                                            <div class="text-purple-600 dark:text-purple-400 text-sm font-bold">
                                                100.000 VNĐ
                                            </div>
                                        </div>
                                        <div class="text-purple-600 dark:text-purple-400">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            @endif

                            {{-- Programs List --}}
                            @foreach ($filteredPrograms as $program)
                                <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-3 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <button wire:click="addProgram({{ $program['id'] }})"
                                        class="w-full flex items-center justify-between text-left">
                                        <div class="flex-1">
                                            <div class="text-gray-900 dark:text-white font-medium mb-1">
                                                {{ $program['name'] }}
                                            </div>
                                            <div class="text-blue-600 dark:text-blue-400 text-sm font-bold">
                                                @php
                                                    $locationId = $selectedStudent['location_id'] ?? null;
                                                    if ($locationId) {
                                                        $price = app(
                                                            \App\Repositories\Contracts\ProgramLocationPriceRepositoryInterface::class,
                                                        )->getPriceByProgramAndLocation($program['id'], $locationId);
                                                        $displayPrice = $price ? $price->price : 0;
                                                    } else {
                                                        $displayPrice = 0;
                                                    }
                                                @endphp
                                                @if ($displayPrice > 0)
                                                    {{ number_format($displayPrice, 0, ',', '.') }} VNĐ
                                                @else
                                                    Chưa có giá
                                                @endif
                                            </div>
                                        </div>
                                        <div class="text-blue-600 dark:text-blue-400">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    @elseif($searchProgram && count($filteredPrograms) == 0)
                        <div class="text-center py-8">
                            <svg class="w-12 h-12 mx-auto text-gray-400 dark:text-gray-500 mb-3" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.29-1.009-5.824-2.709M15 6.75a3 3 0 11-6 0 3 3 0 016 0z">
                                </path>
                            </svg>
                            <div class="text-gray-500 dark:text-gray-400">Không tìm thấy chương trình nào</div>
                            <div class="text-gray-400 dark:text-gray-500 text-sm mt-1">Hãy thử tìm kiếm với từ khóa khác
                            </div>
                        </div>
                    @else
                        <div class="text-center py-8">
                            <svg class="w-12 h-12 mx-auto text-gray-400 dark:text-gray-500 mb-3" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <div class="text-gray-500 dark:text-gray-400">Nhập tên chương trình để tìm kiếm</div>
                            <div class="text-gray-400 dark:text-gray-500 text-sm mt-1">Ví dụ: "Giao tiếp", "Doanh
                                nghiệp", "Mẫu giáo"</div>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Selected Items Section --}}
            <div class="theme-card-pink flex-1 flex flex-col rounded-2xl">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <flux:icon.shopping-cart class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Đơn hàng đã chọn</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Danh sách chương trình đã chọn</p>
                        </div>
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col">

                    @if (count($selectedItems) > 0)
                        <div class="space-y-3 overflow-y-auto flex-1">
                            @foreach ($selectedItems as $index => $item)
                                <div
                                    class="bg-white dark:bg-gray-800 rounded-lg p-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                                    
                                    {{-- Mobile Layout --}}
                                    <div class="block sm:hidden">
                                        {{-- Header Row --}}
                                        <div class="flex items-center justify-between mb-3">
                                            <div class="flex items-center space-x-2">
                                                <div class="text-gray-500 dark:text-gray-400 text-sm font-medium">
                                                    {{ $index + 1 }}.
                                                </div>
                                                <div class="text-gray-900 dark:text-white font-medium text-sm">
                                                    {{ $item['name'] }}
                                                </div>
                                            </div>
                                            <button wire:click="removeItem({{ $index }})"
                                                class="text-red-500 hover:text-red-700 transition-colors duration-200 p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="size-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </button>
                                        </div>

                                        {{-- Options Row --}}
                                        <div class="grid grid-cols-2 gap-3 mb-3">
                                            {{-- Book Purchase Checkbox --}}
                                            @if ($item['type'] === 'program')
                                                @php
                                                    $program = collect($programs)->firstWhere('id', $item['id']);
                                                    $hasBookPrice = $program && $program['price_book'] > 0;
                                                @endphp
                                                @if ($hasBookPrice)
                                                    <div>
                                                        <label class="flex items-center text-xs text-gray-600 dark:text-gray-400">
                                                            <input type="checkbox" 
                                                                wire:change="toggleItemBookPurchase({{ $index }}, $event.target.checked)"
                                                                {{ isset($item['include_book']) && $item['include_book'] ? 'checked' : '' }}
                                                                class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-700 dark:border-gray-600">
                                                            <span class="ml-1">📚 Sách</span>
                                                        </label>
                                                    </div>
                                                @else
                                                    <div></div>
                                                @endif
                                            @else
                                                <div></div>
                                            @endif

                                            {{-- Season Selection --}}
                                            <div>
                                                @if ($item['type'] === 'uniform')
                                                    <div class="text-xs text-gray-500 dark:text-gray-400">
                                                        --
                                                    </div>
                                                @else
                                                    <select
                                                        wire:change="selectSeason({{ $index }}, $event.target.value)"
                                                        class="w-full px-2 py-1 text-xs rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                                                        <option value="">-- Mùa --</option>
                                                        @foreach ($seasons as $season)
                                                            <option value="{{ $season['id'] }}"
                                                                {{ $item['season_id'] == $season['id'] ? 'selected' : '' }}>
                                                                {{ $season['name'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                        </div>

                                        {{-- Discount Row --}}
                                        <div class="grid grid-cols-2 gap-3 mb-3">
                                            <div>
                                                <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Giảm giá</label>
                                                <input type="number"
                                                    wire:change="updateItemDiscount({{ $index }}, $event.target.value)"
                                                    value="{{ $item['discount_amount'] ?? 0 }}" placeholder="0"
                                                    class="w-full px-2 py-1 text-xs rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                                            </div>
                                            <div>
                                                <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Loại</label>
                                                <select
                                                    wire:change="updateItemDiscountType({{ $index }}, $event.target.value)"
                                                    class="w-full px-2 py-1 text-xs rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                                                    <option value="vnd"
                                                        {{ ($item['discount_type'] ?? 'vnd') == 'vnd' ? 'selected' : '' }}>
                                                        VNĐ</option>
                                                    <option value="percent"
                                                        {{ ($item['discount_type'] ?? 'vnd') == 'percent' ? 'selected' : '' }}>
                                                        %</option>
                                                </select>
                                            </div>
                                        </div>

                                        {{-- Price Row --}}
                                        <div class="text-right">
                                            @if (isset($item['include_book']) && $item['include_book'] && isset($item['book_price']) && $item['book_price'] > 0)
                                                <div class="text-gray-700 dark:text-gray-300 text-xs">
                                                    {{ number_format($item['base_price'], 0, ',', '.') }}
                                                </div>
                                                <div class="text-green-600 dark:text-green-400 text-xs">
                                                    +{{ number_format($item['book_price'], 0, ',', '.') }}
                                                </div>
                                            @endif
                                            <div class="text-gray-900 dark:text-white font-bold text-sm">
                                                {{ number_format($item['price'], 0, ',', '.') }}
                                            </div>
                                            @if (isset($item['discount_amount']) && $item['discount_amount'] > 0)
                                                @php
                                                    $basePrice = isset($item['base_price']) ? $item['base_price'] : $item['price'];
                                                    $discountValue =
                                                        ($item['discount_type'] ?? 'vnd') === 'percent'
                                                            ? ($basePrice * $item['discount_amount']) / 100
                                                            : $item['discount_amount'];
                                                    $finalPrice = $item['price'] - $discountValue;
                                                @endphp
                                                <div class="text-red-500 text-xs">
                                                    -{{ ($item['discount_type'] ?? 'vnd') === 'percent' ? $item['discount_amount'] . '%' : number_format($discountValue, 0, ',', '.') }}
                                                </div>
                                                <div class="text-green-600 dark:text-green-400 font-bold text-sm">
                                                    {{ number_format($finalPrice, 0, ',', '.') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Desktop Layout --}}
                                    <div class="hidden sm:block">
                                        <div class="flex items-center space-x-4">
                                            {{-- Index Number --}}
                                            <div class="text-gray-500 dark:text-gray-400 text-sm font-medium w-6">
                                                {{ $index + 1 }}
                                            </div>

                                            {{-- Trash Icon --}}
                                            <button wire:click="removeItem({{ $index }})"
                                                class="text-red-500 hover:text-red-700 transition-colors duration-200">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </button>

                                            {{-- Course Name --}}
                                            <div class="flex-1 text-gray-900 dark:text-white font-medium">
                                                {{ $item['name'] }}
                                            </div>

                                            {{-- Book Purchase Checkbox --}}
                                            @if ($item['type'] === 'program')
                                                @php
                                                    $program = collect($programs)->firstWhere('id', $item['id']);
                                                    $hasBookPrice = $program && $program['price_book'] > 0;
                                                @endphp
                                                @if ($hasBookPrice)
                                                    <div class="w-24">
                                                        <label class="flex items-center text-xs text-gray-600 dark:text-gray-400">
                                                            <input type="checkbox" 
                                                                wire:change="toggleItemBookPurchase({{ $index }}, $event.target.checked)"
                                                                {{ isset($item['include_book']) && $item['include_book'] ? 'checked' : '' }}
                                                                class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-700 dark:border-gray-600">
                                                            <span class="ml-1">📚 Sách</span>
                                                        </label>
                                                    </div>
                                                @else
                                                    <div class="w-24"></div>
                                                @endif
                                            @else
                                                <div class="w-24"></div>
                                            @endif

                                            {{-- Season Selection --}}
                                            <div class="w-32">
                                                @if ($item['type'] === 'uniform')
                                                    <div
                                                        class="w-full px-2 py-1 text-xs text-gray-500 dark:text-gray-400 text-center">
                                                        --
                                                    </div>
                                                @else
                                                    <select
                                                        wire:change="selectSeason({{ $index }}, $event.target.value)"
                                                        class="w-full px-2 py-1 text-xs rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                                                        <option value="">-- Mùa --</option>
                                                        @foreach ($seasons as $season)
                                                            <option value="{{ $season['id'] }}"
                                                                {{ $item['season_id'] == $season['id'] ? 'selected' : '' }}>
                                                                {{ $season['name'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                @endif
                                            </div>

                                            {{-- Discount Input --}}
                                            <div class="w-20">
                                                <input type="number"
                                                    wire:change="updateItemDiscount({{ $index }}, $event.target.value)"
                                                    value="{{ $item['discount_amount'] ?? 0 }}" placeholder="0"
                                                    class="w-full px-2 py-1 text-xs rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white text-right">
                                            </div>

                                            {{-- Discount Type --}}
                                            <div class="w-16">
                                                <select
                                                    wire:change="updateItemDiscountType({{ $index }}, $event.target.value)"
                                                    class="w-full px-1 py-1 text-xs rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                                                    <option value="vnd"
                                                        {{ ($item['discount_type'] ?? 'vnd') == 'vnd' ? 'selected' : '' }}>
                                                        VNĐ</option>
                                                    <option value="percent"
                                                        {{ ($item['discount_type'] ?? 'vnd') == 'percent' ? 'selected' : '' }}>
                                                        %</option>
                                                </select>
                                            </div>

                                            {{-- Price Display --}}
                                            <div class="w-24 text-right">
                                                @if (isset($item['include_book']) && $item['include_book'] && isset($item['book_price']) && $item['book_price'] > 0)
                                                    <div class="text-gray-700 dark:text-gray-300 text-xs">
                                                        {{ number_format($item['base_price'], 0, ',', '.') }}
                                                    </div>
                                                    <div class="text-green-600 dark:text-green-400 text-xs">
                                                        +{{ number_format($item['book_price'], 0, ',', '.') }}
                                                    </div>
                                                @endif
                                                <div class="text-gray-900 dark:text-white font-bold text-sm">
                                                    {{ number_format($item['price'], 0, ',', '.') }}
                                                </div>
                                                @if (isset($item['discount_amount']) && $item['discount_amount'] > 0)
                                                    @php
                                                        $basePrice = isset($item['base_price']) ? $item['base_price'] : $item['price'];
                                                        $discountValue =
                                                            ($item['discount_type'] ?? 'vnd') === 'percent'
                                                                ? ($basePrice * $item['discount_amount']) / 100
                                                                : $item['discount_amount'];
                                                        $finalPrice = $item['price'] - $discountValue;
                                                    @endphp
                                                    <div class="text-red-500 text-xs">
                                                        -{{ ($item['discount_type'] ?? 'vnd') === 'percent' ? $item['discount_amount'] . '%' : number_format($discountValue, 0, ',', '.') }}
                                                    </div>
                                                    <div class="text-green-600 dark:text-green-400 font-bold text-sm">
                                                        {{ number_format($finalPrice, 0, ',', '.') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-8">
                            <div class="text-gray-500 dark:text-gray-400 text-lg">Chưa có chương trình nào được chọn
                            </div>
                            <div class="text-gray-400 dark:text-gray-500 text-sm mt-1">Hãy chọn chương trình từ danh
                                sách bên trên</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        
    </div>

    {{-- Transaction History Section - Separate from payment section --}}
    @if ($selectedStudent)

        {{-- Header Section for Transaction History --}}
        <div class="theme-header-pink mt-6">
            <div class="flex items-center justify-between">
                <div class="header-content">
                    <div class="flex items-center space-x-3 mb-2">
                        <div class="header-icon">
                            <flux:icon.document-text class="size-12" />
                        </div>
                        <div>
                            <h1 class="header-title">Lịch sử giao dịch</h1>
                            <p class="header-subtitle">Lịch sử giao dịch của {{ $selectedStudent['name'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="header-counter">
                        <span>{{ count($transactionHistory) }} giao dịch</span>
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
                                <th class="text-center">Chương trình</th>
                                <th class="text-center">Mùa học</th>
                                <th class="text-center">Số tiền</th>
                                <th class="text-center">Phương thức</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Ngày tạo</th>
                                <th class="text-center">Thanh toán</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transactionHistory as $transaction)
                                <tr wire:key="transaction-desktop-{{ $transaction['id'] }}">
                                    <td class="whitespace-nowrap text-center font-medium">
                                        {{ $transaction['note'] ?? ($transaction['program']['name'] ?? 'Đồng phục') }}
                                    </td>
                                    <td class="whitespace-nowrap text-center">
                                        {{ $transaction['season']['name'] ?? '--' }}
                                    </td>
                                    <td class="whitespace-nowrap text-center font-bold text-green-600 dark:text-green-400">
                                        {{ number_format($transaction['price'], 0, ',', '.') }} VNĐ
                                    </td>
                                    <td class="whitespace-nowrap text-center">
                                        @if ($transaction['payment_method'] === 'cash')
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                💵 Tiền mặt
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                                🏦 Chuyển khoản
                                            </span>
                                        @endif
                                    </td>
                                    <td class="whitespace-nowrap text-center">
                                        @if ($transaction['status'] === 'pending')
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">
                                                ⏳ Chờ xử lý
                                            </span>
                                        @elseif($transaction['status'] === 'paid')
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                ✅ Hoàn thành
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
                                                ❌ Hủy bỏ
                                            </span>
                                        @endif
                                    </td>
                                    <td class="whitespace-nowrap text-center">
                                        {{ $transaction['created_at_formatted'] }}
                                    </td>
                                    <td class="whitespace-nowrap text-center">
                                        @if ($transaction['payment_method'] === 'bank_transfer' && $transaction['status'] !== 'paid')
                                            <flux:button size="sm" variant="primary" icon="qr-code"
                                                wire:click="showQrCode({{ $transaction['id'] }})"
                                                class="cursor-pointer">
                                                QR Code
                                            </flux:button>
                                        @endif
                                        @if ($transaction['payment_method'] === 'cash' && $transaction['status'] !== 'paid')
                                            <flux:button color="green" size="sm" variant="primary"
                                                icon="check" wire:click="paidCash({{ $transaction['id'] }})"
                                                class="cursor-pointer">
                                                Đã thanh toán
                                            </flux:button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-8">
                                        <div class="empty-state flex flex-col items-center">
                                            <flux:icon.document-text class="w-8 h-8 mb-2" />
                                            <div class="text-sm">Chưa có giao dịch nào</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">Học sinh này chưa có lịch sử giao dịch nào trong hệ thống.</div>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Mobile Card View --}}
                <div class="md:hidden space-y-3">
                    @forelse ($transactionHistory as $transaction)
                        <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                             x-data="{ expanded: false }" 
                             wire:key="transaction-mobile-{{ $transaction['id'] }}">
                            
                            {{-- Main Row --}}
                            <div class="p-4 flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-teal-100 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-medium text-gray-900">{{ $transaction['note'] ?? ($transaction['program']['name'] ?? 'Đồng phục') }}</div>
                                        <div class="text-sm text-gray-500">{{ $transaction['created_at_formatted'] }}</div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-2">
                                    @if ($transaction['status'] === 'pending')
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            ⏳ Chờ xử lý
                                        </span>
                                    @elseif($transaction['status'] === 'paid')
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            ✅ Hoàn thành
                                        </span>
                                    @else
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            ❌ Hủy bỏ
                                        </span>
                                    @endif
                                    
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
                                        <span class="text-sm text-gray-900 text-right max-w-[200px]">{{ $transaction['note'] ?? ($transaction['program']['name'] ?? 'Đồng phục') }}</span>
                                    </div>

                                    {{-- Mùa học --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Mùa học:</span>
                                        <span class="text-sm text-gray-900">{{ $transaction['season']['name'] ?? '--' }}</span>
                                    </div>

                                    {{-- Số tiền --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Số tiền:</span>
                                        <span class="text-sm font-bold text-green-600">{{ number_format($transaction['price'], 0, ',', '.') }} VNĐ</span>
                                    </div>

                                    {{-- Phương thức thanh toán --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Phương thức:</span>
                                        @if ($transaction['payment_method'] === 'cash')
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                💵 Tiền mặt
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                🏦 Chuyển khoản
                                            </span>
                                        @endif
                                    </div>

                                    {{-- Trạng thái --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Trạng thái:</span>
                                        @if ($transaction['status'] === 'pending')
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                ⏳ Chờ xử lý
                                            </span>
                                        @elseif($transaction['status'] === 'paid')
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                ✅ Hoàn thành
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                ❌ Hủy bỏ
                                            </span>
                                        @endif
                                    </div>

                                    {{-- Ngày tạo --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Ngày tạo:</span>
                                        <span class="text-sm text-gray-900">{{ $transaction['created_at_formatted'] }}</span>
                                    </div>

                                    {{-- Actions --}}
                                    @if (($transaction['payment_method'] === 'bank_transfer' && $transaction['status'] !== 'paid') || 
                                         ($transaction['payment_method'] === 'cash' && $transaction['status'] !== 'paid'))
                                        <div class="pt-3 border-t border-gray-200">
                                            <div class="flex space-x-2">
                                                @if ($transaction['payment_method'] === 'bank_transfer' && $transaction['status'] !== 'paid')
                                                    <button wire:click="showQrCode({{ $transaction['id'] }})"
                                                            class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path>
                                                        </svg>
                                                        <span>QR Code</span>
                                                    </button>
                                                @endif
                                                
                                                @if ($transaction['payment_method'] === 'cash' && $transaction['status'] !== 'paid')
                                                    <button wire:click="paidCash({{ $transaction['id'] }})"
                                                            class="flex-1 bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700 transition-colors flex items-center justify-center space-x-2">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                        <span>Đã thanh toán</span>
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="bg-white rounded-lg border border-gray-200 p-8">
                            <div class="empty-state flex flex-col items-center">
                                <flux:icon.document-text class="w-8 h-8 mb-2 text-gray-400" />
                                <div class="text-sm text-gray-500">Chưa có giao dịch nào</div>
                                <div class="text-xs text-gray-400 mt-1">Học sinh này chưa có lịch sử giao dịch nào trong hệ thống.</div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

    @endif

</div>

@push('scripts')
    <script src="{{ asset('js/serial-port-manager.js') }}"></script>
    <script>
        // Tự động khởi tạo và gửi lệnh chuyển khoản
        document.addEventListener('mainMenuQRCode', function() {
            window.serialPortManager.mainMenuQRCode();
        });

        document.addEventListener('process-payment', function(qrCode) {
            window.serialPortManager.processPayment(qrCode);
        });

        document.addEventListener('turnOnBankTransfer', function() {
            window.serialPortManager.turnOnBankTransfer();
        });

        document.addEventListener('turnOffQRCode', function() {
            window.serialPortManager.turnOffQRCode();
        });

        // Handle delayed blur for program search
        document.addEventListener('delayed-blur', function() {
            setTimeout(function() {
                @this.call('handleDelayedBlur');
            }, 150); // 150ms delay
        });
    </script>
@endpush
