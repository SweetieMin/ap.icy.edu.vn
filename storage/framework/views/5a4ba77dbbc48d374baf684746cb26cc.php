<div class="relative mb-4 w-full">

    
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <?php if (isset($component)) { $__componentOriginal4e4f522adb19cc742fb2b199df7e6c95 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.users','data' => ['class' => 'size-12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95)): ?>
<?php $attributes = $__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95; ?>
<?php unset($__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4e4f522adb19cc742fb2b199df7e6c95)): ?>
<?php $component = $__componentOriginal4e4f522adb19cc742fb2b199df7e6c95; ?>
<?php unset($__componentOriginal4e4f522adb19cc742fb2b199df7e6c95); ?>
<?php endif; ?>
                    </div>
                    <div>
                        <h1 class="header-title">Nhân viên</h1>
                        <p class="header-subtitle">Quản lý thông tin nhân viên trong hệ thống</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="<?php echo e(route('dashboard')); ?>">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Danh sách nhân viên</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span><?php echo e($staffs->count()); ?> nhân viên</span>
                </div>

                <button wire:click="addStaff()" class="header-button w-full sm:w-auto">
                    <?php if (isset($component)) { $__componentOriginal37c717510e7a32140849d8d5dd9d632e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37c717510e7a32140849d8d5dd9d632e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.plus','data' => ['class' => 'w-4 h-4 sm:w-5 sm:h-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.plus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 sm:w-5 sm:h-5']); ?>
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
                    <span class="hidden sm:inline">Thêm nhân viên</span>
                    <span class="sm:hidden">Thêm</span>
                </button>
            </div>
        </div>
    </div>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('back.personnel.employee.actions-staff', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-137583958-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <!-- Bộ lọc -->
    <div class="theme-card-pink mt-4 mb-4">

        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div>
                    <label class="card-label">Tìm kiếm</label>
                    <input type="text" wire:model.live="search" placeholder="Họ và tên hoặc Account code..."
                        class="card-input">
                </div>
                <!--[if BLOCK]><![endif]--><?php if($locations->count() > 1): ?>
                    <div>
                        <label class="card-label">Cơ sở</label>
                        <select wire:model.live="filterLocationId" class="card-input">
                            <option value="">Tất cả cơ sở</option>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($location->id); ?>"><?php echo e($location->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </select>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <div>
                    <label class="card-label">Chức vụ</label>
                    <select wire:model.live="filterRoleId" class="card-input">
                        <option value="">Tất cả chức vụ</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <div class="theme-table-pink">
            
            <div class="hidden md:block overflow-x-auto">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center w-16">STT</th>
                            <th>Họ và tên</th>
                            <th class="hidden md:table-cell">Số điện thoại</th>
                            <th class="text-center">Cơ sở</th>
                            <th class="text-center hidden sm:table-cell">Chức vụ</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $staffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr wire:key="staff-desktop-<?php echo e($staff->id); ?>">
                            <td class="text-center font-medium">
                                <?php echo e($loop->iteration); ?>

                            </td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="<?php echo e($staff->detail?->avatar ?? asset('storage/images/avatars/default-avatar.png')); ?>"
                                        alt="<?php echo e($staff->name); ?>">
                                    <div>
                                        <div class="font-medium"><?php echo e($staff->name); ?></div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                            <?php echo e($staff->account_code); ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="hidden md:table-cell">
                                <?php echo e($staff->detail?->phone ?? 'Chưa cập nhật'); ?>

                            </td>
                            <td class="text-center">
                                <!--[if BLOCK]><![endif]--><?php if($staff->locations->count() > 0): ?>
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $staff->locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['color' => 'blue','size' => 'sm','class' => 'mb-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'blue','size' => 'sm','class' => 'mb-1']); ?>
                                            <?php echo e($location->name); ?>

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
                                        <!--[if BLOCK]><![endif]--><?php if(!$loop->last): ?>
                                            <br>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                <?php else: ?>
                                    <span class="text-gray-500 dark:text-gray-400 text-xs">Chưa có cơ sở</span>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </td>
                            <td class="text-center hidden sm:table-cell">
                                <div>
                                    <?php echo e($staff->roles->pluck('name')->implode(', ')); ?>

                                </div>
                            </td>
                            <td class="text-center">
                                <?php if (isset($component)) { $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::dropdown','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['icon:trailing' => 'chevron-down']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon:trailing' => 'chevron-down']); ?>Thao tác <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php if (isset($component)) { $__componentOriginal5027d420cfeeb03dd925cfc08ae44851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5027d420cfeeb03dd925cfc08ae44851 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.item','data' => ['icon' => 'pencil','wire:click' => 'editStaff('.e($staff->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'pencil','wire:click' => 'editStaff('.e($staff->id).')']); ?>Sửa thông tin
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5027d420cfeeb03dd925cfc08ae44851)): ?>
<?php $attributes = $__attributesOriginal5027d420cfeeb03dd925cfc08ae44851; ?>
<?php unset($__attributesOriginal5027d420cfeeb03dd925cfc08ae44851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5027d420cfeeb03dd925cfc08ae44851)): ?>
<?php $component = $__componentOriginal5027d420cfeeb03dd925cfc08ae44851; ?>
<?php unset($__componentOriginal5027d420cfeeb03dd925cfc08ae44851); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginald5e1eb3ae521062f8474178ba08933ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e1eb3ae521062f8474178ba08933ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.separator','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.separator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e1eb3ae521062f8474178ba08933ca)): ?>
<?php $attributes = $__attributesOriginald5e1eb3ae521062f8474178ba08933ca; ?>
<?php unset($__attributesOriginald5e1eb3ae521062f8474178ba08933ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e1eb3ae521062f8474178ba08933ca)): ?>
<?php $component = $__componentOriginald5e1eb3ae521062f8474178ba08933ca; ?>
<?php unset($__componentOriginald5e1eb3ae521062f8474178ba08933ca); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal5027d420cfeeb03dd925cfc08ae44851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5027d420cfeeb03dd925cfc08ae44851 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.item','data' => ['variant' => 'danger','icon' => 'trash','wire:click' => 'deleteStaff('.e($staff->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'danger','icon' => 'trash','wire:click' => 'deleteStaff('.e($staff->id).')']); ?>Xóa
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5027d420cfeeb03dd925cfc08ae44851)): ?>
<?php $attributes = $__attributesOriginal5027d420cfeeb03dd925cfc08ae44851; ?>
<?php unset($__attributesOriginal5027d420cfeeb03dd925cfc08ae44851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5027d420cfeeb03dd925cfc08ae44851)): ?>
<?php $component = $__componentOriginal5027d420cfeeb03dd925cfc08ae44851; ?>
<?php unset($__componentOriginal5027d420cfeeb03dd925cfc08ae44851); ?>
<?php endif; ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a)): ?>
<?php $attributes = $__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a; ?>
<?php unset($__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a)): ?>
<?php $component = $__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a; ?>
<?php unset($__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a); ?>
<?php endif; ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $attributes = $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $component = $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center py-12">
                                <div class="empty-state flex flex-col items-center">
                                    <?php if (isset($component)) { $__componentOriginal4e4f522adb19cc742fb2b199df7e6c95 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.users','data' => ['class' => 'w-12 h-12 mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95)): ?>
