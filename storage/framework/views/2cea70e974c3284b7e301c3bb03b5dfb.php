<div class="relative mb-4 w-full">

    
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <?php if (isset($component)) { $__componentOriginal1a2aab62646bbf4070a26cfe0540f0d4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a2aab62646bbf4070a26cfe0540f0d4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.banknotes','data' => ['class' => 'size-12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.banknotes'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1a2aab62646bbf4070a26cfe0540f0d4)): ?>
<?php $attributes = $__attributesOriginal1a2aab62646bbf4070a26cfe0540f0d4; ?>
<?php unset($__attributesOriginal1a2aab62646bbf4070a26cfe0540f0d4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1a2aab62646bbf4070a26cfe0540f0d4)): ?>
<?php $component = $__componentOriginal1a2aab62646bbf4070a26cfe0540f0d4; ?>
<?php unset($__componentOriginal1a2aab62646bbf4070a26cfe0540f0d4); ?>
<?php endif; ?>
                    </div>
                    <div>
                        <h1 class="header-title">Lịch sử đóng học phí</h1>
                        <p class="header-subtitle">Quản lý và theo dõi lịch sử thanh toán học phí</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="<?php echo e(route('dashboard')); ?>">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Lịch sử đóng học phí</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <div class="header-counter">
                    <span><?php echo e($tuitions->count()); ?> giao dịch</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
                    <button wire:click="loadTuitions" class="bg-blue-600 hover:bg-blue-700 text-white px-4 sm:px-6 py-2 sm:py-3 rounded-lg font-medium transition-all duration-300 flex items-center justify-center space-x-2 w-full sm:w-auto">
                        <?php if (isset($component)) { $__componentOriginal18ce857dfc449fdd246010f7208cb6d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18ce857dfc449fdd246010f7208cb6d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.arrow-path','data' => ['class' => 'w-4 h-4 sm:w-5 sm:h-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.arrow-path'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 sm:w-5 sm:h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18ce857dfc449fdd246010f7208cb6d5)): ?>
<?php $attributes = $__attributesOriginal18ce857dfc449fdd246010f7208cb6d5; ?>
<?php unset($__attributesOriginal18ce857dfc449fdd246010f7208cb6d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18ce857dfc449fdd246010f7208cb6d5)): ?>
<?php $component = $__componentOriginal18ce857dfc449fdd246010f7208cb6d5; ?>
<?php unset($__componentOriginal18ce857dfc449fdd246010f7208cb6d5); ?>
<?php endif; ?>
                        <span class="hidden sm:inline">Làm mới</span>
                        <span class="sm:hidden">Mới</span>
                    </button>
                    <button wire:click="clearFilters" class="bg-red-600 hover:bg-red-700 text-white px-4 sm:px-6 py-2 sm:py-3 rounded-lg font-medium transition-all duration-300 flex items-center justify-center space-x-2 w-full sm:w-auto">
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
                        <span class="hidden sm:inline">Xóa bộ lọc</span>
                        <span class="sm:hidden">Xóa lọc</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bộ lọc -->
    <div class="theme-card-pink mt-4 mb-4">

        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-3">
                <!-- Tìm kiếm theo tên -->
                <div>
                    <label class="card-label">Tìm kiếm</label>
                    <input type="text" wire:model.live="search" placeholder="Tên hoặc mã học viên..."
                        class="card-input">
                </div>

                <!-- Lọc theo cơ sở -->
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

                <!-- Lọc theo chương trình -->
                <div>
                    <label class="card-label">Chương trình</label>
                    <select wire:model.live="filterProgramId" class="card-input">
                        <option value="">Tất cả chương trình</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($program->id); ?>"><?php echo e($program->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>

                <!-- Lọc theo học kỳ -->
                <div>
                    <label class="card-label">Học kỳ</label>
                    <select wire:model.live="filterSeasonId" class="card-input">
                        <option value="">Tất cả học kỳ</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($season->id); ?>"><?php echo e($season->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>

                <!-- Lọc theo phương thức thanh toán -->
                <div>
                    <label class="card-label">Phương thức</label>
                    <select wire:model.live="filterPaymentMethod" class="card-input">
                        <option value="">Tất cả phương thức</option>
                        <option value="cash">Tiền mặt</option>
                        <option value="bank_transfer">Chuyển khoản</option>
                    </select>
                </div>

                <!-- Lọc theo thời gian -->
                <div>
                    <label class="card-label">Thời gian</label>
                    <select wire:model.live="filterMonth" class="card-input">
                        <option value="">Tất cả thời gian</option>
                        <option value="this_month">Tháng này</option>
                        <option value="last_month">Tháng trước</option>
                        <option value="this_year">Năm nay</option>
                        <option value="last_year">Năm trước</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Bảng lịch sử đóng tiền -->
    <div class="mt-6">
        <div class="theme-table-pink">
            
            <div class="hidden md:block overflow-x-auto max-h-[calc(100vh-300px)]">
                <table>
                    <thead class="sticky top-0 z-10">
                        <tr>
                            <th class="text-center w-16">STT</th>
                            <th>Học viên</th>
                            <th class="hidden lg:table-cell">Chương trình</th>
                            <th class="text-center hidden md:table-cell">Học kỳ</th>
                            <th class="text-center hidden xl:table-cell">Nôi dung</th>
                            <th class="text-center">Số tiền</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center hidden sm:table-cell">Phương thức</th>
                            <th class="text-center hidden 2xl:table-cell">Ngày đóng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $tuitions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tuition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr wire:key="tuition-desktop-<?php echo e($tuition->id); ?>">
                                <td class="text-center font-medium">
                                    <?php echo e($index + 1); ?>

                                </td>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="<?php echo e($tuition->user->detail?->avatar ?? asset('storage/images/avatars/default-avatar.png')); ?>"
                                            alt="<?php echo e($tuition->user->name); ?>">
                                        <div>
                                            <div class="font-medium"><?php echo e($tuition->user->name); ?></div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                                <?php echo e($tuition->user->account_code); ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="hidden lg:table-cell">
                                    <div class="font-medium">
                                        <?php echo e($tuition->program->name ?? 'N/A'); ?>

                                    </div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">
                                        <?php echo e($tuition->program->english_name ?? ''); ?>

                                    </div>
                                </td>
                                <td class="text-center hidden md:table-cell">
                                    <?php echo e($tuition->season->code ?? 'N/A'); ?>

                                </td>
                                <td class="text-center hidden xl:table-cell">
                                    <div class="font-mono">
                                        <?php echo e($tuition->note ?? 'Chưa có'); ?>

                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="font-bold text-green-600 dark:text-green-400">
                                        <?php echo e($tuition->price_formatted); ?> VNĐ
                                    </div>
                                </td>
                                <td class="text-center">
                                    <!--[if BLOCK]><![endif]--><?php switch($tuition->status):
                                        case ('paid'): ?>
                                            <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['color' => 'green','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'green','size' => 'sm']); ?>Đã thanh toán <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $attributes = $__attributesOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $component = $__componentOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__componentOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
                                        <?php break; ?>

                                        <?php case ('pending'): ?>
                                            <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['color' => 'yellow','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'yellow','size' => 'sm']); ?>Chờ xử lý <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $attributes = $__attributesOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $component = $__componentOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__componentOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
                                        <?php break; ?>

                                        <?php case ('failed'): ?>
                                            <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['color' => 'red','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'red','size' => 'sm']); ?>Thất bại <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $attributes = $__attributesOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $component = $__componentOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__componentOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
                                        <?php break; ?>

                                        <?php default: ?>
                                            <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['color' => 'gray','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'gray','size' => 'sm']); ?><?php echo e($tuition->status); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $attributes = $__attributesOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $component = $__componentOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__componentOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
                                    <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
                                </td>
                                <td class="text-center hidden sm:table-cell">
                                    <!--[if BLOCK]><![endif]--><?php switch($tuition->payment_method):
                                        case ('cash'): ?>
                                            <div class="flex items-center justify-center">
                                                <?php if (isset($component)) { $__componentOriginal1a2aab62646bbf4070a26cfe0540f0d4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a2aab62646bbf4070a26cfe0540f0d4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.banknotes','data' => ['class' => 'size-4 mr-1 text-green-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.banknotes'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 mr-1 text-green-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1a2aab62646bbf4070a26cfe0540f0d4)): ?>
<?php $attributes = $__attributesOriginal1a2aab62646bbf4070a26cfe0540f0d4; ?>
<?php unset($__attributesOriginal1a2aab62646bbf4070a26cfe0540f0d4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1a2aab62646bbf4070a26cfe0540f0d4)): ?>
<?php $component = $__componentOriginal1a2aab62646bbf4070a26cfe0540f0d4; ?>
<?php unset($__componentOriginal1a2aab62646bbf4070a26cfe0540f0d4); ?>
<?php endif; ?>
                                                <span class="text-xs">Tiền mặt</span>
                                            </div>
                                        <?php break; ?>

                                        <?php case ('bank_transfer'): ?>
                                            <div class="flex items-center justify-center">
                                                <?php if (isset($component)) { $__componentOriginal6e0b21ef9231e6606d7ac9c0c02dc146 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e0b21ef9231e6606d7ac9c0c02dc146 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.credit-card','data' => ['class' => 'size-4 mr-1 text-blue-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.credit-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 mr-1 text-blue-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6e0b21ef9231e6606d7ac9c0c02dc146)): ?>
<?php $attributes = $__attributesOriginal6e0b21ef9231e6606d7ac9c0c02dc146; ?>
<?php unset($__attributesOriginal6e0b21ef9231e6606d7ac9c0c02dc146); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6e0b21ef9231e6606d7ac9c0c02dc146)): ?>
<?php $component = $__componentOriginal6e0b21ef9231e6606d7ac9c0c02dc146; ?>
<?php unset($__componentOriginal6e0b21ef9231e6606d7ac9c0c02dc146); ?>
<?php endif; ?>
                                                <span class="text-xs">Chuyển khoản</span>
                                            </div>
                                        <?php break; ?>

                                        <?php default: ?>
                                            <span class="text-xs"><?php echo e($tuition->payment_method); ?></span>
                                    <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
                                </td>
                                <td class="text-center hidden 2xl:table-cell">
                                    <div class="flex flex-col">
                                        <span class="font-medium"><?php echo e($tuition->created_at->format('d/m/Y')); ?></span>
                                        <span class="text-xs"><?php echo e($tuition->created_at->format('H:i:s')); ?></span>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="9" class="text-center py-12">
                                        <div class="flex flex-col items-center">
                                            <?php if (isset($component)) { $__componentOriginal74697c151ccb8418c53b50a995b31225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74697c151ccb8418c53b50a995b31225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.document-text','data' => ['class' => 'size-12 text-gray-400 dark:text-gray-500 mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.document-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12 text-gray-400 dark:text-gray-500 mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74697c151ccb8418c53b50a995b31225)): ?>
