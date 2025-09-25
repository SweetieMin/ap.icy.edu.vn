<div>
    {{-- Header Section --}}
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <flux:icon.queue-list class="size-12" />
                    </div>
                    <div>
                        <h1 class="header-title">Chăm sóc học viên</h1>
                        <p class="header-subtitle">Quản lý học viên vắng và lịch sử chăm sóc</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="{{ route('dashboard') }}">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Chăm sóc học viên</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <livewire:back.personnel.service.actions-student-care />

    {{-- Tabs --}}
    <div class="mb-6">
        <div class="border-b border-gray-200 dark:border-gray-700">
            <nav class="-mb-px flex space-x-8">
                <button wire:click="setActiveTab('absences')"
                    class="py-2 px-1 border-b-2 font-medium text-sm transition-colors duration-200 {{ $activeTab === 'absences' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300' }}">
                    <div class="flex items-center space-x-2">
                        <flux:icon.exclamation-triangle class="size-4" />
                        <span>Danh sách vắng mặt</span>
                    </div>
                </button>
                <button wire:click="setActiveTab('history')"
                    class="py-2 px-1 border-b-2 font-medium text-sm transition-colors duration-200 {{ $activeTab === 'history' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300' }}">
                    <div class="flex items-center space-x-2">
                        <flux:icon.clock class="size-4" />
                        <span>Lịch sử chăm sóc</span>
                    </div>
                </button>
            </nav>
        </div>
    </div>

    {{-- Tab Content --}}
    <div class="mt-6">
        {{-- Tab 1: Danh sách vắng mặt --}}
        @if ($activeTab === 'absences')
            <livewire:back.personnel.service.absent-students />
        @endif

        {{-- Tab 2: Lịch sử chăm sóc --}}
        @if ($activeTab === 'history')
            <livewire:back.personnel.service.students-care-history />
        @endif
    </div>
</div>
