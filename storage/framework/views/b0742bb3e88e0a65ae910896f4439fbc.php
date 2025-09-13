<div class="relative mb-4 w-full">

    
    <div class="theme-header-pink">
        <div class="flex items-center justify-between">
            <div class="header-content">
                <div class="flex items-center space-x-3 mb-2">
                    <div class="header-icon">
                        <?php if (isset($component)) { $__componentOriginale0880cb6488d85d9ca54288aa080a834 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0880cb6488d85d9ca54288aa080a834 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.academic-cap','data' => ['class' => 'size-12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12']); ?>
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
                        <h1 class="header-title">Xếp lớp học</h1>
                        <p class="header-subtitle">Quản lý việc xếp học viên vào các lớp học</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="<?php echo e(route('dashboard')); ?>">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Xếp lớp học</span>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="header-counter">
                    <span><?php echo e(count($students)); ?> học viên chưa xếp lớp</span>
                </div>
                <div class="header-counter">
                    <span><?php echo e(count($courses)); ?> lớp học có sẵn</span>
                </div>
            </div>
        </div>
    </div>

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

    <?php if(session()->has('success')): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 mx-6 mt-4">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"></path>
                </svg>
                <?php echo e(session('success')); ?>

            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    
    <div class="theme-card-pink mt-4 mb-4">
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-3">
                <div>
                    <label class="card-label">Tìm kiếm học viên</label>
                    <input type="text" wire:model.live="searchStudent" 
                        placeholder="Tìm theo tên hoặc mã số..." class="card-input">
                </div>
                <div>
                    <label class="card-label">Cơ sở</label>
                    <select wire:model.live="filterLocationId" class="card-input">
                        <option value="">Tất cả cơ sở</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($location['id']); ?>"><?php echo e($location['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>
                <div>
                    <label class="card-label">Mùa học</label>
                    <select wire:model.live="filterSeasonId" class="card-input">
                        <option value="">Tất cả mùa học</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($season['id']); ?>"><?php echo e($season['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>
                <div>
                    <label class="card-label">Chương trình</label>
                    <select wire:model.live="filterProgramId" class="card-input">
                        <option value="">Tất cả chương trình</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($program['id']); ?>"><?php echo e($program['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        
        <div class="space-y-4">
            <div class="theme-card-pink">
                <div class="card-header">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                                <?php if (isset($component)) { $__componentOriginal4e4f522adb19cc742fb2b199df7e6c95 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.users','data' => ['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']); ?>
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
                                <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Học viên chưa xếp lớp</h3>
                                <p class="text-pink-600 dark:text-pink-400 text-xs">Học viên đã đóng học phí nhưng chưa được xếp lớp</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button wire:click="selectAllStudents" 
                                class="text-xs bg-blue-100 hover:bg-blue-200 text-blue-800 px-3 py-1 rounded-lg transition-colors">
                                Chọn tất cả
                            </button>
                            <button wire:click="clearStudentSelection" 
                                class="text-xs bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1 rounded-lg transition-colors">
                                Bỏ chọn
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <!--[if BLOCK]><![endif]--><?php if(count($students) > 0): ?>
                        <div class="space-y-2 max-h-96 overflow-y-auto">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex items-center space-x-3 p-3 rounded-lg border border-gray-200 dark:border-gray-700 
                                    <?php echo e(in_array($student->id, $selectedStudents) ? 'bg-blue-50 dark:bg-blue-900/20 border-blue-300' : 'bg-white dark:bg-gray-800'); ?>">
                                    <input type="checkbox" 
                                        wire:click="toggleStudentSelection(<?php echo e($student->id); ?>)"
                                        <?php echo e(in_array($student->id, $selectedStudents) ? 'checked' : ''); ?>

                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    
                                    <div class="flex-1">
                                        <div class="font-medium text-gray-900 dark:text-white"><?php echo e($student->name); ?></div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">
                                            Mã số: <?php echo e($student->account_code); ?> | 
                                            SĐT: <?php echo e($student->phone ?? 'Chưa cập nhật'); ?>

                                        </div>
                                        <div class="text-xs text-gray-400 dark:text-gray-500">
                                            Đóng học phí: <?php echo e(number_format($student->price, 0, ',', '.')); ?> VNĐ
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    <?php else: ?>
                        <div class="text-center py-8">
                            <?php if (isset($component)) { $__componentOriginal4e4f522adb19cc742fb2b199df7e6c95 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e4f522adb19cc742fb2b199df7e6c95 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.users','data' => ['class' => 'w-12 h-12 mx-auto mb-4 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mx-auto mb-4 text-gray-400']); ?>
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
                            <p class="text-lg font-medium text-gray-500 dark:text-gray-400">Không có học viên nào</p>
                            <p class="text-sm text-gray-400 dark:text-gray-500">Tất cả học viên đã được xếp lớp hoặc chưa đóng học phí</p>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>

        
        <div class="space-y-4">
            <div class="theme-card-pink">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
                            <?php if (isset($component)) { $__componentOriginale0880cb6488d85d9ca54288aa080a834 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0880cb6488d85d9ca54288aa080a834 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.academic-cap','data' => ['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-pink-600 dark:text-pink-400']); ?>
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
                            <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Lớp học có sẵn</h3>
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Các lớp học đang hoạt động hoặc sắp mở</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <!--[if BLOCK]><![endif]--><?php if(count($courses) > 0): ?>
                        <div class="space-y-3 max-h-64 overflow-y-auto">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="p-3 rounded-lg border border-gray-200 dark:border-gray-700 
                                    <?php echo e($selectedCourseId == $course->id ? 'bg-green-50 dark:bg-green-900/20 border-green-300' : 'bg-white dark:bg-gray-800'); ?>">
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="radio" 
                                            wire:model="selectedCourseId" 
                                            value="<?php echo e($course->id); ?>"
                                            class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                                        
                                        <div class="flex-1">
                                            <div class="font-medium text-gray-900 dark:text-white"><?php echo e($course->course_name); ?></div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">
                                                <?php echo e($course->subject_name); ?> | <?php echo e($course->location_name); ?>

                                            </div>
                                            <div class="text-xs text-gray-400 dark:text-gray-500">
                                                Mùa: <?php echo e($course->season_name); ?> 
                                                <span class="ml-2 px-2 py-1 rounded-full text-xs 
                                                    <?php echo e($course->season_status === 'ongoing' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'); ?>">
                                                    <?php echo e($course->season_status === 'ongoing' ? 'Đang hoạt động' : 'Sắp mở'); ?>

                                                </span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    <?php else: ?>
                        <div class="text-center py-8">
                            <?php if (isset($component)) { $__componentOriginale0880cb6488d85d9ca54288aa080a834 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0880cb6488d85d9ca54288aa080a834 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.academic-cap','data' => ['class' => 'w-12 h-12 mx-auto mb-4 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mx-auto mb-4 text-gray-400']); ?>
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
                            <p class="text-lg font-medium text-gray-500 dark:text-gray-400">Không có lớp học nào</p>
                            <p class="text-sm text-gray-400 dark:text-gray-500">Không có lớp học nào phù hợp với bộ lọc hiện tại</p>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>

            
            <!--[if BLOCK]><![endif]--><?php if(count($selectedStudents) > 0 && $selectedCourseId): ?>
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
                                <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Xác nhận xếp lớp</h3>
                                <p class="text-pink-600 dark:text-pink-400 text-xs">Xếp <?php echo e(count($selectedStudents)); ?> học viên vào lớp đã chọn</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="bg-blue-50 dark:bg-blue-900/20 rounded-lg p-4 mb-4">
                            <div class="text-sm text-blue-800 dark:text-blue-200">
                                <strong>Học viên đã chọn:</strong> <?php echo e(count($selectedStudents)); ?> người
                            </div>
                            <div class="text-sm text-blue-800 dark:text-blue-200">
                                <strong>Lớp học:</strong> 
                                <?php
                                    $selectedCourse = collect($courses)->firstWhere('id', $selectedCourseId);
                                ?>
                                <?php echo e($selectedCourse->course_name ?? 'N/A'); ?>

                            </div>
                        </div>
                        
                        <button wire:click="assignStudentsToCourse" 
                            class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition-all duration-300 flex items-center justify-center">
                            <?php if (isset($component)) { $__componentOriginal9c2dfd6cb98f4df18e26d1694500af11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c2dfd6cb98f4df18e26d1694500af11 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.check','data' => ['class' => 'w-5 h-5 mr-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-2']); ?>
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
                            Xác nhận xếp lớp
                        </button>
                    </div>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>

</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/management/class-assignment.blade.php ENDPATH**/ ?>