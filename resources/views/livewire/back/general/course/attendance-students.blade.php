<div>
    {{-- Modal điểm danh --}}
    <flux:modal wire:model="showModal" class="w-full max-w-full md:w-[1200px] md:!max-w-[1200px]">
        <div class="p-4 md:p-6">
            <div class="mb-4">
                <flux:heading class="font-bold text-lg md:text-xl">
                    Điểm danh học viên
                </flux:heading>
                @if ($classSchedule)
                    <flux:text class="mt-2 text-sm md:text-base">
                        {{ $classSchedule->course->name }} -
                        {{ $classSchedule->course->subject->name ?? 'Chưa xác định' }}
                    </flux:text>
                @endif
            </div>

            @if ($classSchedule)
                {{-- Thông tin buổi học --}}
                <div class="form-group">
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-3 md:p-4 mb-4 md:mb-6">
                        <div class="grid grid-cols-1 gap-3 md:grid-cols-3 md:gap-4">
                            <div class="flex items-center space-x-2">
                                <flux:icon.calendar class="w-4 h-4 text-gray-400 flex-shrink-0" />
                                <span class="text-xs md:text-sm text-gray-600 dark:text-gray-400">
                                    Ngày: {{ \Carbon\Carbon::parse($classSchedule->date)->format('d/m/Y') }}
                                </span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <flux:icon.clock class="w-4 h-4 text-gray-400 flex-shrink-0" />
                                <span class="text-xs md:text-sm text-gray-600 dark:text-gray-400">
                                    Giờ: {{ \Carbon\Carbon::parse($classSchedule->start_time)->format('H:i') }} -
                                    {{ \Carbon\Carbon::parse($classSchedule->end_time)->format('H:i') }}
                                </span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <flux:icon.building-office class="w-4 h-4 text-gray-400 flex-shrink-0" />
                                <span class="text-xs md:text-sm text-gray-600 dark:text-gray-400">
                                    Phòng: {{ $classSchedule->room_name }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Danh sách học viên --}}
                <div class="space-y-3">
                    <h3 class="text-sm md:text-base font-medium text-gray-900 dark:text-white mb-3 md:mb-4">
                        Danh sách học viên ({{ count($students) }} người)
                    </h3>

                    @forelse ($students as $student)
                        <div
                            class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-3 md:p-4">
                            {{-- Mobile Layout --}}
                            <div class="md:hidden space-y-3">
                                <div class="flex items-center space-x-3">
                                    <img class="h-10 w-10 rounded-full object-cover flex-shrink-0"
                                        src="{{ $student->detail?->avatar ?? asset('images/default-avatar.png') }}"
                                        alt="{{ $student->name }}">
                                    <div class="flex-1 min-w-0">
                                        <h4 class="font-medium text-gray-900 dark:text-white text-sm truncate">
                                            {{ $student->name }}</h4>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Mã:
                                            {{ $student->account_code }}</p>
                                    </div>
                                </div>

                                @php
                                    $currentStatus = $attendances[$student->id]['status'] ?? 'present';
                                    $currentNote = $attendances[$student->id]['note'] ?? '';
                                @endphp

                               

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        @if ($action !== 'view')
                                            <div class="flex items-center space-x-2">
                                                <div key="switch-{{ $student->id }}">
                                                    <flux:switch 
                                                        wire:model="attendances.{{ $student->id }}.status"
                                                        wire:change="updateAttendance({{ $student->id }}, $event.target.checked ? 'present' : 'absent')"
                                                        :checked="$currentStatus === 'present'"
                                                        class="data-[state=checked]:bg-green-600 data-[state=unchecked]:bg-red-600"
                                                    />
                                                </div>
                                                <span class="text-xs text-gray-600 dark:text-gray-400">
                                                    {{ $currentStatus === 'present' ? 'Có mặt' : 'Vắng mặt' }}
                                                </span>
                                            </div>
                                        @else
                                            <div class="flex items-center space-x-2">
                                                <div class="w-6 h-6 rounded-full flex items-center justify-center {{ $currentStatus === 'present' ? 'bg-green-100 dark:bg-green-900' : 'bg-red-100 dark:bg-red-900' }}">
                                                    @if ($currentStatus === 'present')
                                                        <flux:icon.check class="w-4 h-4 text-green-600 dark:text-green-400" />
                                                    @else
                                                        <flux:icon.x-mark class="w-4 h-4 text-red-600 dark:text-red-400" />
                                                    @endif
                                                </div>
                                                <span class="text-xs text-gray-600 dark:text-gray-400">
                                                    {{ $currentStatus === 'present' ? 'Có mặt' : 'Vắng mặt' }}
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                @if ($action !== 'view')
                                    <div>
                                        <flux:input wire:model="attendances.{{ $student->id }}.note"
                                            placeholder="Ghi chú..." value="{{ $currentNote }}" size="sm" />
                                    </div>
                                @elseif ($currentNote)
                                    <div class="text-xs text-gray-500 dark:text-gray-400 italic">
                                        Ghi chú: {{ $currentNote }}
                                    </div>
                                @endif
                            </div>

                            {{-- Desktop Layout --}}
                            <div class="hidden md:flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img class="h-10 w-10 rounded-full object-cover"
                                        src="{{ $student->detail?->avatar ?? asset('images/default-avatar.png') }}"
                                        alt="{{ $student->name }}">
                                    <div>
                                        <h4 class="font-medium text-gray-900 dark:text-white">{{ $student->name }}</h4>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Mã:
                                            {{ $student->account_code }}</p>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    {{-- Switch điểm danh --}}
                                    <div class="flex items-center space-x-2 mr-6">
                                        @if ($action !== 'view')
                                            <flux:switch wire:model="attendances.{{ $student->id }}.status"
                                                wire:change="updateAttendance({{ $student->id }}, $event.target.checked ? 'present' : 'absent')"
                                                :checked="$currentStatus === 'present'"
                                                class="data-[state=checked]:bg-green-600 data-[state=unchecked]:bg-red-600" />
                                        @else
                                            <div class="w-6 h-6 rounded-full flex items-center justify-center {{ $currentStatus === 'present' ? 'bg-green-100 dark:bg-green-900' : 'bg-red-100 dark:bg-red-900' }}">
                                                @if ($currentStatus === 'present')
                                                    <flux:icon.check class="w-4 h-4 text-green-600 dark:text-green-400" />
                                                @else
                                                    <flux:icon.x-mark class="w-4 h-4 text-red-600 dark:text-red-400" />
                                                @endif
                                            </div>
                                        @endif

                                        <span class="text-sm text-gray-600 dark:text-gray-400 min-w-[75px]">
                                            {{ $currentStatus === 'present' ? 'Có mặt' : 'Vắng mặt' }}
                                        </span>
                                    </div>

                                    {{-- Ô input ghi chú --}}
                                    @if ($action !== 'view')
                                        <div class="flex-1 max-w-xs">
                                            <flux:input wire:model="attendances.{{ $student->id }}.note"
                                                placeholder="Ghi chú..." value="{{ $currentNote }}" size="sm" />
                                        </div>
                                    @elseif ($currentNote)
                                        <div class="flex-1 max-w-xs">
                                            <div class="text-sm text-gray-500 dark:text-gray-400 italic">
                                                Ghi chú: {{ $currentNote }}
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-8">
                            <flux:icon.user-group class="w-12 h-12 text-gray-400 mx-auto mb-2" />
                            <p class="text-gray-500 text-sm md:text-base">Không có học viên nào</p>
                        </div>
                    @endforelse
                </div>
            @endif

            <div class="flex flex-col sm:flex-row gap-3 mt-4 md:mt-6">
                <flux:spacer />
                @if ($action !== 'view')
                    <div class="flex gap-3 w-full sm:w-auto">
                        <flux:button wire:click="closeModal" variant="outline" class="flex-1 sm:flex-none">
                            Đóng
                        </flux:button>
                        <flux:button wire:click="saveAllAttendance" variant="primary" class="flex-1 sm:flex-none">
                            Lưu tất cả
                        </flux:button>
                    </div>
                @endif
            </div>
        </div>
    </flux:modal>
</div>