<?php $attributes = $__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95; ?>
<?php unset($__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4e4f522adb19cc742fb2b199df7e6c95)): ?>
<?php $component = $__componentOriginal4e4f522adb19cc742fb2b199df7e6c95; ?>
<?php unset($__componentOriginal4e4f522adb19cc742fb2b199df7e6c95); ?>
<?php endif; ?>
                                    <h3 class="text-lg font-medium mb-2">
                                        Không có nhân viên nào
                                    </h3>
                                    <p>
                                        Hiện tại không có nhân viên nào trong các cơ sở của bạn
                                    </p>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>

        
        <div class="md:hidden space-y-3">
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $staffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                     x-data="{ expanded: false }" 
                     wire:key="staff-mobile-<?php echo e($staff->id); ?>">
                    
                    
                    <div class="p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <img class="h-8 w-8 rounded-full object-cover"
                                src="<?php echo e($staff->detail?->avatar ?? asset('storage/images/avatars/default-avatar.png')); ?>"
                                alt="<?php echo e($staff->name); ?>">
                            <div>
                                <div class="font-medium text-gray-900"><?php echo e($staff->name); ?></div>
                                <div class="text-sm text-gray-500">ID: <?php echo e($staff->account_code); ?></div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-2">

                            
                            <button @click="expanded = !expanded" 
                                    class="p-2 rounded-full hover:bg-gray-100">
                                <svg class="w-5 h-5 text-gray-400" 
                                     :class="{ 'rotate-180': expanded }" 
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    
                    <div x-show="expanded" 
                         class="border-t border-gray-100 bg-gray-50">
                        
                        <div class="p-4 space-y-3">


                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Số điện thoại:</span>
                                <span class="text-sm text-gray-900"><?php echo e($staff->detail?->phone ?? 'Chưa cập nhật'); ?></span>
                            </div>

                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Cơ sở:</span>
                                <div class="text-right">
                                    <!--[if BLOCK]><![endif]--><?php if($staff->locations->count() > 0): ?>
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $staff->locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['color' => 'blue','size' => 'sm','class' => 'mb-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'blue','size' => 'sm','class' => 'mb-1']); ?>
                                                <?php echo e($location->name); ?>

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
                                            <!--[if BLOCK]><![endif]--><?php if(!$loop->last): ?>
                                                <br>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php else: ?>
                                        <span class="text-gray-500 text-xs">Chưa có cơ sở</span>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </div>

                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-600">Chức vụ:</span>
                                <span class="text-sm text-gray-900"><?php echo e($staff->roles->pluck('name')->implode(', ') ?: 'Chưa có chức vụ'); ?></span>
                            </div>

                            
                            <div class="pt-3 border-t border-gray-200">
                                <div class="flex space-x-2">
                                    <button wire:click="editStaff(<?php echo e($staff->id); ?>)"
                                            class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                        <span>Sửa thông tin</span>
                                    </button>
                                    
                                    <button wire:click="deleteStaff(<?php echo e($staff->id); ?>)"
                                            class="flex-1 bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-red-700 transition-colors flex items-center justify-center space-x-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        <span>Xóa</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="bg-white rounded-lg border border-gray-200 p-8">
                    <div class="empty-state flex flex-col items-center">
                        <?php if (isset($component)) { $__componentOriginal4e4f522adb19cc742fb2b199df7e6c95 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.users','data' => ['class' => 'w-12 h-12 mb-4 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mb-4 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95)): ?>
