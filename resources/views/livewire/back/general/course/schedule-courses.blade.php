<div>
    <div class="theme-table-pink">
        {{-- Desktop Table View --}}
        <div class="hidden md:block overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th>Lớp</th>
                        <th>Ngày</th>
                        <th>Môn</th>
                        <th>Phòng</th>
                        <th>Ca học</th>
                        <th class="text-center">Điểm danh</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($todaySchedules as $schedule)
                        <tr wire:key="schedule-desktop-{{ $schedule['id'] }}">
                            <td class="whitespace-nowrap font-medium">
                                {{ $schedule['course_name'] }}
                            </td>
                            <td>
                                {{ $schedule['date'] }}
                            </td>
                            <td>
                                {{ $schedule['subject_name'] }}
                            </td>
                            <td>
                                {{ $schedule['room'] ?? 'Chưa xác định' }}
                            </td>
                            <td>
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $schedule['shift_color'] }}">
                                    {{ $schedule['shift_name'] }}
                                </span>
                            </td>
                            <td class="whitespace-nowrap text-center">
                                @php
                                    $currentTime = now();
                                    $startTime = \Carbon\Carbon::parse($schedule['start_time']);
                                    $endTime = \Carbon\Carbon::parse($schedule['end_time'])->addMinutes(30);
                                    $isInTime = $currentTime->between($startTime, $endTime);
                                    $isPast = $currentTime->gt($endTime);
                                @endphp

                                @if ($isPast)
                                    <flux:button variant="primary" color="gray" icon="x-mark" disabled>Đã kết thúc</flux:button>
                                @elseif($isInTime)
                                    @if ($schedule['has_attendance'] ?? false)
                                        <flux:button wire:click="attendance({{ $schedule['id'] }},'view')" variant="primary" color="zinc" icon="eye">Xem</flux:button>
                                        <flux:button wire:click="attendance({{ $schedule['id'] }},'edit')" variant="primary" color="blue" icon="pencil">Chỉnh sửa</flux:button>
                                    @else
                                        <flux:button wire:click="attendance({{ $schedule['id'] }},'create')" variant="primary" color="green" icon="check">Điểm danh</flux:button>
                                    @endif
                                @else
                                    <flux:button disabled variant="primary" color="blue" icon="clock">Chưa đến giờ</flux:button>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8">
                                <div class="empty-state flex flex-col items-center">
                                    <flux:icon.calendar class="w-8 h-8 mb-2 text-gray-400" />
                                    <div class="text-sm text-gray-500">Không có lịch dạy hôm nay</div>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Mobile Card View --}}
        <div class="md:hidden space-y-3">
            @forelse ($todaySchedules as $schedule)
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm" x-data="{ expanded: false }"
                    wire:key="schedule-mobile-{{ $schedule['id'] }}">

                    {{-- Main Row --}}
                    <div class="p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-8 h-8 {{ $this->getShiftIconColor($schedule['shift']) }} rounded-full flex items-center justify-center">
                                <flux:icon.academic-cap
                                    class="w-4 h-4 {{ $this->getShiftIconTextColor($schedule['shift']) }}" />
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">
                                    {{ $schedule['schedule_name'] ?? $schedule['course_name'] }}</div>
                                <div class="text-sm text-gray-500">{{ $schedule['room'] ?? 'Chưa xác định' }}</div>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $schedule['shift_color'] }}">
                                {{ $schedule['shift_name'] }}
                            </span>

                            <button @click="expanded = !expanded" class="p-2 rounded-full hover:bg-gray-100">
                                <svg class="w-5 h-5 text-gray-400" :class="{ 'rotate-180': expanded }" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Expanded Details --}}
                    <div x-show="expanded" class="border-t border-gray-100 bg-gray-50">

                        <div class="p-4 space-y-3">
                            {{-- Ngày --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Ngày:</span>
                                <span class="text-sm text-gray-900">{{ $schedule['date'] }}</span>
                            </div>

                            {{-- Tên lịch học --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Tên lịch học:</span>
                                <span
                                    class="text-sm text-gray-900">{{ $schedule['schedule_name'] ?? $schedule['course_name'] }}</span>
                            </div>

                            {{-- Môn học --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Môn học:</span>
                                <span class="text-sm text-gray-900">{{ $schedule['course_name'] }}</span>
                            </div>

                            {{-- Phòng --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Phòng:</span>
                                <span class="text-sm text-gray-900">{{ $schedule['room'] ?? 'Chưa xác định' }}</span>
                            </div>

                            {{-- Ca học --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Ca học:</span>
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $schedule['shift_color'] }}">
                                    {{ $schedule['shift_name'] }}
                                </span>
                            </div>

                            {{-- Actions --}}
                            <div class="pt-3 border-t border-gray-200">
                                @php
                                    $currentTime = now();
                                    $startTime = \Carbon\Carbon::parse($schedule['start_time']);
                                    $endTime = \Carbon\Carbon::parse($schedule['end_time'])->addMinutes(30);
                                    $isInTime = $currentTime->between($startTime, $endTime);
                                    $isPast = $currentTime->gt($endTime);
                                @endphp

                                @if ($isPast)
                                    <button
                                        class="w-full bg-gray-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700 transition-colors flex items-center justify-center space-x-2">
                                        <flux:icon.clock class="w-4 h-4" />
                                        <span>Đã kết thúc</span>
                                    </button>
                                @elseif($isInTime)
                                    @if ($schedule['has_attendance'] ?? false)
                                        <button wire:click="attendance({{ $schedule['id'] }},'view')"
                                            class="mb-1 w-full bg-zinc-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-zinc-700 transition-colors flex items-center justify-center space-x-2">
                                            <flux:icon.eye class="w-4 h-4" />
                                            <span>Xem</span>
                                        </button>
                                        <button wire:click="attendance({{ $schedule['id'] }},'edit')"
                                            class="w-full bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                            <flux:icon.pencil class="w-4 h-4" />
                                            <span>Chỉnh sửa</span>
                                        </button>
                                    @else
                                        <button wire:click="attendance({{ $schedule['id'] }},'create')"
                                            class="w-full bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700 transition-colors flex items-center justify-center space-x-2">
                                            <flux:icon.check class="w-4 h-4" />
                                            <span>Điểm danh</span>
                                        </button>
                                    @endif
                                @else
                                    <button
                                        class="w-full bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                        <span>Chưa đến giờ</span>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="bg-white rounded-lg border border-gray-200 p-8">
                    <div class="empty-state flex flex-col items-center">
                        <flux:icon.calendar class="w-8 h-8 mb-2 text-gray-400" />
                        <div class="text-sm text-gray-500">Không có lịch dạy hôm nay</div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
