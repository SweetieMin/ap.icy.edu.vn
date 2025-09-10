<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex items-center justify-between">
            <div class="header-content">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.book-marked class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Chương trình học</h1>
                        <p class="header-subtitle">Quản lý các chương trình học trong hệ thống</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Chương trình học</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span>{{ $programs->total() ?? 0 }} chương trình</span>
                </div>
                <button wire:click="addProgram" class="header-button">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span>Thêm chương trình</span>
                </button>
            </div>
        </div>
    </div>

    <livewire:back.management.program.actions-program />

    {{-- Main content area --}}
    <div class="mt-6">
        <div x-data x-init="const el = document.getElementById('sortable-program');
        new Sortable(el, {
            animation: 150,
            handle: '.drag-handle',
            onEnd: function() {
                let orderedIds = [];
                el.querySelectorAll('[data-id]').forEach(item => {
                    orderedIds.push(item.getAttribute('data-id'));
                });
        
                $wire.updateProgramOrdering(orderedIds);
            }
        });">

            <div class="theme-table-pink">
                <div class="overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center w-16">STT</th>
                                <th class="w-30">Chương trình học</th>
                                <th class="hidden 2xl:table-cell">Mô tả</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody id="sortable-program">
                            @forelse ($programs as $program)
                                <tr wire:key="program-{{ $program->id }}" data-id="{{ $program->id }}"
                                    class="cursor-move drag-handle">
                                    <td class="whitespace-nowrap text-center">
                                        {{ $program->ordering }}
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="space-y-1">
                                            <div class="font-semibold text-pink-900 dark:text-pink-100">
                                                {{ $program->name }}</div>

                                            <div
                                                class="text-xs text-pink-600 dark:text-pink-400 font-medium  inline-block">
                                                {{ $program->english_name }}
                                            </div>

                                        </div>
                                    </td>
                                    <td class="hidden 2xl:table-cell">
                                        <div class=" truncate" title="{{ $program->description }}">
                                            {{ $program->description }}
                                        </div>
                                    </td>

                                    <td class="whitespace-nowrap text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            <flux:button size="sm" variant="primary" icon="square-pen"
                                                wire:click="editProgram({{ $program->id }})" class="cursor-pointer">
                                                Sửa
                                            </flux:button>
                                            <flux:button size="sm" variant="danger" icon="trash"
                                                wire:click="deleteProgram({{ $program->id }})" class="cursor-pointer">
                                                Xóa
                                            </flux:button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-8">
                                        <div class="empty-state flex flex-col items-center">
                                            <flux:icon.book-marked class="w-8 h-8 mb-2" />
                                            <div class="text-sm">Không có khoá học nào</div>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if ($programs->hasPages())
                    <div class="pagination-container">
                        {{ $programs->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
