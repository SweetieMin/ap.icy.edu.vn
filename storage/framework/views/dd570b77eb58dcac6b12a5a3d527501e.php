
<div class="bg-white shadow-sm rounded-lg p-4 mb-6">
    <div class="flex items-center justify-between">
        
        <button 
            wire:click="goToPreviousMonth"
            class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"
        >
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Tháng trước
        </button>

        
        <div class="text-center">
            <h2 class="text-xl font-semibold text-gray-900">
                <?php echo e($startsAt->format('F Y')); ?>

            </h2>
            <p class="text-sm text-gray-500">
                <?php echo e($startsAt->format('d/m/Y')); ?> - <?php echo e($endsAt->format('d/m/Y')); ?>

            </p>
        </div>

        
        <button 
            wire:click="goToNextMonth"
            class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"
        >
            Tháng sau
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>

    
    <div class="flex justify-center mt-4">
        <button 
            wire:click="goToCurrentMonth"
            class="px-6 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"
        >
            <svg class="w-4 h-4 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            Hôm nay
        </button>
    </div>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/dashboard/calendar-controls.blade.php ENDPATH**/ ?>