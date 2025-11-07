<div>
    <flux:modal name="make-up-attendance"
        class="w-full max-w-[90vw] md:max-w-[720px] lg:max-w-[800px] max-h-[90vh] overflow-y-auto">
        <form wire:submit.prevent='saveMakeUpAttendance()' class="space-y-6">
            <div>
                <flux:heading size="lg">Điểm danh bù ngày {{ $schedule->formatted_date ?? '' }}</flux:heading>
                <flux:text class="mt-2">Quản lý điểm danh bù khi giáo viên quên điểm danh.</flux:text>
            </div>

            <div class="flex gap-2">
                <div class="form-group w-1/2">
                    <flux:date-picker wire:model="date" disabled locale="vi-VN"/>
                </div>
                <div class="form-group w-1/2">
                    <flux:select wire:model='checked_by' variant="listbox" searchable placeholder="Chọn giáo viên">
                        @foreach ($teachers as $teacher)
                            <flux:select.option value="{{ $teacher->id }}">{{ $teacher->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                    <flux:error name="checked_by" />
                </div>
            </div>



            <div class="space-y-3">
                <h3 class="text-sm md:text-base font-medium text-gray-900 dark:text-white mb-3 md:mb-4">
                    Danh sách học viên ({{ $students?->count() ?? 0 }} người)
                </h3>

                @forelse ($students as $student)
                    <div
                        class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-3 md:p-4">
                        {{-- Mobile Layout --}}
                        <div class="md:hidden space-y-3">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-full object-cover shrink-0"
                                    src="{{ $student->detail?->avatar ?? asset('images/default-avatar.png') }}"
                                    alt="{{ $student->name }}">
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-medium text-gray-900 dark:text-white text-sm truncate">
                                        {{ $student->name }}</h4>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Mã:
                                        {{ $student->account_code }}</p>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2">

                                    <div class="flex items-center space-x-2">
                                        <div key="switch-{{ $student->id }}">
                                            <flux:switch wire:model="attendances.{{ $student->id }}.status"
                                                wire:change="updateAttendance({{ $student->id }}, $event.target.checked ? 'present' : 'absent')"
                                                :checked="$currentStatus === 'present'"
                                                class="data-[state=checked]:bg-green-600 data-[state=unchecked]:bg-red-600" />
                                        </div>
                                        <span class="text-xs text-gray-600 dark:text-gray-400">
                                            {{ $currentStatus === 'present' ? 'Có mặt' : 'Vắng mặt' }}
                                        </span>
                                    </div>

                                </div>
                            </div>


                            <div>
                                <flux:input wire:model="attendances.{{ $student->id }}.note" placeholder="Ghi chú..."
                                    value="{{ $currentNote }}" size="sm" />
                            </div>

                            <div class="text-xs text-gray-500 dark:text-gray-400 italic">
                                Ghi chú: {{ $currentNote }}
                            </div>

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

                                    <flux:switch wire:model="attendances.{{ $student->id }}.status"
                                        wire:change="updateAttendance({{ $student->id }}, $event.target.checked ? 'present' : 'absent')"
                                        :checked="$currentStatus === 'present'"
                                        class="data-[state=checked]:bg-green-600 data-[state=unchecked]:bg-red-600" />

                                    <span class="text-sm text-gray-600 dark:text-gray-400 min-w-[75px]">
                                        {{ $currentStatus === 'present' ? 'Có mặt' : 'Vắng mặt' }}
                                    </span>
                                </div>

                                {{-- Ô input ghi chú --}}
                                <div class="flex-1 max-w-xs">
                                    <flux:input wire:model="attendances.{{ $student->id }}.note"
                                        placeholder="Ghi chú..." value="{{ $currentNote }}" size="sm" />
                                </div>

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

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary">Save changes</flux:button>
            </div>
        </form>
    </flux:modal>
</div>
