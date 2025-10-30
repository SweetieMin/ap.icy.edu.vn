<div ondragenter="onLivewireCalendarEventDragEnter(event, '<?php echo e($componentId); ?>', '<?php echo e($day); ?>', '<?php echo e($dragAndDropClasses); ?>');"
    ondragleave="onLivewireCalendarEventDragLeave(event, '<?php echo e($componentId); ?>', '<?php echo e($day); ?>', '<?php echo e($dragAndDropClasses); ?>');"
    ondragover="onLivewireCalendarEventDragOver(event);"
    ondrop="onLivewireCalendarEventDrop(event, '<?php echo e($componentId); ?>', '<?php echo e($day); ?>', <?php echo e($day->year); ?>, <?php echo e($day->month); ?>, <?php echo e($day->day); ?>, '<?php echo e($dragAndDropClasses); ?>');"
    class="flex-1 h-36 sm:h-44 lg:h-52 border border-pink-400 -mt-px -ml-px hover:bg-gray-400 transition-colors duration-200"
    style="flex: 1 1 0%; min-width: 5.5rem;">

    
    <div class="w-full h-full" id="<?php echo e($componentId); ?>-<?php echo e($day); ?>">

        <div <?php if($dayClickEnabled): ?> wire:click="onDayClick(<?php echo e($day->year); ?>, <?php echo e($day->month); ?>, <?php echo e($day->day); ?>)" <?php endif; ?>
            class="w-full h-full p-2 <?php echo e($dayInMonth ? ($isToday ? 'bg-pink-50 border-2 border-pink-300' : 'bg-white') : 'bg-gray-50'); ?> flex flex-col <?php echo e($dayClickEnabled ? 'cursor-pointer' : ''); ?>">

            
            <div class="flex items-center justify-between">
                <p class="text-sm sm:text-md <?php echo e($dayInMonth ? 'font-medium text-pink-600' : 'text-pink-100'); ?>">
                    <?php echo e($day->format('j')); ?>

                </p>
                <!--[if BLOCK]><![endif]--><?php if($isToday): ?>
                    <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-pink-500 rounded-full"></div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>

            
            <!--[if BLOCK]><![endif]--><?php if($events->isNotEmpty()): ?>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">
                    <span class="hidden sm:inline"><?php echo e($events->count()); ?> sự kiện</span>
                    <span class="sm:hidden"><?php echo e($events->count()); ?></span>
                </p>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            
            <div class="mt-1 sm:mt-2 flex-1 overflow-y-auto">
                <div class="space-y-0.5 sm:space-y-1">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div <?php if($dragAndDropEnabled): ?> draggable="true" <?php endif; ?>
                            ondragstart="onLivewireCalendarEventDragStart(event, '<?php echo e($event['id']); ?>')"
                            <?php if($eventClickEnabled): ?> wire:click="onEventClick(<?php echo e($event['id']); ?>)" <?php endif; ?>
                            onclick="event.stopPropagation()"
                            class="text-xs sm:text-sm p-1.5 sm:p-2 rounded <?php echo e($event['color'] ?? 'bg-blue-500'); ?> text-white truncate cursor-pointer hover:opacity-80 transition-opacity duration-200 touch-manipulation min-h-[36px] sm:min-h-[40px] flex items-center"
                            title="<?php echo e($event['title']); ?> - <?php echo e($event['description'] ?? ''); ?>">
                            <span class="truncate"><?php echo e($event['title']); ?></span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/vendor/livewire-calendar/day.blade.php ENDPATH**/ ?>