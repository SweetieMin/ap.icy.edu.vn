<div
    <?php if($eventClickEnabled): ?>
        wire:click.stop="onEventClick('<?php echo e($event['id']); ?>')"
    <?php endif; ?>
    class="bg-white rounded-lg border py-2 sm:py-3 px-2 sm:px-3 shadow-md cursor-pointer touch-manipulation min-h-[44px]">

    <p class="text-xs sm:text-sm font-medium">
        <?php echo e($event['title']); ?>

    </p>
    <p class="mt-1 sm:mt-2 text-xs">
        <?php echo e($event['description'] ?? 'No description'); ?>

    </p>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/vendor/livewire-calendar/event.blade.php ENDPATH**/ ?>