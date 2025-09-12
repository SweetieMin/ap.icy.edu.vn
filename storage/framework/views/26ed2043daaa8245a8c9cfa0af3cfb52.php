<div ondragenter="onLivewireCalendarEventDragEnter(event, '<?php echo e($componentId); ?>', '<?php echo e($day); ?>', '<?php echo e($dragAndDropClasses); ?>');"
    ondragleave="onLivewireCalendarEventDragLeave(event, '<?php echo e($componentId); ?>', '<?php echo e($day); ?>', '<?php echo e($dragAndDropClasses); ?>');"
    ondragover="onLivewireCalendarEventDragOver(event);"
    ondrop="onLivewireCalendarEventDrop(event, '<?php echo e($componentId); ?>', '<?php echo e($day); ?>', <?php echo e($day->year); ?>, <?php echo e($day->month); ?>, <?php echo e($day->day); ?>, '<?php echo e($dragAndDropClasses); ?>');"
    class="flex-1 h-40 lg:h-48 border border-pink-400 -mt-px -ml-px hover:bg-gray-400 transition-colors duration-200"
    style="min-width: 10rem;">

    
    <div class="w-full h-full" id="<?php echo e($componentId); ?>-<?php echo e($day); ?>">

        <div <?php if($dayClickEnabled): ?> wire:click="onDayClick(<?php echo e($day->year); ?>, <?php echo e($day->month); ?>, <?php echo e($day->day); ?>)" <?php endif; ?>
            class="w-full h-full p-2 <?php echo e($dayInMonth ? ($isToday ? 'bg-pink-50 border-2 border-pink-300' : 'bg-white') : 'bg-gray-50'); ?> flex flex-col <?php echo e($dayClickEnabled ? 'cursor-pointer' : ''); ?>">

            
            <div class="flex items-center justify-between">
                <p class="text-sm <?php echo e($dayInMonth ? 'font-medium text-gray-900' : 'text-gray-400'); ?>">
                    <?php echo e($day->format('j')); ?>

                </p>
                <!--[if BLOCK]><![endif]--><?php if($isToday): ?>
                    <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>

            
            <!--[if BLOCK]><![endif]--><?php if($events->isNotEmpty()): ?>
                <p class="text-xs text-gray-500 mt-1">
                    <?php echo e($events->count()); ?> sự kiện
                </p>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            
            <div class="mt-2 flex-1 overflow-y-auto">
                <div class="space-y-1">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div <?php if($dragAndDropEnabled): ?> draggable="true" <?php endif; ?>
                            ondragstart="onLivewireCalendarEventDragStart(event, '<?php echo e($event['id']); ?>')"
                            <?php if($eventClickEnabled): ?> wire:click="onEventClick(<?php echo e($event['id']); ?>)" <?php endif; ?>
                            onclick="event.stopPropagation()"
                            class="text-xs p-1 rounded <?php echo e($event['color'] ?? 'bg-blue-500'); ?> text-white truncate cursor-pointer hover:opacity-80 transition-opacity duration-200"
                            title="<?php echo e($event['title']); ?> - <?php echo e($event['description'] ?? ''); ?>">
                            <?php echo e($event['title']); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/vendor/livewire-calendar/day.blade.php ENDPATH**/ ?>