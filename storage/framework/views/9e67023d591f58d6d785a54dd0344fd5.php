<div>
    <div class="theme-header-pink mb-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-3 sm:space-y-0">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-pink-100 dark:bg-pink-900 rounded-lg flex items-center justify-center">
                    <?php if (isset($component)) { $__componentOriginale0880cb6488d85d9ca54288aa080a834 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0880cb6488d85d9ca54288aa080a834 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.academic-cap','data' => ['class' => 'w-5 h-5 text-pink-600 dark:text-pink-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-pink-600 dark:text-pink-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0880cb6488d85d9ca54288aa080a834)): ?>
<?php $attributes = $__attributesOriginale0880cb6488d85d9ca54288aa080a834; ?>
<?php unset($__attributesOriginale0880cb6488d85d9ca54288aa080a834); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0880cb6488d85d9ca54288aa080a834)): ?>
<?php $component = $__componentOriginale0880cb6488d85d9ca54288aa080a834; ?>
<?php unset($__componentOriginale0880cb6488d85d9ca54288aa080a834); ?>
<?php endif; ?>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Mã lớp: <?php echo e($course->name); ?></h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Môn: <?php echo e($course->subject->name ?? 'Chưa xác định'); ?></p>
                </div>
            </div>
            <div class="flex items-center space-x-4 text-sm">
                <div class="flex items-center space-x-2">
                    <?php if (isset($component)) { $__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.calendar','data' => ['class' => 'w-4 h-4 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.calendar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db)): ?>
<?php $attributes = $__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db; ?>
<?php unset($__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db)): ?>
<?php $component = $__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db; ?>
<?php unset($__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db); ?>
<?php endif; ?>
                    <span class="text-gray-600 dark:text-gray-400">Mùa học: <?php echo e($course->season->name); ?></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="theme-table-pink">
        
        <div class="hidden md:block overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th class="text-center">STT</th>
                        <th >Họ và tên</th>
                        <th class="text-center">Số điện thoại</th>
                        <th class="text-center">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $classStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($i + 1); ?></td>
                            <td >
                                <div class="flex items-center gap-3">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="<?php echo e($student->detail?->avatar ?? asset('images/default-avatar.png')); ?>"
                                        alt="<?php echo e($student->name); ?>">
                                    <div>
                                        <div class="font-medium"><?php echo e($student->name); ?></div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                            <?php echo e($student->account_code); ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><?php echo e($student->detail->phone); ?></td>
                            <td class="text-center"><?php echo e($student->email); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="text-center">Không có học viên</td>
                        </tr>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>

        
        <div class="md:hidden space-y-3">

        </div>
    </div>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/general/course/list-student.blade.php ENDPATH**/ ?>