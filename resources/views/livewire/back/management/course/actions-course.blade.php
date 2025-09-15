<div>
    <flux:modal :dismissible="false" name="modal-course" class="md:w-900">
        <form wire:submit='{{ $isEditCourseMode ? 'updateCourse' : 'createCourse' }}' class="space-y-6">
            <div>
                <flux:heading class="font-bold" size="lg">
                    {{ $isEditCourseMode ? 'Cập nhật lớp học' : 'Tạo mới lớp học' }}
                </flux:heading>
                <flux:text class="mt-2">{{ $isEditCourseMode ? 'Chỉnh sửa thông tin lớp học' : 'Thêm mới lớp học' }}.
                </flux:text>
            </div>



            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Cơ sở --}}
                <div class="form-group">
                    <flux:select wire:model="location_id" placeholder="Chọn cơ sở" label="Cơ sở">
                        @foreach ($locations as $location)
                            <flux:select.option value="{{ $location->id }}">{{ $location->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                </div>

                {{-- Học kỳ --}}
                <div class="form-group">
                    <flux:select wire:model="season_id" placeholder="Chọn học kỳ" label="Học kỳ">
                        @foreach ($seasons as $season)
                            <flux:select.option value="{{ $season->id }}">{{ $season->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Chương trình --}}
                <div class="form-group">
                    <flux:select wire:model="program_id" wire:change="programSelected" placeholder="Chọn chương trình"
                        label="Chương trình">
                        <flux:select.option value="">Chọn chương trình</flux:select.option>
                        @foreach ($programs as $program)
                            <flux:select.option value="{{ $program->id }}">{{ $program->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                </div>

                {{-- Môn học --}}
                <div class="form-group">
                    <flux:select wire:model="subject_id" wire:change="subjectSelected" placeholder="Chọn môn học"
                        label="Môn học" :disabled="!$program_id">
                        <flux:select.option value="">Chọn môn học</flux:select.option>
                        @foreach ($subjects as $subject)
                            <flux:select.option value="{{ $subject->id }}">{{ $subject->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                </div>
            </div>

            {{-- Tên lớp học --}}
            <div class="form-group">
                <flux:input wire:model="name" placeholder="Nhập tên lớp học" label="Tên lớp học" disabled />
            </div>

            {{-- Mô tả --}}
            <div class="form-group">
                <flux:textarea wire:model="description" placeholder="Nhập mô tả lớp học" label="Mô tả"
                    rows="3" />
            </div>

            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" class="cursor-pointer" variant="primary">
                    {{ $isEditCourseMode ? 'Cập nhật' : 'Thêm mới' }}
                </flux:button>
            </div>
        </form>
    </flux:modal>

    {{-- Modal hiển thị danh sách học viên trong lớp --}}
    <flux:modal name="class-list-modal" max-width="4xl" wire:model="showClassListModal">
        <form wire:submit="closeClassListModal">
            <div class="p-6">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <flux:heading class="font-bold" size="lg">
                            Danh sách học viên
                        </flux:heading>
                        <flux:text class="mt-1">
                            @if ($selectedCourse)
                                Lớp: {{ $selectedCourse->name }}
                            @endif
                        </flux:text>
                    </div>
                </div>
                @if ($selectedCourse)
                    <div class="space-y-6">
                        {{-- Thông tin lớp học --}}
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <flux:text class="text-sm font-medium text-gray-600 dark:text-gray-400">Tên lớp:
                                    </flux:text>
                                    <flux:text class="text-sm text-gray-900 dark:text-white font-medium">
                                        {{ $selectedCourse->name }}</flux:text>
                                </div>
                                <div>
                                    <flux:text class="text-sm font-medium text-gray-600 dark:text-gray-400">Cơ sở:
                                    </flux:text>
                                    <flux:text class="text-sm text-gray-900 dark:text-white">
                                        {{ $selectedCourse->location->name }}</flux:text>
                                </div>
                                <div>
                                    <flux:text class="text-sm font-medium text-gray-600 dark:text-gray-400">Học kỳ:
                                    </flux:text>
                                    <flux:text class="text-sm text-gray-900 dark:text-white">
                                        {{ $selectedCourse->season->name }}</flux:text>
                                </div>
                            </div>
                        </div>

                        {{-- Danh sách học viên --}}
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <flux:heading class="font-medium" size="md">
                                    Học viên trong lớp ({{ count($classStudents) }} người)
                                </flux:heading>
                            </div>

                            @if (count($classStudents) > 0)
                                <div class="space-y-3 max-h-96 overflow-y-auto">
                                    @foreach ($classStudents as $student)
                                        <div
                                            class="flex items-center space-x-4 p-3 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg">
                                            {{-- Avatar --}}

                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="{{ $student->detail?->avatar ?? asset('storage/images/avatars/default-avatar.png') }}"
                                                alt="{{ $student->name }}">


                                            {{-- Thông tin học viên --}}
                                            <div class="flex-1">
                                                <flux:text class="text-sm font-medium text-gray-900 dark:text-white">
                                                    {{ $student->name }}
                                                </flux:text>
                                                <flux:text class="text-xs text-gray-500 dark:text-gray-400">
                                                    Mã số: {{ $student->account_code }} |
                                                    @if ($student->birthday)
                                                        Sinh:
                                                        {{ \Carbon\Carbon::parse($student->birthday)->format('d/m/Y') }}
                                                    @else
                                                        Sinh: Chưa cập nhật
                                                    @endif
                                                </flux:text>
                                            </div>

                                            {{-- Trạng thái --}}
                                            <div class="text-right">
                                                <flux:text class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                                    Đăng ký:
                                                    {{ \Carbon\Carbon::parse($student->enrolled_at)->format('d/m/Y') }}
                                                </flux:text>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-8">
                                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                    <flux:text class="text-lg font-medium text-gray-500 dark:text-gray-400">Chưa có học
                                        viên nào</flux:text>
                                    <flux:text class="text-sm text-gray-400 dark:text-gray-500">Lớp học này chưa có học
                                        viên được xếp vào</flux:text>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>

            <div class="flex justify-end p-6 border-t border-gray-200 dark:border-gray-700">
                <flux:button variant="ghost" wire:click="closeClassListModal">Đóng</flux:button>
            </div>
        </form>
    </flux:modal>
</div>
