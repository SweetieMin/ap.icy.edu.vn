
<div class="relative border border-gray-200 h-32 overflow-hidden <?php echo e($dayInMonth ? 'bg-white' : 'bg-gray-50'); ?> hover:bg-gray-50 transition-colors duration-200">
    
    <div class="absolute top-1 left-2 text-sm font-medium <?php echo e($dayInMonth ? 'text-gray-900' : 'text-gray-400'); ?>">
        <?php echo e($day->day); ?>

    </div>

    
    <!--[if BLOCK]><![endif]--><?php if($isToday): ?>
        <div class="absolute top-1 right-1 w-2 h-2 bg-blue-500 rounded-full"></div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    
    <div class="mt-6 px-1 space-y-1">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="text-xs p-1 rounded <?php echo e($event['color'] ?? 'bg-blue-500'); ?> text-white truncate cursor-pointer hover:opacity-80 transition-opacity duration-200"
                 wire:click="onEventClick(<?php echo e($event['id']); ?>)"
                 title="<?php echo e($event['title']); ?> - <?php echo e($event['description'] ?? ''); ?>">
                <?php echo e($event['title']); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    
    <!--[if BLOCK]><![endif]--><?php if($dayClickEnabled): ?>
        <div class="absolute inset-0 cursor-pointer"
             wire:click="onDayClick(<?php echo e($day->year); ?>, <?php echo e($day->month); ?>, <?php echo e($day->day); ?>)">
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/dashboard/day.blade.php ENDPATH**/ ?>