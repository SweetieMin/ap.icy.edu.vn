<div class="relative mb-4 w-full">

    
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <?php if (isset($component)) { $__componentOriginal970eea507e21d10a438cf9d4525d45dc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal970eea507e21d10a438cf9d4525d45dc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.currency-dollar','data' => ['class' => 'size-12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.currency-dollar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal970eea507e21d10a438cf9d4525d45dc)): ?>
<?php $attributes = $__attributesOriginal970eea507e21d10a438cf9d4525d45dc; ?>
<?php unset($__attributesOriginal970eea507e21d10a438cf9d4525d45dc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal970eea507e21d10a438cf9d4525d45dc)): ?>
<?php $component = $__componentOriginal970eea507e21d10a438cf9d4525d45dc; ?>
<?php unset($__componentOriginal970eea507e21d10a438cf9d4525d45dc); ?>
<?php endif; ?>
                    </div>
                    <div>
                        <h1 class="header-title">Quản lý giá tiền chương trình</h1>
                        <p class="header-subtitle">Quản lý giá tiền cho các chương trình học tại các cơ sở</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="<?php echo e(route('dashboard')); ?>">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Quản lý giá tiền</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span><?php echo e($programs->count()); ?> chương trình × <?php echo e($locations->count()); ?> cơ sở</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-2 sm:gap-3 w-full sm:w-auto">
                    <!--[if BLOCK]><![endif]--><?php if(!$bulkUpdateMode): ?>
                        <button wire:click="toggleBulkUpdate" class="header-button w-full sm:w-auto">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            <span class="hidden sm:inline">Chỉnh sửa hàng loạt</span>
                            <span class="sm:hidden">Chỉnh sửa</span>
                        </button>
                    <?php else: ?>
                        <button wire:click="startBulkEdit" class="header-button w-full sm:w-auto">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            <span class="hidden sm:inline">Bắt đầu chỉnh sửa</span>
                            <span class="sm:hidden">Bắt đầu</span>
                        </button>
                        <button wire:click="saveBulkPrices" class="bg-green-600 hover:bg-green-700 text-white px-4 sm:px-6 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center space-x-2 w-full sm:w-auto">
                            <?php if (isset($component)) { $__componentOriginal9c2dfd6cb98f4df18e26d1694500af11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c2dfd6cb98f4df18e26d1694500af11 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.check','data' => ['class' => 'w-4 h-4 sm:w-5 sm:h-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 sm:w-5 sm:h-5']); ?>
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
                            <span class="hidden sm:inline">Lưu tất cả</span>
                            <span class="sm:hidden">Lưu</span>
                        </button>
                        <button wire:click="toggleBulkUpdate" class="bg-red-600 hover:bg-red-700 text-white px-4 sm:px-6 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center space-x-2 w-full sm:w-auto">
                            <?php if (isset($component)) { $__componentOriginal155e76c41fe51242bc25d269fabf82f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal155e76c41fe51242bc25d269fabf82f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.x-mark','data' => ['class' => 'w-4 h-4 sm:w-5 sm:h-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.x-mark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 sm:w-5 sm:h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal155e76c41fe51242bc25d269fabf82f5)): ?>
