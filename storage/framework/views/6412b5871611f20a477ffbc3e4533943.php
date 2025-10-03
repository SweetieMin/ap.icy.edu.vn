
<div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden"
    <?php if($pollMillis !== null && $pollAction !== null): ?>
        wire:poll.<?php echo e($pollMillis); ?>ms="<?php echo e($pollAction); ?>"
    <?php elseif($pollMillis !== null): ?>
        wire:poll.<?php echo e($pollMillis); ?>ms
    <?php endif; ?>
>
    
    <div class="bg-white shadow-sm rounded-t-lg p-2 sm:p-4 border-b border-gray-200">
        <div class="flex items-center justify-between">
            
            <button 
                wire:click="goToPreviousMonth"
                class="flex items-center px-2 sm:px-4 py-2 sm:py-3 text-xs sm:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-pink-50 hover:border-pink-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-colors duration-200 min-h-[44px] touch-manipulation"
            >
                <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 sm:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="hidden sm:inline">Tháng trước</span>
                <span class="sm:hidden">Trước</span>
            </button>

            
            <div class="text-center flex-1 mx-2">
                <h2 class="text-lg sm:text-2xl font-semibold text-pink-600 cursor-pointer touch-manipulation" wire:click="goToCurrentMonth">
                    <?php echo e(ucwords(now()->locale('vi')->translatedFormat('l, d F Y'))); ?>

                </h2>
                <p class="text-xs sm:text-sm text-gray-500">
                    <?php echo e($startsAt->format('d/m/Y')); ?> - <?php echo e($endsAt->format('d/m/Y')); ?>

                </p>
            </div>

            
            <button 
                wire:click="goToNextMonth"
                class="flex items-center px-2 sm:px-4 py-2 sm:py-3 text-xs sm:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-pink-50 hover:border-pink-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-colors duration-200 min-h-[44px] touch-manipulation"
            >
                <span class="hidden sm:inline">Tháng sau</span>
                <span class="sm:hidden">Sau</span>
                <svg class="w-3 h-3 sm:w-4 sm:h-4 ml-1 sm:ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

    </div>

    
    <div class="bg-gradient-to-r from-pink-500 to-pink-600 text-white p-2 sm:p-4">
        <h1 class="text-lg sm:text-2xl font-bold text-center">Lịch học tập</h1>
    </div>

    
    <div>
        <?php if ($__env->exists($beforeCalendarView)) echo $__env->make($beforeCalendarView, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    
    <div class="w-full">
        <div class="overflow-x-auto">
            <div class="min-w-full sm:w-full" style="min-width: 38.5rem;">
                
                <div class="w-full flex bg-gray-50 border-b border-gray-200">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $monthGrid->first(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make($dayOfWeekView, ['day' => $day], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $monthGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $week): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="w-full flex">
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

    
    <div class="bg-pink-50 px-2 sm:px-4 py-2 sm:py-3 border-t border-pink-200">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between text-xs sm:text-sm text-gray-600 space-y-2 sm:space-y-0">
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-1 sm:space-y-0 sm:space-x-4">
                <div class="flex items-center">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-blue-500 rounded-full mr-1 sm:mr-2"></div>
                    <span class="text-xs sm:text-sm">Lịch học</span>
                </div>
                <div class="flex items-center">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-amber-500 rounded-full mr-1 sm:mr-2"></div>
                    <span class="text-xs sm:text-sm">Kiểm tra giữa kì</span>
                </div>

                <div class="flex items-center">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-rose-500 rounded-full mr-1 sm:mr-2"></div>
                    <span class="text-xs sm:text-sm">Kiểm tra cuối kì</span>
                </div>

                <div class="flex items-center">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-violet-500 rounded-full mr-1 sm:mr-2"></div>
                    <span class="text-xs sm:text-sm">Lịch họp phụ huynh</span>
                </div>
                <div class="flex items-center">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-emerald-500 rounded-full mr-1 sm:mr-2"></div>
                    <span class="text-xs sm:text-sm">Sự kiện</span>
                </div>
                
            </div>
            <div class="text-pink-600 font-medium text-xs sm:text-sm">
                Tổng: <?php echo e($events->count()); ?> sự kiện
            </div>
        </div>
    </div>

    
    <div>
        <?php if ($__env->exists($afterCalendarView)) echo $__env->make($afterCalendarView, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    
    <div>
        <?php if ($__env->exists($modalSetup)) echo $__env->make($modalSetup, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    <div>
        <?php if ($__env->exists($modalView)) echo $__env->make($modalView, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/vendor/livewire-calendar/calendar.blade.php ENDPATH**/ ?>