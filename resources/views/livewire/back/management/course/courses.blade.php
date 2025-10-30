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
                {{-- Desktop Table View --}}
                <div class="hidden md:block overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center w-16">STT</th>
                                <th class="w-60">Cơ sở</th>
                                <th class="w-60">Học kỳ</th>
                                <th class="text-center w-30">Lớp học</th>
                                <th class="text-center ">Danh sách lớp</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody id="sortable-courses">
                            @forelse ($courses as $course)
                                <tr wire:key="course-desktop-{{ $course->id }}" data-id="{{ $course->id }}" class="table-row ">
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

                                    <td class="table-cell text-center ">
                                        <flux:button variant="primary" icon="user-group" color="blue" wire:click="showClassList({{ $course->id }})">Xem danh sách</flux:button>
                                    </td>

                                    <td class="table-cell text-center">
                                        <flux:dropdown>
                                            <flux:button icon:trailing="chevron-down">Thao tác</flux:button>
    
                                            <flux:menu>
                                                <flux:menu.item  icon="pencil"
                                                    wire:click="editCourse({{ $course->id }})">Sửa thông tin
                                                </flux:menu.item>

                                                <flux:menu.item icon="calendar"
                                                    wire:click="autoCreateClassScheduleTimeTable({{ $course->id }})">Tạo lịch học
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
                                    <td colspan="6" class="table-cell">
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

                {{-- Mobile Card View --}}
                <div class="md:hidden space-y-3" 
                     x-data 
                     x-init="
                        const mobileEl = document.getElementById('sortable-courses-mobile');
                        if (mobileEl) {
                            new Sortable(mobileEl, {
                                animation: 150,
                                handle: '.drag-handle',
                                onEnd: function() {
                                    let orderedIds = [];
                                    mobileEl.querySelectorAll('[data-id]').forEach(item => {
                                        orderedIds.push(item.getAttribute('data-id'));
                                    });
                                    $wire.updateCourseOrdering(orderedIds);
                                }
                            });
                        }
                     "
                     id="sortable-courses-mobile">
                    @forelse ($courses as $course)
                        <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                             x-data="{ expanded: false }" 
                             wire:key="course-mobile-{{ $course->id }}"
                             data-id="{{ $course->id }}">
                            
                            {{-- Main Row --}}
                            <div class="p-4 flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center cursor-move drag-handle">
                                        <span class="text-xs font-bold text-orange-600">{{ $course->ordering }}</span>
                                    </div>
                                    <div>
                                        <div class="font-medium text-gray-900">{{ $course->name }}</div>
                                        <div class="text-sm text-gray-500">{{ $course->location->name }}</div>
                                    </div>
                                </div>
                                
                                <button @click="expanded = !expanded" 
                                        class="p-2 rounded-full hover:bg-gray-100">
                                    <svg class="w-5 h-5 text-gray-400" 
                                         :class="{ 'rotate-180': expanded }" 
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                            </div>

                            {{-- Expanded Details --}}
                            <div x-show="expanded" 
                                 class="border-t border-gray-100 bg-gray-50">
                                
                                <div class="p-4 space-y-3">
                                                                        {{-- Học kỳ --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Học kỳ:</span>
                                        <span class="text-sm text-gray-900 text-right max-w-[200px]">{{ $course->season->name }}</span>
                                    </div>

                                    {{-- Ngày tạo --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Ngày tạo:</span>
                                        <span class="text-sm text-gray-900">{{ $course->created_at->format('d/m/Y H:i') }}</span>
                                    </div>

                                    {{-- Actions --}}
                                    <div class="pt-3 border-t border-gray-200">
                                        <div class="flex flex-col space-y-2">
                                            <button wire:click="showClassList({{ $course->id }})"
                                                    class="w-full bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700 transition-colors flex items-center justify-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                </svg>
                                                <span>Xem danh sách lớp</span>
                                            </button>
                                            
                                            <div class="flex space-x-2">
                                                <button wire:click="editCourse({{ $course->id }})"
                                                        class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                    </svg>
                                                    <span>Sửa</span>
                                                </button>

                                                <button wire:click="autoCreateClassScheduleTimeTable({{ $course->id }})"
                                                        class="flex-1 bg-purple-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-purple-700 transition-colors flex items-center justify-center space-x-2">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                    <span>Tạo lịch</span>
                                                </button>
                                                
                                                <button wire:click="deleteCourse({{ $course->id }})"
                                                        class="flex-1 bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-red-700 transition-colors flex items-center justify-center space-x-2">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                    <span>Xóa</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="bg-white rounded-lg border border-gray-200 p-8">
                            <div class="empty-state flex flex-col items-center">
                                <flux:icon.academic-cap class="w-8 h-8 mb-2 text-gray-400" />
                                <div class="text-sm text-gray-500">Không có lớp học nào</div>
                            </div>
                        </div>
                    @endforelse
                </div>
                
                @if($courses->hasPages())
                    <div class="pagination-container mt-6">
                        {{ $courses->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

</div>
