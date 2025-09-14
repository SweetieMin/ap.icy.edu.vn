<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.academic-cap class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Lớp học</h1>
                        <p class="header-subtitle">Quản lý các lớp học trong hệ thống</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Lớp học</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span>{{ $courses->total() ?? 0 }} lớp học</span>
                </div>

                <button wire:click="addCourse" class="header-button w-full sm:w-auto">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span class="hidden sm:inline">Thêm Lớp học</span>
                    <span class="sm:hidden">Thêm</span>
                </button>
            </div>
        </div>
    </div>


    <livewire:back.management.course.actions-course />

    <!-- Search and Filter Section -->
    <div class="mt-6">
        <div class="theme-card-pink mb-6">
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <!-- Search -->
                    <div>
                        <label for="search" class="card-label">Tìm kiếm</label>
                        <input 
                            wire:model.live="search" 
                            type="text" 
                            id="search"
                            placeholder="Tên lớp học, cơ sở, học kỳ..."
                            class="card-input"
                        >
                    </div>
                    
                    <!-- Location Filter -->
                    <div>
                        <label for="locationFilter" class="card-label">Lọc theo cơ sở</label>
                        <select 
                            wire:model.live="locationFilter" 
                            id="locationFilter"
                            class="card-input"
                        >
                            <option value="">Tất cả cơ sở</option>
                            @foreach($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <!-- Season Filter -->
                    <div>
                        <label for="seasonFilter" class="card-label">Lọc theo học kỳ</label>
                        <select 
                            wire:model.live="seasonFilter" 
                            id="seasonFilter"
                            class="card-input"
                        >
                            <option value="">Tất cả học kỳ</option>
                            @foreach($seasons as $season)
                                <option value="{{ $season->id }}">{{ $season->name }}</option>
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

    {{-- Main content area --}}
    <div class="mt-6">
        <div x-data="{
            initSortable() {
                const el = document.getElementById('sortable-courses');
                if (el && !el.sortableInstance) {
                    el.sortableInstance = new Sortable(el, {
                        animation: 150,
                        handle: '.drag-handle',
                        onEnd: function() {
                            let orderedIds = [];
                            el.querySelectorAll('[data-id]').forEach(item => {
                                orderedIds.push(item.getAttribute('data-id'));
                            });
                            $wire.updateCourseOrdering(orderedIds);
                        }
                    });
                }
            }
        }" 
        x-init="initSortable()">
            
            <div class="theme-table-pink">
                <div class="overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center w-16">STT</th>
                                <th class="w-60">Cơ sở</th>
                                <th class="w-60">Học kỳ</th>
                                <th class="text-center w-30">Lớp học</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody id="sortable-courses">
                            @forelse ($courses as $course)
                                <tr wire:key="course-{{ $course->id }}" data-id="{{ $course->id }}" class="table-row ">
                                    <td class="table-cell text-center drag-handle cursor-move w-16">
                                        {{ $course->ordering }}
                                    </td>
                                    <td class="table-cell ">
                                        {{ $course->location->name }}
                                    </td>
                                    <td class="table-cell ">
                                        {{ $course->season->name }}
                                    </td>

                                    <td class="table-cell whitespace-nowrap text-center w-30">
                                        {{ $course->name }}
                                    </td>

                                    <td class="table-cell text-center">
                                        <flux:dropdown>
                                            <flux:button icon:trailing="chevron-down">Thao tác</flux:button>
    
                                            <flux:menu>
                                                <flux:menu.item  icon="pencil"
                                                    wire:click="editCourse({{ $course->id }})">Sửa thông tin
                                                </flux:menu.item>
    
                                                <flux:menu.separator />
    
                                                <flux:menu.item variant="danger" icon="trash"
                                                    wire:click="deleteCourse({{ $course->id }})">Xóa
                                                </flux:menu.item>
                                            </flux:menu>
                                        </flux:dropdown>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="table-cell">
                                        <div class="empty-state flex flex-col items-center">
                                            <flux:icon.academic-cap class="w-8 h-8 mb-2" />
                                            <div class="text-sm">Không có Lớp học nào</div>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
                @if($courses->hasPages())
                    <div class="pagination-container">
                        {{ $courses->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
