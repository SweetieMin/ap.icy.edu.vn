<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex items-center justify-between">
            <div class="header-content">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.academic-cap class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Xếp lớp học</h1>
                        <p class="header-subtitle">Quản lý việc xếp học viên vào các lớp học</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Xếp lớp học</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span>{{ count($students) }} học viên chưa xếp lớp</span>
                </div>
                <div class="header-counter">
                    <span>{{ count($courses) }} lớp học có sẵn</span>
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

    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 mx-6 mt-4">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"></path>
                </svg>
                {{ session('success') }}
            </div>
        </div>
    @endif

    {{-- Filters Section --}}
    <div class="theme-card-pink mt-4 mb-4">
        <div class="card-header">
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                    <flux:icon.funnel class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                </div>
                <div>
                    <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Bộ lọc</h3>
                    <p class="text-pink-600 dark:text-pink-400 text-xs">Lọc học viên và lớp học phù hợp</p>
                </div>
            </div>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="card-label">🔍 Tìm kiếm học viên</label>
                    <input type="text" wire:model.live="searchStudent" placeholder="Tìm theo tên hoặc mã số..."
                        class="card-input">
                </div>
                <div>
                    <label class="card-label">🏢 Cơ sở</label>
                    <select wire:model.live="filterLocationId" class="card-input">
                        @foreach ($locations as $location)
                            <option value="{{ $location['id'] }}">{{ $location['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="card-label">📅 Mùa học</label>
                    <select wire:model.live="filterSeasonId" class="card-input">
                        @foreach ($seasons as $season)
                            <option value="{{ $season['id'] }}">{{ $season['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="card-label">📚 Chương trình</label>
                    <select wire:model.live="filterProgramId" class="card-input">
                        @foreach ($programs as $program)
                            <option value="{{ $program['id'] }}">{{ $program['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-start">

        {{-- Left Side - Students List --}}
        <div class="space-y-4 flex flex-col h-full">
            <div class="theme-card-pink flex-1 flex flex-col">
                <div class="card-header">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                                <flux:icon.users class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Học viên chưa xếp lớp
                                </h3>
                                <p class="text-pink-600 dark:text-pink-400 text-xs">Học viên đã đóng học phí nhưng chưa
                                    được xếp lớp</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button wire:click="selectAllStudents"
                                class="text-xs bg-blue-100 hover:bg-blue-200 text-blue-800 px-3 py-1 rounded-lg transition-colors">
                                Chọn tất cả
                            </button>
                            <button wire:click="clearStudentSelection"
                                class="text-xs bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-lg transition-colors">
                                Bỏ chọn
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    @if (count($students) > 0)
                        <div class="space-y-2 flex-1 overflow-y-auto" id="students-container">
                            @foreach ($students as $student)
                                <div class="student-card flex items-center space-x-3 p-3 rounded-lg border border-gray-200 dark:border-gray-700 
                                    bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-200 cursor-move select-none"
                                    draggable="true" data-student-id="{{ $student->id }}"
                                    data-student-name="{{ $student->name }}"
                                    style="user-select: none; -webkit-user-drag: element;">

                                    <div class="drag-handle text-gray-400 hover:text-gray-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M7 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM7 8a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM7 14a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM13 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM13 8a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM13 14a2 2 0 1 0 0 4 2 2 0 0 0 0-4z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="flex-1">
                                        <div class="font-medium text-gray-900 dark:text-white">{{ $student->name }}
                                        </div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">
                                            Mã số: {{ $student->account_code }} |
                                            SĐT: {{ $student->phone ?? 'Chưa cập nhật' }}
                                        </div>
                                        <div class="text-xs text-gray-400 dark:text-gray-500">
                                            Đóng học phí: {{ number_format($student->price, 0, ',', '.') }} VNĐ
                                        </div>
                                    </div>

                                    <div class="text-xs text-blue-600 dark:text-blue-400 font-medium">
                                        Kéo vào lớp
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-8 flex-1 flex flex-col justify-center">
                            <flux:icon.users class="w-12 h-12 mx-auto mb-4 text-gray-400" />
                            <p class="text-lg font-medium text-gray-500 dark:text-gray-400">Không có học viên nào</p>
                            <p class="text-sm text-gray-400 dark:text-gray-500">Tất cả học viên đã được xếp lớp hoặc
                                chưa đóng học phí</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- Right Side - Courses List and Assignment --}}
        <div class="space-y-4 flex flex-col h-full">
            <div class="theme-card-pink flex-1 flex flex-col">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <flux:icon.academic-cap class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Lớp học có sẵn</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Các lớp học đang hoạt động hoặc sắp mở
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    @if (count($courses) > 0)
                        <div class="space-y-3 flex-1 overflow-y-auto" id="courses-container">
                            @foreach ($courses as $course)
                                <div class="course-drop-zone p-3 rounded-lg border-2 border-dashed border-gray-300 dark:border-gray-600 
                                    bg-white dark:bg-gray-800 hover:border-green-400 hover:bg-green-50 dark:hover:bg-green-900/20 transition-all duration-200"
                                    data-course-id="{{ $course->id }}"
                                    data-course-name="{{ $course->course_name }}">

                                    <div class="flex items-center space-x-3">
                                        <div class="drop-icon text-gray-400">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                        </div>

                                        <div class="flex-1">
                                            <div class="font-medium text-gray-900 dark:text-white">
                                                {{ $course->course_name }}</div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">
                                                {{ $course->subject_name }} | {{ $course->location_name }}
                                            </div>
                                            <div class="text-xs text-gray-400 dark:text-gray-500">
                                                Mùa: {{ $course->season_name }}
                                                <span
                                                    class="ml-2 px-2 py-1 rounded-full text-xs 
                                                    {{ $course->season_status === 'ongoing' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                                    {{ $course->season_status === 'ongoing' ? 'Đang hoạt động' : 'Sắp mở' }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="text-xs text-green-600 dark:text-green-400 font-medium">
                                            Thả học viên vào đây
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-8 flex-1 flex flex-col justify-center">
                            <flux:icon.academic-cap class="w-12 h-12 mx-auto mb-4 text-gray-400" />
                            <p class="text-lg font-medium text-gray-500 dark:text-gray-400">Không có lớp học nào</p>
                            <p class="text-sm text-gray-400 dark:text-gray-500">Không có lớp học nào phù hợp với bộ lọc
                                hiện tại</p>
                        </div>
                    @endif
                </div>
            </div>


        </div>
    </div>

    <style>
        .student-card {
            transition: all 0.2s ease;
        }

        .student-card:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .student-card:active {
            transform: scale(0.98);
        }

        .course-drop-zone {
            transition: all 0.2s ease;
        }

        .course-drop-zone.drag-over {
            border-color: #10b981 !important;
            background-color: #ecfdf5 !important;
            transform: scale(1.02);
        }

        .drag-handle {
            cursor: grab;
        }

        .drag-handle:active {
            cursor: grabbing;
        }

        /* Ensure equal height for both columns */
        .grid.grid-cols-1.lg\\:grid-cols-2 {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        @media (min-width: 1024px) {
            .grid.grid-cols-1.lg\\:grid-cols-2 {
                grid-template-columns: 1fr 1fr;
            }
        }

        /* Dark mode styles */
        @media (prefers-color-scheme: dark) {
            .course-drop-zone.drag-over {
                background-color: #064e3b !important;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Drag and Drop functionality
            let draggedStudentId = null;
            let draggedStudentName = null;

            // Make student cards draggable
            document.addEventListener('dragstart', function(e) {
                if (e.target.classList.contains('student-card')) {
                    draggedStudentId = e.target.dataset.studentId;
                    draggedStudentName = e.target.dataset.studentName;
                    e.target.style.opacity = '0.5';

                    // Set drag effect
                    e.dataTransfer.effectAllowed = 'move';
                    e.dataTransfer.setData('text/html', e.target.outerHTML);
                }
            });

            document.addEventListener('dragend', function(e) {
                if (e.target.classList.contains('student-card')) {
                    e.target.style.opacity = '1';
                }
            });

            // Make course drop zones droppable
            document.addEventListener('dragover', function(e) {
                if (e.target.closest('.course-drop-zone')) {
                    e.preventDefault();
                    e.dataTransfer.dropEffect = 'move';
                    e.target.closest('.course-drop-zone').classList.add('drag-over');
                }
            });

            document.addEventListener('dragleave', function(e) {
                if (e.target.closest('.course-drop-zone')) {
                    e.target.closest('.course-drop-zone').classList.remove('drag-over');
                }
            });

            document.addEventListener('drop', function(e) {
                e.preventDefault();

                if (e.target.closest('.course-drop-zone')) {
                    const dropZone = e.target.closest('.course-drop-zone');
                    dropZone.classList.remove('drag-over');

                    if (draggedStudentId && draggedStudentName) {
                        const courseId = dropZone.dataset.courseId;
                        const courseName = dropZone.dataset.courseName;

                        // Show confirmation dialog
                        if (confirm(
                                `Bạn có chắc muốn xếp học viên "${draggedStudentName}" vào lớp "${courseName}"?`
                                )) {
                            // Call Livewire method
                            @this.call('assignStudentToCourse', draggedStudentId, courseId);
                        }
                    }

                    // Reset dragged data
                    draggedStudentId = null;
                    draggedStudentName = null;
                }
            });

            // Prevent default drag behavior on document
            document.addEventListener('dragover', function(e) {
                e.preventDefault();
            });

            document.addEventListener('drop', function(e) {
                e.preventDefault();
            });
        });
    </script>

</div>