<?php $attributes = $__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95; ?>
<?php unset($__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4e4f522adb19cc742fb2b199df7e6c95)): ?>
<?php $component = $__componentOriginal4e4f522adb19cc742fb2b199df7e6c95; ?>
<?php unset($__componentOriginal4e4f522adb19cc742fb2b199df7e6c95); ?>
<?php endif; ?>
                        <h3 class="text-lg font-medium mb-2 text-gray-500">
                            Không có nhân viên nào
                        </h3>
                        <p class="text-gray-400">
                            Hiện tại không có nhân viên nào trong các cơ sở của bạn
                        </p>
                    </div>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        
        
    </div>
</div>

    
    <!--[if BLOCK]><![endif]--><?php if($staffsWithoutLocation->count() > 0): ?>
        
        <div class="theme-header-pink mt-6">
            <div class="flex items-center justify-between">
                <div class="header-content">
                    <div class="flex items-center space-x-3 mb-2">
                        <div class="header-icon">
                            <?php if (isset($component)) { $__componentOriginal7f0e8d69add49581695c1337b3f85fff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7f0e8d69add49581695c1337b3f85fff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.exclamation-triangle','data' => ['class' => 'size-12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.exclamation-triangle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7f0e8d69add49581695c1337b3f85fff)): ?>
