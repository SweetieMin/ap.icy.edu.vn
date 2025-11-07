<div>
    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.academic-cap class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Quản lý điểm danh</h1>
                        <p class="header-subtitle">Quản lý hệ thống điểm danh vềtisnh công lương và điểm danh bù cho giáo
                            viên</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Danh sách lịch học</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span> {{ $schedules->count() }} lịch học</span>
                </div>

            </div>
        </div>
    </div>

    <!-- Bộ lọc -->
    <div class="theme-card-pink mt-4 mb-4">
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-3">


                <div>

                    <flux:select variant="listbox" searchable placeholder="Tất cả" clearable
                        wire:model.debounce.live='selectedTeacher' clearable label='Lọc theo giáo viên'>
                        @foreach ($teachers as $teacher)
                            <flux:select.option value="{{ $teacher->id }}">{{ $teacher->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                </div>

                <div>
                    <flux:date-picker label='Lọc theo ngày' wire:model.debounce.live="range" mode="range" clearable
                        locale="vi-VN" placeholder="Chọn ngày" :max="now()->toDateString()"
                        :open-to="now()->subMonth()->startOfMonth()->toDateString()" />
                </div>
                <div class="flex items-center">
                    <flux:select variant="listbox" wire:model.debounce.live="page" placeholder="" clearable
                        label='Số dòng/trang'>
                        <flux:select.option value='10'>10 </flux:select.option>
                        <flux:select.option value='20'>20</flux:select.option>
                        <flux:select.option value='50'>50</flux:select.option>
                        <flux:select.option value='100'>100</flux:select.option>
                        <flux:select.option value=''>Tất cả</flux:select.option>
                    </flux:select>
                </div>
                <flux:spacer />

                <div class="flex justify-end items-center">
                    <flux:field>
                        <flux:label>Xuất Excel</flux:label>

                        <flux:button wire:click='exportData()' icon="arrow-down-tray" class='cursor-pointer'>Xuất .xlsx
                        </flux:button>
                    </flux:field>

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
                            <th class="text-center">Ngày</th>
                            <th class="text-center">Lớp</th>
                            <th class="text-center">Người điểm danh</th>
                            <th class="text-center">Loại</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($schedules as $index => $schedule)
                            <tr wire:key="schedule-desktop-{{ $schedule->id }}">
                                <td class="text-center font-medium">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="text-center">
                                    {{ $schedule->formatted_date }}
                                </td>

                                <td class="text-center">
                                    {{ $schedule->course->name }}
                                </td>

                                <td class="text-center">

                                    {{ $schedule->attendances->first()?->checker->name ?? '-' }}

                                </td>

                                <td class="text-center">
                                    <flux:badge
                                        :color="$schedule->attendances->first()?->attendance_type === 'makeup' ? 'red' : 'green'">
                                        {{ $schedule->attendances->first()?->attendance_type_label ?? '' }}
                                    </flux:badge>
                                </td>

                                <td class="text-center">
                                    @if (!$schedule->attendances->first() || $schedule->attendances->first()->attendance_type === 'makeup')
                                        <flux:dropdown>
                                            <flux:button icon:trailing="chevron-down" class="cursor-pointer">
                                                Thao tác
                                            </flux:button>

                                            <flux:menu>
                                                <flux:menu.item class="cursor-pointer" icon="pencil"
                                                    wire:click="makeUpAttendance({{ $schedule->id }})">
                                                    Điểm danh bù
                                                </flux:menu.item>
                                            </flux:menu>
                                        </flux:dropdown>
                                    @endif
                                </td>



                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-12">
                                    <div class="empty-state flex flex-col items-center">
                                        <flux:icon.academic-cap class="w-12 h-12 mb-4" />
                                        <h3 class="text-lg font-medium mb-2">
                                            Không có lịch
                                        </h3>
                                        <p>
                                            Hiện tại không có lịch trong các cơ sở của bạn
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

            </div>
            {{-- Pagination if needed --}}
            @if ($schedules instanceof \Illuminate\Contracts\Pagination\Paginator)
                @if ($schedules->hasPages())
                    <div class="pagination-container">
                        {{ $schedules->links() }}
                    </div>
                @endif
            @endif
        </div>
    </div>

    <livewire:back.arrangement.attendance.actions-make-up-attendance />

</div>
