<div
    <?php if($pollMillis !== null && $pollAction !== null): ?>
        wire:poll.<?php echo e($pollMillis); ?>ms="<?php echo e($pollAction); ?>"
    <?php elseif($pollMillis !== null): ?>
        wire:poll.<?php echo e($pollMillis); ?>ms
    <?php endif; ?>
>
    <div>
        <?php if ($__env->exists($beforeCalendarView)) echo $__env->make($beforeCalendarView, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    <div class="flex">
        <div class="overflow-x-auto w-full">
            <div class="inline-block min-w-full overflow-hidden">

                <div class="w-full flex flex-row">
                    <?php $__currentLoopData = $monthGrid->first(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make($dayOfWeekView, ['day' => $day], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php $__currentLoopData = $monthGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $week): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="w-full flex flex-row">
                        <?php $__currentLoopData = $week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make($dayView, [
                                    'componentId' => $componentId,
                                    'day' => $day,
                                    'dayInMonth' => $day->isSameMonth($startsAt),
                                    'isToday' => $day->isToday(),
                                    'events' => $getEventsForDay($day, $events),
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <div>
        <?php if ($__env->exists($afterCalendarView)) echo $__env->make($afterCalendarView, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/vendor/omnia-digital/livewire-calendar/resources/views/calendar.blade.php ENDPATH**/ ?>