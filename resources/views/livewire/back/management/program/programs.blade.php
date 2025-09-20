<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
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
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span>{{ $programs->total() ?? 0 }} chương trình</span>
                </div>

                <button wire:click="addProgram" class="header-button w-full sm:w-auto">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span class="hidden sm:inline">Thêm chương trình</span>
                    <span class="sm:hidden">Thêm</span>
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
                {{-- Desktop Table View --}}
                <div class="hidden md:block overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center w-16">STT</th>
                                <th class="w-30">Chương trình học</th>
                                <th class="hidden 2xl:table-cell">Mô tả</th>
                                <th class="text-center hidden lg:table-cell">Giá sách</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody id="sortable-program">
                            @forelse ($programs as $program)
                                <tr wire:key="program-desktop-{{ $program->id }}" data-id="{{ $program->id }}"
                                    class=" table-row">
                                    <td class="whitespace-nowrap text-center table-cell cursor-move drag-handle">
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
                                    <td class="text-center hidden lg:table-cell">
                                        <div class="font-bold text-green-600 dark:text-green-400">
                                            {{ number_format($program->price_book, 0, ',', '.') }} VNĐ
                                        </div>
                                    </td>

                                    <td class="whitespace-nowrap text-center">
                                        <flux:dropdown>
                                            <flux:button icon:trailing="chevron-down">Thao tác</flux:button>
    
                                            <flux:menu>
                                                <flux:menu.item  icon="pencil"
                                                    wire:click="editProgram({{ $program->id }})">Sửa thông tin
                                                </flux:menu.item>
    
                                                <flux:menu.separator />
    
                                                <flux:menu.item variant="danger" icon="trash"
                                                    wire:click="deleteProgram({{ $program->id }})">Xóa
                                                </flux:menu.item>
                                            </flux:menu>
                                        </flux:dropdown>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-8">
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

                {{-- Mobile Card View --}}
                <div class="md:hidden space-y-3" 
                     x-data 
                     x-init="
                        const mobileEl = document.getElementById('sortable-program-mobile');
                        if (mobileEl) {
                            new Sortable(mobileEl, {
                                animation: 150,
                                handle: '.drag-handle',
                                onEnd: function() {
                                    let orderedIds = [];
                                    mobileEl.querySelectorAll('[data-id]').forEach(item => {
                                        orderedIds.push(item.getAttribute('data-id'));
                                    });
                                    $wire.updateProgramOrdering(orderedIds);
                                }
                            });
                        }
                     "
                     id="sortable-program-mobile">
                    @forelse ($programs as $program)
                        <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                             x-data="{ expanded: false }" 
                             wire:key="program-mobile-{{ $program->id }}"
                             data-id="{{ $program->id }}">
                            
                            {{-- Main Row --}}
                            <div class="p-4 flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center cursor-move drag-handle">
                                        <span class="text-xs font-bold text-purple-600">{{ $program->ordering }}</span>
                                    </div>
                                    <div>
                                        <div class="font-medium text-gray-900">{{ $program->name }}</div>
                                        <div class="text-sm text-gray-500">{{ $program->english_name }}</div>
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
                                    
                                    {{-- Mô tả --}}
                                    <div class="flex flex-col space-y-1">
                                        <span class="text-sm font-medium text-gray-600">Mô tả:</span>
                                        <span class="text-sm text-gray-900">{{ $program->description }}</span>
                                    </div>

                                    {{-- Giá sách --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Giá sách:</span>
                                        <span class="text-sm font-bold text-green-600">{{ number_format($program->price_book, 0, ',', '.') }} VNĐ</span>
                                    </div>

                                    {{-- Ngày tạo --}}
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Ngày tạo:</span>
                                        <span class="text-sm text-gray-900">{{ $program->created_at->format('d/m/Y H:i') }}</span>
                                    </div>

                                    {{-- Actions --}}
                                    <div class="pt-3 border-t border-gray-200">
                                        <div class="flex space-x-2">
                                            <button wire:click="editProgram({{ $program->id }})"
                                                    class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                                <span>Sửa</span>
                                            </button>
                                            
                                            <button wire:click="deleteProgram({{ $program->id }})"
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
                    @empty
                        <div class="bg-white rounded-lg border border-gray-200 p-8">
                            <div class="empty-state flex flex-col items-center">
                                <flux:icon.book-marked class="w-8 h-8 mb-2 text-gray-400" />
                                <div class="text-sm text-gray-500">Không có chương trình nào</div>
                            </div>
                        </div>
                    @endforelse
                </div>

                @if ($programs->hasPages())
                    <div class="pagination-container mt-6">
                        {{ $programs->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
