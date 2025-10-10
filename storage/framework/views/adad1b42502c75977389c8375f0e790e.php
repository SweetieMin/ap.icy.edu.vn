<section class="w-full">
    <?php echo $__env->make('partials.settings-heading', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php if (isset($component)) { $__componentOriginal951a5936e8413b65cd052beecc1fba57 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal951a5936e8413b65cd052beecc1fba57 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.settings.layout','data' => ['heading' => __('Nhật ký đăng nhập'),'subheading' => __('Xem lịch sử đăng nhập và hoạt động bảo mật của tài khoản')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('settings.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Nhật ký đăng nhập')),'subheading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Xem lịch sử đăng nhập và hoạt động bảo mật của tài khoản'))]); ?>
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <!-- Total Logins -->
            <div class="theme-card-pink">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <?php if (isset($component)) { $__componentOriginal99e1287553cbf55f278732425b3f00bd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal99e1287553cbf55f278732425b3f00bd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.check-circle','data' => ['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.check-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal99e1287553cbf55f278732425b3f00bd)): ?>
<?php $attributes = $__attributesOriginal99e1287553cbf55f278732425b3f00bd; ?>
<?php unset($__attributesOriginal99e1287553cbf55f278732425b3f00bd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99e1287553cbf55f278732425b3f00bd)): ?>
<?php $component = $__componentOriginal99e1287553cbf55f278732425b3f00bd; ?>
<?php unset($__componentOriginal99e1287553cbf55f278732425b3f00bd); ?>
<?php endif; ?>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Đăng nhập thành công</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Số lần đăng nhập thành công</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-pink-600 dark:text-pink-400 mb-2"><?php echo e($stats['total_logins']); ?></div>
                    </div>
                </div>
            </div>

            <!-- Failed Attempts -->
            <div class="theme-card-pink">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <?php if (isset($component)) { $__componentOriginalc684311ed41ad32bac1c158a93d68bb7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc684311ed41ad32bac1c158a93d68bb7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.x-circle','data' => ['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.x-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc684311ed41ad32bac1c158a93d68bb7)): ?>
<?php $attributes = $__attributesOriginalc684311ed41ad32bac1c158a93d68bb7; ?>
<?php unset($__attributesOriginalc684311ed41ad32bac1c158a93d68bb7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc684311ed41ad32bac1c158a93d68bb7)): ?>
<?php $component = $__componentOriginalc684311ed41ad32bac1c158a93d68bb7; ?>
<?php unset($__componentOriginalc684311ed41ad32bac1c158a93d68bb7); ?>
<?php endif; ?>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Thất bại</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Số lần đăng nhập thất bại</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-pink-600 dark:text-pink-400 mb-2"><?php echo e($stats['failed_attempts']); ?></div>
                    </div>
                </div>
            </div>

            <!-- Unique Devices -->
            <div class="theme-card-pink">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <?php if (isset($component)) { $__componentOriginalf08af65e6f8e1abc9ae6e66c02da0bd2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf08af65e6f8e1abc9ae6e66c02da0bd2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.device-phone-mobile','data' => ['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.device-phone-mobile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf08af65e6f8e1abc9ae6e66c02da0bd2)): ?>
<?php $attributes = $__attributesOriginalf08af65e6f8e1abc9ae6e66c02da0bd2; ?>
<?php unset($__attributesOriginalf08af65e6f8e1abc9ae6e66c02da0bd2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf08af65e6f8e1abc9ae6e66c02da0bd2)): ?>
<?php $component = $__componentOriginalf08af65e6f8e1abc9ae6e66c02da0bd2; ?>
<?php unset($__componentOriginalf08af65e6f8e1abc9ae6e66c02da0bd2); ?>
<?php endif; ?>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Thiết bị</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Số thiết bị đã sử dụng</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-pink-600 dark:text-pink-400 mb-2"><?php echo e($stats['unique_devices']); ?></div>
                    </div>
                </div>
            </div>

            <!-- Unique IPs -->
            <div class="theme-card-pink">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <?php if (isset($component)) { $__componentOriginale02ab0f625e6b2501fa40e35388d0046 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale02ab0f625e6b2501fa40e35388d0046 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.globe-alt','data' => ['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.globe-alt'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale02ab0f625e6b2501fa40e35388d0046)): ?>
<?php $attributes = $__attributesOriginale02ab0f625e6b2501fa40e35388d0046; ?>
<?php unset($__attributesOriginale02ab0f625e6b2501fa40e35388d0046); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale02ab0f625e6b2501fa40e35388d0046)): ?>
<?php $component = $__componentOriginale02ab0f625e6b2501fa40e35388d0046; ?>
<?php unset($__componentOriginale02ab0f625e6b2501fa40e35388d0046); ?>
<?php endif; ?>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Địa chỉ IP</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Số địa chỉ IP khác nhau</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-pink-600 dark:text-pink-400 mb-2"><?php echo e($stats['unique_ips']); ?></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="theme-card-pink mb-6">
            <div class="card-header">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                        <?php if (isset($component)) { $__componentOriginal87cf6d8ede1904877fb35e9e7cf46326 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal87cf6d8ede1904877fb35e9e7cf46326 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.funnel','data' => ['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.funnel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal87cf6d8ede1904877fb35e9e7cf46326)): ?>
