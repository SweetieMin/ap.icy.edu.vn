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
                        <h1 class="header-title">Thư viện</h1>
                        <p class="header-subtitle">Nơi lưu trữ các tài liệu học tập</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Thư viện</span>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <div class="theme-table-pink">
            {{-- Desktop Table View --}}
            <div class="hidden md:block overflow-x-auto">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center">Tên môn học</th>
                            <th class="text-center">Tên sách</th>    
                            <th >URL sách</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($libraries as $librarie)
                            <tr wire:key="librarie-desktop-{{ $librarie->id }}">
                                <td class="whitespace-nowrap text-center font-medium">
                                    {{ $librarie->name }}
                                </td>
                                <td class="whitespace-nowrap text-center font-medium">
                                    {{ $librarie->curriculum_name }}
                                </td>
                                <td class="whitespace-nowrap">
                                    @if($librarie->url_book)
                                        <a href="{{ $librarie->url_book }}" 
                                           target="_blank" 
                                           rel="noopener noreferrer" 
                                           class="text-blue-600 hover:underline">
                                            Xem sách
                                        </a>
                                    @else
                                        <span class="text-gray-500">Không có link sách</span>
                                    @endif
                                </td>
                                
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-8">
                                    <div class="empty-state flex flex-col items-center">
                                        <flux:icon.map-pin class="w-8 h-8 mb-2" />
                                        <div class="text-sm">Không có dữ liệu</div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Mobile Card View --}}
            <div class="md:hidden space-y-3">
                @forelse ($libraries as $librarie)
                    <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                         x-data="{ expanded: false }" 
                         wire:key="librarie-mobile-{{ $librarie->id }}">
                        
                        {{-- Main Row --}}
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">{{ $librarie->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $librarie->curriculum_name }}</div>
                                </div>
                            </div>
                            
                            <button @click="expanded = !expanded" 
                                    class="p-2 rounded-full hover:bg-gray-100 ">
                                <svg class="w-5 h-5 text-gray-400 " 
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
                                
                                {{-- Người tạo --}}
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Link sách:</span>
                                    @if($librarie->url_book)
                                        <a href="{{ $librarie->url_book }}" 
                                           target="_blank" 
                                           rel="noopener noreferrer" 
                                           class="text-blue-600 hover:underline">
                                            Xem sách
                                        </a>
                                    @else
                                        <span class="text-gray-500">Không có link sách</span>
                                    @endif
                                </div>

                                {{-- Ngày tạo --}}
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Ngày tạo:</span>
                                    <span class="text-sm text-gray-900">{{ $librarie->created_at->format('d/m/Y H:i') }}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-white rounded-lg border border-gray-200 p-8">
                        <div class="empty-state flex flex-col items-center">
                            <flux:icon.map-pin class="w-8 h-8 mb-2 text-gray-400" />
                            <div class="text-sm text-gray-500">Không có dữ liệu nào</div>
                        </div>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
</div>
