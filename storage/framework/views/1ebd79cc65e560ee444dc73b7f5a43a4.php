<div>
    <div class="theme-table-pink">
        
        <div class="hidden md:block overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th>Lớp</th>
                        <th>Ngày</th>
                        <th>Môn</th>
                        <th>Phòng</th>
                        <th>Ca học</th>
                        <th class="text-center">Điểm danh</th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $todaySchedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr wire:key="schedule-desktop-<?php echo e($schedule['id']); ?>">
                            <td class="whitespace-nowrap font-medium">
                                <?php echo e($schedule['course_name']); ?>

                            </td>
                            <td>
                                <?php echo e($schedule['date']); ?>

                            </td>
                            <td>
                                <?php echo e($schedule['subject_name']); ?>

                            </td>
                            <td>
                                <?php echo e($schedule['room'] ?? 'Chưa xác định'); ?>

                            </td>
                            <td>
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium <?php echo e($schedule['shift_color']); ?>">
                                    <?php echo e($schedule['shift_name']); ?>

                                </span>
                            </td>
                            <td class="whitespace-nowrap text-center">
                                <?php
                                    $currentTime = now();
                                    $startTime = \Carbon\Carbon::parse($schedule['start_time']);
                                    $endTime = \Carbon\Carbon::parse($schedule['end_time'])->addMinutes(30);
                                    $isInTime = $currentTime->between($startTime, $endTime);
                                    $isPast = $currentTime->gt($endTime);
                                ?>

                                <!--[if BLOCK]><![endif]--><?php if($isPast): ?>
                                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['variant' => 'primary','color' => 'gray','icon' => 'x-mark','disabled' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','color' => 'gray','icon' => 'x-mark','disabled' => true]); ?>Đã kết thúc <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                <?php elseif($isInTime): ?>
                                    <!--[if BLOCK]><![endif]--><?php if($schedule['has_attendance'] ?? false): ?>
                                        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['wire:click' => 'attendance('.e($schedule['id']).',\'view\')','variant' => 'primary','color' => 'zinc','icon' => 'eye']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'attendance('.e($schedule['id']).',\'view\')','variant' => 'primary','color' => 'zinc','icon' => 'eye']); ?>Xem <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['wire:click' => 'attendance('.e($schedule['id']).',\'edit\')','variant' => 'primary','color' => 'blue','icon' => 'pencil']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'attendance('.e($schedule['id']).',\'edit\')','variant' => 'primary','color' => 'blue','icon' => 'pencil']); ?>Chỉnh sửa <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                    <?php else: ?>
                                        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['wire:click' => 'attendance('.e($schedule['id']).',\'create\')','variant' => 'primary','color' => 'green','icon' => 'check']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'attendance('.e($schedule['id']).',\'create\')','variant' => 'primary','color' => 'green','icon' => 'check']); ?>Điểm danh <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php else: ?>
                                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['disabled' => true,'variant' => 'primary','color' => 'blue','icon' => 'clock']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['disabled' => true,'variant' => 'primary','color' => 'blue','icon' => 'clock']); ?>Chưa đến giờ <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="px-6 py-8">
                                <div class="empty-state flex flex-col items-center">
                                    <?php if (isset($component)) { $__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.calendar','data' => ['class' => 'w-8 h-8 mb-2 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.calendar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 mb-2 text-gray-400']); ?>
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
                                    <div class="text-sm text-gray-500">Không có lịch dạy hôm nay</div>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>

        
        <div class="md:hidden space-y-3">
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $todaySchedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm" x-data="{ expanded: false }"
                    wire:key="schedule-mobile-<?php echo e($schedule['id']); ?>">

                    
                    <div class="p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-8 h-8 <?php echo e($this->getShiftIconColor($schedule['shift'])); ?> rounded-full flex items-center justify-center">
                                <?php if (isset($component)) { $__componentOriginale0880cb6488d85d9ca54288aa080a834 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0880cb6488d85d9ca54288aa080a834 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.academic-cap','data' => ['class' => 'w-4 h-4 '.e($this->getShiftIconTextColor($schedule['shift'])).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 '.e($this->getShiftIconTextColor($schedule['shift'])).'']); ?>
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
                                <div class="font-medium text-gray-900">
                                    <?php echo e($schedule['schedule_name'] ?? $schedule['course_name']); ?></div>
                                <div class="text-sm text-gray-500"><?php echo e($schedule['room'] ?? 'Chưa xác định'); ?></div>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium <?php echo e($schedule['shift_color']); ?>">
                                <?php echo e($schedule['shift_name']); ?>

                            </span>

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
                                <span class="text-sm font-medium text-gray-600">Ngày:</span>
                                <span class="text-sm text-gray-900"><?php echo e($schedule['date']); ?></span>
                            </div>

                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Tên lịch học:</span>
                                <span
                                    class="text-sm text-gray-900"><?php echo e($schedule['schedule_name'] ?? $schedule['course_name']); ?></span>
                            </div>

                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Môn học:</span>
                                <span class="text-sm text-gray-900"><?php echo e($schedule['course_name']); ?></span>
                            </div>

                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Phòng:</span>
                                <span class="text-sm text-gray-900"><?php echo e($schedule['room'] ?? 'Chưa xác định'); ?></span>
                            </div>

                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Ca học:</span>
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium <?php echo e($schedule['shift_color']); ?>">
                                    <?php echo e($schedule['shift_name']); ?>

                                </span>
                            </div>

                            
                            <div class="pt-3 border-t border-gray-200">
                                <?php
                                    $currentTime = now();
                                    $startTime = \Carbon\Carbon::parse($schedule['start_time']);
                                    $endTime = \Carbon\Carbon::parse($schedule['end_time'])->addMinutes(30);
                                    $isInTime = $currentTime->between($startTime, $endTime);
                                    $isPast = $currentTime->gt($endTime);
                                ?>

                                <!--[if BLOCK]><![endif]--><?php if($isPast): ?>
                                    <button
                                        class="w-full bg-gray-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700 transition-colors flex items-center justify-center space-x-2">
                                        <?php if (isset($component)) { $__componentOriginal4a4fffe04433d6d6be16f26ad2650578 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a4fffe04433d6d6be16f26ad2650578 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.clock','data' => ['class' => 'w-4 h-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.clock'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a4fffe04433d6d6be16f26ad2650578)): ?>
<?php $attributes = $__attributesOriginal4a4fffe04433d6d6be16f26ad2650578; ?>
<?php unset($__attributesOriginal4a4fffe04433d6d6be16f26ad2650578); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a4fffe04433d6d6be16f26ad2650578)): ?>
<?php $component = $__componentOriginal4a4fffe04433d6d6be16f26ad2650578; ?>
<?php unset($__componentOriginal4a4fffe04433d6d6be16f26ad2650578); ?>
<?php endif; ?>
                                        <span>Đã kết thúc</span>
                                    </button>
                                <?php elseif($isInTime): ?>
                                    <!--[if BLOCK]><![endif]--><?php if($schedule['has_attendance'] ?? false): ?>
                                        <button wire:click="attendance(<?php echo e($schedule['id']); ?>,'view')"
                                            class="mb-1 w-full bg-zinc-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-zinc-700 transition-colors flex items-center justify-center space-x-2">
                                            <?php if (isset($component)) { $__componentOriginal2e57535a42d25d5415c31aa83132341b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e57535a42d25d5415c31aa83132341b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.eye','data' => ['class' => 'w-4 h-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.eye'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e57535a42d25d5415c31aa83132341b)): ?>
<?php $attributes = $__attributesOriginal2e57535a42d25d5415c31aa83132341b; ?>
<?php unset($__attributesOriginal2e57535a42d25d5415c31aa83132341b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e57535a42d25d5415c31aa83132341b)): ?>
<?php $component = $__componentOriginal2e57535a42d25d5415c31aa83132341b; ?>
<?php unset($__componentOriginal2e57535a42d25d5415c31aa83132341b); ?>
<?php endif; ?>
                                            <span>Xem</span>
                                        </button>
                                        <button wire:click="attendance(<?php echo e($schedule['id']); ?>,'edit')"
                                            class="w-full bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                            <?php if (isset($component)) { $__componentOriginal705476da9d14ff3395b29ab1ba7e5e06 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal705476da9d14ff3395b29ab1ba7e5e06 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.pencil','data' => ['class' => 'w-4 h-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.pencil'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal705476da9d14ff3395b29ab1ba7e5e06)): ?>
