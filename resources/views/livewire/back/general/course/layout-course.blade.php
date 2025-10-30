<div>
    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.queue-list class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Lớp học của tôi</h1>
                        <p class="header-subtitle">Quản lý các lớp học của tôi</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Lớp học của tôi</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Content --}}

    {{-- Tab Navigation --}}
    <div class="mb-6">
        <div class="border-b border-gray-200 dark:border-gray-700">
            {{-- Desktop Navigation --}}
            <nav class="-mb-px hidden sm:flex space-x-8">
                <button wire:click="setActiveTab('schedule')"
                    class="py-2 px-1 border-b-2 font-medium text-sm transition-colors duration-200 {{ $activeTab === 'schedule' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300' }}">
                    <div class="flex items-center space-x-2">
                        <flux:icon.calendar class="size-4" />
                        <span>Lịch dạy hôm nay</span>
                    </div>
                </button>
                <button wire:click="setActiveTab('courses')"
                    class="py-2 px-1 border-b-2 font-medium text-sm transition-colors duration-200 {{ $activeTab === 'courses' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300' }}">
                    <div class="flex items-center space-x-2">
                        <flux:icon.academic-cap class="size-4" />
                        <span>Lớp của tôi</span>
                    </div>
                </button>

                @if ($selectedCourse)
                    <button wire:click="setActiveTab('class-list')"
                        class="py-2 px-1 border-b-2 font-medium text-sm transition-colors duration-200 {{ $activeTab === 'class-list' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300' }}">
                        <div class="flex items-center space-x-2">
                            <flux:icon.user-group class="size-4" />
                            <span>Danh sách học viên</span>
                        </div>
                    </button>
                    <button wire:click="setActiveTab('attendance-history')"
                        class="py-2 px-1 border-b-2 font-medium text-sm transition-colors duration-200 {{ $activeTab === 'attendance-history' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300' }}">
                        <div class="flex items-center space-x-2">
                            <flux:icon.check-circle class="size-4" />
                            <span>Lịch sử điểm danh</span>
                        </div>
                    </button>
                @endif
            </nav>

            {{-- Mobile Navigation - 2 columns grid --}}
            <nav class="-mb-px grid grid-cols-2 gap-2 sm:hidden">
                <button wire:click="setActiveTab('schedule')"
                    class="py-3 px-3 border-b-2 font-medium text-sm transition-colors duration-200 {{ $activeTab === 'schedule' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300' }}">
                    <div class="flex items-center justify-center space-x-2">
                        <flux:icon.calendar class="size-4" />
                        <span>Lịch hôm nay</span>
                    </div>
                </button>
                <button wire:click="setActiveTab('courses')"
                    class="py-3 px-3 border-b-2 font-medium text-sm transition-colors duration-200 {{ $activeTab === 'courses' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300' }}">
                    <div class="flex items-center justify-center space-x-2">
                        <flux:icon.academic-cap class="size-4" />
                        <span>Lớp của tôi</span>
                    </div>
                </button>

                @if ($selectedCourse)
                    <button wire:click="setActiveTab('class-list')"
                        class="py-3 px-3 border-b-2 font-medium text-sm transition-colors duration-200 {{ $activeTab === 'class-list' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300' }}">
                        <div class="flex items-center justify-center space-x-2">
                            <flux:icon.user-group class="size-4" />
                            <span>Học viên</span>
                        </div>
                    </button>
                    <button wire:click="setActiveTab('attendance-history')"
                        class="py-3 px-3 border-b-2 font-medium text-sm transition-colors duration-200 {{ $activeTab === 'attendance-history' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300' }}">
                        <div class="flex items-center justify-center space-x-2">
                            <flux:icon.check-circle class="size-4" />
                            <span>Điểm danh</span>
                        </div>
                    </button>
                @endif
            </nav>
        </div>
    </div>

    {{-- Tab Content --}}
    <div class="mt-6">
        {{-- Tab 1: Lịch dạy hôm nay --}}
        @if ($activeTab === 'schedule')
            <livewire:back.general.course.schedule-courses />
            <livewire:back.general.course.attendance-students />
        @endif

        {{-- Tab 2: Lớp của tôi --}}
        @if ($activeTab === 'courses')
            <livewire:back.general.course.my-courses />
        @endif


        {{-- Tab 3: Danh sách học viên --}}
        @if ($activeTab === 'class-list')
            {{-- Course Info Header --}}
            <div class="theme-header-pink mb-6">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-3 sm:space-y-0">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-pink-100 dark:bg-pink-900 rounded-lg flex items-center justify-center">
                            <flux:icon.academic-cap class="w-5 h-5 text-pink-600 dark:text-pink-400" />
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Mã lớp:
                                {{ $selectedCourse->name }}</h2>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Môn:
                                {{ $selectedCourse->subject->name ?? 'Chưa xác định' }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 text-sm">
                        <div class="flex items-center space-x-2">
                            <flux:icon.calendar class="w-4 h-4 text-gray-400" />
                            <span class="text-gray-600 dark:text-gray-400">Mùa học:
                                {{ $selectedCourse->season->name }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="theme-table-pink">
                {{-- Desktop Table View --}}
                <div class="hidden md:block overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th>Họ và tên</th>
                                <th class="text-center">Số điện thoại</th>
                                <th class="text-center">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($classStudents as $i => $student)
                                <tr>
                                    <td class="text-center">{{ $i + 1 }}</td>
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
                                    <td class="text-center">{{ $student->detail->phone }}</td>
                                    <td class="text-center">{{ $student->email }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Không có học viên</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Mobile Card View --}}
                <div class="md:hidden space-y-3">
                    @forelse ($classStudents as $i => $student)
                        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm" 
                             x-data="{ expanded: false }" 
                             wire:key="student-mobile-{{ $student->id }}">
                            
                            {{-- Main Row --}}
                            <div class="p-4 flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ $student->detail?->avatar ?? asset('images/default-avatar.png') }}"
                                        alt="{{ $student->name }}">
                                    <div>
                                        <div class="font-medium text-gray-900 dark:text-white">{{ $student->name }}</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">ID: {{ $student->account_code }}</div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-medium text-gray-600 dark:text-gray-400">#{{ $i + 1 }}</span>
                                    
                                    <button @click="expanded = !expanded" 
                                            class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
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
                                 class="border-t border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
                                
                                <div class="p-4 space-y-3">
                                   
                                    {{-- Số điện thoại --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Số điện thoại:</span>
                                        <span class="text-sm text-gray-900 dark:text-white">{{ $student->detail->phone ?? 'Chưa cập nhật' }}</span>
                                    </div>

                                    {{-- Email --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Email:</span>
                                        <span class="text-sm text-gray-900 dark:text-white break-all">{{ $student->email }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-8">
                            <div class="empty-state flex flex-col items-center">
                                <flux:icon.user-group class="w-12 h-12 mb-4 text-gray-400" />
                                <h3 class="text-lg font-medium mb-2 text-gray-500">
                                    Không có học viên
                                </h3>
                                <p class="text-gray-400">
                                    Hiện tại lớp học này chưa có học viên nào
                                </p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        @endif

        {{-- Tab 4: Lịch sử điểm danh --}}
        @if ($activeTab === 'attendance-history')
            <div class="theme-table-pink">
                {{-- Desktop Table View --}}
                <div class="hidden md:block overflow-x-auto">
                    <table style="table-layout: fixed; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center sticky left-0 bg-white dark:bg-gray-800 z-10"
                                    style="width: 60px;">STT</th>
                                <th class="text-center sticky left-[60px] bg-white dark:bg-gray-800 z-10"
                                    style="min-width: 250px !important; width: 250px !important;">Họ và tên</th>
                                <th class="text-center sticky left-[310px] bg-white dark:bg-gray-800 z-10"
                                    style="width: 80px;">Tổng</th>
                                <th class="text-center sticky left-[390px] bg-white dark:bg-gray-800 z-10"
                                    style="width: 80px;">Vắng(%)</th>
                                @foreach ($classScheduleDates as $date)
                                    <th class="text-center text-xs" style="width: 60px;">
                                        {{ \Carbon\Carbon::parse($date)->format('d/m') }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($attendanceHistory as $i => $attendance)
                                <tr>
                                    <td class="text-center sticky left-0 bg-white dark:bg-gray-800 z-10"
                                        style="width: 60px;">{{ $i + 1 }}</td>
                                    <td class="sticky left-[60px] bg-white dark:bg-gray-800 z-10"
                                        style="min-width: 250px !important; width: 250px !important;">
                                        <div class="flex items-center gap-3">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="{{ $attendance['student']->detail?->avatar ?? asset('images/default-avatar.png') }}"
                                                alt="{{ $attendance['student']->name }}">
                                            <div>
                                                <div class="font-medium text-sm">{{ $attendance['student']->name }}
                                                </div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                                    {{ $attendance['student']->account_code }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center sticky left-[310px] bg-white dark:bg-gray-800 z-10"
                                        style="width: 80px;">{{ $attendance['attendance_count'] }}/24</td>
                                    <td class="text-center sticky left-[390px] bg-white dark:bg-gray-800 z-10"
                                        style="width: 80px;">
                                        <span
                                            class="px-2 py-1 text-xs rounded-full {{ $attendance['absent_percentage'] > 20 ? 'bg-red-100 text-red-800' : ($attendance['absent_percentage'] > 10 ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800') }}">
                                            {{ $attendance['absent_percentage'] }}%
                                        </span>
                                    </td>
                                    @foreach ($classScheduleDates as $date)
                                        <td class="text-center">
                                            @if ($attendance['attendances'][$date] !== null)
                                                @if ($attendance['attendances'][$date] === 'present')
                                                    <span
                                                        class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-700  rounded-full">
                                                        P
                                                    </span>
                                                @else
                                                    <span
                                                        class="inline-flex items-center px-2 py-1 text-xs font-medium text-rose-500  rounded-full">
                                                        A
                                                    </span>
                                                @endif
                                            @else
                                                <span
                                                    class="inline-flex items-center px-2 py-1 text-xs font-medium text-gray-800 rounded-full">
                                                    <flux:icon.minus class="w-3 h-3 mr-1" />
                                                </span>
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ 5 + count($classScheduleDates) }}" class="text-center py-8">
                                        <div class="flex flex-col items-center space-y-2">
                                            <flux:icon.user-group class="w-12 h-12 text-gray-400" />
                                            <p class="text-gray-500">Chưa có dữ liệu điểm danh</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Mobile Card View --}}
                <div class="md:hidden space-y-3">
                    @forelse ($attendanceHistory as $i => $attendance)
                        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm" 
                             x-data="{ expanded: false }" 
                             wire:key="attendance-mobile-{{ $attendance['student']->id }}">
                            
                            {{-- Main Row --}}
                            <div class="p-4 flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ $attendance['student']->detail?->avatar ?? asset('images/default-avatar.png') }}"
                                        alt="{{ $attendance['student']->name }}">
                                    <div>
                                        <div class="font-medium text-gray-900 dark:text-white">{{ $attendance['student']->name }}</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">ID: {{ $attendance['student']->account_code }}</div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-2">
                                    <div class="text-right">
                                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                                            {{ $attendance['attendance_count'] }}/24 buổi
                                        </div>
                                        <span class="px-2 py-1 text-xs rounded-full {{ $attendance['absent_percentage'] > 20 ? 'bg-red-100 text-red-800' : ($attendance['absent_percentage'] > 10 ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800') }}">
                                            {{ $attendance['absent_percentage'] }}% vắng
                                        </span>
                                    </div>
                                    
                                    <button @click="expanded = !expanded" 
                                            class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
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
                                 class="border-t border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
                                
                                <div class="p-4">
                                    <div class="mb-3">
                                        <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Chi tiết điểm danh:</h4>
                                    </div>
                                    
                                    <div class="grid grid-cols-4 gap-2">
                                        @foreach ($classScheduleDates as $date)
                                            <div class="text-center">
                                                <div class="text-xs text-gray-500 dark:text-gray-400 mb-1">
                                                    {{ \Carbon\Carbon::parse($date)->format('d/m') }}
                                                </div>
                                                @if ($attendance['attendances'][$date] !== null)
                                                    @if ($attendance['attendances'][$date] === 'present')
                                                        <span class="inline-flex items-center justify-center w-6 h-6 text-xs text-green-800 bg-green-100 rounded-full">
                                                            <flux:icon.check class="w-3 h-3" />
                                                        </span>
                                                    @else
                                                        <span class="inline-flex items-center justify-center w-6 h-6 text-xs text-red-800 bg-red-100 rounded-full">
                                                            <flux:icon.x-mark class="w-3 h-3" />
                                                        </span>
                                                    @endif
                                                @else
                                                    <span class="inline-flex items-center justify-center w-6 h-6 text-xs text-gray-800 bg-gray-100 rounded-full">
                                                        <flux:icon.minus class="w-3 h-3" />
                                                    </span>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-8">
                            <div class="empty-state flex flex-col items-center">
                                <flux:icon.user-group class="w-12 h-12 mb-4 text-gray-400" />
                                <h3 class="text-lg font-medium mb-2 text-gray-500">
                                    Chưa có dữ liệu điểm danh
                                </h3>
                                <p class="text-gray-400">
                                    Hiện tại chưa có dữ liệu điểm danh cho lớp học này
                                </p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        @endif

    </div>

</div>