<?php $attributes = $__attributesOriginal74697c151ccb8418c53b50a995b31225; ?>
<?php unset($__attributesOriginal74697c151ccb8418c53b50a995b31225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74697c151ccb8418c53b50a995b31225)): ?>
<?php $component = $__componentOriginal74697c151ccb8418c53b50a995b31225; ?>
<?php unset($__componentOriginal74697c151ccb8418c53b50a995b31225); ?>
<?php endif; ?>
                                            <h3 class="text-lg font-medium text-gray-500 dark:text-gray-400 mb-2">
                                                Chưa có lịch sử đóng tiền
                                            </h3>
                                            <p class="text-gray-400 dark:text-gray-500">
                                                Học viên chưa thực hiện giao dịch đóng học phí nào
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                </div>

            
            <div class="md:hidden space-y-3 max-h-[calc(100vh-300px)] overflow-y-auto">
                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $tuitions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tuition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="bg-white rounded-lg border border-gray-200 shadow-sm" 
                         x-data="{ expanded: false }" 
                         wire:key="tuition-mobile-<?php echo e($tuition->id); ?>">
                        
                        
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900"><?php echo e($tuition->user->name); ?></div>
                                    <div class="text-sm text-gray-500">ID: <?php echo e($tuition->user->account_code); ?></div>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <!--[if BLOCK]><![endif]--><?php switch($tuition->status):
                                    case ('paid'): ?>
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            ✅ Đã thanh toán
                                        </span>
                                    <?php break; ?>
                                    <?php case ('pending'): ?>
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            ⏳ Chờ xử lý
                                        </span>
                                    <?php break; ?>
                                    <?php case ('failed'): ?>
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            ❌ Thất bại
                                        </span>
                                    <?php break; ?>
                                    <?php default: ?>
                                        <span class="px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                            <?php echo e($tuition->status); ?>

                                        </span>
                                <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
                                
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
                                    <span class="text-sm font-medium text-gray-600">Chương trình:</span>
                                    <div class="text-right">
                                        <div class="text-sm text-gray-900"><?php echo e($tuition->program->name ?? 'N/A'); ?></div>
                                        <!--[if BLOCK]><![endif]--><?php if($tuition->program->english_name): ?>
                                            <div class="text-xs text-gray-500"><?php echo e($tuition->program->english_name); ?></div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>

                                
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Học kỳ:</span>
                                    <span class="text-sm text-gray-900"><?php echo e($tuition->season->code ?? 'N/A'); ?></span>
                                </div>

                                
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Nội dung:</span>
                                    <span class="text-sm text-gray-900 font-mono"><?php echo e($tuition->note ?? 'Chưa có'); ?></span>
                                </div>

                                
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Số tiền:</span>
                                    <span class="text-sm font-bold text-green-600"><?php echo e($tuition->price_formatted); ?> VNĐ</span>
                                </div>

                                
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Phương thức:</span>
                                    <!--[if BLOCK]><![endif]--><?php switch($tuition->payment_method):
                                        case ('cash'): ?>
                                            <div class="flex items-center space-x-1">
                                                <?php if (isset($component)) { $__componentOriginal1a2aab62646bbf4070a26cfe0540f0d4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a2aab62646bbf4070a26cfe0540f0d4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.banknotes','data' => ['class' => 'size-4 text-green-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.banknotes'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-green-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1a2aab62646bbf4070a26cfe0540f0d4)): ?>
<?php $attributes = $__attributesOriginal1a2aab62646bbf4070a26cfe0540f0d4; ?>
<?php unset($__attributesOriginal1a2aab62646bbf4070a26cfe0540f0d4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1a2aab62646bbf4070a26cfe0540f0d4)): ?>
<?php $component = $__componentOriginal1a2aab62646bbf4070a26cfe0540f0d4; ?>
<?php unset($__componentOriginal1a2aab62646bbf4070a26cfe0540f0d4); ?>
<?php endif; ?>
                                                <span class="text-sm text-gray-900">Tiền mặt</span>
                                            </div>
                                        <?php break; ?>
                                        <?php case ('bank_transfer'): ?>
                                            <div class="flex items-center space-x-1">
                                                <?php if (isset($component)) { $__componentOriginal6e0b21ef9231e6606d7ac9c0c02dc146 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e0b21ef9231e6606d7ac9c0c02dc146 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.credit-card','data' => ['class' => 'size-4 text-blue-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.credit-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 text-blue-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6e0b21ef9231e6606d7ac9c0c02dc146)): ?>