<?php $attributes = $__attributesOriginal705476da9d14ff3395b29ab1ba7e5e06; ?>
<?php unset($__attributesOriginal705476da9d14ff3395b29ab1ba7e5e06); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal705476da9d14ff3395b29ab1ba7e5e06)): ?>
<?php $component = $__componentOriginal705476da9d14ff3395b29ab1ba7e5e06; ?>
<?php unset($__componentOriginal705476da9d14ff3395b29ab1ba7e5e06); ?>
<?php endif; ?>
                                            <span>Chỉnh sửa</span>
                                        </button>
                                    <?php else: ?>
                                        <button wire:click="attendance(<?php echo e($schedule['id']); ?>,'create')"
                                            class="w-full bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700 transition-colors flex items-center justify-center space-x-2">
                                            <?php if (isset($component)) { $__componentOriginal9c2dfd6cb98f4df18e26d1694500af11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c2dfd6cb98f4df18e26d1694500af11 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.check','data' => ['class' => 'w-4 h-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9c2dfd6cb98f4df18e26d1694500af11)): ?>
<?php $attributes = $__attributesOriginal9c2dfd6cb98f4df18e26d1694500af11; ?>
<?php unset($__attributesOriginal9c2dfd6cb98f4df18e26d1694500af11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c2dfd6cb98f4df18e26d1694500af11)): ?>
<?php $component = $__componentOriginal9c2dfd6cb98f4df18e26d1694500af11; ?>
<?php unset($__componentOriginal9c2dfd6cb98f4df18e26d1694500af11); ?>
<?php endif; ?>
                                            <span>Điểm danh</span>
                                        </button>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php else: ?>
                                    <button
                                        class="w-full bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                        <span>Chưa đến giờ</span>
                                    </button>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="bg-white rounded-lg border border-gray-200 p-8">
                    <div class="empty-state flex flex-col items-center">
                        <?php if (isset($component)) { $__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.calendar','data' => ['class' => 'w-8 h-8 mb-2 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.calendar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 mb-2 text-gray-400']); ?>
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
                        <div class="text-sm text-gray-500">Không có lịch dạy hôm nay</div>
                    </div>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/general/course/schedule-courses.blade.php ENDPATH**/ ?>