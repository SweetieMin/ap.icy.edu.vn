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
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span>{{ $courses->total() ?? 0 }} lớp học</span>
                </div>
                <button wire:click="addCourse" class="header-button">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span>Thêm Lớp học</span>
                </button>
            </div>
        </div>
    </div>


    <livewire:back.management.course.actions-course />

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
                                        <div class="flex items-center justify-center gap-2">
                                            <flux:button size="sm" variant="primary" icon="square-pen"
                                                wire:click="editCourse({{ $course->id }})" class="cursor-pointer">
                                                Sửa
                                            </flux:button>
                                            <flux:button size="sm" variant="danger" icon="trash"
                                                wire:click="deleteCourse({{ $course->id }})" class="cursor-pointer">
                                                Xóa
                                            </flux:button>
                                        </div>
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
