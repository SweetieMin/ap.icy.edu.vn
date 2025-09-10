<div class="relative mb-4 w-full">

    
    <div class="theme-header-pink">
        <div class="flex items-center justify-between">
            <div class="header-content">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="header-icon">
                        <?php if (isset($component)) { $__componentOriginal76d8dfc5ede7830a506df27ed24d5d51 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76d8dfc5ede7830a506df27ed24d5d51 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.book-marked','data' => ['class' => 'size-12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.book-marked'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76d8dfc5ede7830a506df27ed24d5d51)): ?>
<?php $attributes = $__attributesOriginal76d8dfc5ede7830a506df27ed24d5d51; ?>
<?php unset($__attributesOriginal76d8dfc5ede7830a506df27ed24d5d51); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76d8dfc5ede7830a506df27ed24d5d51)): ?>
<?php $component = $__componentOriginal76d8dfc5ede7830a506df27ed24d5d51; ?>
<?php unset($__componentOriginal76d8dfc5ede7830a506df27ed24d5d51); ?>
<?php endif; ?>
                    </div>
                    <div>
                        <h1 class="header-title">Chương trình học</h1>
                        <p class="header-subtitle">Quản lý các chương trình học trong hệ thống</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="<?php echo e(route('dashboard')); ?>">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Chương trình học</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span><?php echo e($programs->total() ?? 0); ?> chương trình</span>
                </div>
                <button wire:click="addProgram" class="header-button">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span>Thêm chương trình</span>
                </button>
            </div>
        </div>
    </div>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('back.management.program.actions-program', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2701188050-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    
    <div class="mt-6">
        <div x-data x-init="const el = document.getElementById('sortable-program');
        new Sortable(el, {
            animation: 150,
            handle: '.drag-handle',
            onEnd: function() {
                let orderedIds = [];
                el.querySelectorAll('[data-id]').forEach(item => {
                    orderedIds.push(item.getAttribute('data-id'));
                });
        
                $wire.updateProgramOrdering(orderedIds);
            }
        });">

            <div class="theme-table-pink">
                <div class="overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center w-16">STT</th>
                                <th class="w-30">Chương trình học</th>
                                <th class="hidden 2xl:table-cell">Mô tả</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody id="sortable-program">
                            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr wire:key="program-<?php echo e($program->id); ?>" data-id="<?php echo e($program->id); ?>"
                                    class=" table-row">
                                    <td class="whitespace-nowrap text-center table-cell cursor-move drag-handle">
                                        <?php echo e($program->ordering); ?>

                                    </td>
                                    <td class="whitespace-nowrap">
                                        <div class="space-y-1">
                                            <div class="font-semibold text-pink-900 dark:text-pink-100">
                                                <?php echo e($program->name); ?></div>

                                            <div
                                                class="text-xs text-pink-600 dark:text-pink-400 font-medium  inline-block">
                                                <?php echo e($program->english_name); ?>

                                            </div>

                                        </div>
                                    </td>
                                    <td class="hidden 2xl:table-cell">
                                        <div class=" truncate" title="<?php echo e($program->description); ?>">
                                            <?php echo e($program->description); ?>

                                        </div>
                                    </td>

                                    <td class="whitespace-nowrap text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','variant' => 'primary','icon' => 'square-pen','wire:click' => 'editProgram('.e($program->id).')','class' => 'cursor-pointer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'primary','icon' => 'square-pen','wire:click' => 'editProgram('.e($program->id).')','class' => 'cursor-pointer']); ?>
                                                Sửa
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
                                            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','variant' => 'danger','icon' => 'trash','wire:click' => 'deleteProgram('.e($program->id).')','class' => 'cursor-pointer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'danger','icon' => 'trash','wire:click' => 'deleteProgram('.e($program->id).')','class' => 'cursor-pointer']); ?>
                                                Xóa
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
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4" class="px-6 py-8">
                                        <div class="empty-state flex flex-col items-center">
                                            <?php if (isset($component)) { $__componentOriginal76d8dfc5ede7830a506df27ed24d5d51 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76d8dfc5ede7830a506df27ed24d5d51 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.book-marked','data' => ['class' => 'w-8 h-8 mb-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.book-marked'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 mb-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76d8dfc5ede7830a506df27ed24d5d51)): ?>
<?php $attributes = $__attributesOriginal76d8dfc5ede7830a506df27ed24d5d51; ?>
<?php unset($__attributesOriginal76d8dfc5ede7830a506df27ed24d5d51); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76d8dfc5ede7830a506df27ed24d5d51)): ?>
<?php $component = $__componentOriginal76d8dfc5ede7830a506df27ed24d5d51; ?>
<?php unset($__componentOriginal76d8dfc5ede7830a506df27ed24d5d51); ?>
<?php endif; ?>
                                            <div class="text-sm">Không có khoá học nào</div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                </div>

                <!--[if BLOCK]><![endif]--><?php if($programs->hasPages()): ?>
                    <div class="pagination-container">
                        <?php echo e($programs->links()); ?>

                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/management/program/programs.blade.php ENDPATH**/ ?>