<?php $attributes = $__attributesOriginal155e76c41fe51242bc25d269fabf82f5; ?>
<?php unset($__attributesOriginal155e76c41fe51242bc25d269fabf82f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal155e76c41fe51242bc25d269fabf82f5)): ?>
<?php $component = $__componentOriginal155e76c41fe51242bc25d269fabf82f5; ?>
<?php unset($__componentOriginal155e76c41fe51242bc25d269fabf82f5); ?>
<?php endif; ?>
                            <span class="hidden sm:inline">Hủy</span>
                            <span class="sm:hidden">Hủy</span>
                        </button>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>


    <!-- Bảng quản lý giá tiền -->
    <div class="mt-6">
        <div class="theme-table-pink">
            
            <div class="hidden md:block overflow-x-auto max-h-[calc(100vh-300px)]">
                <table>
                    <thead class="sticky top-0 z-10">
                        <tr>
                            <th>
                                Chương trình
                            </th>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <th class="text-center">
                                    <?php echo e($location->name); ?>

                                </th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            <th class="text-center">
                                Thao tác
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr wire:key="program-desktop-<?php echo e($program->id); ?>">
                                <td class="whitespace-nowrap">
                                    <div class="space-y-1">
                                        <div class="font-semibold text-pink-900 dark:text-pink-100"><?php echo e($program->name); ?></div>
                                        <!--[if BLOCK]><![endif]--><?php if($program->english_name): ?>
                                            <div class="text-xs text-pink-600 dark:text-pink-400 font-medium bg-pink-50 dark:bg-pink-900/20 px-2 py-1 rounded-md inline-block">
                                                <?php echo e($program->english_name); ?>

                                            </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </td>
                            
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $price = $filteredPrices->where('program_id', $program->id)->where('location_id', $location->id)->first();
                                ?>
                                <td class="whitespace-nowrap text-center">
                                    <!--[if BLOCK]><![endif]--><?php if($price): ?>
                                        <!--[if BLOCK]><![endif]--><?php if(isset($editingPrices[$price['id']])): ?>
                                            
                                            <input type="number" 
                                                wire:model="editingPrices.<?php echo e($price['id']); ?>.price"
                                                class="price-input"
                                                placeholder="Nhập giá">
                                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ["editingPrices.{$price['id']}.price"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="text-red-500 text-xs mt-1"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                        <?php else: ?>
                                            
                                            <div class="price-display">
                                                <?php echo e(number_format($price['price'], 0, ',', '.')); ?> VNĐ
                                            </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php else: ?>
                                        
                                        <?php
                                            $isEditingProgram = $filteredPrices->where('program_id', $program->id)->whereIn('id', array_keys($editingPrices))->count() > 0;
                                        ?>
                                        
                                        <!--[if BLOCK]><![endif]--><?php if($isEditingProgram): ?>
                                            
                                            <input type="number" 
                                                wire:model="newPrices.<?php echo e($program->id); ?>.<?php echo e($location->id); ?>"
                                                placeholder="Nhập giá"
                                                class="price-input">
                                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ["newPrices.{$program->id}.{$location->id}"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="text-red-500 text-xs mt-1"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                        <?php else: ?>
                                            
                                            <button type="button"
                                                wire:click="startProgramEdit(<?php echo e($program->id); ?>)"
                                                class="bg-pink-100 dark:bg-pink-900/20 hover:bg-pink-200 dark:hover:bg-pink-900/30 text-pink-700 dark:text-pink-300 text-xs font-medium px-3 py-2 rounded-lg border border-pink-200 dark:border-pink-800 transition-all duration-200 hover:scale-105">
                                                + Thêm giá
                                            </button>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                                <td class="whitespace-nowrap text-center">
                                    <?php
                                        $programPrices = $filteredPrices->where('program_id', $program->id);
                                        $isEditing = $programPrices->whereIn('id', array_keys($editingPrices))->count() > 0;
                                    ?>
                                    
                                    <!--[if BLOCK]><![endif]--><?php if($isEditing): ?>
                                        
                                        <div class="flex items-center justify-center gap-2">
                                            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','color' => 'green','variant' => 'primary','wire:click' => 'saveProgramPrices('.e($program->id).')','class' => 'cursor-pointer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','color' => 'green','variant' => 'primary','wire:click' => 'saveProgramPrices('.e($program->id).')','class' => 'cursor-pointer']); ?>
                                                Lưu
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','color' => 'red','variant' => 'primary','wire:click' => 'cancelProgramEdit('.e($program->id).')','class' => 'cursor-pointer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','color' => 'red','variant' => 'primary','wire:click' => 'cancelProgramEdit('.e($program->id).')','class' => 'cursor-pointer']); ?>
                                                Hủy
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
                                    <?php else: ?>
                                        
                                        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','variant' => 'primary','wire:click' => 'startProgramEdit('.e($program->id).')','class' => 'cursor-pointer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'primary','wire:click' => 'startProgramEdit('.e($program->id).')','class' => 'cursor-pointer']); ?>
                                            Chỉnh sửa
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
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="<?php echo e(count($locations) + 2); ?>" class="table-cell">
                                    <div class="empty-state flex flex-col items-center">
                                        <?php if (isset($component)) { $__componentOriginal970eea507e21d10a438cf9d4525d45dc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal970eea507e21d10a438cf9d4525d45dc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.currency-dollar','data' => ['class' => 'w-12 h-12 mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.currency-dollar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal970eea507e21d10a438cf9d4525d45dc)): ?>
