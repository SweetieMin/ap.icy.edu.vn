<div ondragenter="onLivewireCalendarEventDragEnter(event, '{{ $componentId }}', '{{ $day }}', '{{ $dragAndDropClasses }}');"
    ondragleave="onLivewireCalendarEventDragLeave(event, '{{ $componentId }}', '{{ $day }}', '{{ $dragAndDropClasses }}');"
    ondragover="onLivewireCalendarEventDragOver(event);"
    ondrop="onLivewireCalendarEventDrop(event, '{{ $componentId }}', '{{ $day }}', {{ $day->year }}, {{ $day->month }}, {{ $day->day }}, '{{ $dragAndDropClasses }}');"
    class="flex-1 h-32 sm:h-40 lg:h-48 border border-pink-400 -mt-px -ml-px hover:bg-gray-400 transition-colors duration-200"
    style="min-width: 8rem; max-width: 12rem;">

    {{-- Wrapper for Drag and Drop --}}
    <div class="w-full h-full" id="{{ $componentId }}-{{ $day }}">

        <div @if ($dayClickEnabled) wire:click="onDayClick({{ $day->year }}, {{ $day->month }}, {{ $day->day }})" @endif
            class="w-full h-full p-2 {{ $dayInMonth ? ($isToday ? 'bg-pink-50 border-2 border-pink-300' : 'bg-white') : 'bg-gray-50' }} flex flex-col {{ $dayClickEnabled ? 'cursor-pointer' : '' }}">

            {{-- Number of Day --}}
            <div class="flex items-center justify-between">
                <p class="text-sm sm:text-md {{ $dayInMonth ? 'font-medium text-pink-600' : 'text-pink-100' }}">
                    {{ $day->format('j') }}
                </p>
                @if ($isToday)
                    <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-pink-500 rounded-full"></div>
                @endif
            </div>

            {{-- Event Count --}}
            @if ($events->isNotEmpty())
                <p class="text-xs text-gray-500 mt-1">
                    {{ $events->count() }} sự kiện
                </p>
            @endif

            {{-- Events --}}
            <div class="mt-1 sm:mt-2 flex-1 overflow-y-auto">
                <div class="space-y-0.5 sm:space-y-1">
                    @foreach ($events as $event)
                        <div @if ($dragAndDropEnabled) draggable="true" @endif
                            ondragstart="onLivewireCalendarEventDragStart(event, '{{ $event['id'] }}')"
                            @if ($eventClickEnabled) wire:click="onEventClick({{ $event['id'] }})" @endif
                            onclick="event.stopPropagation()"
                            class="text-xs p-1 sm:p-1.5 rounded {{ $event['color'] ?? 'bg-blue-500' }} text-white truncate cursor-pointer hover:opacity-80 transition-opacity duration-200 touch-manipulation min-h-[32px] flex items-center"
                            title="{{ $event['title'] }} - {{ $event['description'] ?? '' }}">
                            <span class="truncate">{{ $event['title'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
