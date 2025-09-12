
<div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden"
    <?php if($pollMillis !== null && $pollAction !== null): ?>
        wire:poll.<?php echo e($pollMillis); ?>ms="<?php echo e($pollAction); ?>"
    <?php elseif($pollMillis !== null): ?>
        wire:poll.<?php echo e($pollMillis); ?>ms
    <?php endif; ?>
>
    
    <div class="bg-white shadow-sm rounded-t-lg p-4 border-b border-gray-200">
        <div class="flex items-center justify-between">
            
            <button 
                wire:click="goToPreviousMonth"
                class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-pink-50 hover:border-pink-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-colors duration-200"
            >
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Tháng trước
            </button>

            
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-pink-600 cursor-pointer" wire:click="goToCurrentMonth">
                    <?php echo e(ucwords(now()->locale('vi')->translatedFormat('l, d F Y'))); ?>

                </h2>
                <p class="text-sm text-gray-500">
                    <?php echo e($startsAt->format('d/m/Y')); ?> - <?php echo e($endsAt->format('d/m/Y')); ?>

                </p>
            </div>

            
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

    
    <div class="bg-gradient-to-r from-pink-500 to-pink-600 text-white p-4">
        <h1 class="text-2xl font-bold text-center">Lịch học tập</h1>
    </div>

    
    <div>
        <?php if ($__env->exists($beforeCalendarView)) echo $__env->make($beforeCalendarView, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    
    <div class="flex">
        <div class="overflow-x-auto w-full">
            <div class="inline-block min-w-full overflow-hidden">
                
                <div class="w-full flex flex-row bg-gray-50 border-b border-gray-200">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $monthGrid->first(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make($dayOfWeekView, ['day' => $day], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $monthGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $week): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="w-full flex flex-row">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make($dayView, [
                                    'componentId' => $componentId,
                                    'day' => $day,
                                    'dayInMonth' => $day->isSameMonth($startsAt),
                                    'isToday' => $day->isToday(),
                                    'events' => $getEventsForDay($day, $events),
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>

    
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
                Tổng: <?php echo e($events->count()); ?> sự kiện
            </div>
        </div>
    </div>

    
    <div>
        <?php if ($__env->exists($afterCalendarView)) echo $__env->make($afterCalendarView, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/vendor/livewire-calendar/calendar.blade.php ENDPATH**/ ?>