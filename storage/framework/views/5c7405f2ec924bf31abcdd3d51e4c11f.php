
<?php if (isset($component)) { $__componentOriginal8cc9d3143946b992b324617832699c5f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8cc9d3143946b992b324617832699c5f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::modal.index','data' => ['wire:ignore.self' => true,'name' => 'view-event','class' => 'md:w-150']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:ignore.self' => true,'name' => 'view-event','class' => 'md:w-150']); ?>
    <div class="space-y-6">
        
        <div>
            <?php if (isset($component)) { $__componentOriginale0fd5b6a0986beffac17a0a103dfd7b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0fd5b6a0986beffac17a0a103dfd7b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::heading','data' => ['size' => 'lg','class' => 'font-semibold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'lg','class' => 'font-semibold']); ?><?php echo e($eventName ?? 'Lịch học'); ?> <?php echo e($courseName ?? ''); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0fd5b6a0986beffac17a0a103dfd7b9)): ?>
<?php $attributes = $__attributesOriginale0fd5b6a0986beffac17a0a103dfd7b9; ?>
<?php unset($__attributesOriginale0fd5b6a0986beffac17a0a103dfd7b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0fd5b6a0986beffac17a0a103dfd7b9)): ?>
<?php $component = $__componentOriginale0fd5b6a0986beffac17a0a103dfd7b9; ?>
<?php unset($__componentOriginale0fd5b6a0986beffac17a0a103dfd7b9); ?>
<?php endif; ?>
        </div>

        
        <div class="rounded-2xl border border-blue-200 bg-blue-600/90 p-4 shadow-sm dark:border-blue-900/40 dark:bg-blue-700/80">
            <div class="space-y-4">
                
                <div class="grid grid-cols-2 gap-4">
                    
                    <div class="rounded-2xl bg-white p-4 shadow-sm dark:bg-stone-950">
                        <p class="text-[11px] uppercase tracking-wide text-gray-500">Ngày</p>
                        <p class="mt-1 text-base font-semibold text-gray-900 dark:text-gray-100">
                            <!--[if BLOCK]><![endif]--><?php if(!empty($selectedDate)): ?>
                                <?php echo e($selectedDate instanceof \Carbon\Carbon ? $selectedDate->format('d/m/Y') : (is_string($selectedDate) ? \Carbon\Carbon::parse($selectedDate)->format('d/m/Y') : now()->format('d/m/Y'))); ?>

                            <?php else: ?>
                                <?php echo e(now()->format('d/m/Y')); ?>

                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </p>
                    </div>

                    
                    <div class="rounded-2xl bg-white p-4 shadow-sm dark:bg-stone-950">
                        <p class="text-[11px] uppercase tracking-wide text-gray-500">Thời gian</p>
                        <p class="mt-1 text-base font-semibold text-gray-900 dark:text-gray-100">
                            <?php echo e($startTime ?? '--:--'); ?> - <?php echo e($endTime ?? '--:--'); ?>

                        </p>
                    </div>
                </div>

                
                <div class="grid grid-cols-2 gap-4">
                    
                    <div class="rounded-2xl bg-white p-4 shadow-sm dark:bg-stone-950">
                        <p class="text-[11px] uppercase tracking-wide text-gray-500">Địa điểm</p>
                        <p class="mt-1 text-base font-semibold text-gray-900 dark:text-gray-100">
                            <?php echo e($roomName ?? 'Chưa có'); ?>

                        </p>
                    </div>

                    
                    <div class="rounded-2xl bg-white p-4 shadow-sm dark:bg-stone-950">
                        <p class="text-[11px] uppercase tracking-wide text-gray-500">Giáo viên</p>
                        <p class="mt-1 text-base font-semibold text-gray-900 dark:text-gray-100">
                            <?php echo e($teacherName ?? ''); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="flex justify-end">
            <?php if (isset($component)) { $__componentOriginalda55eef372798476d918d03158796935 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda55eef372798476d918d03158796935 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::modal.close','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::modal.close'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['variant' => 'ghost','class' => 'px-6 py-2 rounded-xl border border-gray-300 hover:bg-gray-50 transition-all duration-300']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'ghost','class' => 'px-6 py-2 rounded-xl border border-gray-300 hover:bg-gray-50 transition-all duration-300']); ?>
                    Đóng
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
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda55eef372798476d918d03158796935)): ?>
<?php $attributes = $__attributesOriginalda55eef372798476d918d03158796935; ?>
<?php unset($__attributesOriginalda55eef372798476d918d03158796935); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda55eef372798476d918d03158796935)): ?>
<?php $component = $__componentOriginalda55eef372798476d918d03158796935; ?>
<?php unset($__componentOriginalda55eef372798476d918d03158796935); ?>
<?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8cc9d3143946b992b324617832699c5f)): ?>
<?php $attributes = $__attributesOriginal8cc9d3143946b992b324617832699c5f; ?>
<?php unset($__attributesOriginal8cc9d3143946b992b324617832699c5f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8cc9d3143946b992b324617832699c5f)): ?>
<?php $component = $__componentOriginal8cc9d3143946b992b324617832699c5f; ?>
<?php unset($__componentOriginal8cc9d3143946b992b324617832699c5f); ?>
<?php endif; ?>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/vendor/livewire-calendar/modal-time-table-view.blade.php ENDPATH**/ ?>