<?php $attributes = $__attributesOriginal6e0b21ef9231e6606d7ac9c0c02dc146; ?>
<?php unset($__attributesOriginal6e0b21ef9231e6606d7ac9c0c02dc146); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6e0b21ef9231e6606d7ac9c0c02dc146)): ?>
<?php $component = $__componentOriginal6e0b21ef9231e6606d7ac9c0c02dc146; ?>
<?php unset($__componentOriginal6e0b21ef9231e6606d7ac9c0c02dc146); ?>
<?php endif; ?>
                                                <span class="text-sm text-gray-900">Chuyển khoản</span>
                                            </div>
                                        <?php break; ?>
                                        <?php default: ?>
                                            <span class="text-sm text-gray-900"><?php echo e($tuition->payment_method); ?></span>
                                    <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>

                                
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Trạng thái:</span>
                                    <!--[if BLOCK]><![endif]--><?php switch($tuition->status):
                                        case ('paid'): ?>
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                ✅ Đã thanh toán
                                            </span>
                                        <?php break; ?>
                                        <?php case ('pending'): ?>
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                ⏳ Chờ xử lý
                                            </span>
                                        <?php break; ?>
                                        <?php case ('failed'): ?>
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                ❌ Thất bại
                                            </span>
                                        <?php break; ?>
                                        <?php default: ?>
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                <?php echo e($tuition->status); ?>

                                            </span>
                                    <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>

                                
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium text-gray-600">Ngày đóng:</span>
                                    <div class="text-right">
                                        <div class="text-sm text-gray-900 font-medium"><?php echo e($tuition->created_at->format('d/m/Y')); ?></div>
                                        <div class="text-xs text-gray-500"><?php echo e($tuition->created_at->format('H:i:s')); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="bg-white rounded-lg border border-gray-200 p-8">
                        <div class="flex flex-col items-center">
                            <?php if (isset($component)) { $__componentOriginal74697c151ccb8418c53b50a995b31225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74697c151ccb8418c53b50a995b31225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.document-text','data' => ['class' => 'size-12 text-gray-400 dark:text-gray-500 mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.document-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12 text-gray-400 dark:text-gray-500 mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74697c151ccb8418c53b50a995b31225)): ?>
