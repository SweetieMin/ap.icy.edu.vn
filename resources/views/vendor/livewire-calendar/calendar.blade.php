{{-- Custom Calendar with Navigation Controls --}}
<div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden"
    @if($pollMillis !== null && $pollAction !== null)
        wire:poll.{{ $pollMillis }}ms="{{ $pollAction }}"
    @elseif($pollMillis !== null)
        wire:poll.{{ $pollMillis }}ms
    @endif
>
    {{-- Navigation Controls --}}
    <div class="bg-white shadow-sm rounded-t-lg p-2 sm:p-4 border-b border-gray-200">
        <div class="flex items-center justify-between">
            {{-- Previous Month Button --}}
            <button 
                wire:click="goToPreviousMonth"
                class="flex items-center px-2 sm:px-4 py-2 sm:py-3 text-xs sm:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-pink-50 hover:border-pink-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-colors duration-200 min-h-[44px] touch-manipulation"
            >
                <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 sm:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="hidden sm:inline">Tháng trước</span>
                <span class="sm:hidden">Trước</span>
            </button>

            {{-- Current Month Display --}}
            <div class="text-center flex-1 mx-2">
                <h2 class="text-lg sm:text-2xl font-semibold text-pink-600 cursor-pointer touch-manipulation" wire:click="goToCurrentMonth">
                    {{ ucwords(now()->locale('vi')->translatedFormat('l, d F Y')) }}
                </h2>
                <p class="text-xs sm:text-sm text-gray-500">
                    {{ $startsAt->format('d/m/Y') }} - {{ $endsAt->format('d/m/Y') }}
                </p>
            </div>

            {{-- Next Month Button --}}
            <button 
                wire:click="goToNextMonth"
                class="flex items-center px-2 sm:px-4 py-2 sm:py-3 text-xs sm:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-pink-50 hover:border-pink-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-colors duration-200 min-h-[44px] touch-manipulation"
            >
                <span class="hidden sm:inline">Tháng sau</span>
                <span class="sm:hidden">Sau</span>
                <svg class="w-3 h-3 sm:w-4 sm:h-4 ml-1 sm:ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

    </div>

    {{-- Calendar Header --}}
    <div class="bg-gradient-to-r from-pink-500 to-pink-600 text-white p-2 sm:p-4">
        <h1 class="text-lg sm:text-2xl font-bold text-center">Lịch học tập</h1>
    </div>

    {{-- Before Calendar View (if any) --}}
    <div>
        @includeIf($beforeCalendarView)
    </div>

    {{-- Calendar Grid --}}
    <div class="w-full">
        <div class="overflow-x-auto">
            <div class="min-w-full sm:w-full" style="min-width: 38.5rem;">
                {{-- Days of Week Header --}}
                <div class="w-full flex bg-gray-50 border-b border-gray-200">
                    @foreach($monthGrid->first() as $day)
                        @include($dayOfWeekView, ['day' => $day])
                    @endforeach
                </div>

                {{-- Calendar Days --}}
                @foreach($monthGrid as $week)
                    <div class="w-full flex">
                        @foreach($week as $day)
                            @include($dayView, [
                                    'componentId' => $componentId,
                                    'day' => $day,
                                    'dayInMonth' => $day->isSameMonth($startsAt),
                                    'isToday' => $day->isToday(),
                                    'events' => $getEventsForDay($day, $events),
                                ])
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Calendar Footer with Legend --}}
    <div class="bg-pink-50 px-2 sm:px-4 py-2 sm:py-3 border-t border-pink-200">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between text-xs sm:text-sm text-gray-600 space-y-2 sm:space-y-0">
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-1 sm:space-y-0 sm:space-x-4">
                <div class="flex items-center">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-blue-500 rounded-full mr-1 sm:mr-2"></div>
                    <span class="text-xs sm:text-sm">Lịch học</span>
                </div>
                <div class="flex items-center">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-amber-500 rounded-full mr-1 sm:mr-2"></div>
                    <span class="text-xs sm:text-sm">Kiểm tra giữa kì</span>
                </div>

                <div class="flex items-center">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-rose-500 rounded-full mr-1 sm:mr-2"></div>
                    <span class="text-xs sm:text-sm">Kiểm tra cuối kì</span>
                </div>

                <div class="flex items-center">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-violet-500 rounded-full mr-1 sm:mr-2"></div>
                    <span class="text-xs sm:text-sm">Lịch họp phụ huynh</span>
                </div>
                <div class="flex items-center">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-emerald-500 rounded-full mr-1 sm:mr-2"></div>
                    <span class="text-xs sm:text-sm">Sự kiện</span>
                </div>
                
            </div>
            <div class="text-pink-600 font-medium text-xs sm:text-sm">
                Tổng: {{ $events->count() }} sự kiện
            </div>
        </div>
    </div>

    {{-- After Calendar View (if any) --}}
    <div>
        @includeIf($afterCalendarView)
    </div>

    {{-- Modal Setup View (if any) --}}
    <div>
        @includeIf($modalSetup)
    </div>

    <div>
        @includeIf($modalView)
    </div>
</div>
