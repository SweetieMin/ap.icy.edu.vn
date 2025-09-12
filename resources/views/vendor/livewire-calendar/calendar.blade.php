{{-- Custom Calendar with Navigation Controls --}}
<div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden"
    @if($pollMillis !== null && $pollAction !== null)
        wire:poll.{{ $pollMillis }}ms="{{ $pollAction }}"
    @elseif($pollMillis !== null)
        wire:poll.{{ $pollMillis }}ms
    @endif
>
    {{-- Navigation Controls --}}
    <div class="bg-white shadow-sm rounded-t-lg p-4 border-b border-gray-200">
        <div class="flex items-center justify-between">
            {{-- Previous Month Button --}}
            <button 
                wire:click="goToPreviousMonth"
                class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-pink-50 hover:border-pink-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-colors duration-200"
            >
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Tháng trước
            </button>

            {{-- Current Month Display --}}
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-pink-600 cursor-pointer" wire:click="goToCurrentMonth">
                    {{ ucwords(now()->locale('vi')->translatedFormat('l, d F Y')) }}
                </h2>
                <p class="text-sm text-gray-500">
                    {{ $startsAt->format('d/m/Y') }} - {{ $endsAt->format('d/m/Y') }}
                </p>
            </div>

            {{-- Next Month Button --}}
            <button 
                wire:click="goToNextMonth"
                class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-pink-50 hover:border-pink-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-colors duration-200"
            >
                Tháng sau
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

    </div>

    {{-- Calendar Header --}}
    <div class="bg-gradient-to-r from-pink-500 to-pink-600 text-white p-4">
        <h1 class="text-2xl font-bold text-center">Lịch học tập</h1>
    </div>

    {{-- Before Calendar View (if any) --}}
    <div>
        @includeIf($beforeCalendarView)
    </div>

    {{-- Calendar Grid --}}
    <div class="flex">
        <div class="overflow-x-auto w-full">
            <div class="inline-block min-w-full overflow-hidden">
                {{-- Days of Week Header --}}
                <div class="w-full flex flex-row bg-gray-50 border-b border-gray-200">
                    @foreach($monthGrid->first() as $day)
                        @include($dayOfWeekView, ['day' => $day])
                    @endforeach
                </div>

                {{-- Calendar Days --}}
                @foreach($monthGrid as $week)
                    <div class="w-full flex flex-row">
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
    <div class="bg-pink-50 px-4 py-3 border-t border-pink-200">
        <div class="flex items-center justify-between text-sm text-gray-600">
            <div class="flex items-center space-x-4">
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-pink-500 rounded-full mr-2"></div>
                    <span>Lịch hẹn học viên</span>
                </div>
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-pink-600 rounded-full mr-2"></div>
                    <span>Kiểm tra</span>
                </div>
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-pink-400 rounded-full mr-2"></div>
                    <span>Họp phụ huynh</span>
                </div>
            </div>
            <div class="text-pink-600 font-medium">
                Tổng: {{ $events->count() }} sự kiện
            </div>
        </div>
    </div>

    {{-- After Calendar View (if any) --}}
    <div>
        @includeIf($afterCalendarView)
    </div>
</div>