<?php $attributes = $__attributesOriginal74697c151ccb8418c53b50a995b31225; ?>
<?php unset($__attributesOriginal74697c151ccb8418c53b50a995b31225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74697c151ccb8418c53b50a995b31225)): ?>
<?php $component = $__componentOriginal74697c151ccb8418c53b50a995b31225; ?>
<?php unset($__componentOriginal74697c151ccb8418c53b50a995b31225); ?>
<?php endif; ?>
                            <h3 class="text-lg font-medium text-gray-500 dark:text-gray-400 mb-2">
                                Chưa có lịch sử đóng tiền
                            </h3>
                            <p class="text-gray-400 dark:text-gray-500">
                                Học viên chưa thực hiện giao dịch đóng học phí nào
                            </p>
                        </div>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>

        <!--[if BLOCK]><![endif]--><?php if($tuitions->count() > 0): ?>
            <div class="theme-card-pink mt-4">
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
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Tổng kết</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Thống kê giao dịch</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-4 border border-green-200 dark:border-green-800">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-green-100 dark:bg-green-800 rounded-lg flex items-center justify-center">
                                    <?php if (isset($component)) { $__componentOriginal74697c151ccb8418c53b50a995b31225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74697c151ccb8418c53b50a995b31225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.document-text','data' => ['class' => 'w-5 h-5 text-green-600 dark:text-green-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.document-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-green-600 dark:text-green-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74697c151ccb8418c53b50a995b31225)): ?>
