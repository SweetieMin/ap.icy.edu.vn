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

                        {{-- Danh sách giáo viên --}}
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <flux:heading class="font-medium" size="md">
                                    Giáo viên ({{ count($classTeachers) }} người)
                                </flux:heading>
                            </div>

                            @if (count($classTeachers) > 0)
                                <div class="space-y-3 mb-6">
                                    @foreach ($classTeachers as $teacher)
                                        <div
                                            class="flex items-center space-x-4 p-3 bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="{{ $teacher->avatar ? asset('storage/' . $teacher->avatar) : asset('storage/images/avatars/default-avatar.png') }}"
                                                alt="{{ $teacher->name }}">

                                            <div class="flex-1">
                                                <div class="flex items-center space-x-2">
                                                    <flux:text
                                                        class="text-sm font-medium text-gray-900 dark:text-white">
                                                        {{ $teacher->name }}
                                                    </flux:text>
                                                    <span
                                                        class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                                        Giáo viên
                                                    </span>
                                                </div>
                                                <flux:text class="text-xs text-gray-500 dark:text-gray-400">
                                                    Mã số: {{ $teacher->account_code }} |
                                                    @if ($teacher->birthday)
                                                        Sinh:
                                                        {{ \Carbon\Carbon::parse($teacher->birthday)->format('d/m/Y') }}
                                                    @else
                                                        Sinh: Chưa cập nhật
                                                    @endif
                                                </flux:text>
                                            </div>

                                            <div class="text-right">
                                                <flux:text class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                                    Đăng ký:
                                                    {{ \Carbon\Carbon::parse($teacher->enrolled_at)->format('d/m/Y') }}
                                                </flux:text>
                                                <div class="mt-2">
                                                    <button
                                                        wire:click="removeTeacherFromCourse({{ $teacher->user_id }})"
                                                        wire:confirm="Bạn có chắc chắn muốn xóa giáo viên {{ $teacher->name }} khỏi lớp này?"
                                                        class="inline-flex items-center px-2 py-1 text-xs font-medium text-red-600 bg-red-100 rounded-md hover:bg-red-200 transition-colors">
                                                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                            </path>
                                                        </svg>
                                                        Xóa
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-4 mb-6">
                                    <flux:text class="text-sm text-gray-500 dark:text-gray-400">Chưa có giáo viên nào
                                        được gán cho lớp này</flux:text>
                                </div>
                            @endif
                        </div>

                        {{-- Danh sách học viên --}}
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <flux:heading class="font-medium" size="md">
                                    Học viên ({{ count($classStudents) }} người)
                                </flux:heading>
                            </div>

                            @if (count($classStudents) > 0)
                                <div class="space-y-3 max-h-96 overflow-y-auto">
                                    @foreach ($classStudents as $student)
                                        <div
                                            class="flex items-center space-x-4 p-3 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="{{ $student->avatar ? asset('storage/' . $student->avatar) : asset('storage/images/avatars/default-avatar.png') }}"
                                                alt="{{ $student->name }}">

                                            <div class="flex-1">
                                                <div class="flex items-center space-x-2">
                                                    <flux:text
                                                        class="text-sm font-medium text-gray-900 dark:text-white">
                                                        {{ $student->name }}
                                                    </flux:text>
                                                    <span
                                                        class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                        Học viên
                                                    </span>
                                                </div>
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

                                            <div class="text-right">
                                                <flux:text class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                                    Đăng ký:
                                                    {{ \Carbon\Carbon::parse($student->enrolled_at)->format('d/m/Y') }}
                                                </flux:text>
                                                <div class="mt-2">
                                                    <button
                                                        wire:click="removeStudentFromCourse({{ $student->user_id }})"
                                                        wire:confirm="Bạn có chắc chắn muốn xóa học viên {{ $student->name }} khỏi lớp này?"
                                                        class="inline-flex items-center px-2 py-1 text-xs font-medium text-red-600 bg-red-100 rounded-md hover:bg-red-200 transition-colors">
                                                        <svg class="w-3 h-3 mr-1" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                            </path>
                                                        </svg>
                                                        Xóa
                                                    </button>
                                                </div>
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


    {{-- Modal hiển thị chọn lịch học --}}
    <flux:modal name="class-schedule-modal" max-width="4xl" wire:model="showClassScheduleModal">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    📅 Tạo lịch học tự động
                </h2>
            </div>
            
            <!-- Hướng dẫn sử dụng -->
            <div class="bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg p-4 mb-6">
                <div class="flex items-start">
                    <div class="shrink-0">
                        <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-yellow-800 dark:text-yellow-200">
                            💡 Hướng dẫn
                        </h3>
                        <div class="mt-2 text-sm text-yellow-700 dark:text-yellow-300">
                            <p>Bạn có thể chọn 2 ca học khác nhau cho 2 ngày trong tuần. Ví dụ: Thứ 2 - Ca 1, Thứ 4 - Ca 3.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chọn ngày trong tuần -->
            <div class="mb-6">
                @session('error')
                    <div class="mb-3">
                        <span class="text-sm text-red-600 dark:text-red-400">
                            {{ session('error') }}
                        </span>
                    </div>
                @endSession
                <div class="mb-3">
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                        Đã chọn: <span class="font-medium {{ count($selectedWeekdays) === 2 ? 'text-blue-600' : 'text-red-600' }}">{{ count($selectedWeekdays) }}</span>/2 ngày
                    </span>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                    <label class="flex items-center space-x-2 p-3 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition-colors">
                        <input type="checkbox" wire:model="selectedWeekdays" wire:change="selectedWeekdaysChanged" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <span class="text-sm font-medium text-gray-900 dark:text-white">Thứ 2</span>
                    </label>
                    
                    <label class="flex items-center space-x-2 p-3 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition-colors">
                        <input type="checkbox" wire:model="selectedWeekdays" wire:change="selectedWeekdaysChanged" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <span class="text-sm font-medium text-gray-900 dark:text-white">Thứ 3</span>
                    </label>
                    
                    <label class="flex items-center space-x-2 p-3 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition-colors">
                        <input type="checkbox" wire:model="selectedWeekdays" wire:change="selectedWeekdaysChanged" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <span class="text-sm font-medium text-gray-900 dark:text-white">Thứ 4</span>
                    </label>
                    
                    <label class="flex items-center space-x-2 p-3 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition-colors">
                        <input type="checkbox" wire:model="selectedWeekdays" wire:change="selectedWeekdaysChanged" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <span class="text-sm font-medium text-gray-900 dark:text-white">Thứ 5</span>
                    </label>
                    
                    <label class="flex items-center space-x-2 p-3 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition-colors">
                        <input type="checkbox" wire:model="selectedWeekdays" wire:change="selectedWeekdaysChanged" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <span class="text-sm font-medium text-gray-900 dark:text-white">Thứ 6</span>
                    </label>
                    
                    <label class="flex items-center space-x-2 p-3 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition-colors">
                        <input type="checkbox" wire:model="selectedWeekdays" wire:change="selectedWeekdaysChanged" value="6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <span class="text-sm font-medium text-gray-900 dark:text-white">Thứ 7</span>
                    </label>
                    
                    <label class="flex items-center space-x-2 p-3 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition-colors">
                        <input type="checkbox" wire:model="selectedWeekdays" wire:change="selectedWeekdaysChanged" value="7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <span class="text-sm font-medium text-gray-900 dark:text-white">Chủ nhật</span>
                    </label>
                </div>
            </div>

            <!-- Chọn ca học cho từng ngày -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                    🕐 Chọn ca học cho từng ngày
                </h3>
                
                @if(count($selectedWeekdays) >= 1)
                    <!-- Ca học cho ngày đầu tiên -->
                    <div class="mb-6">
                        <h4 class="text-md font-medium text-gray-800 dark:text-gray-200 mb-3">
                            📅 {{ $selectedWeekdays[0] ? $this->getDayName($selectedWeekdays[0]) : 'Ngày 1' }} - Chọn ca học
                        </h4>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            @foreach($shifts as $shift)
                                <label class="flex items-center space-x-2 p-3 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition-colors {{ $selectedShiftDay1 == $shift['id'] ? 'ring-2 ring-blue-500 bg-blue-50 dark:bg-blue-900/20' : '' }}">
                                    <input type="radio" wire:model="selectedShiftDay1" value="{{ $shift['id'] }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-gray-900 dark:text-white">{{ $shift['name'] }}</span>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">{{ $shift['time'] }}</span>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if(count($selectedWeekdays) >= 2)
                    <!-- Ca học cho ngày thứ hai -->
                    <div class="mb-6">
                        <h4 class="text-md font-medium text-gray-800 dark:text-gray-200 mb-3">
                            📅 {{ $selectedWeekdays[1] ? $this->getDayName($selectedWeekdays[1]) : 'Ngày 2' }} - Chọn ca học
                        </h4>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            @foreach($shifts as $shift)
                                <label class="flex items-center space-x-2 p-3 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition-colors {{ $selectedShiftDay2 == $shift['id'] ? 'ring-2 ring-blue-500 bg-blue-50 dark:bg-blue-900/20' : '' }}">
                                    <input type="radio" wire:model="selectedShiftDay2" value="{{ $shift['id'] }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-gray-900 dark:text-white">{{ $shift['name'] }}</span>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">{{ $shift['time'] }}</span>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if(count($selectedWeekdays) < 2)
                    <div class="text-center py-4 text-gray-500 dark:text-gray-400">
                        <p>Vui lòng chọn đủ 2 ngày trong tuần để chọn ca học</p>
                    </div>
                @else
                    <!-- Tóm tắt lịch học đã chọn -->
                    <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
                        <h5 class="text-sm font-medium text-blue-800 dark:text-blue-200 mb-2">📋 Tóm tắt lịch học:</h5>
                        <div class="space-y-1 text-sm text-blue-700 dark:text-blue-300">
                            @if($selectedShiftDay1)
                                <p>• {{ $this->getDayName($selectedWeekdays[0]) }}: {{ $shifts[$selectedShiftDay1]['name'] ?? '' }} ({{ $shifts[$selectedShiftDay1]['time'] ?? '' }})</p>
                            @endif
                            @if($selectedShiftDay2)
                                <p>• {{ $this->getDayName($selectedWeekdays[1]) }}: {{ $shifts[$selectedShiftDay2]['name'] ?? '' }} ({{ $shifts[$selectedShiftDay2]['time'] ?? '' }})</p>
                            @endif
                        </div>
                    </div>
                @endif
            </div>

            <!-- Chọn ngày bắt đầu và ngày kết thúc -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                    📅 Chọn ngày bắt đầu và ngày kết thúc
                </h3>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-2 gap-3">
                <flux:input wire:model="startDate" type="date" class="w-full" />
                <flux:input wire:model="endDate" type="date" class="w-full" />
            </div>

            <!-- Nút hành động -->
            <div class="flex justify-end space-x-3 mt-6">
                <flux:button variant="ghost" wire:click="$set('showClassScheduleModal', false)">
                    Hủy
                </flux:button>
               
                    <flux:button 
                        variant="primary" 
                        wire:click="createClassSchedule">
                        📅 Tạo lịch học tự động
                    </flux:button>

            </div>
        </div>
    </flux:modal>

</div>
