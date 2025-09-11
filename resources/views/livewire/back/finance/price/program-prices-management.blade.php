<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex items-center justify-between">
            <div class="header-content">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.currency-dollar class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Quản lý giá tiền chương trình</h1>
                        <p class="header-subtitle">Quản lý giá tiền cho các chương trình học tại các cơ sở</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Quản lý giá tiền</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span>{{ $programs->count() }} chương trình × {{ $locations->count() }} cơ sở</span>
                </div>
                <div class="flex gap-3">
                    @if(!$bulkUpdateMode)
                        <button wire:click="toggleBulkUpdate" class="header-button">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            <span>Chỉnh sửa hàng loạt</span>
                        </button>
                    @else
                        <button wire:click="startBulkEdit" class="header-button">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            <span>Bắt đầu chỉnh sửa</span>
                        </button>
                        <button wire:click="saveBulkPrices" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center space-x-2">
                            <flux:icon.check class="w-5 h-5" />
                            <span>Lưu tất cả</span>
                        </button>
                        <button wire:click="toggleBulkUpdate" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center space-x-2">
                            <flux:icon.x-mark class="w-5 h-5" />
                            <span>Hủy</span>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <!-- Bảng quản lý giá tiền -->
    <div class="mt-6">
        <div class="theme-table-pink">
            <div class="overflow-x-auto max-h-[calc(100vh-300px)]">
                <table>
                    <thead class="sticky top-0 z-10">
                        <tr>
                            <th>
                                Chương trình
                            </th>
                            @foreach($locations as $location)
                                <th class="text-center">
                                    {{ $location->name }}
                                </th>
                            @endforeach
                            <th class="text-center">
                                Thao tác
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($programs as $program)
                            <tr wire:key="program-{{ $program->id }}">
                                <td class="whitespace-nowrap">
                                    <div class="space-y-1">
                                        <div class="font-semibold text-pink-900 dark:text-pink-100">{{ $program->name }}</div>
                                        @if($program->english_name)
                                            <div class="text-xs text-pink-600 dark:text-pink-400 font-medium bg-pink-50 dark:bg-pink-900/20 px-2 py-1 rounded-md inline-block">
                                                {{ $program->english_name }}
                                            </div>
                                        @endif
                                    </div>
                                </td>
                            
                            @foreach($locations as $location)
                                @php
                                    $price = $filteredPrices->where('program_id', $program->id)->where('location_id', $location->id)->first();
                                @endphp
                                <td class="whitespace-nowrap text-center">
                                    @if($price)
                                        @if(isset($editingPrices[$price['id']]))
                                            {{-- Edit Mode --}}
                                            <input type="number" 
                                                wire:model="editingPrices.{{ $price['id'] }}.price"
                                                class="price-input"
                                                placeholder="Nhập giá">
                                            @error("editingPrices.{$price['id']}.price")
                                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        @else
                                            {{-- Display Mode --}}
                                            <div class="price-display">
                                                {{ number_format($price['price'], 0, ',', '.') }} VNĐ
                                            </div>
                                        @endif
                                    @else
                                        {{-- No Price Data - Show Input for New Price --}}
                                        @php
                                            $isEditingProgram = $filteredPrices->where('program_id', $program->id)->whereIn('id', array_keys($editingPrices))->count() > 0;
                                        @endphp
                                        
                                        @if($isEditingProgram)
                                            {{-- Edit Mode for New Price --}}
                                            <input type="number" 
                                                wire:model="newPrices.{{ $program->id }}.{{ $location->id }}"
                                                placeholder="Nhập giá"
                                                class="price-input">
                                            @error("newPrices.{$program->id}.{$location->id}")
                                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        @else
                                            {{-- Display Mode - Show Add Button --}}
                                            <button type="button"
                                                wire:click="startProgramEdit({{ $program->id }})"
                                                class="bg-pink-100 dark:bg-pink-900/20 hover:bg-pink-200 dark:hover:bg-pink-900/30 text-pink-700 dark:text-pink-300 text-xs font-medium px-3 py-2 rounded-lg border border-pink-200 dark:border-pink-800 transition-all duration-200 hover:scale-105">
                                                + Thêm giá
                                            </button>
                                        @endif
                                    @endif
                                </td>
                            @endforeach

                                <td class="whitespace-nowrap text-center">
                                    @php
                                        $programPrices = $filteredPrices->where('program_id', $program->id);
                                        $isEditing = $programPrices->whereIn('id', array_keys($editingPrices))->count() > 0;
                                    @endphp
                                    
                                    @if($isEditing)
                                        {{-- Save/Cancel --}}
                                        <div class="flex items-center justify-center gap-2">
                                            <flux:button size="sm" color="green" variant="primary"
                                                wire:click="saveProgramPrices({{ $program->id }})" class="cursor-pointer">
                                                Lưu
                                            </flux:button>
                                            <flux:button size="sm" color="red" variant="primary"
                                                wire:click="cancelProgramEdit({{ $program->id }})" class="cursor-pointer">
                                                Hủy
                                            </flux:button>
                                        </div>
                                    @else
                                        {{-- Edit Button --}}
                                        <flux:button size="sm" variant="primary"
                                            wire:click="startProgramEdit({{ $program->id }})" class="cursor-pointer">
                                            Chỉnh sửa
                                        </flux:button>
                                    @endif
                                </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="{{ count($locations) + 2 }}" class="table-cell">
                                    <div class="empty-state flex flex-col items-center">
                                        <flux:icon.currency-dollar class="w-12 h-12 mb-4" />
                                        <div class="text-lg font-medium">Không có dữ liệu chương trình</div>
                                        <div class="text-sm">Hãy thêm chương trình và chạy seeder</div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Summary --}}
    @if($programs->count() > 0)
        <div class="mt-6 theme-card-pink">
            <div class="card-header">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                        <flux:icon.chart-bar class="w-4 h-4 text-pink-600 dark:text-pink-400" />
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Thống kê</h3>
                        <p class="text-pink-600 dark:text-pink-400 text-xs">Tổng quan dữ liệu giá tiền</p>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-pink-600 dark:text-pink-400">{{ $programs->count() }}</div>
                        <div class="text-sm text-zinc-600 dark:text-zinc-400">Chương trình</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-pink-600 dark:text-pink-400">{{ $locations->count() }}</div>
                        <div class="text-sm text-zinc-600 dark:text-zinc-400">Cơ sở</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-pink-600 dark:text-pink-400">{{ $filteredPrices->count() }}</div>
                        <div class="text-sm text-zinc-600 dark:text-zinc-400">Bản ghi giá</div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