<?php $attributes = $__attributesOriginal7f0e8d69add49581695c1337b3f85fff; ?>
<?php unset($__attributesOriginal7f0e8d69add49581695c1337b3f85fff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7f0e8d69add49581695c1337b3f85fff)): ?>
<?php $component = $__componentOriginal7f0e8d69add49581695c1337b3f85fff; ?>
<?php unset($__componentOriginal7f0e8d69add49581695c1337b3f85fff); ?>
<?php endif; ?>
                        </div>
                        <div>
                            <h1 class="header-title">Nhân viên chưa được phân cơ sở</h1>
                            <p class="header-subtitle">Danh sách nhân viên chưa được gán cơ sở</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="header-counter">
                        <span><?php echo e($staffsWithoutLocation->count()); ?> nhân viên</span>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="mt-6">
            <div class="theme-table-pink">
                
                <div class="hidden md:block overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center w-16">STT</th>
                                <th>Họ và tên</th>
                                <th class="hidden md:table-cell">Số điện thoại</th>
                                <th class="text-center">Cơ sở</th>
                                <th class="text-center hidden sm:table-cell">Chức vụ</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $staffsWithoutLocation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr wire:key="staff-no-location-desktop-<?php echo e($staff->id); ?>">
                                    <td class="text-center font-medium">
                                        <?php echo e($loop->iteration); ?>

                                    </td>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="<?php echo e($staff->detail?->avatar ?? asset('storage/images/avatars/default-avatar.png')); ?>"
                                                alt="<?php echo e($staff->name); ?>">
                                            <div>
                                                <div class="font-medium"><?php echo e($staff->name); ?></div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                                    <?php echo e($staff->account_code); ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden md:table-cell">
                                        <?php echo e($staff->detail?->phone ?? 'Chưa cập nhật'); ?>

                                    </td>
                                    <td class="text-center">
                                        <span class="text-red-500 dark:text-red-400 text-xs font-medium">
                                            Chưa có cơ sở
                                        </span>
                                    </td>
                                    <td class="text-center hidden sm:table-cell">
                                        <div>
                                            <?php echo e($staff->roles->pluck('name')->implode(', ')); ?>

                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <?php if (isset($component)) { $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::dropdown','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['icon:trailing' => 'chevron-down']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon:trailing' => 'chevron-down']); ?>Thao tác <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>

                                            <?php if (isset($component)) { $__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                                <?php if (isset($component)) { $__componentOriginal5027d420cfeeb03dd925cfc08ae44851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5027d420cfeeb03dd925cfc08ae44851 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.item','data' => ['icon' => 'pencil','wire:click' => 'editStaff('.e($staff->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'pencil','wire:click' => 'editStaff('.e($staff->id).')']); ?>Sửa thông tin
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5027d420cfeeb03dd925cfc08ae44851)): ?>
<?php $attributes = $__attributesOriginal5027d420cfeeb03dd925cfc08ae44851; ?>
<?php unset($__attributesOriginal5027d420cfeeb03dd925cfc08ae44851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5027d420cfeeb03dd925cfc08ae44851)): ?>
<?php $component = $__componentOriginal5027d420cfeeb03dd925cfc08ae44851; ?>
<?php unset($__componentOriginal5027d420cfeeb03dd925cfc08ae44851); ?>
<?php endif; ?>

                                                <?php if (isset($component)) { $__componentOriginald5e1eb3ae521062f8474178ba08933ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e1eb3ae521062f8474178ba08933ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.separator','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.separator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e1eb3ae521062f8474178ba08933ca)): ?>
<?php $attributes = $__attributesOriginald5e1eb3ae521062f8474178ba08933ca; ?>
<?php unset($__attributesOriginald5e1eb3ae521062f8474178ba08933ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e1eb3ae521062f8474178ba08933ca)): ?>
<?php $component = $__componentOriginald5e1eb3ae521062f8474178ba08933ca; ?>
<?php unset($__componentOriginald5e1eb3ae521062f8474178ba08933ca); ?>
<?php endif; ?>

                                                <?php if (isset($component)) { $__componentOriginal5027d420cfeeb03dd925cfc08ae44851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5027d420cfeeb03dd925cfc08ae44851 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::menu.item','data' => ['variant' => 'danger','icon' => 'trash','wire:click' => 'deleteStaff('.e($staff->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'danger','icon' => 'trash','wire:click' => 'deleteStaff('.e($staff->id).')']); ?>Xóa
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5027d420cfeeb03dd925cfc08ae44851)): ?>
<?php $attributes = $__attributesOriginal5027d420cfeeb03dd925cfc08ae44851; ?>
<?php unset($__attributesOriginal5027d420cfeeb03dd925cfc08ae44851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5027d420cfeeb03dd925cfc08ae44851)): ?>
<?php $component = $__componentOriginal5027d420cfeeb03dd925cfc08ae44851; ?>
<?php unset($__componentOriginal5027d420cfeeb03dd925cfc08ae44851); ?>
<?php endif; ?>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a)): ?>
<?php $attributes = $__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a; ?>
<?php unset($__attributesOriginalf7749b857446d2788d0b6ca0c63f9d3a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a)): ?>
<?php $component = $__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a; ?>
<?php unset($__componentOriginalf7749b857446d2788d0b6ca0c63f9d3a); ?>
<?php endif; ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $attributes = $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $component = $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6" class="text-center py-12">
                                        <div class="empty-state flex flex-col items-center">
                                            <?php if (isset($component)) { $__componentOriginal4e4f522adb19cc742fb2b199df7e6c95 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.users','data' => ['class' => 'w-12 h-12 mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95)): ?>
