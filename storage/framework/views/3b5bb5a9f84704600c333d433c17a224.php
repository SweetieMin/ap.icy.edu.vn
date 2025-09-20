<div>
    <div class="theme-table-pink">
        
        <div class="hidden md:block overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th class="text-center">STT</th>
                        <th class="text-center">Mùa</th>

                        <th class="text-center">Lớp</th>
                        <th class="text-center">Môn</th>
                        <th class="text-center">Danh sách học viên</th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr wire:key="course-desktop-<?php echo e($course->id); ?>">
                            <td class="whitespace-nowrap font-medium text-center">
                                <?php echo e($i + 1); ?>

                            </td>
                            <td class="whitespace-nowrap font-medium text-center">
                                <?php echo e($course->season->name); ?>

                            </td>
                            <td class="whitespace-nowrap font-medium text-center">
                                <?php echo e($course->name); ?>

                            </td>
                            <td class="whitespace-nowrap font-medium text-center">
                                <?php echo e($course->subject->name ?? 'Chưa xác định'); ?>

                            </td>

                            <td class="whitespace-nowrap font-medium text-center">
                                <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['variant' => 'primary','icon' => 'user-group','color' => 'blue','wire:click' => 'showClassList('.e($course->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','icon' => 'user-group','color' => 'blue','wire:click' => 'showClassList('.e($course->id).')']); ?>Xem danh sách <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr class="text-center">
                            <td colspan="5" class="px-6 py-8">
                                <div class="empty-state flex flex-col items-center">
                                    <?php if (isset($component)) { $__componentOriginale0880cb6488d85d9ca54288aa080a834 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0880cb6488d85d9ca54288aa080a834 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.academic-cap','data' => ['class' => 'w-8 h-8 mb-2 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 mb-2 text-gray-400']); ?>
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
                                    <div class="text-sm text-gray-500">Bạn chưa có lớp nào trong season hiện tại</div>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>

        
        <div class="md:hidden space-y-3">
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm" x-data="{ expanded: false }"
                    wire:key="course-mobile-<?php echo e($course->id); ?>">

                    
                    <div class="p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                <?php if (isset($component)) { $__componentOriginale0880cb6488d85d9ca54288aa080a834 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0880cb6488d85d9ca54288aa080a834 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.academic-cap','data' => ['class' => 'w-4 h-4 text-purple-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-purple-600']); ?>
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
                                <div class="font-medium text-gray-900"><?php echo e($course->subject->name ?? 'Chưa xác định'); ?>

                                </div>
                                <div class="text-sm text-gray-500"><?php echo e($course->name); ?></div>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <span class="text-sm font-medium text-gray-600">#<?php echo e($i + 1); ?></span>

                            <button @click="expanded = !expanded" class="p-2 rounded-full hover:bg-gray-100">
                                <svg class="w-5 h-5 text-gray-400" :class="{ 'rotate-180': expanded }" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    
                    <div x-show="expanded" class="border-t border-gray-100 bg-gray-50">

                        <div class="p-4 space-y-3">
                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">STT:</span>
                                <span class="text-sm text-gray-900"><?php echo e($i + 1); ?></span>
                            </div>

                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Mùa học:</span>
                                <span class="text-sm text-gray-900"><?php echo e($course->season->name); ?></span>
                            </div>

                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Môn học:</span>
                                <span
                                    class="text-sm text-gray-900"><?php echo e($course->subject->name ?? 'Chưa xác định'); ?></span>
                            </div>

                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Lớp:</span>
                                <span class="text-sm text-gray-900"><?php echo e($course->name); ?></span>
                            </div>

                            
                            <div class="pt-3 border-t border-gray-200">
                                <button wire:click="showClassList(<?php echo e($course->id); ?>)"
                                        class="w-full bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                    <?php if (isset($component)) { $__componentOriginaldeeed84ca4f29f425b89c454233ef87a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldeeed84ca4f29f425b89c454233ef87a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.user-group','data' => ['class' => 'w-4 h-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.user-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldeeed84ca4f29f425b89c454233ef87a)): ?>
<?php $attributes = $__attributesOriginaldeeed84ca4f29f425b89c454233ef87a; ?>
<?php unset($__attributesOriginaldeeed84ca4f29f425b89c454233ef87a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldeeed84ca4f29f425b89c454233ef87a)): ?>
<?php $component = $__componentOriginaldeeed84ca4f29f425b89c454233ef87a; ?>
<?php unset($__componentOriginaldeeed84ca4f29f425b89c454233ef87a); ?>
<?php endif; ?>
                                    <span>Xem danh sách học viên</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="bg-white rounded-lg border border-gray-200 p-8">
                    <div class="empty-state flex flex-col items-center">
                        <?php if (isset($component)) { $__componentOriginale0880cb6488d85d9ca54288aa080a834 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0880cb6488d85d9ca54288aa080a834 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.academic-cap','data' => ['class' => 'w-8 h-8 mb-2 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 mb-2 text-gray-400']); ?>
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
                        <div class="text-sm text-gray-500">Bạn chưa có lớp nào trong season hiện tại</div>
                    </div>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>

</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/general/course/my-courses.blade.php ENDPATH**/ ?>