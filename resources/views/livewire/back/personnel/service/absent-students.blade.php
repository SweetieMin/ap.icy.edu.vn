<div>
    {{-- Bộ lọc --}}
    <div class="theme-card-pink mt-4 mb-4">
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div>
                    <label class="card-label">Tìm kiếm</label>
                    <input type="text" wire:model.live="search" placeholder="Tìm theo họ và tên hoặc Account code..."
                        class="card-input">
                </div>

                <div>
                    <label class="card-label">Lớp</label>
                    <select wire:model.live="filterCourseId" class="card-input">
                        <option value="">Tất cả lớp</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="card-label">Trạng thái</label>
                    <select wire:model.live="filterStatus" class="card-input">
                        <option value="">Tất cả</option>
                        <option value="success">Thành công</option>
                        <option value="not_contact">Chưa liên hệ</option>
                        <option value="no_answer">Không nghe máy</option>
                    </select>
                </div>

            </div>

        </div>
    </div>


    <div class="theme-table-pink">
        <div class="hidden md:block overflow-x-auto">
            <table style="table-layout: fixed; width: 100%;">
                <thead>
                    <tr>
                        <th>Họ và tên</th>
                        <th class="text-center">Lớp</th>
                        <th class="text-center">Ngày vắng</th>
                        <th class="text-center">Trạng thái</th>
                        <th class="text-center">SĐT Học viên/PH</th>
                        <th class="text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($listStudents as $attendance)
                        <tr>
                            <td>
                                <div class="flex items-center gap-3">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ $attendance->student?->detail?->avatar ?? asset('images/default-avatar.png') }}"
                                        alt="{{ $attendance->student?->name }}">
                                    <div>
                                        <div class="font-medium">{{ $attendance->student?->name }}</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                            {{ $attendance->student?->account_code }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                {{ $attendance->classSchedule?->course?->name ?? '—' }}
                            </td>
                            <td class="text-center">
                                {{ $attendance->date }}
                            </td>
                            <td class="text-center">
                                <span
                                    class="px-2 py-1 text-xs rounded-full {{ $attendance->studentCareStatusColor() }}">
                                    {{ $attendance->studentCareStatus() }}
                                </span>
                            </td>
                            <td class="text-center">
                                {{ $attendance->student?->detail?->phone ?? '—' }} / {{ $attendance->student?->detail?->guardian_phone ?? '—' }}
                            </td>
                            @php
                        
                            $startTime = \Carbon\Carbon::parse($attendance->created_at);
                            $allowedTime = $startTime->copy()->addMinutes(30);
                            $canCare = now()->greaterThanOrEqualTo($allowedTime);
                        @endphp
                        
                        <td class="text-center">
                            @if ($attendance->student_care_status !== 'success')
                                @if ($canCare)
                                    <div class="flex items-center justify-center gap-2">
                                        <flux:button size="xs" variant="primary"
                                            wire:click="showStudentCareModal({{ $attendance->id }})">
                                            Chăm sóc
                                        </flux:button>
                                    </div>
                                @else
                                    <div class="text-xs text-muted-foreground italic">
                                        Có thể chăm sóc sau {{ $allowedTime->diffForHumans() }}
                                    </div>
                                @endif
                            @endif
                        </td>
                        
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-6 text-gray-500">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Mobile list --}}
        <div class="md:hidden space-y-3">
            @forelse ($listStudents as $attendance)
                <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-3">
                    <div class="flex items-center space-x-3">
                        <img class="h-10 w-10 rounded-full object-cover flex-shrink-0"
                            src="{{ $attendance->student?->detail?->avatar ?? asset('images/default-avatar.png') }}"
                            alt="{{ $attendance->student?->name }}">
                        <div class="flex-1 min-w-0">
                            <div class="font-medium text-gray-900 dark:text-white text-sm truncate">{{ $attendance->student?->name }}</div>
                            <div class="text-xs text-gray-500 dark:text-gray-400 truncate">{{ $attendance->classSchedule?->course?->name ?? '—' }}</div>
                        </div>
                        <div class="text-right">
                            <div class="text-xs text-gray-600 dark:text-gray-400">{{ $attendance->date }}</div>
                            <div class="mt-1">
                                <span class="px-2 py-0.5 text-[10px] rounded-full {{ $attendance->studentCareStatusColor() }}">{{ $attendance->studentCareStatus() }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 flex items-center justify-between">
                        <div class="text-xs text-gray-600 dark:text-gray-400">
                            {{ $attendance->student?->detail?->phone ?? '—' }}/{{ $attendance->student?->parent?->detail?->phone ?? '—' }}
                        </div>
                        @if ($attendance->student_care_status !== 'success')
                            <flux:button size="sm" variant="primary" wire:click="showStudentCareModal({{ $attendance->id }})">Chăm sóc</flux:button>
                        @endif
                    </div>
                </div>
            @empty
                <div class="text-center py-8 text-gray-500">Không có dữ liệu</div>
            @endforelse
        </div>
    </div>
</div>
