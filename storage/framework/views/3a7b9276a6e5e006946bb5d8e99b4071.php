<div class="relative mb-4 w-full">

    
    <div class="theme-header-pink">
        <div class="flex items-center justify-between">
            <div class="header-content">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="header-icon">
                        <?php if (isset($component)) { $__componentOriginalf870514c33bb1b53395ba02235f60146 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf870514c33bb1b53395ba02235f60146 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.shield-check','data' => ['class' => 'size-12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.shield-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf870514c33bb1b53395ba02235f60146)): ?>
<?php $attributes = $__attributesOriginalf870514c33bb1b53395ba02235f60146; ?>
<?php unset($__attributesOriginalf870514c33bb1b53395ba02235f60146); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf870514c33bb1b53395ba02235f60146)): ?>
<?php $component = $__componentOriginalf870514c33bb1b53395ba02235f60146; ?>
<?php unset($__componentOriginalf870514c33bb1b53395ba02235f60146); ?>
<?php endif; ?>
                    </div>
                    <div>
                        <h1 class="header-title">Quyền hạn</h1>
                        <p class="header-subtitle">Quản lý quyền hạn và phân quyền trong hệ thống</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="<?php echo e(route('dashboard')); ?>">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Quyền hạn</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span><?php echo e($permissions->count()); ?> quyền hạn</span>
                </div>
                <button wire:click='addPermission' class="header-button">
                    <?php if (isset($component)) { $__componentOriginal37c717510e7a32140849d8d5dd9d632e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37c717510e7a32140849d8d5dd9d632e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.plus','data' => ['class' => 'w-5 h-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.plus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal37c717510e7a32140849d8d5dd9d632e)): ?>
<?php $attributes = $__attributesOriginal37c717510e7a32140849d8d5dd9d632e; ?>
<?php unset($__attributesOriginal37c717510e7a32140849d8d5dd9d632e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37c717510e7a32140849d8d5dd9d632e)): ?>
<?php $component = $__componentOriginal37c717510e7a32140849d8d5dd9d632e; ?>
<?php unset($__componentOriginal37c717510e7a32140849d8d5dd9d632e); ?>
<?php endif; ?>
                    <span>Thêm quyền hạn</span>
                </button>
            </div>
        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginalc481942d30cc0ab06077963cf20a45e8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc481942d30cc0ab06077963cf20a45e8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::separator','data' => ['variant' => 'subtle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::separator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'subtle']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc481942d30cc0ab06077963cf20a45e8)): ?>
<?php $attributes = $__attributesOriginalc481942d30cc0ab06077963cf20a45e8; ?>
<?php unset($__attributesOriginalc481942d30cc0ab06077963cf20a45e8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc481942d30cc0ab06077963cf20a45e8)): ?>
<?php $component = $__componentOriginalc481942d30cc0ab06077963cf20a45e8; ?>
<?php unset($__componentOriginalc481942d30cc0ab06077963cf20a45e8); ?>
<?php endif; ?>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('back.access.permission.actions-permission', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1057860174-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    
    <div class="mt-6">
        <div class="table-full-width">
            <div class="theme-table-pink">
                <div class="overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th>Router</th>
                                <th>Tên hiển thị</th>
                                <th class="text-center">Hiển thị</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr wire:key="permission-<?php echo e($permission->id); ?>">
                                <td>
                                    <?php echo e($permission->router); ?>

                                </td>
                                <td>
                                    <?php echo e($permission->displayName); ?>

                                </td>
                                <td class="text-center">
                                    <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['variant' => 'solid','color' => ''.e($permission->isShow ? 'green' : 'zinc').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'solid','color' => ''.e($permission->isShow ? 'green' : 'zinc').'']); ?>
                                        <?php echo e($permission->isShow ? 'Có' : 'Không'); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $attributes = $__attributesOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $component = $__componentOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__componentOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','variant' => 'primary','icon' => 'square-pen','wire:click' => 'editPermission('.e($permission->id).')','class' => 'cursor-pointer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'primary','icon' => 'square-pen','wire:click' => 'editPermission('.e($permission->id).')','class' => 'cursor-pointer']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','variant' => 'danger','icon' => 'trash','wire:click' => 'deletePermission('.e($permission->id).')','class' => 'cursor-pointer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'danger','icon' => 'trash','wire:click' => 'deletePermission('.e($permission->id).')','class' => 'cursor-pointer']); ?>
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
                                <td colspan="4" class="text-center py-12">
                                    <div class="empty-state flex flex-col items-center">
                                        <?php if (isset($component)) { $__componentOriginalf870514c33bb1b53395ba02235f60146 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf870514c33bb1b53395ba02235f60146 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.shield-check','data' => ['class' => 'w-12 h-12 mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.shield-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf870514c33bb1b53395ba02235f60146)): ?>
<?php $attributes = $__attributesOriginalf870514c33bb1b53395ba02235f60146; ?>
<?php unset($__attributesOriginalf870514c33bb1b53395ba02235f60146); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf870514c33bb1b53395ba02235f60146)): ?>
<?php $component = $__componentOriginalf870514c33bb1b53395ba02235f60146; ?>
<?php unset($__componentOriginalf870514c33bb1b53395ba02235f60146); ?>
<?php endif; ?>
                                        <h3 class="text-lg font-medium mb-2">
                                            Không có quyền hạn nào
                                        </h3>
                                        <p>
                                            Chưa có quyền hạn nào được tạo trong hệ thống
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                </table>
            </div>
            
            <!--[if BLOCK]><![endif]--><?php if($permissions->hasPages()): ?>
                <div class="pagination-container">
                    <?php echo e($permissions->links()); ?>

                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/access/permission/permissions.blade.php ENDPATH**/ ?>