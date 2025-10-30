<div
    @if($eventClickEnabled)
        wire:click.stop="onEventClick('{{ $event['id']  }}')"
    @endif
    class="bg-white rounded-lg border py-2 sm:py-3 px-2 sm:px-3 shadow-md cursor-pointer touch-manipulation min-h-[44px]">

    <p class="text-xs sm:text-sm font-medium">
        {{ $event['title'] }}
    </p>
    <p class="mt-1 sm:mt-2 text-xs">
        {{ $event['description'] ?? 'No description' }}
    </p>
</div>