<?php $attributes = $__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95; ?>
<?php unset($__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4e4f522adb19cc742fb2b199df7e6c95)): ?>
<?php $component = $__componentOriginal4e4f522adb19cc742fb2b199df7e6c95; ?>
<?php unset($__componentOriginal4e4f522adb19cc742fb2b199df7e6c95); ?>
<?php endif; ?>
                                            <h3 class="text-lg font-medium mb-2">
                                                Không có nhân viên nào
                                            </h3>
                                            <p>
                                                Hiện tại không có nhân viên nào chưa được phân cơ sở
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                </div>

                
                <div class="md:hidden space-y-3">
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $staffsWithoutLocation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                             x-data="{ expanded: false }" 
                             wire:key="staff-no-location-mobile-<?php echo e($staff->id); ?>">
                            
                            
                            <div class="p-4 flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="<?php echo e($staff->detail?->avatar ?? asset('storage/images/avatars/default-avatar.png')); ?>"
                                        alt="<?php echo e($staff->name); ?>">
                                    <div>
                                        <div class="font-medium text-gray-900"><?php echo e($staff->name); ?></div>
                                        <div class="text-sm text-gray-500">ID: <?php echo e($staff->account_code); ?></div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-2">
                                    <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        Chưa có cơ sở
                                    </span>
                                    
                                    <button @click="expanded = !expanded" 
                                            class="p-2 rounded-full hover:bg-gray-100">
                                        <svg class="w-5 h-5 text-gray-400" 
                                             :class="{ 'rotate-180': expanded }" 
                                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            
                            <div x-show="expanded" 
                                 class="border-t border-gray-100 bg-gray-50">
                                
                                <div class="p-4 space-y-3">


                                    
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Số điện thoại:</span>
                                        <span class="text-sm text-gray-900"><?php echo e($staff->detail?->phone ?? 'Chưa cập nhật'); ?></span>
                                    </div>

                                    
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Cơ sở:</span>
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            Chưa có cơ sở
                                        </span>
                                    </div>

                                    
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600">Chức vụ:</span>
                                        <span class="text-sm text-gray-900"><?php echo e($staff->roles->pluck('name')->implode(', ') ?: 'Chưa có chức vụ'); ?></span>
                                    </div>

                                    
                                    <div class="pt-3 border-t border-gray-200">
                                        <div class="flex space-x-2">
                                            <button wire:click="editStaff(<?php echo e($staff->id); ?>)"
                                                    class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                                <span>Sửa thông tin</span>
                                            </button>
                                            
                                            <button wire:click="deleteStaff(<?php echo e($staff->id); ?>)"
                                                    class="flex-1 bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-red-700 transition-colors flex items-center justify-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                                <span>Xóa</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="bg-white rounded-lg border border-gray-200 p-8">
                            <div class="empty-state flex flex-col items-center">
                                <?php if (isset($component)) { $__componentOriginal4e4f522adb19cc742fb2b199df7e6c95 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.users','data' => ['class' => 'w-12 h-12 mb-4 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mb-4 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95)): ?>
<?php $attributes = $__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95; ?>
<?php unset($__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4e4f522adb19cc742fb2b199df7e6c95)): ?>
<?php $component = $__componentOriginal4e4f522adb19cc742fb2b199df7e6c95; ?>
<?php unset($__componentOriginal4e4f522adb19cc742fb2b199df7e6c95); ?>
<?php endif; ?>
                                <h3 class="text-lg font-medium mb-2 text-gray-500">
                                    Không có nhân viên nào
                                </h3>
                                <p class="text-gray-400">
                                    Hiện tại không có nhân viên nào chưa được phân cơ sở
                                </p>
                            </div>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/personnel/employee/staff.blade.php ENDPATH**/ ?>