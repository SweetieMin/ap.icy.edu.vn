<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
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
                    <span>Quản lý giá tiền</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span>{{ $programs->count() }} chương trình × {{ $locations->count() }} cơ sở</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-2 sm:gap-3 w-full sm:w-auto">
                    @if(!$bulkUpdateMode)
                        <button wire:click="toggleBulkUpdate" class="header-button w-full sm:w-auto">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            <span class="hidden sm:inline">Chỉnh sửa hàng loạt</span>
                            <span class="sm:hidden">Chỉnh sửa</span>
                        </button>
                    @else
                        <button wire:click="startBulkEdit" class="header-button w-full sm:w-auto">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            <span class="hidden sm:inline">Bắt đầu chỉnh sửa</span>
                            <span class="sm:hidden">Bắt đầu</span>
                        </button>
                        <button wire:click="saveBulkPrices" class="bg-green-600 hover:bg-green-700 text-white px-4 sm:px-6 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center space-x-2 w-full sm:w-auto">
                            <flux:icon.check class="w-4 h-4 sm:w-5 sm:h-5" />
                            <span class="hidden sm:inline">Lưu tất cả</span>
                            <span class="sm:hidden">Lưu</span>
                        </button>
                        <button wire:click="toggleBulkUpdate" class="bg-red-600 hover:bg-red-700 text-white px-4 sm:px-6 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center space-x-2 w-full sm:w-auto">
                            <flux:icon.x-mark class="w-4 h-4 sm:w-5 sm:h-5" />
                            <span class="hidden sm:inline">Hủy</span>
                            <span class="sm:hidden">Hủy</span>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <!-- Bảng quản lý giá tiền -->
    <div class="mt-6">
        <div class="theme-table-pink">
            {{-- Desktop Table View --}}
            <div class="hidden md:block overflow-x-auto max-h-[calc(100vh-300px)]">
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
                            <tr wire:key="program-desktop-{{ $program->id }}">
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

            {{-- Mobile Card View --}}
            <div class="md:hidden space-y-4">
                @forelse ($programs as $program)
                    <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                         x-data="{ expanded: false }" 
                         wire:key="program-mobile-{{ $program->id }}">
                        
                        {{-- Main Row --}}
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">{{ $program->name }}</div>
                                    @if($program->english_name)
                                        <div class="text-sm text-gray-500">{{ $program->english_name }}</div>
                                    @endif
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
                            
                            <div class="p-4 space-y-4">
                                {{-- Prices for each location --}}
                                <div class="space-y-3">
                                    <span class="text-sm font-medium text-gray-600">Giá tại các cơ sở:</span>
                                    @foreach($locations as $location)
                                        @php
                                            $price = $filteredPrices->where('program_id', $program->id)->where('location_id', $location->id)->first();
                                        @endphp
                                        <div class="bg-white rounded-lg p-3 border border-gray-200">
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-sm font-medium text-gray-700">{{ $location->name }}</span>
                                            </div>
                                            
                                            @if($price)
                                                @if(isset($editingPrices[$price['id']]))
                                                    {{-- Edit Mode --}}
                                                    <div class="space-y-2">
                                                        <input type="number" 
                                                            wire:model="editingPrices.{{ $price['id'] }}.price"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm"
                                                            placeholder="Nhập giá">
                                                        @error("editingPrices.{$price['id']}.price")
                                                            <div class="text-red-500 text-xs">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                @else
                                                    {{-- Display Mode --}}
                                                    <div class="text-sm font-semibold text-green-600">
                                                        {{ number_format($price['price'], 0, ',', '.') }} VNĐ
                                                    </div>
                                                @endif
                                            @else
                                                {{-- No Price Data --}}
                                                @php
                                                    $isEditingProgram = $filteredPrices->where('program_id', $program->id)->whereIn('id', array_keys($editingPrices))->count() > 0;
                                                @endphp
                                                
                                                @if($isEditingProgram)
                                                    {{-- Edit Mode for New Price --}}
                                                    <div class="space-y-2">
                                                        <input type="number" 
                                                            wire:model="newPrices.{{ $program->id }}.{{ $location->id }}"
                                                            placeholder="Nhập giá"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
                                                        @error("newPrices.{$program->id}.{$location->id}")
                                                            <div class="text-red-500 text-xs">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                @else
                                                    {{-- Display Mode - Show Add Button --}}
                                                    <button type="button"
                                                        wire:click="startProgramEdit({{ $program->id }})"
                                                        class="w-full bg-pink-100 hover:bg-pink-200 text-pink-700 text-sm font-medium px-3 py-2 rounded-lg border border-pink-200 transition-all duration-200">
                                                        + Thêm giá
                                                    </button>
                                                @endif
                                            @endif
                                        </div>
                                    @endforeach
                                </div>

                                {{-- Actions --}}
                                @php
                                    $programPrices = $filteredPrices->where('program_id', $program->id);
                                    $isEditing = $programPrices->whereIn('id', array_keys($editingPrices))->count() > 0;
                                @endphp
                                
                                <div class="pt-3 border-t border-gray-200">
                                    @if($isEditing)
                                        {{-- Save/Cancel --}}
                                        <div class="flex space-x-2">
                                            <button wire:click="saveProgramPrices({{ $program->id }})"
                                                    class="flex-1 bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700 transition-colors flex items-center justify-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span>Lưu</span>
                                            </button>
                                            
                                            <button wire:click="cancelProgramEdit({{ $program->id }})"
                                                    class="flex-1 bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-red-700 transition-colors flex items-center justify-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                                <span>Hủy</span>
                                            </button>
                                        </div>
                                    @else
                                        {{-- Edit Button --}}
                                        <button wire:click="startProgramEdit({{ $program->id }})"
                                                class="w-full bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                            <span>Chỉnh sửa</span>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-white rounded-lg border border-gray-200 p-8">
                        <div class="empty-state flex flex-col items-center">
                            <flux:icon.currency-dollar class="w-8 h-8 mb-2 text-gray-400" />
                            <div class="text-sm text-gray-500">Không có dữ liệu chương trình</div>
                        </div>
                    </div>
                @endforelse
            </div>
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