<?php $attributes = $__attributesOriginal970eea507e21d10a438cf9d4525d45dc; ?>
<?php unset($__attributesOriginal970eea507e21d10a438cf9d4525d45dc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal970eea507e21d10a438cf9d4525d45dc)): ?>
<?php $component = $__componentOriginal970eea507e21d10a438cf9d4525d45dc; ?>
<?php unset($__componentOriginal970eea507e21d10a438cf9d4525d45dc); ?>
<?php endif; ?>
                                        <div class="text-lg font-medium">Không có dữ liệu chương trình</div>
                                        <div class="text-sm">Hãy thêm chương trình và chạy seeder</div>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
            </div>

            
            <div class="md:hidden space-y-4">
                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                         x-data="{ expanded: false }" 
                         wire:key="program-mobile-<?php echo e($program->id); ?>">
                        
                        
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900"><?php echo e($program->name); ?></div>
                                    <!--[if BLOCK]><![endif]--><?php if($program->english_name): ?>
                                        <div class="text-sm text-gray-500"><?php echo e($program->english_name); ?></div>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </div>
                            
                            <button @click="expanded = !expanded" 
                                    class="p-2 rounded-full hover:bg-gray-100">
                                <svg class="w-5 h-5 text-gray-400" 
                                     :class="{ 'rotate-180': expanded }" 
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </div>

                        
                        <div x-show="expanded" 
                             class="border-t border-gray-100 bg-gray-50">
                            
                            <div class="p-4 space-y-4">
                                
                                <div class="space-y-3">
                                    <span class="text-sm font-medium text-gray-600">Giá tại các cơ sở:</span>
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $price = $filteredPrices->where('program_id', $program->id)->where('location_id', $location->id)->first();
                                        ?>
                                        <div class="bg-white rounded-lg p-3 border border-gray-200">
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-sm font-medium text-gray-700"><?php echo e($location->name); ?></span>
                                            </div>
                                            
                                            <!--[if BLOCK]><![endif]--><?php if($price): ?>
                                                <!--[if BLOCK]><![endif]--><?php if(isset($editingPrices[$price['id']])): ?>
                                                    
                                                    <div class="space-y-2">
                                                        <input type="number" 
                                                            wire:model="editingPrices.<?php echo e($price['id']); ?>.price"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm"
                                                            placeholder="Nhập giá">
                                                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ["editingPrices.{$price['id']}.price"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="text-red-500 text-xs"><?php echo e($message); ?></div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                <?php else: ?>
                                                    
                                                    <div class="text-sm font-semibold text-green-600">
                                                        <?php echo e(number_format($price['price'], 0, ',', '.')); ?> VNĐ
                                                    </div>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            <?php else: ?>
                                                
                                                <?php
                                                    $isEditingProgram = $filteredPrices->where('program_id', $program->id)->whereIn('id', array_keys($editingPrices))->count() > 0;
                                                ?>
                                                
                                                <!--[if BLOCK]><![endif]--><?php if($isEditingProgram): ?>
                                                    
                                                    <div class="space-y-2">
                                                        <input type="number" 
                                                            wire:model="newPrices.<?php echo e($program->id); ?>.<?php echo e($location->id); ?>"
                                                            placeholder="Nhập giá"
                                                            class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
                                                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ["newPrices.{$program->id}.{$location->id}"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="text-red-500 text-xs"><?php echo e($message); ?></div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                <?php else: ?>
                                                    
                                                    <button type="button"
                                                        wire:click="startProgramEdit(<?php echo e($program->id); ?>)"
                                                        class="w-full bg-pink-100 hover:bg-pink-200 text-pink-700 text-sm font-medium px-3 py-2 rounded-lg border border-pink-200 transition-all duration-200">
                                                        + Thêm giá
                                                    </button>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>

                                
                                <?php
                                    $programPrices = $filteredPrices->where('program_id', $program->id);
                                    $isEditing = $programPrices->whereIn('id', array_keys($editingPrices))->count() > 0;
                                ?>
                                
                                <div class="pt-3 border-t border-gray-200">
                                    <!--[if BLOCK]><![endif]--><?php if($isEditing): ?>
                                        
                                        <div class="flex space-x-2">
                                            <button wire:click="saveProgramPrices(<?php echo e($program->id); ?>)"
                                                    class="flex-1 bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700 transition-colors flex items-center justify-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span>Lưu</span>
                                            </button>
                                            
                                            <button wire:click="cancelProgramEdit(<?php echo e($program->id); ?>)"
                                                    class="flex-1 bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-red-700 transition-colors flex items-center justify-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                                <span>Hủy</span>
                                            </button>
                                        </div>
                                    <?php else: ?>
                                        
                                        <button wire:click="startProgramEdit(<?php echo e($program->id); ?>)"
                                                class="w-full bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                            <span>Chỉnh sửa</span>
                                        </button>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="bg-white rounded-lg border border-gray-200 p-8">
                        <div class="empty-state flex flex-col items-center">
                            <?php if (isset($component)) { $__componentOriginal970eea507e21d10a438cf9d4525d45dc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal970eea507e21d10a438cf9d4525d45dc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.currency-dollar','data' => ['class' => 'w-8 h-8 mb-2 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.currency-dollar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 mb-2 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal970eea507e21d10a438cf9d4525d45dc)): ?>
<?php $attributes = $__attributesOriginal970eea507e21d10a438cf9d4525d45dc; ?>
<?php unset($__attributesOriginal970eea507e21d10a438cf9d4525d45dc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal970eea507e21d10a438cf9d4525d45dc)): ?>
<?php $component = $__componentOriginal970eea507e21d10a438cf9d4525d45dc; ?>
<?php unset($__componentOriginal970eea507e21d10a438cf9d4525d45dc); ?>
<?php endif; ?>
                            <div class="text-sm text-gray-500">Không có dữ liệu chương trình</div>
                        </div>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>

    
    <!--[if BLOCK]><![endif]--><?php if($programs->count() > 0): ?>
        <div class="mt-6 theme-card-pink">
            <div class="card-header">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                        <?php if (isset($component)) { $__componentOriginal82067727c95f13dc4198f80e35cb9c11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal82067727c95f13dc4198f80e35cb9c11 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.chart-bar','data' => ['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.chart-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal82067727c95f13dc4198f80e35cb9c11)): ?>
<?php $attributes = $__attributesOriginal82067727c95f13dc4198f80e35cb9c11; ?>
<?php unset($__attributesOriginal82067727c95f13dc4198f80e35cb9c11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal82067727c95f13dc4198f80e35cb9c11)): ?>
<?php $component = $__componentOriginal82067727c95f13dc4198f80e35cb9c11; ?>
<?php unset($__componentOriginal82067727c95f13dc4198f80e35cb9c11); ?>
<?php endif; ?>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Thống kê</h3>
                        <p class="text-pink-600 dark:text-pink-400 text-xs">Tổng quan dữ liệu giá tiền</p>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-pink-600 dark:text-pink-400"><?php echo e($programs->count()); ?></div>
                        <div class="text-sm text-zinc-600 dark:text-zinc-400">Chương trình</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-pink-600 dark:text-pink-400"><?php echo e($locations->count()); ?></div>
                        <div class="text-sm text-zinc-600 dark:text-zinc-400">Cơ sở</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-pink-600 dark:text-pink-400"><?php echo e($filteredPrices->count()); ?></div>
                        <div class="text-sm text-zinc-600 dark:text-zinc-400">Bản ghi giá</div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/finance/price/program-prices-management.blade.php ENDPATH**/ ?>