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
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Syllabus</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span>{{ $syllabi->count() ?? 0 }} bài học</span>
                </div>

                @can('create', \App\Models\Syllabus::class)
                    <button wire:click="addSyllabus" class="header-button">
                        <flux:icon.plus-circle />
                        <span>Thêm Syllabus</span>
                    </button>
                @endcan

            </div>
        </div>
    </div>

    <livewire:back.management.syllabus.actions-syllabus />
    <!-- Search and Filter Section -->
    <div class="mt-6">
        <div class="theme-card-pink mb-6">
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
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

                    <!-- Search -->
                    <div>
                        <label for="search" class="card-label">Tìm kiếm</label>
                        <input wire:model.live="search" type="text" id="search"
                            placeholder="Tìm theo bài học, nội dung, từ vựng..." class="card-input">
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

                        <th class="text-center  w-30">Bài học</th>
                        <th class="text-left">Nội dung</th>

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

                            <td class="table-cell text-center font-medium {{$syllabi->first() && (auth()->user()->can('update', $syllabi->first()) || auth()->user()->can('delete', $syllabi->first())) ? 'drag-handle cursor-move' : ''}}">
                                {{ $syllabus->lesson_number }}
                            </td>
                            <td class="table-cell">
                                <div class="max-w-xs truncate" title="{{ $syllabus->content }}">
                                    {{ Str::limit($syllabus->content, 80) }}
                                </div>
                            </td>

                            <td class="table-cell">
                                <div class="max-w-xs truncate" title="{{ $syllabus->CLO }}">
                                    {{ Str::limit($syllabus->CLO, 60) }}
                                </div>
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
