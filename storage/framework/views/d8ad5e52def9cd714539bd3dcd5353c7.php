<div class=" h-full">



    <!--[if BLOCK]><![endif]--><?php if(session()->has('error')): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 mx-6 mt-4">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <?php echo e(session('error')); ?>

            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


        <div class="flex items-center justify-start ml-6 gap-2">
            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['icon' => 'bookmark-square','wire:click' => 'mainMenuQRCode','color' => 'green','variant' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'bookmark-square','wire:click' => 'mainMenuQRCode','color' => 'green','variant' => 'primary']); ?>
                Main Menu QR
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['icon' => 'bookmark-slash','wire:click' => 'turnOffQRCode','color' => 'red','variant' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'bookmark-slash','wire:click' => 'turnOffQRCode','color' => 'red','variant' => 'primary']); ?>
                Turn Off QR
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


    
    <div class="p-6">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 h-full">

            
            <div class="lg:col-span-2 space-y-4 flex flex-col">

                
                <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-sm flex-shrink-0">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                        📚 Tìm kiếm chương trình
                    </h3>

                    
                    <div class="mb-4 flex gap-3">
                        
                        <div class="flex-1">
                            <input type="text" wire:model.live="searchProgram" clearable
                                wire:focus="onProgramSearchFocus"
                                wire:blur="onProgramSearchBlur"
                                placeholder="Tìm kiếm chương trình theo tên..."
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300">
                        </div>
                        
                        
                        <div class="w-1/5">
                            <button wire:click="addUniform"
                                class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-4 rounded-lg transition-all duration-300 flex items-center justify-center">
                                👕 Thêm đồng phục
                            </button>
                        </div>
                    </div>

                    
                    <!--[if BLOCK]><![endif]--><?php if(!$selectedStudent): ?>
                        
                        <div class="text-center py-8">
                            <div class="text-gray-500 dark:text-gray-400 text-lg">Vui lòng chọn học sinh trước</div>
                            <div class="text-gray-400 dark:text-gray-500 text-sm mt-1">Sau khi chọn học sinh, danh sách chương trình sẽ hiển thị</div>
                        </div>
                    <?php elseif(count($filteredPrograms) > 0): ?>
                        <div class="max-h-64 overflow-y-auto space-y-2">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $filteredPrograms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div
                                    class="bg-gray-50 dark:bg-gray-700 rounded-lg p-3 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors duration-200">
                                    <button wire:click="addProgram(<?php echo e($program['id']); ?>)"
                                        class="w-full flex items-center justify-between text-left">
                                        <div class="flex-1">
                                            <div class="text-gray-900 dark:text-white font-medium mb-1">
                                                <?php echo e($program['name']); ?>

                                            </div>
                                            <div class="text-blue-600 dark:text-blue-400 text-sm font-bold">
                                                <?php
                                                    $locationId = $selectedStudent['location_id'] ?? null;
                                                    if ($locationId) {
                                                        $price = app(\App\Repositories\Contracts\ProgramLocationPriceRepositoryInterface::class)
                                                            ->getPriceByProgramAndLocation($program['id'], $locationId);
                                                        $displayPrice = $price ? $price->price : 0;
                                                    } else {
                                                        $displayPrice = 0;
                                                    }
                                                ?>
                                                <!--[if BLOCK]><![endif]--><?php if($displayPrice > 0): ?>
                                                    <?php echo e(number_format($displayPrice, 0, ',', '.')); ?> VNĐ
                                                <?php else: ?>
                                                    Chưa có giá
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            </div>
                                        </div>
                                        <div class="text-blue-600 dark:text-blue-400">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    <?php elseif($searchProgram && count($filteredPrograms) == 0): ?>
                        <div class="text-center py-8">
                            <svg class="w-12 h-12 mx-auto text-gray-400 dark:text-gray-500 mb-3" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.29-1.009-5.824-2.709M15 6.75a3 3 0 11-6 0 3 3 0 016 0z">
                                </path>
                            </svg>
                            <div class="text-gray-500 dark:text-gray-400">Không tìm thấy chương trình nào</div>
                            <div class="text-gray-400 dark:text-gray-500 text-sm mt-1">Hãy thử tìm kiếm với từ khóa khác
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-8">
                            <svg class="w-12 h-12 mx-auto text-gray-400 dark:text-gray-500 mb-3" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <div class="text-gray-500 dark:text-gray-400">Nhập tên chương trình để tìm kiếm</div>
                            <div class="text-gray-400 dark:text-gray-500 text-sm mt-1">Ví dụ: "Giao tiếp", "Doanh
                                nghiệp", "Mẫu giáo"</div>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                
                <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-sm flex-1 flex flex-col">
                    <h3
                        class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center flex-shrink-0">
                        🛒 Đơn hàng đã chọn
                    </h3>

                    <!--[if BLOCK]><![endif]--><?php if(count($selectedItems) > 0): ?>
                        <div class="space-y-2 overflow-y-auto flex-1">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $selectedItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div
                                    class="bg-white dark:bg-gray-800 rounded-lg p-3 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                                    <div class="flex items-center space-x-4">
                                        
                                        <div class="text-gray-500 dark:text-gray-400 text-sm font-medium w-6">
                                            <?php echo e($index + 1); ?>

                                        </div>

                                        
                                        <button wire:click="removeItem(<?php echo e($index); ?>)"
                                            class="text-red-500 hover:text-red-700 transition-colors duration-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>

                                        </button>

                                        
                                        <div class="flex-1 text-gray-900 dark:text-white font-medium">
                                            <?php echo e($item['name']); ?>

                                        </div>

                                        
                                        <div class="w-32">
                                            <!--[if BLOCK]><![endif]--><?php if($item['type'] === 'uniform'): ?>
                                                <div class="w-full px-2 py-1 text-xs text-gray-500 dark:text-gray-400 text-center">
                                                    --
                                                </div>
                                            <?php else: ?>
                                                <select
                                                    wire:change="selectSeason(<?php echo e($index); ?>, $event.target.value)"
                                                    class="w-full px-2 py-1 text-xs rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                                                    <option value="">-- Mùa --</option>
                                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($season['id']); ?>"
                                                            <?php echo e($item['season_id'] == $season['id'] ? 'selected' : ''); ?>>
                                                            <?php echo e($season['name']); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                                </select>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>

                                        
                                        <div class="w-20">
                                            <input type="number"
                                                wire:change="updateItemDiscount(<?php echo e($index); ?>, $event.target.value)"
                                                value="<?php echo e($item['discount_amount'] ?? 0); ?>" placeholder="0"
                                                class="w-full px-2 py-1 text-xs rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white text-right">
                                        </div>

                                        
                                        <div class="w-16">
                                            <select
                                                wire:change="updateItemDiscountType(<?php echo e($index); ?>, $event.target.value)"
                                                class="w-full px-1 py-1 text-xs rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                                                <option value="vnd"
                                                    <?php echo e(($item['discount_type'] ?? 'vnd') == 'vnd' ? 'selected' : ''); ?>>
                                                    VNĐ</option>
                                                <option value="percent"
                                                    <?php echo e(($item['discount_type'] ?? 'vnd') == 'percent' ? 'selected' : ''); ?>>
                                                    %</option>
                                            </select>
                                        </div>

                                        
                                        <div class="w-24 text-right">
                                            <div class="text-gray-900 dark:text-white font-bold text-sm">
                                                <?php echo e(number_format($item['price'], 0, ',', '.')); ?>

                                            </div>
                                            <!--[if BLOCK]><![endif]--><?php if(isset($item['discount_amount']) && $item['discount_amount'] > 0): ?>
                                                <?php
                                                    $discountValue =
                                                        ($item['discount_type'] ?? 'vnd') === 'percent'
                                                            ? ($item['price'] * $item['discount_amount']) / 100
                                                            : $item['discount_amount'];
                                                    $finalPrice = $item['price'] - $discountValue;
                                                ?>
                                                <div class="text-red-500 text-xs">
                                                    -<?php echo e(($item['discount_type'] ?? 'vnd') === 'percent' ? $item['discount_amount'] . '%' : number_format($discountValue, 0, ',', '.')); ?>

                                                </div>
                                                <div class="text-green-600 dark:text-green-400 font-bold text-sm">
                                                    <?php echo e(number_format($finalPrice, 0, ',', '.')); ?>

                                                </div>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    <?php else: ?>
                        <div class="text-center py-8">
                            <div class="text-gray-500 dark:text-gray-400 text-lg">Chưa có chương trình nào được chọn
                            </div>
                            <div class="text-gray-400 dark:text-gray-500 text-sm mt-1">Hãy chọn chương trình từ danh
                                sách bên trên</div>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>

            
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm flex flex-col h-full">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-6 flex items-center flex-shrink-0">
                    💳 Thanh toán
                </h2>

                
                <div class="mb-6 flex-shrink-0">
                    <h3 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">👨‍🎓 Chọn học sinh</h3>

                    <!--[if BLOCK]><![endif]--><?php if($selectedStudent): ?>
                        
                        <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="w-10 h-10 bg-green-100 dark:bg-green-800 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-green-900 dark:text-green-100 font-medium">
                                            <?php echo e($selectedStudent['name']); ?></div>
                                        <div class="text-green-700 dark:text-green-300 text-sm">Mã số:
                                            <?php echo e($selectedStudent['account_code']); ?></div>
                                    </div>
                                </div>
                                <button wire:click="clearStudentSelection"
                                    class="cursor-pointer text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 transition-colors duration-200 p-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    <?php else: ?>
                        
                        <div class="space-y-3">
                            <input type="text" wire:model.live="searchStudent"
                                placeholder="Tìm kiếm học sinh theo tên hoặc mã số..."
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300">

                            
                            <!--[if BLOCK]><![endif]--><?php if(count($filteredStudents) > 0): ?>
                                <div class="max-h-35 overflow-y-auto space-y-2">
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $filteredStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div
                                            class=" bg-gray-50 dark:bg-gray-700 rounded-lg p-3 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors duration-200">
                                            <button wire:click="selectStudent(<?php echo e($student['id']); ?>)"
                                                class="cursor-pointer w-full flex items-center space-x-3 text-left">
                                                <div
                                                    class="w-8 h-8 bg-blue-100 dark:bg-blue-800 rounded-full flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-blue-600 dark:text-blue-400"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="text-gray-900 dark:text-white font-medium text-sm">
                                                        <?php echo e($student['name']); ?></div>
                                                    <div class="text-gray-600 dark:text-gray-400 text-xs">Mã số:
                                                        <?php echo e($student['account_code']); ?></div>
                                                </div>
                                                <div class="text-blue-600 dark:text-blue-400">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                            <?php elseif($searchStudent && count($filteredStudents) == 0): ?>
                                <div class="text-center py-4">
                                    <div class="text-gray-500 dark:text-gray-400 text-sm">Không tìm thấy học sinh nào
                                    </div>
                                    <div class="text-gray-400 dark:text-gray-500 text-xs mt-1">Hãy thử tìm kiếm với từ
                                        khóa khác</div>
                                </div>
                            <?php else: ?>
                                <div class="text-center py-4">
                                    <div class="text-gray-500 dark:text-gray-400 text-sm">Nhập tên học sinh để tìm kiếm
                                    </div>
                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                
                <div class="space-y-4 mb-6 flex-1 overflow-y-auto">
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-700 dark:text-gray-300 font-medium">Tổng tiền:</span>
                            <span
                                class="text-gray-900 dark:text-white font-bold text-lg"><?php echo e(number_format($totalAmount, 0, ',', '.')); ?>

                                VNĐ</span>
                        </div>

                        
                        <?php
                            $totalItemDiscounts = 0;
                            foreach ($selectedItems as $item) {
                                if (isset($item['discount_amount']) && $item['discount_amount'] > 0) {
                                    if (($item['discount_type'] ?? 'vnd') === 'percent') {
                                        $totalItemDiscounts += ($item['price'] * $item['discount_amount']) / 100;
                                    } else {
                                        $totalItemDiscounts += $item['discount_amount'];
                                    }
                                }
                            }
                        ?>

                        <!--[if BLOCK]><![endif]--><?php if($totalItemDiscounts > 0): ?>
                            <div class="mb-2">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700 dark:text-gray-300 font-medium">Giảm giá từng khóa
                                        học:</span>
                                    <span class="text-red-600 dark:text-red-400 font-bold">
                                        -<?php echo e(number_format($totalItemDiscounts, 0, ',', '.')); ?> VNĐ
                                    </span>
                                </div>
                            </div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                        <div class="pt-2">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-900 dark:text-white font-bold text-lg">Thành tiền:</span>
                                <span
                                    class="text-blue-600 dark:text-blue-400 font-bold text-xl"><?php echo e(number_format($finalAmount, 0, ',', '.')); ?>

                                    VNĐ</span>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="mb-6">
                    <label class="block text-gray-700 dark:text-gray-300 font-medium mb-3">💳 Phương thức thanh
                        toán</label>
                    <select wire:model="paymentMethod" wire:change="paymentMethodChanged"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300">
                        <option value="cash">💵 Tiền mặt</option>
                        <option value="bank_transfer">🏦 Chuyển khoản</option>
                    </select>
                </div>

                
                <!--[if BLOCK]><![endif]--><?php if($paymentMethod === 'bank_transfer'): ?>
                    <div class="mb-6">
                        <label class="block text-gray-700 dark:text-gray-300 font-medium mb-3">🏦 Chọn tài khoản ngân
                            hàng</label>
                        <div class="space-y-3">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label
                                    class="flex items-center p-3 rounded-lg cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200 <?php echo e($selectedBankId == $bank['id'] ? 'bg-blue-50 dark:bg-blue-900/20' : ''); ?>">
                                    <input type="radio" wire:model="selectedBankId" value="<?php echo e($bank['id']); ?>" wire:change="selectedBankChanged"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <div class="ml-3 flex-1">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">
                                                    <?php echo e($bank['bank_name']); ?>

                                                </div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                                    <?php echo e($bank['account_number']); ?> - <?php echo e($bank['account_name']); ?>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </label>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                            <!--[if BLOCK]><![endif]--><?php if(count($banks) == 0): ?>
                                <div class="text-center py-4 text-gray-500 dark:text-gray-400">
                                    Không có tài khoản ngân hàng nào đang hoạt động
                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                
                <div class="mb-6">
                    <label class="block text-gray-700 dark:text-gray-300 font-medium mb-3">📝 Ghi chú</label>
                    <textarea wire:model="note" rows="3" placeholder="Nhập ghi chú (tùy chọn)..."
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 resize-none"></textarea>
                </div>

                
                <div class="space-y-3">
                    
                    <button wire:click="processPayment" <?php if(count($selectedItems) == 0 || !$selectedStudent || ($paymentMethod === 'bank_transfer' && !$selectedBankId)): ?> disabled <?php endif; ?>
                        class="cursor-pointer w-full bg-blue-600 hover:bg-blue-700 disabled:bg-gray-400 disabled:cursor-not-allowed text-white font-bold py-4 px-6 rounded-lg transition-all duration-300 flex items-center justify-center">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <!--[if BLOCK]><![endif]--><?php if(!$selectedStudent): ?>
                            Chọn học sinh
                        <?php elseif(count($selectedItems) == 0): ?>
                            Chọn chương trình
                        <?php elseif($paymentMethod === 'bank_transfer' && !$selectedBankId): ?>
                            Chọn tài khoản ngân hàng
                        <?php else: ?>
                            Xác nhận thanh toán
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </button>

                </div>
            </div>
        </div>
    </div>

        
        <!--[if BLOCK]><![endif]--><?php if($selectedStudent): ?>
        <div class="mt-8 bg-white dark:bg-gray-800 rounded-lg p-4 shadow-sm flex-shrink-0">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    📋 Lịch sử giao dịch của <?php echo e($selectedStudent['name']); ?>

                </h3>

                <!--[if BLOCK]><![endif]--><?php if(count($transactionHistory) > 0): ?>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Chương trình
                                    </th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Mùa học
                                    </th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Số tiền
                                    </th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Phương thức
                                    </th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Trạng thái
                                    </th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Ngày tạo
                                    </th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        QR thanh toán
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-600">
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $transactionHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                            <?php echo e($transaction['program']['name'] ?? 'Đồng phục'); ?>

                                        </td>
                                        <td class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                            <?php echo e($transaction['season']['name'] ?? '--'); ?>

                                        </td>
                                        <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-white">
                                            <?php echo e(number_format($transaction['price'], 0, ',', '.')); ?> VNĐ
                                        </td>
                                        <td class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                            <!--[if BLOCK]><![endif]--><?php if($transaction['payment_method'] === 'cash'): ?>
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                    💵 Tiền mặt
                                                </span>
                                            <?php else: ?>
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                                    🏦 Chuyển khoản
                                                </span>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <!--[if BLOCK]><![endif]--><?php if($transaction['status'] === 'pending'): ?>
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">
                                                    ⏳ Chờ xử lý
                                                </span>
                                            <?php elseif($transaction['status'] === 'paid'): ?>
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                    ✅ Hoàn thành
                                                </span>
                                            <?php else: ?>
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
                                                    ❌ Hủy bỏ
                                                </span>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </td>
                                        <td class="px-4 py-3 text-sm text-gray-500 dark:text-gray-400">
                                            <?php echo e($transaction['created_at_formatted']); ?>

                                        </td>
                                        <td class="px-4 py-3 text-sm text-gray-500 dark:text-gray-400">
                                            <!--[if BLOCK]><![endif]--><?php if($transaction['payment_method'] === 'bank_transfer'): ?>
                                                <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','variant' => 'primary','icon' => 'qr-code','wire:click' => 'showQrCode('.e($transaction['id']).')','class' => 'cursor-pointer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'primary','icon' => 'qr-code','wire:click' => 'showQrCode('.e($transaction['id']).')','class' => 'cursor-pointer']); ?>
                                                    QR Code
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="text-center py-2">
                        <div class="text-gray-500 dark:text-gray-400">
                            <svg class="w-12 h-12 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            <p class="text-lg font-medium">Chưa có giao dịch nào</p>
                            <p class="text-sm">Học sinh này chưa có lịch sử giao dịch nào trong hệ thống.</p>
                        </div>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/serial-port-manager.js')); ?>"></script>
    <script>
        // Tự động khởi tạo và gửi lệnh chuyển khoản
        document.addEventListener('mainMenuQRCode', function() {
            window.serialPortManager.mainMenuQRCode();
        });

        document.addEventListener('process-payment', function(qrCode) {
            window.serialPortManager.processPayment(qrCode);
        });

        document.addEventListener('turnOnBankTransfer', function() {
            window.serialPortManager.turnOnBankTransfer();
        });

        document.addEventListener('turnOffQRCode', function() {
            window.serialPortManager.turnOffQRCode();
        });

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/finance/tuition/tuitions-payment.blade.php ENDPATH**/ ?>