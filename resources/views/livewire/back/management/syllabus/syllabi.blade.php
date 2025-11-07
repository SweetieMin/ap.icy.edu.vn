<div class="relative mb-4 w-full">
    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
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
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Syllabus</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span>{{ $syllabi->count() ?? 0 }} bài học</span>
                </div>

                @can('create', \App\Models\Syllabus::class)
                    <button wire:click="importSyllabus" class="header-button w-full sm:w-auto">
                        <flux:icon.plus-circle class="w-4 h-4 sm:w-5 sm:h-5" />
                        <span class="hidden sm:inline">Nhập Syllabus</span>
                        <span class="sm:hidden">Nhập</span>
                    </button>
                @endcan

            </div>
        </div>
    </div>

    <livewire:back.management.syllabus.actions-syllabus />
    <!-- Search and Filter Section -->
    <div class="mt-6">
        <div class="theme-card-pink mb-2">
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                    <!-- Search -->
                    <div>
                        <label for="search" class="card-label">Tìm kiếm</label>
                        <input wire:model.live="search" type="text" id="search"
                            placeholder="Tìm theo bài học, nội dung, từ vựng..." class="card-input">
                    </div>
                    <!-- Program Selection -->
                    <div>
                        <label for="selectedProgramId" class="card-label">Chọn chương trình</label>
                        <select wire:model.live="selectedProgramId" id="selectedProgramId" class="card-input">
                            @foreach ($programs as $program)
                                <option value="{{ $program->id }}">{{ $program->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Subject Selection -->
                    <div>
                        <label for="selectedSubjectId" class="card-label">Chọn môn học</label>
                        <select wire:model.live="selectedSubjectId" id="selectedSubjectId" class="card-input">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }} ({{ $subject->code }})</option>
                            @endforeach
                        </select>
                    </div>


                    <!-- URL Book Display -->
                    <div>
                        @if ($selectedSubjectId)
                            @php
                                $selectedSubject = $subjects->firstWhere('id', $selectedSubjectId);
                            @endphp
                            @if ($selectedSubject && $selectedSubject->url_book)
                                <div class="mt-2 md:mt-7">
                                    <flux:tooltip content="Xem sách giáo khoa">
                                        <a href="{{ $selectedSubject->url_book }}" target="_blank"
                                            class="inline-flex items-center px-3 py-3 text-sm font-medium text-pink-600 bg-pink-50 border border-pink-200 rounded-lg hover:bg-pink-100 hover:text-pink-700 transition-colors duration-200 dark:bg-pink-900/20 dark:border-pink-800 dark:text-pink-400 dark:hover:bg-pink-900/30">
                                            <flux:icon.bookmark-square class="w-4 h-4 mr-2" />
                                            {{ $selectedSubject->curriculum_name }}
                                        </a>
                                    </flux:tooltip>
                                </div>
                            @else
                                <div class="mt-4 md:mt-10 text-sm text-gray-500 dark:text-gray-400">
                                    Chưa có link sách giáo khoa
                                </div>
                            @endif
                        @else
                            <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                Vui lòng chọn môn học
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- Syllabus Table -->
    <div class="theme-table-pink">
        {{-- Desktop Table View --}}
        <div class="hidden md:block overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th class="text-center  w-30">Bài học</th>
                        <th class="text-left">Nội dung</th>
                        <th class="text-left">Assignment</th>
                        <th class="text-left">Mục tiêu (CLO)</th>
                        @if (
                            $syllabi->first() &&
                                (auth()->user()->can('update', $syllabi->first()) || auth()->user()->can('delete', $syllabi->first())))
                            <th class="text-center">Thao tác</th>
                        @endif
                    </tr>
                </thead>
                <tbody id="sortable-syllabi">
                    @forelse($syllabi as $syllabus)
                        <tr class="table-row sortable-row" data-id="{{ $syllabus->id }}">
                            <td
                                class="table-cell text-center font-medium {{ $syllabi->first() && (auth()->user()->can('update', $syllabi->first()) || auth()->user()->can('delete', $syllabi->first())) ? 'drag-handle cursor-move' : '' }}">
                                {{ $syllabus->lesson_number }}
                            </td>
                            <td class="table-cell">
                                <div title="{{ $syllabus->content }}">
                                    {{ $syllabus->content }}
                                </div>
                            </td>
                            <td class="table-cell">
                                <div title="{{ $syllabus->assignment }}">
                                    {{ $syllabus->assignment }}
                                </div>
                            </td>
                            <td class="table-cell">
                                @if ($syllabus->is_url)
                                    @if ($syllabus->CLO !== null && $syllabus->CLO !== '')
                                        <a href="{{ $syllabus->CLO }}" target="_blank" rel="noopener noreferrer">
                                            <flux:badge color="green">Link bài test</flux:badge>
                                        </a>
                                    @else
                                        <flux:badge color="red">Chưa có link bài test</flux:badge>
                                    @endif
                                @else
                                    <div title="{{ $syllabus->CLO }}">
                                        {{ $syllabus->CLO }}
                                    </div>
                                @endif
                            </td>

                            @if (auth()->user()->can('update', $syllabus) || auth()->user()->can('delete', $syllabus))
                                <td class="table-cell text-center">
                                    <flux:dropdown>
                                        <flux:button icon:trailing="chevron-down">Thao tác</flux:button>
                                        <flux:menu>
                                            @can('update', $syllabus)
                                                <flux:menu.item icon="pencil"
                                                    wire:click="editSyllabus({{ $syllabus->id }})">
                                                    Sửa thông tin
                                                </flux:menu.item>
                                            @endcan
                                            @can('delete', $syllabus)
                                                <flux:menu.separator />
                                                <flux:menu.item variant="danger" icon="trash"
                                                    wire:click="deleteSyllabus({{ $syllabus->id }})">
                                                    Xóa
                                                </flux:menu.item>
                                            @endcan
                                        </flux:menu>
                                    </flux:dropdown>
                                </td>
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="table-cell">
                                <div class="empty-state flex flex-col items-center">
                                    <flux:icon.book-open class="w-8 h-8 mb-2" />
                                    <div class="text-sm">Không có syllabus nào cho môn học này</div>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Mobile Card View --}}
        <div class="md:hidden space-y-3" x-data x-init="const mobileEl = document.getElementById('sortable-syllabi-mobile');
        if (mobileEl) {
            new Sortable(mobileEl, {
                animation: 150,
                handle: '.drag-handle',
                onEnd: function() {
                    let orderedIds = [];
                    mobileEl.querySelectorAll('[data-id]').forEach(item => {
                        orderedIds.push(item.getAttribute('data-id'));
                    });
                    @this.call('updateLessonOrder', orderedIds);
                }
            });
        }" id="sortable-syllabi-mobile">
            @forelse($syllabi as $syllabus)
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm" x-data="{ expanded: false }"
                    wire:key="syllabus-mobile-{{ $syllabus->id }}" data-id="{{ $syllabus->id }}">

                    {{-- Main Row --}}
                    <div class="p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center cursor-move drag-handle">
                                <span class="text-xs font-bold text-indigo-600">{{ $syllabus->lesson_number }}</span>
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">Bài {{ $syllabus->lesson_number }}</div>
                                <div class="text-sm text-gray-500 truncate max-w-[200px]">{{ $syllabus->content }}
                                </div>
                            </div>
                        </div>

                        <button @click="expanded = !expanded" class="p-2 rounded-full hover:bg-gray-100">
                            <svg class="w-5 h-5 text-gray-400" :class="{ 'rotate-180': expanded }" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>

                    {{-- Expanded Details --}}
                    <div x-show="expanded" class="border-t border-gray-100 bg-gray-50">

                        <div class="p-4 space-y-3">

                            {{-- Nội dung --}}
                            <div class="flex flex-col space-y-1">
                                <span class="text-sm font-medium text-gray-600">Nội dung:</span>
                                <span class="text-sm text-gray-900">{{ $syllabus->content }}</span>
                            </div>

                            {{-- Mục tiêu (CLO) --}}
                            <div class="flex flex-col space-y-1">
                                <span class="text-sm font-medium text-gray-600">Mục tiêu (CLO):</span>
                                <span class="text-sm text-gray-900">{{ $syllabus->CLO }}</span>
                            </div>

                            {{-- Ngày tạo --}}
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Ngày tạo:</span>
                                <span
                                    class="text-sm text-gray-900">{{ $syllabus->created_at->format('d/m/Y H:i') }}</span>
                            </div>

                        </div>
                    </div>
                </div>
            @empty
                <div class="bg-white rounded-lg border border-gray-200 p-8">
                    <div class="empty-state flex flex-col items-center">
                        <flux:icon.book-open class="w-8 h-8 mb-2 text-gray-400" />
                        <div class="text-sm text-gray-500">Không có syllabus nào cho môn học này</div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Summary -->
    <div class="mt-4 text-sm text-zinc-600 dark:text-zinc-400">
        Tổng số {{ $syllabi->count() }} bài học
    </div>

    <script>
        document.addEventListener('livewire:init', () => {
            let sortable;

            function initSortable() {
                const tbody = document.getElementById('sortable-syllabi');
                if (tbody && !sortable) {
                    sortable = new Sortable(tbody, {
                        handle: '.drag-handle',
                        animation: 150,
                        ghostClass: 'sortable-ghost',
                        chosenClass: 'sortable-chosen',
                        dragClass: 'sortable-drag',
                        onEnd: function(evt) {
                            const orderedIds = Array.from(tbody.children).map(row => row.dataset.id);
                            @this.call('updateLessonOrder', orderedIds);
                        }
                    });
                }
            }

            // Initialize sortable when component loads
            initSortable();

            // Re-initialize when Livewire updates
            Livewire.hook('morph.updated', ({
                component
            }) => {
                if (component.name === 'back.management.syllabus.syllabi') {
                    sortable = null;
                    setTimeout(initSortable, 100);
                }
            });
        });
    </script>
</div>
