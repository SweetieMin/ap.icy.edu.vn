<div class="relative mb-4 w-full">
    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex items-center justify-between">
            <div class="header-content">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.book-open class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Syllabus</h1>
                        <p class="header-subtitle">Quản lý chương trình học chi tiết</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Syllabus</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span>{{ $syllabi->total() ?? 0 }} syllabus</span>
                </div>
                <livewire:back.management.syllabus.actions-syllabus />
            </div>
        </div>
    </div>


    <!-- Search and Filter Section -->
    <div class="mt-6">
        <div class="theme-card-pink mb-6">

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Search -->
                <div>
                    <label for="search" class="card-label">Tìm kiếm</label>
                    <input 
                        wire:model.live="search" 
                        type="text" 
                        id="search"
                        placeholder="Tìm theo bài học, nội dung, mục tiêu..."
                        class="card-input"
                    >
                </div>
                
                <!-- Subject Filter -->
                <div>
                    <label for="subjectFilter" class="card-label">Lọc theo môn học</label>
                    <select 
                        wire:model.live="subjectFilter" 
                        id="subjectFilter"
                        class="card-input"
                    >
                        <option value="">Tất cả môn học</option>
                        @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }} ({{ $subject->code }})</option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Per Page -->
                <div>
                    <label for="perPage" class="card-label">Số dòng mỗi trang</label>
                    <select 
                        wire:model.live="perPage" 
                        id="perPage"
                        class="card-input"
                    >
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Syllabus Table -->
    <div class="theme-table-pink">
        <div class="overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th class="text-center w-16">STT</th>
                        <th class="text-left">Môn học</th>
                        <th class="text-left">Bài học</th>
                        <th class="text-left">Nội dung</th>
                        <th class="text-left">Mục tiêu</th>
                        <th class="text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($syllabi as $syllabus)
                        <tr class="table-row">
                            <td class="table-cell text-center">
                                {{ $syllabus->ordering }}
                            </td>
                            <td class="table-cell">
                                <div class="flex flex-col">
                                    <span class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                        {{ $syllabus->subject->name }}
                                    </span>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">
                                        {{ $syllabus->subject->code }}
                                        @if($syllabus->subject->program)
                                            - {{ $syllabus->subject->program->name }}
                                        @endif
                                    </span>
                                </div>
                            </td>
                            <td class="table-cell">
                                {{ $syllabus->lesson_number }}
                            </td>
                            <td class="table-cell">
                                <div class="max-w-xs truncate" title="{{ $syllabus->content }}">
                                    {{ Str::limit($syllabus->content, 100) }}
                                </div>
                            </td>
                            <td class="table-cell">
                                <div class="max-w-xs truncate" title="{{ $syllabus->objectives }}">
                                    {{ Str::limit($syllabus->objectives, 100) }}
                                </div>
                            </td>
                            <td class="table-cell text-center">
                                <flux:dropdown>
                                    <flux:button icon:trailing="chevron-down">Thao tác</flux:button>

                                    <flux:menu>
                                        <flux:menu.item  icon="pencil"
                                            wire:click="editSyllabus({{ $syllabus->id }})">Sửa thông tin
                                        </flux:menu.item>

                                        <flux:menu.item  icon="eye"
                                            wire:click="viewSyllabus({{ $syllabus->id }})">Xem chi tiết
                                        </flux:menu.item>

                                        <flux:menu.separator />

                                        <flux:menu.item variant="danger" icon="trash"
                                            wire:click="deleteSyllabus({{ $syllabus->id }})">Xóa
                                        </flux:menu.item>
                                    </flux:menu>
                                </flux:dropdown>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="table-cell">
                                <div class="empty-state flex flex-col items-center">
                                    <flux:icon.book-open class="w-8 h-8 mb-2" />
                                    <div class="text-sm">Không có syllabus nào</div>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($syllabi->hasPages())
            <div class="pagination-container">
                {{ $syllabi->links() }}
            </div>
        @endif
    </div>

    <!-- Summary -->
    <div class="mt-4 text-sm text-zinc-600 dark:text-zinc-400">
        Hiển thị {{ $syllabi->firstItem() ?? 0 }} đến {{ $syllabi->lastItem() ?? 0 }} trong tổng số {{ $syllabi->total() }} syllabus
    </div>

    <!-- Flash Messages -->
    @if (session()->has('message'))
        <div class="fixed top-4 right-4 z-50">
            <div class="bg-green-100 dark:bg-green-900/20 border border-green-400 dark:border-green-500 text-green-700 dark:text-green-400 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('message') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Close</title>
                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                    </svg>
                </span>
            </div>
        </div>
    @endif
</div>
