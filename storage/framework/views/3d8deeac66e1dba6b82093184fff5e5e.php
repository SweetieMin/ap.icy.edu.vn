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

                <div>
                    <label class="card-label">Trạng thái</label>
                    <select wire:model.live="filterStatus" class="card-input">
                        <option value="">Tất cả</option>
                        <option value="success">Thành công</option>
                        <option value="not_contact">Chưa liên hệ</option>
                        <option value="no_answer">Không nghe máy</option>
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
                        <th>Họ và tên</th>
                        <th class="text-center">Lớp</th>
                        <th class="text-center">Ngày vắng</th>
                        <th class="text-center">Trạng thái</th>
                        <th class="text-center">SĐT Học viên/PH</th>
                        <th class="text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $listStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <div class="flex items-center gap-3">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="<?php echo e($attendance->student?->detail?->avatar ?? asset('images/default-avatar.png')); ?>"
                                        alt="<?php echo e($attendance->student?->name); ?>">
                                    <div>
                                        <div class="font-medium"><?php echo e($attendance->student?->name); ?></div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                            <?php echo e($attendance->student?->account_code); ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <?php echo e($attendance->classSchedule?->course?->name ?? '—'); ?>

                            </td>
                            <td class="text-center">
                                <?php echo e($attendance->date); ?>

                            </td>
                            <td class="text-center">
                                <span
                                    class="px-2 py-1 text-xs rounded-full <?php echo e($attendance->studentCareStatusColor()); ?>">
                                    <?php echo e($attendance->studentCareStatus()); ?>

                                </span>
                            </td>
                            <td class="text-center">
                                <?php echo e($attendance->student?->detail?->phone ?? '—'); ?> / <?php echo e($attendance->student?->detail?->guardian_phone ?? '—'); ?>

                            </td>
                            <td class="text-center">
                                <?php if($attendance->student_care_status !== 'success'): ?>
                                    <div class="flex items-center justify-center gap-2">
                                        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'xs','variant' => 'primary','wire:click' => 'showStudentCareModal('.e($attendance->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'xs','variant' => 'primary','wire:click' => 'showStudentCareModal('.e($attendance->id).')']); ?>Chăm sóc
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="text-center py-6 text-gray-500">Không có dữ liệu</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        
        <div class="md:hidden space-y-3">
            <?php $__empty_1 = true; $__currentLoopData = $listStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-3">
                    <div class="flex items-center space-x-3">
                        <img class="h-10 w-10 rounded-full object-cover flex-shrink-0"
                            src="<?php echo e($attendance->student?->detail?->avatar ?? asset('images/default-avatar.png')); ?>"
                            alt="<?php echo e($attendance->student?->name); ?>">
                        <div class="flex-1 min-w-0">
                            <div class="font-medium text-gray-900 dark:text-white text-sm truncate"><?php echo e($attendance->student?->name); ?></div>
                            <div class="text-xs text-gray-500 dark:text-gray-400 truncate"><?php echo e($attendance->classSchedule?->course?->name ?? '—'); ?></div>
                        </div>
                        <div class="text-right">
                            <div class="text-xs text-gray-600 dark:text-gray-400"><?php echo e($attendance->date); ?></div>
                            <div class="mt-1">
                                <span class="px-2 py-0.5 text-[10px] rounded-full <?php echo e($attendance->studentCareStatusColor()); ?>"><?php echo e($attendance->studentCareStatus()); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 flex items-center justify-between">
                        <div class="text-xs text-gray-600 dark:text-gray-400">
                            <?php echo e($attendance->student?->detail?->phone ?? '—'); ?>/<?php echo e($attendance->student?->parent?->detail?->phone ?? '—'); ?>

                        </div>
                        <?php if($attendance->student_care_status !== 'success'): ?>
                            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','variant' => 'primary','wire:click' => 'showStudentCareModal('.e($attendance->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'primary','wire:click' => 'showStudentCareModal('.e($attendance->id).')']); ?>Chăm sóc <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="text-center py-8 text-gray-500">Không có dữ liệu</div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/personnel/service/absent-students.blade.php ENDPATH**/ ?>