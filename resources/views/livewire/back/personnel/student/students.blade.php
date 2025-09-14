<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.academic-cap class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Học viên</h1>
                        <p class="header-subtitle">Quản lý thông tin học viên trong hệ thống</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Danh sách học viên</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span>{{ $students->count() }} học viên</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
                    <button wire:click="addStudent()" class="header-button w-full sm:w-auto">
                        <flux:icon.plus class="w-4 h-4 sm:w-5 sm:h-5" />
                        <span class="hidden sm:inline">Thêm học viên</span>
                        <span class="sm:hidden">Thêm</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <livewire:back.personnel.student.actions-student />

    <!-- Bộ lọc -->
    <div class="theme-card-pink mt-4 mb-4">
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
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
            </div>
        </div>
    </div>


    <div class="mt-6">
        <div class="theme-table-pink">
            <div class="overflow-x-auto">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center w-16">STT</th>
                            <th>Họ và tên</th>
                            <th class="hidden md:table-cell">Số điện thoại</th>
                            @if (auth()->user()->locations()->count() > 1)
                                <th class="text-center">Cơ sở</th>
                            @endif
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $index => $student)
                            <tr wire:key="student-{{ $student->id }}">
                                <td class="text-center font-medium">
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ $student->detail?->avatar ?? asset('images/default-avatar.png') }}"
                                            alt="{{ $student->name }}">
                                        <div>
                                            <div class="font-medium">{{ $student->name }}</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                                {{ $student->account_code }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="hidden md:table-cell">
                                    {{ $student->detail?->phone ?? 'Chưa cập nhật' }}
                                </td>
                                @if (auth()->user()->locations()->count() > 1)
                                    <td class="text-center">
                                        @if ($student->locations->count() > 0)
                                            @foreach ($student->locations as $location)
                                                <flux:badge color="blue" size="sm" class="mb-1">
                                                    {{ $location->name }}
                                                </flux:badge>
                                                @if (!$loop->last)
                                                    <br>
                                                @endif
                                            @endforeach
                                        @else
                                            <span class="text-gray-500 dark:text-gray-400 text-xs">Chưa có cơ
                                                sở</span>
                                        @endif
                                    </td>
                                @endif
                                <td class="text-center">
                                    <flux:dropdown>
                                        <flux:button icon:trailing="chevron-down">Thao tác</flux:button>

                                        <flux:menu>
                                            <flux:menu.item icon="pencil"
                                                wire:click="editStudent({{ $student->id }})">Sửa thông tin
                                            </flux:menu.item>

                                            <flux:menu.item icon="printer"
                                                wire:click="printStudentRegistration({{ $student->id }})">In đơn
                                                đăng ký</flux:menu.item>

                                            <flux:menu.separator />

                                            <flux:menu.item icon="credit-card"
                                                wire:click="paymentStudent({{ $student->id }})">Thanh toán học phí
                                            </flux:menu.item>

                                            <flux:menu.separator />

                                            <flux:menu.item variant="danger" icon="trash"
                                                wire:click="deleteStudent({{ $student->id }})">Xóa
                                            </flux:menu.item>
                                        </flux:menu>
                                    </flux:dropdown>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-12">
                                    <div class="empty-state flex flex-col items-center">
                                        <flux:icon.academic-cap class="w-12 h-12 mb-4" />
                                        <h3 class="text-lg font-medium mb-2">
                                            Không có học viên nào
                                        </h3>
                                        <p>
                                            Hiện tại không có học viên nào trong các cơ sở của bạn
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{-- Pagination if needed --}}
            {{-- @if ($students->hasPages())
                <div class="pagination-container">
                    {{ $students->links() }}
                </div>
            @endif --}}
        </div>
    </div>

    {{-- Bảng học viên không có location --}}
    @if ($studentsWithoutLocation->count() > 0)
        {{-- Header Section for Students Without Location --}}
        <div class="theme-header-pink mt-6">
            <div class="flex items-center justify-between">
                <div class="header-content">
                    <div class="flex items-center space-x-3 mb-2">
                        <div class="header-icon">
                            <flux:icon.exclamation-triangle class="size-12" />
                        </div>
                        <div>
                            <h1 class="header-title">Học viên chưa được phân cơ sở</h1>
                            <p class="header-subtitle">Danh sách học viên chưa được gán cơ sở</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="header-counter">
                        <span>{{ $studentsWithoutLocation->count() }} học viên</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main content area --}}
        <div class="mt-6">
            <div class="theme-table-pink">
                <div class="overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center w-16">STT</th>
                                <th>Họ và tên</th>
                                <th class="hidden md:table-cell">Số điện thoại</th>
                                @if (auth()->user()->locations()->count() > 1)
                                    <th class="text-center">Cơ sở</th>
                                @endif
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($studentsWithoutLocation as $index => $student)
                                <tr wire:key="student-no-location-{{ $student->id }}">
                                    <td class="text-center font-medium">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="{{ $student->detail?->avatar ?? asset('images/default-avatar.png') }}"
                                                alt="{{ $student->name }}">
                                            <div>
                                                <div class="font-medium">{{ $student->name }}</div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                                    {{ $student->account_code }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden md:table-cell">
                                        {{ $student->detail?->phone ?? 'Chưa cập nhật' }}
                                    </td>
                                    @if (auth()->user()->locations()->count() > 1)
                                        <td class="text-center">
                                            <span class="text-red-500 dark:text-red-400 text-xs font-medium">
                                                Chưa có cơ sở
                                            </span>
                                        </td>
                                    @endif
                                    <td class="text-center">
                                        <flux:dropdown>
                                            <flux:button icon:trailing="chevron-down">Thao tác</flux:button>

                                            <flux:menu>
                                                <flux:menu.item icon="pencil"
                                                    wire:click="editStudent({{ $student->id }})">Sửa thông tin
                                                </flux:menu.item>

                                                <flux:menu.item icon="printer"
                                                    wire:click="printStudentRegistration({{ $student->id }})">In đơn
                                                    đăng ký</flux:menu.item>

                                                <flux:menu.separator />

                                                <flux:menu.item variant="danger" icon="trash"
                                                    wire:click="deleteStudent({{ $student->id }})">Xóa
                                                </flux:menu.item>
                                            </flux:menu>
                                        </flux:dropdown>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-12">
                                        <div class="empty-state flex flex-col items-center">
                                            <flux:icon.academic-cap class="w-12 h-12 mb-4" />
                                            <h3 class="text-lg font-medium mb-2">
                                                Không có học viên nào
                                            </h3>
                                            <p>
                                                Hiện tại không có học viên nào chưa được phân cơ sở
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

@push('scripts')
    <script>
        window.addEventListener('open-pdf', e => {
            console.log(e.detail[0].url);
            let url = e.detail[0].url;

            // Mở PDF trong tab mới và tự động in
            let printWindow = window.open(url, '_blank');

            // Đợi PDF load xong rồi in
            if (printWindow) {
                printWindow.onload = function() {
                    setTimeout(() => {
                        printWindow.print();
                    }, 2000); // Đợi 2 giây để PDF load hoàn toàn
                };

                // Fallback nếu onload không hoạt động
                setTimeout(() => {
                    try {
                        printWindow.print();
                    } catch (e) {
                        console.log('Print failed:', e);
                    }
                }, 3000);
            }
        });
    </script>
@endpush