<?php $attributes = $__attributesOriginal87cf6d8ede1904877fb35e9e7cf46326; ?>
<?php unset($__attributesOriginal87cf6d8ede1904877fb35e9e7cf46326); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal87cf6d8ede1904877fb35e9e7cf46326)): ?>
<?php $component = $__componentOriginal87cf6d8ede1904877fb35e9e7cf46326; ?>
<?php unset($__componentOriginal87cf6d8ede1904877fb35e9e7cf46326); ?>
<?php endif; ?>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Bộ lọc tìm kiếm</h3>
                        <p class="text-pink-600 dark:text-pink-400 text-xs">Lọc và tìm kiếm nhật ký đăng nhập</p>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Search -->
                    <div>
                        <label class="card-label">Tìm kiếm</label>
                        <input type="text" wire:model.live="search" placeholder="IP, thiết bị, vị trí..."
                            class="card-input">
                    </div>

                    <!-- Status Filter -->
                    <div>
                        <label class="card-label">Trạng thái</label>
                        <select wire:model.live="filterStatus" class="card-input">
                            <option value="">Tất cả</option>
                            <option value="success">Thành công</option>
                            <option value="failed">Thất bại</option>
                            <option value="blocked">Bị chặn</option>
                            <option value="logout">Đăng xuất</option>
                        </select>
                    </div>

                    <!-- Days Filter -->
                    <div>
                        <label class="card-label">Thời gian</label>
                        <select wire:model.live="filterDays" class="card-input">
                            <option value="7">7 ngày qua</option>
                            <option value="30">30 ngày qua</option>
                            <option value="90">90 ngày qua</option>
                            <option value="">Tất cả</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logs Table -->
        <div class="theme-card-pink">
            <div class="card-header">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                        <?php if (isset($component)) { $__componentOriginal74697c151ccb8418c53b50a995b31225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74697c151ccb8418c53b50a995b31225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.document-text','data' => ['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.document-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']); ?>
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
                        <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Nhật ký đăng nhập</h3>
                        <p class="text-pink-600 dark:text-pink-400 text-xs">Lịch sử hoạt động đăng nhập</p>
                    </div>
                </div>
            </div>
            <div class="table-full-width">
                <div class="theme-table-pink">
                    <div class="overflow-x-auto">
                        <table>
                            <thead>
                                <tr>
                                    <th>Trạng thái</th>
                                    <th>Thời gian</th>
                                    <th>Địa chỉ IP</th>
                                    <th>Trình duyệt & Hệ điều hành</th>
                                    <th>Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td>
                                    <?php switch($log->status):
                                        case ('success'): ?>
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Thành công
                                            </span>
                                        <?php break; ?>

                                        <?php case ('failed'): ?>
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Thất bại
                                            </span>
                                        <?php break; ?>

                                        <?php case ('blocked'): ?>
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Bị chặn
                                            </span>
                                        <?php break; ?>

                                        <?php case ('logout'): ?>
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Đăng xuất
                                            </span>
                                        <?php break; ?>
                                    <?php endswitch; ?>
                                </td>
                                <td>
                                    <div>
                                        <div class="font-medium"><?php echo e($log->login_at->format('d/m/Y H:i:s')); ?></div>
                                        <?php if($log->logout_at): ?>
                                            <div class="text-xs text-zinc-500 dark:text-zinc-400">
                                                Đăng xuất: <?php echo e($log->logout_at->format('H:i:s')); ?>

                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="truncate max-w-[200px]" title="<?php echo e($log->ip_address); ?>"><?php echo e($log->ip_address); ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="truncate max-w-[200px]" title="<?php echo e($log->device); ?>"><?php echo e($log->device); ?></span>
                                    </div>
                                </td>
                                <td>
                                    <?php if($log->failure_reason): ?>
                                        <?php if(str_contains($log->failure_reason, 'Forced logout')): ?>
                                            <span class="text-orange-600 dark:text-orange-400 flex items-center">
                                                <?php if (isset($component)) { $__componentOriginal7f0e8d69add49581695c1337b3f85fff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7f0e8d69add49581695c1337b3f85fff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.exclamation-triangle','data' => ['class' => 'w-4 h-4 mr-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.exclamation-triangle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1']); ?>
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
                                                Đăng xuất tự động
                                            </span>
                                        <?php else: ?>
                                            <span class="text-red-600 dark:text-red-400"><?php echo e($log->failure_reason); ?></span>
                                        <?php endif; ?>
                                    <?php elseif($log->location): ?>
                                        <span class="text-zinc-600 dark:text-zinc-400"><?php echo e($log->location); ?></span>
                                    <?php else: ?>
                                        <span class="text-zinc-400">-</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="5" class="text-center py-12">
                                        <div class="empty-state flex flex-col items-center">
                                            <?php if (isset($component)) { $__componentOriginal74697c151ccb8418c53b50a995b31225 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74697c151ccb8418c53b50a995b31225 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.document-text','data' => ['class' => 'w-12 h-12 mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.document-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mb-4']); ?>
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
                                            <h3 class="text-lg font-medium mb-2">
                                                Không có nhật ký đăng nhập
                                            </h3>
                                            <p>
                                                Chưa có hoạt động đăng nhập nào được ghi lại với bộ lọc hiện tại.
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <?php if($logs->hasPages()): ?>
            <div class="pagination-container">
                <?php echo e($logs->links()); ?>

            </div>
        <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal951a5936e8413b65cd052beecc1fba57)): ?>
<?php $attributes = $__attributesOriginal951a5936e8413b65cd052beecc1fba57; ?>
<?php unset($__attributesOriginal951a5936e8413b65cd052beecc1fba57); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal951a5936e8413b65cd052beecc1fba57)): ?>
<?php $component = $__componentOriginal951a5936e8413b65cd052beecc1fba57; ?>
<?php unset($__componentOriginal951a5936e8413b65cd052beecc1fba57); ?>
<?php endif; ?>
    </section>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/settings/authentication-logs.blade.php ENDPATH**/ ?>