<div class="relative mb-4 w-full">

    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex items-center justify-between">
            <div class="header-content">
                <div class="flex items-center space-x-3 mb-2">
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
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span>{{ $seasons->total() ?? 0 }} học kỳ</span>
                </div>
                <button wire:click="addSeason" class="header-button">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span>Thêm học kỳ</span>
                </button>
            </div>
        </div>
    </div>

    <livewire:back.management.season.actions-season />

    {{-- Main content area --}}
    <div class="mt-6">
        <div class="theme-table-pink">
            <div class="overflow-x-auto">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center w-16">Mã</th>
                            <th class="text-center hidden sm:table-cell">Tên học kỳ</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($seasons as $season)
                            <tr wire:key="season-{{ $season->id }}">
                                <td class="whitespace-nowrap text-center font-medium">
                                    {{ $season->code }}
                                </td>
                                <td class="whitespace-nowrap text-center hidden sm:table-cell">
                                    {{ $season->name }}
                                </td>
                                <td class="whitespace-nowrap text-center">
                                    <flux:badge variant="solid" color="{{ $season->status_badge_color }}">
                                        {{ $season->status_badge_label }}
                                    </flux:badge>
                                </td>
                                <td class="whitespace-nowrap text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <flux:button size="sm" variant="primary" icon="square-pen"
                                            wire:click="editSeason({{ $season->id }})" class="cursor-pointer">
                                            Sửa
                                        </flux:button>
                                        <flux:button size="sm" variant="danger" icon="trash"
                                            wire:click="deleteSeason({{ $season->id }})" class="cursor-pointer">
                                            Xóa
                                        </flux:button>
                                    </div>
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
            
            @if($seasons->hasPages())
                <div class="pagination-container">
                    {{ $seasons->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
