<div ondragenter="onLivewireCalendarEventDragEnter(event, '{{ $componentId }}', '{{ $day }}', '{{ $dragAndDropClasses }}');"
    ondragleave="onLivewireCalendarEventDragLeave(event, '{{ $componentId }}', '{{ $day }}', '{{ $dragAndDropClasses }}');"
    ondragover="onLivewireCalendarEventDragOver(event);"
    ondrop="onLivewireCalendarEventDrop(event, '{{ $componentId }}', '{{ $day }}', {{ $day->year }}, {{ $day->month }}, {{ $day->day }}, '{{ $dragAndDropClasses }}');"
    class="flex-1 h-40 lg:h-48 border border-pink-400 -mt-px -ml-px hover:bg-gray-400 transition-colors duration-200"
    style="min-width: 10rem;">

    {{-- Wrapper for Drag and Drop --}}
    <div class="w-full h-full" id="{{ $componentId }}-{{ $day }}">

        <div @if ($dayClickEnabled) wire:click="onDayClick({{ $day->year }}, {{ $day->month }}, {{ $day->day }})" @endif
            class="w-full h-full p-2 {{ $dayInMonth ? ($isToday ? 'bg-pink-50 border-2 border-pink-300' : 'bg-white') : 'bg-gray-50' }} flex flex-col {{ $dayClickEnabled ? 'cursor-pointer' : '' }}">

            {{-- Number of Day --}}
            <div class="flex items-center justify-between">
                <p class="text-sm {{ $dayInMonth ? 'font-medium text-gray-900' : 'text-gray-400' }}">
                    {{ $day->format('j') }}
                </p>
                @if ($isToday)
                    <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                @endif
            </div>

            {{-- Event Count --}}
            @if ($events->isNotEmpty())
                <p class="text-xs text-gray-500 mt-1">
                    {{ $events->count() }} sự kiện
                </p>
            @endif

            {{-- Events --}}
            <div class="mt-2 flex-1 overflow-y-auto">
                <div class="space-y-1">
                    @foreach ($events as $event)
                        <div @if ($dragAndDropEnabled) draggable="true" @endif
                            ondragstart="onLivewireCalendarEventDragStart(event, '{{ $event['id'] }}')"
                            @if ($eventClickEnabled) wire:click="onEventClick({{ $event['id'] }})" @endif
                            class="text-xs p-1 rounded {{ $event['color'] ?? 'bg-blue-500' }} text-white truncate cursor-pointer hover:opacity-80 transition-opacity duration-200"
                            title="{{ $event['title'] }} - {{ $event['description'] ?? '' }}">
                            {{ $event['title'] }}
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
