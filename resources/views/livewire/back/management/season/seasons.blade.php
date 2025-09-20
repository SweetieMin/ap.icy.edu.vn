<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.calendar class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Học kỳ</h1>
                        <p class="header-subtitle">Quản lý các học kỳ trong hệ thống</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Học kỳ</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span>{{ $seasons->total() ?? 0 }} học kỳ</span>
                </div>

                <button wire:click="addSeason" class="header-button w-full sm:w-auto">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span class="hidden sm:inline">Thêm học kỳ</span>
                    <span class="sm:hidden">Thêm</span>
                </button>
            </div>
        </div>
    </div>

    <livewire:back.management.season.actions-season />

    {{-- Main content area --}}
    <div class="mt-6">
        <div class="theme-table-pink">
            {{-- Desktop Table View --}}
            <div class="hidden md:block overflow-x-auto">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center w-16">Mã</th>
                            <th class="text-center">Tên học kỳ</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($seasons as $season)
                            <tr wire:key="season-desktop-{{ $season->id }}">
                                <td class="whitespace-nowrap text-center font-medium">
                                    {{ $season->code }}
                                </td>
                                <td class="whitespace-nowrap text-center">
                                    {{ $season->name }}
                                </td>
                                <td class="whitespace-nowrap text-center">
                                    <flux:badge variant="solid" color="{{ $season->status_badge_color }}">
                                        {{ $season->status_badge_label }}
                                    </flux:badge>
                                </td>
                                <td class="whitespace-nowrap text-center">
                                    <flux:dropdown>
                                        <flux:button icon:trailing="chevron-down">Thao tác</flux:button>

                                        <flux:menu>
                                            <flux:menu.item  icon="pencil"
                                                wire:click="editSeason({{ $season->id }})">Sửa thông tin
                                            </flux:menu.item>

                                            <flux:menu.separator />

                                            <flux:menu.item variant="danger" icon="trash"
                                                wire:click="deleteSeason({{ $season->id }})">Xóa
                                            </flux:menu.item>
                                        </flux:menu>
                                    </flux:dropdown>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-8">
                                    <div class="empty-state flex flex-col items-center">
                                        <flux:icon.calendar class="w-8 h-8 mb-2" />
                                        <div class="text-sm">Không có học kỳ nào</div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Mobile Card View --}}
            <div class="md:hidden space-y-3">
                @forelse ($seasons as $season)
                    <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                         x-data="{ expanded: false }" 
                         wire:key="season-mobile-{{ $season->id }}">
                        
                        {{-- Main Row --}}
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">{{ $season->code }}</div>
                                    <div class="text-sm text-gray-500">{{ $season->name }}</div>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <flux:badge variant="solid" color="{{ $season->status_badge_color }}" class="text-xs">
                                    {{ $season->status_badge_label }}
                                </flux:badge>
                                
                                <button @click="expanded = !expanded" 
                                        class="p-2 rounded-full hover:bg-gray-100">
                                    <svg class="w-5 h-5 text-gray-400" 
                                         :class="{ 'rotate-180': expanded }" 
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        {{-- Expanded Details --}}
                        <div x-show="expanded" 
                             class="border-t border-gray-100 bg-gray-50">
                            
                            <div class="p-4 space-y-3">
                                
                                {{-- Ngày tạo --}}
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Ngày tạo:</span>
                                    <span class="text-sm text-gray-900">{{ $season->created_at->format('d/m/Y H:i') }}</span>
                                </div>

                                {{-- Actions --}}
                                <div class="pt-3 border-t border-gray-200">
                                    <div class="flex space-x-2">
                                        <button wire:click="editSeason({{ $season->id }})"
                                                class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                            <span>Sửa</span>
                                        </button>
                                        
                                        <button wire:click="deleteSeason({{ $season->id }})"
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
                            <flux:icon.calendar class="w-8 h-8 mb-2 text-gray-400" />
                            <div class="text-sm text-gray-500">Không có học kỳ nào</div>
                        </div>
                    </div>
                @endforelse
            </div>
            
            @if($seasons->hasPages())
                <div class="pagination-container mt-6">
                    {{ $seasons->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
