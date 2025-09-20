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
                    <span><?php echo e(count($students)); ?> <?php echo e($userType === 'student' ? 'học viên chưa xếp lớp' : 'giáo viên/BOD'); ?></span>
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
                    <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">Bộ lọc</h3>
                    <p class="text-pink-600 dark:text-pink-400 text-xs">Lọc học viên và lớp học phù hợp</p>
                </div>
            </div>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div>
                    <label class="card-label">👥 Loại người dùng</label>
                    <select wire:model.live="userType" class="card-input">
                        <option value="student">Học viên</option>
                        <option value="teacher">Giáo viên & BOD</option>
                    </select>
                </div>
                <div>
                    <label class="card-label">🔍 Tìm kiếm <?php echo e($userType === 'student' ? 'học viên' : 'giáo viên'); ?></label>
                    <input type="text" wire:model.live="searchStudent" placeholder="Tìm theo tên hoặc mã số..."
                        class="card-input">
                </div>
                <div>
                    <label class="card-label">🏢 Cơ sở</label>
                    <select wire:model.live="filterLocationId" class="card-input">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($location['id']); ?>"><?php echo e($location['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>
                <div>
                    <label class="card-label">📅 Mùa học</label>
                    <select wire:model.live="filterSeasonId" class="card-input">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($season['id']); ?>"><?php echo e($season['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>
                <div>
                    <label class="card-label">📚 Chương trình</label>
                    <select wire:model.live="filterProgramId" class="card-input">
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($program['id']); ?>"><?php echo e($program['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-start">

        
        <div class="space-y-4 flex flex-col h-full">
            <div class="theme-card-pink flex-1 flex flex-col">
                <div class="card-header">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
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
                                <h3 class="text-lg font-bold text-pink-600 dark:text-pink-400">
                                    <?php echo e($userType === 'student' ? 'Học viên chưa xếp lớp' : 'Giáo viên & BOD'); ?>

                                </h3>
                                <p class="text-pink-600 dark:text-pink-400 text-xs">
                                    <?php echo e($userType === 'student' ? 'Học viên đã đóng học phí nhưng chưa được xếp lớp' : 'Giáo viên và Ban điều hành có thể được gán vào lớp'); ?>

                                </p>
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
                <div class="p-6 flex-1 flex flex-col">
                    <!--[if BLOCK]><![endif]--><?php if(count($students) > 0): ?>
                        <div class="space-y-2 flex-1 overflow-y-auto" id="students-container">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="student-card flex items-center space-x-3 p-3 rounded-lg border border-gray-200 dark:border-gray-700 
                                    bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-200 cursor-move select-none"
                                    draggable="true" data-student-id="<?php echo e($student->id); ?>"
                                    data-student-name="<?php echo e($student->name); ?>"
                                    style="user-select: none; -webkit-user-drag: element;">

                                    <div class="drag-handle text-gray-400 hover:text-gray-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M7 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM7 8a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM7 14a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM13 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM13 8a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM13 14a2 2 0 1 0 0 4 2 2 0 0 0 0-4z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="flex-1">
                                        <div class="flex items-center space-x-2">
                                            <div class="font-medium text-gray-900 dark:text-white"><?php echo e($student->name); ?></div>
                                            <!--[if BLOCK]><![endif]--><?php if($userType === 'teacher'): ?>
                                                
                                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium
                                                    <?php echo e($student->role_name === 'TEACHER' ? 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200' : 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200'); ?>">
                                                    <?php echo e($student->role_name === 'TEACHER' ? 'Giáo viên' : 'BOD'); ?>

                                                </span>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">
                                            Mã số: <?php echo e($student->account_code); ?> |
                                            SĐT: <?php echo e($student->phone ?? 'Chưa cập nhật'); ?>

                                        </div>
                                        <!--[if BLOCK]><![endif]--><?php if($userType === 'student'): ?>
                                            <div class="text-xs text-gray-400 dark:text-gray-500">
                                                Đóng học phí: <?php echo e(number_format($student->price, 0, ',', '.')); ?> VNĐ
                                            </div>
                                      
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>

                                    <div class="text-xs text-blue-600 dark:text-blue-400 font-medium">
                                        Kéo vào lớp
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    <?php else: ?>
                        <div class="text-center py-8 flex-1 flex flex-col justify-center">
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
                            <p class="text-lg font-medium text-gray-500 dark:text-gray-400">
                                <?php echo e($userType === 'student' ? 'Không có học viên nào' : 'Không có giáo viên/BOD nào'); ?>

                            </p>
                            <p class="text-sm text-gray-400 dark:text-gray-500">
                                <?php echo e($userType === 'student' ? 'Tất cả học viên đã được xếp lớp hoặc chưa đóng học phí' : 'Không có giáo viên hoặc BOD nào phù hợp với bộ lọc hiện tại'); ?>

                            </p>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>

        
        <div class="space-y-4 flex flex-col h-full">
            <div class="theme-card-pink flex-1 flex flex-col">
                <div class="card-header">
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-8 h-8 bg-pink-200 dark:bg-pink-800/30 rounded-lg flex items-center justify-center">
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
                            <p class="text-pink-600 dark:text-pink-400 text-xs">Các lớp học đang hoạt động hoặc sắp mở
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <!--[if BLOCK]><![endif]--><?php if(count($courses) > 0): ?>
                        <div class="space-y-3 flex-1 overflow-y-auto" id="courses-container">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="course-drop-zone p-3 rounded-lg border-2 border-dashed border-gray-300 dark:border-gray-600 
                                    bg-white dark:bg-gray-800 hover:border-green-400 hover:bg-green-50 dark:hover:bg-green-900/20 transition-all duration-200"
                                    data-course-id="<?php echo e($course->id); ?>"
                                    data-course-name="<?php echo e($course->course_name); ?>">

                                    <div class="flex items-center space-x-3">
                                        <div class="drop-icon text-gray-400">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                        </div>

                                        <div class="flex-1">
                                            <div class="font-medium text-gray-900 dark:text-white">
                                                <?php echo e($course->course_name); ?></div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">
                                                <?php echo e($course->subject_name); ?> | <?php echo e($course->location_name); ?>

                                            </div>
                                            <div class="text-xs text-gray-400 dark:text-gray-500">
                                                Mùa: <?php echo e($course->season_name); ?>

                                                <span
                                                    class="ml-2 px-2 py-1 rounded-full text-xs 
                                                    <?php echo e($course->season_status === 'ongoing' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'); ?>">
                                                    <?php echo e($course->season_status === 'ongoing' ? 'Đang hoạt động' : 'Sắp mở'); ?>

                                                </span>
                                            </div>
                                        </div>

                                        <div class="text-xs text-green-600 dark:text-green-400 font-medium">
                                            Thả học viên vào đây
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    <?php else: ?>
                        <div class="text-center py-8 flex-1 flex flex-col justify-center">
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
                            <p class="text-sm text-gray-400 dark:text-gray-500">Không có lớp học nào phù hợp với bộ lọc
                                hiện tại</p>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>


        </div>
    </div>

    <script>
        // Global variables for drag and drop
        let draggedStudentId = null;
        let draggedStudentName = null;

        // Initialize drag and drop functionality
        function initializeDragAndDrop() {
            console.log('Initializing drag and drop...');
            
            // Make student cards draggable
            document.addEventListener('dragstart', function(e) {
                if (e.target.classList.contains('student-card')) {
                    draggedStudentId = e.target.dataset.studentId;
                    draggedStudentName = e.target.dataset.studentName;
                    e.target.style.opacity = '0.5';

                    // Set drag effect
                    e.dataTransfer.effectAllowed = 'move';
                    e.dataTransfer.setData('text/html', e.target.outerHTML);

                    console.log('Drag started:', draggedStudentId, draggedStudentName);
                }
            });

            document.addEventListener('dragend', function(e) {
                if (e.target.classList.contains('student-card')) {
                    e.target.style.opacity = '1';
                }
            });

            // Make course drop zones droppable
            document.addEventListener('dragover', function(e) {
                if (e.target.closest('.course-drop-zone')) {
                    e.preventDefault();
                    e.dataTransfer.dropEffect = 'move';
                    e.target.closest('.course-drop-zone').classList.add('drag-over');
                }
            });

            document.addEventListener('dragleave', function(e) {
                if (e.target.closest('.course-drop-zone')) {
                    e.target.closest('.course-drop-zone').classList.remove('drag-over');
                }
            });

            document.addEventListener('drop', function(e) {
                e.preventDefault();

                if (e.target.closest('.course-drop-zone')) {
                    const dropZone = e.target.closest('.course-drop-zone');
                    dropZone.classList.remove('drag-over');

                    if (draggedStudentId && draggedStudentName) {
                        const courseId = dropZone.dataset.courseId;
                        const courseName = dropZone.dataset.courseName;

                        console.log('Drop event:', {
                            studentId: draggedStudentId,
                            studentName: draggedStudentName,
                            courseId: courseId,
                            courseName: courseName
                        });

                        // Dispatch event based on user type
                        if ('<?php echo e($userType); ?>' === 'student') {
                            Livewire.dispatch('assign-student-to-course', {
                                studentId: draggedStudentId,
                                courseId: courseId
                            });
                        } else {
                            Livewire.dispatch('assign-teacher-to-course', {
                                teacherId: draggedStudentId,
                                courseId: courseId
                            });
                        }
                    }

                    // Reset dragged data
                    draggedStudentId = null;
                    draggedStudentName = null;
                }
            });

            // Prevent default drag behavior on document
            document.addEventListener('dragover', function(e) {
                e.preventDefault();
            });

            document.addEventListener('drop', function(e) {
                e.preventDefault();
            });
        }

        // Initialize when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initializeDragAndDrop);
        } else {
            initializeDragAndDrop();
        }

        // Re-initialize when Livewire updates the DOM
        document.addEventListener('livewire:navigated', initializeDragAndDrop);
        document.addEventListener('livewire:updated', initializeDragAndDrop);
    </script>

    <style>
        /* Drag and Drop Styles */
        .drag-over {
            border-color: #10b981 !important;
            background-color: #ecfdf5 !important;
            transform: scale(1.02);
            transition: all 0.2s ease;
        }
        
        /* Enhanced drag handle */
        .drag-handle {
            cursor: grab;
            transition: all 0.2s ease;
        }
        
        .drag-handle:active {
            cursor: grabbing;
        }
        
        .drag-handle:hover {
            color: #6b7280;
            transform: scale(1.1);
        }
        
        /* Course drop zone enhancements */
        .course-drop-zone {
            transition: all 0.3s ease;
            position: relative;
        }
        
        .course-drop-zone:hover {
            border-color: #10b981;
            background-color: #f0fdf4;
        }
        
        .course-drop-zone::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 2px dashed transparent;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        
        .course-drop-zone.drag-over::before {
            border-color: #10b981;
            background-color: rgba(16, 185, 129, 0.1);
        }
    </style>

</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/arrangement/class-assignment.blade.php ENDPATH**/ ?>