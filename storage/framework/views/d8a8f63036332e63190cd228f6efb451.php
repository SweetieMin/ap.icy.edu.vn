<div>

    <div class="theme-card-pink mt-4 mb-4">
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div>
                    <label class="card-label">Tìm kiếm</label>
                    <input type="text" wire:model.live="search" placeholder="Tìm theo họ và tên hoặc Account code..."
                        class="card-input">
                </div>

                <div>
                    <label class="card-label">Lớp</label>
                    <select wire:model.live="filterCourseId" class="card-input">
                        <option value="">Tất cả lớp</option>
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($course->id); ?>"><?php echo e($course->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

            </div>

        </div>
    </div>

    <div class="theme-table-pink">
        <div class="hidden md:block overflow-x-auto">
            <table style="table-layout: fixed; width: 100%;">
                <thead>
                    <tr>
                        <th class="text-center">Ngày vắng</th>
                        <th class="text-center">Họ và tên</th>
                        <th class="text-center">Lớp</th>
                        <th class="text-center">Phản hồi HV/PH</th>
                        <th class="text-center">Người liên hệ</th>
                        <th class="text-center">Thời gian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $studentsCareHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $studentCareHistory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><?php echo e($studentCareHistory->attendance->date); ?></td>
                            <td class="text-center"><?php echo e($studentCareHistory->attendance->student->name); ?></td>
                            <td class="text-center"><?php echo e($studentCareHistory->attendance->classSchedule->course->name); ?>

                            </td>
                            <td class="text-center">
                                <?php if($studentCareHistory->status === 'success'): ?>
                                    <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">
                                        <?php echo e($studentCareHistory->parent_response); ?>

                                    </span>
                                <?php else: ?>
                                    <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">
                                        <?php echo e($studentCareHistory->note); ?>

                                    </span>
                                <?php endif; ?>

                            </td>
                            <td class="text-center"><?php echo e($studentCareHistory->implementer->name); ?></td>
                            <td class="text-center hidden 2xl:table-cell">
                                <div class="flex flex-col">
                                    <span class="font-medium"><?php echo e($studentCareHistory->created_at_date); ?></span>
                                    <span class="text-xs"><?php echo e($studentCareHistory->created_at_time); ?></span>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        
        <div class="md:hidden space-y-3">
            <?php $__empty_1 = true; $__currentLoopData = $studentsCareHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-3">
                    <div class="flex items-center space-x-3">
                        <img class="h-10 w-10 rounded-full object-cover flex-shrink-0"
                            src="<?php echo e($history->attendance->student?->detail?->avatar ?? asset('images/default-avatar.png')); ?>"
                            alt="<?php echo e($history->attendance->student?->name); ?>">
                        <div class="flex-1 min-w-0">
                            <div class="font-medium text-gray-900 dark:text-white text-sm truncate">
                                <?php echo e($history->attendance->student?->name); ?></div>
                            <div class="text-xs text-gray-500 dark:text-gray-400 truncate">
                                <?php echo e($history->attendance->classSchedule?->course?->name); ?></div>
                        </div>
                        <div class="text-right">
                            <div class="text-xs text-gray-600 dark:text-gray-400"><?php echo e($history->attendance->date); ?>

                            </div>
                            <div class="text-[10px] text-gray-500"><?php echo e($history->created_at); ?></div>
                        </div>
                    </div>
                    <div class="mt-3 text-xs text-gray-700 dark:text-gray-300">
                        Trạng thái: <span class="font-medium"><?php echo e($history->status); ?></span>
                    </div>
                    <?php if($history->parent_response): ?>
                        <div class="mt-1 text-xs text-gray-600 dark:text-gray-400">
                            PH: <?php echo e($history->parent_response); ?>

                        </div>
                    <?php endif; ?>
                    <div class="mt-2 text-xs text-gray-600 dark:text-gray-400">
                        Người LH: <?php echo e($history->implementer?->name); ?>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="text-center py-8 text-gray-500">Chưa có lịch sử chăm sóc</div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/personnel/service/students-care-history.blade.php ENDPATH**/ ?>