<?php $attributes = $__attributesOriginal74697c151ccb8418c53b50a995b31225; ?>
<?php unset($__attributesOriginal74697c151ccb8418c53b50a995b31225); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74697c151ccb8418c53b50a995b31225)): ?>
<?php $component = $__componentOriginal74697c151ccb8418c53b50a995b31225; ?>
<?php unset($__componentOriginal74697c151ccb8418c53b50a995b31225); ?>
<?php endif; ?>
                                </div>
                                <div>
                                    <div class="text-sm text-green-600 dark:text-green-400 font-medium">Tổng giao dịch</div>
                                    <div class="text-2xl font-bold text-green-700 dark:text-green-300"><?php echo e($tuitions->count()); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-blue-50 dark:bg-blue-900/20 rounded-lg p-4 border border-blue-200 dark:border-blue-800">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-800 rounded-lg flex items-center justify-center">
                                    <?php if (isset($component)) { $__componentOriginal970eea507e21d10a438cf9d4525d45dc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal970eea507e21d10a438cf9d4525d45dc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.currency-dollar','data' => ['class' => 'w-5 h-5 text-blue-600 dark:text-blue-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.currency-dollar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-blue-600 dark:text-blue-400']); ?>
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
                                    <div class="text-sm text-blue-600 dark:text-blue-400 font-medium">Tổng tiền đã thanh toán</div>
                                    <div class="text-2xl font-bold text-blue-700 dark:text-blue-300">
                                        <?php echo e(number_format($tuitions->where('status', 'paid')->sum('price'), 0, ',', '.')); ?> VNĐ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-orange-50 dark:bg-orange-900/20 rounded-lg p-4 border border-orange-200 dark:border-orange-800">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-orange-100 dark:bg-orange-800 rounded-lg flex items-center justify-center">
                                    <?php if (isset($component)) { $__componentOriginal7f0e8d69add49581695c1337b3f85fff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7f0e8d69add49581695c1337b3f85fff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.exclamation-triangle','data' => ['class' => 'w-5 h-5 text-orange-600 dark:text-orange-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.exclamation-triangle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-orange-600 dark:text-orange-400']); ?>
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
                                    <div class="text-sm text-orange-600 dark:text-orange-400 font-medium">Tổng công nợ</div>
                                    <div class="text-2xl font-bold text-orange-700 dark:text-orange-300">
                                        <?php echo e(number_format($tuitions->where('status', 'pending')->sum('price'), 0, ',', '.')); ?> VNĐ
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/finance/tuition/tuitions-history.blade.php ENDPATH**/ ?>