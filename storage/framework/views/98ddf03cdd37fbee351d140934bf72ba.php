<div>
    
    <div class="theme-header-pink">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="header-content">
                <div class="flex items-center space-x-2 sm:space-x-3 mb-2">
                    <div class="header-icon">
                        <?php if (isset($component)) { $__componentOriginal7060d3090e71064d97cc826295a8c670 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7060d3090e71064d97cc826295a8c670 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.queue-list','data' => ['class' => 'size-12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.queue-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-12']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7060d3090e71064d97cc826295a8c670)): ?>
<?php $attributes = $__attributesOriginal7060d3090e71064d97cc826295a8c670; ?>
<?php unset($__attributesOriginal7060d3090e71064d97cc826295a8c670); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7060d3090e71064d97cc826295a8c670)): ?>
<?php $component = $__componentOriginal7060d3090e71064d97cc826295a8c670; ?>
<?php unset($__componentOriginal7060d3090e71064d97cc826295a8c670); ?>
<?php endif; ?>
                    </div>
                    <div>
                        <h1 class="header-title">Lớp học của tôi</h1>
                        <p class="header-subtitle">Quản lý các lớp học của tôi</p>
                    </div>
                </div>
                <div class="header-breadcrumbs">
                    <a href="<?php echo e(route('dashboard')); ?>">Bảng điều khiển</a>
                    <svg fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Lớp học của tôi</span>
                </div>
            </div>
        </div>
    </div>

    

    
    <div class="mb-6">
        <div class="border-b border-gray-200 dark:border-gray-700">
            
            <nav class="-mb-px hidden sm:flex space-x-8">
                <button wire:click="setActiveTab('schedule')"
                    class="py-2 px-1 border-b-2 font-medium text-sm transition-colors duration-200 <?php echo e($activeTab === 'schedule' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300'); ?>">
                    <div class="flex items-center space-x-2">
                        <?php if (isset($component)) { $__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.calendar','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.calendar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db)): ?>
<?php $attributes = $__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db; ?>
<?php unset($__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db)): ?>
<?php $component = $__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db; ?>
<?php unset($__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db); ?>
<?php endif; ?>
                        <span>Lịch dạy hôm nay</span>
                    </div>
                </button>
                <button wire:click="setActiveTab('courses')"
                    class="py-2 px-1 border-b-2 font-medium text-sm transition-colors duration-200 <?php echo e($activeTab === 'courses' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300'); ?>">
                    <div class="flex items-center space-x-2">
                        <?php if (isset($component)) { $__componentOriginale0880cb6488d85d9ca54288aa080a834 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0880cb6488d85d9ca54288aa080a834 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.academic-cap','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
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
                        <span>Lớp của tôi</span>
                    </div>
                </button>

                <!--[if BLOCK]><![endif]--><?php if($selectedCourse): ?>
                    <button wire:click="setActiveTab('class-list')"
                        class="py-2 px-1 border-b-2 font-medium text-sm transition-colors duration-200 <?php echo e($activeTab === 'class-list' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300'); ?>">
                        <div class="flex items-center space-x-2">
                            <?php if (isset($component)) { $__componentOriginaldeeed84ca4f29f425b89c454233ef87a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldeeed84ca4f29f425b89c454233ef87a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.user-group','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.user-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldeeed84ca4f29f425b89c454233ef87a)): ?>
<?php $attributes = $__attributesOriginaldeeed84ca4f29f425b89c454233ef87a; ?>
<?php unset($__attributesOriginaldeeed84ca4f29f425b89c454233ef87a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldeeed84ca4f29f425b89c454233ef87a)): ?>
<?php $component = $__componentOriginaldeeed84ca4f29f425b89c454233ef87a; ?>
<?php unset($__componentOriginaldeeed84ca4f29f425b89c454233ef87a); ?>
<?php endif; ?>
                            <span>Danh sách học viên</span>
                        </div>
                    </button>
                    <button wire:click="setActiveTab('attendance-history')"
                        class="py-2 px-1 border-b-2 font-medium text-sm transition-colors duration-200 <?php echo e($activeTab === 'attendance-history' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300'); ?>">
                        <div class="flex items-center space-x-2">
                            <?php if (isset($component)) { $__componentOriginal99e1287553cbf55f278732425b3f00bd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal99e1287553cbf55f278732425b3f00bd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.check-circle','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.check-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
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
                            <span>Lịch sử điểm danh</span>
                        </div>
                    </button>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </nav>

            
            <nav class="-mb-px grid grid-cols-2 gap-2 sm:hidden">
                <button wire:click="setActiveTab('schedule')"
                    class="py-3 px-3 border-b-2 font-medium text-sm transition-colors duration-200 <?php echo e($activeTab === 'schedule' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300'); ?>">
                    <div class="flex items-center justify-center space-x-2">
                        <?php if (isset($component)) { $__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.calendar','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.calendar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db)): ?>
<?php $attributes = $__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db; ?>
<?php unset($__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db)): ?>
<?php $component = $__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db; ?>
<?php unset($__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db); ?>
<?php endif; ?>
                        <span>Lịch hôm nay</span>
                    </div>
                </button>
                <button wire:click="setActiveTab('courses')"
                    class="py-3 px-3 border-b-2 font-medium text-sm transition-colors duration-200 <?php echo e($activeTab === 'courses' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300'); ?>">
                    <div class="flex items-center justify-center space-x-2">
                        <?php if (isset($component)) { $__componentOriginale0880cb6488d85d9ca54288aa080a834 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0880cb6488d85d9ca54288aa080a834 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.academic-cap','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
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
                        <span>Lớp của tôi</span>
                    </div>
                </button>

                <!--[if BLOCK]><![endif]--><?php if($selectedCourse): ?>
                    <button wire:click="setActiveTab('class-list')"
                        class="py-3 px-3 border-b-2 font-medium text-sm transition-colors duration-200 <?php echo e($activeTab === 'class-list' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300'); ?>">
                        <div class="flex items-center justify-center space-x-2">
                            <?php if (isset($component)) { $__componentOriginaldeeed84ca4f29f425b89c454233ef87a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldeeed84ca4f29f425b89c454233ef87a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.user-group','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.user-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldeeed84ca4f29f425b89c454233ef87a)): ?>
<?php $attributes = $__attributesOriginaldeeed84ca4f29f425b89c454233ef87a; ?>
<?php unset($__attributesOriginaldeeed84ca4f29f425b89c454233ef87a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldeeed84ca4f29f425b89c454233ef87a)): ?>
<?php $component = $__componentOriginaldeeed84ca4f29f425b89c454233ef87a; ?>
<?php unset($__componentOriginaldeeed84ca4f29f425b89c454233ef87a); ?>
<?php endif; ?>
                            <span>Học viên</span>
                        </div>
                    </button>
                    <button wire:click="setActiveTab('attendance-history')"
                        class="py-3 px-3 border-b-2 font-medium text-sm transition-colors duration-200 <?php echo e($activeTab === 'attendance-history' ? 'border-pink-500 text-pink-600 dark:text-pink-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300'); ?>">
                        <div class="flex items-center justify-center space-x-2">
                            <?php if (isset($component)) { $__componentOriginal99e1287553cbf55f278732425b3f00bd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal99e1287553cbf55f278732425b3f00bd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.check-circle','data' => ['class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.check-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
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
                            <span>Điểm danh</span>
                        </div>
                    </button>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </nav>
        </div>
    </div>

    
    <div class="mt-6">
        
        <!--[if BLOCK]><![endif]--><?php if($activeTab === 'schedule'): ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('back.general.course.schedule-courses', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1131244438-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('back.general.course.attendance-students', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1131244438-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        
        <!--[if BLOCK]><![endif]--><?php if($activeTab === 'courses'): ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('back.general.course.my-courses', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1131244438-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


        
        <!--[if BLOCK]><![endif]--><?php if($activeTab === 'class-list'): ?>
            
            <div class="theme-header-pink mb-6">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-3 sm:space-y-0">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-pink-100 dark:bg-pink-900 rounded-lg flex items-center justify-center">
                            <?php if (isset($component)) { $__componentOriginale0880cb6488d85d9ca54288aa080a834 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0880cb6488d85d9ca54288aa080a834 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.academic-cap','data' => ['class' => 'w-5 h-5 text-pink-600 dark:text-pink-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-pink-600 dark:text-pink-400']); ?>
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
                            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Mã lớp:
                                <?php echo e($selectedCourse->name); ?></h2>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Môn:
                                <?php echo e($selectedCourse->subject->name ?? 'Chưa xác định'); ?></p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 text-sm">
                        <div class="flex items-center space-x-2">
                            <?php if (isset($component)) { $__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.calendar','data' => ['class' => 'w-4 h-4 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.calendar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db)): ?>
<?php $attributes = $__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db; ?>
<?php unset($__attributesOriginalf48bb55ce6fd23a8de595ceefa5f14db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db)): ?>
<?php $component = $__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db; ?>
<?php unset($__componentOriginalf48bb55ce6fd23a8de595ceefa5f14db); ?>
<?php endif; ?>
                            <span class="text-gray-600 dark:text-gray-400">Mùa học:
                                <?php echo e($selectedCourse->season->name); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="theme-table-pink">
                
                <div class="hidden md:block overflow-x-auto">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th>Họ và tên</th>
                                <th class="text-center">Số điện thoại</th>
                                <th class="text-center">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $classStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($i + 1); ?></td>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="<?php echo e($student->detail?->avatar ?? asset('images/default-avatar.png')); ?>"
                                                alt="<?php echo e($student->name); ?>">
                                            <div>
                                                <div class="font-medium"><?php echo e($student->name); ?></div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                                    <?php echo e($student->account_code); ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center"><?php echo e($student->detail->phone); ?></td>
                                    <td class="text-center"><?php echo e($student->email); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4" class="text-center">Không có học viên</td>
                                </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                </div>

                
                <div class="md:hidden space-y-3">
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $classStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm" 
                             x-data="{ expanded: false }" 
                             wire:key="student-mobile-<?php echo e($student->id); ?>">
                            
                            
                            <div class="p-4 flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="<?php echo e($student->detail?->avatar ?? asset('images/default-avatar.png')); ?>"
                                        alt="<?php echo e($student->name); ?>">
                                    <div>
                                        <div class="font-medium text-gray-900 dark:text-white"><?php echo e($student->name); ?></div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">ID: <?php echo e($student->account_code); ?></div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-medium text-gray-600 dark:text-gray-400">#<?php echo e($i + 1); ?></span>
                                    
                                    <button @click="expanded = !expanded" 
                                            class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg class="w-5 h-5 text-gray-400" 
                                             :class="{ 'rotate-180': expanded }" 
                                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            
                            <div x-show="expanded" 
                                 class="border-t border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
                                
                                <div class="p-4 space-y-3">
                                   
                                    
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Số điện thoại:</span>
                                        <span class="text-sm text-gray-900 dark:text-white"><?php echo e($student->detail->phone ?? 'Chưa cập nhật'); ?></span>
                                    </div>

                                    
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Email:</span>
                                        <span class="text-sm text-gray-900 dark:text-white break-all"><?php echo e($student->email); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-8">
                            <div class="empty-state flex flex-col items-center">
                                <?php if (isset($component)) { $__componentOriginaldeeed84ca4f29f425b89c454233ef87a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldeeed84ca4f29f425b89c454233ef87a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.user-group','data' => ['class' => 'w-12 h-12 mb-4 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.user-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mb-4 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldeeed84ca4f29f425b89c454233ef87a)): ?>
<?php $attributes = $__attributesOriginaldeeed84ca4f29f425b89c454233ef87a; ?>
<?php unset($__attributesOriginaldeeed84ca4f29f425b89c454233ef87a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldeeed84ca4f29f425b89c454233ef87a)): ?>
<?php $component = $__componentOriginaldeeed84ca4f29f425b89c454233ef87a; ?>
<?php unset($__componentOriginaldeeed84ca4f29f425b89c454233ef87a); ?>
<?php endif; ?>
                                <h3 class="text-lg font-medium mb-2 text-gray-500">
                                    Không có học viên
                                </h3>
                                <p class="text-gray-400">
                                    Hiện tại lớp học này chưa có học viên nào
                                </p>
                            </div>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        
        <!--[if BLOCK]><![endif]--><?php if($activeTab === 'attendance-history'): ?>
            <div class="theme-table-pink">
                
                <div class="hidden md:block overflow-x-auto">
                    <table style="table-layout: fixed; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center sticky left-0 bg-white dark:bg-gray-800 z-10"
                                    style="width: 60px;">STT</th>
                                <th class="text-center sticky left-[60px] bg-white dark:bg-gray-800 z-10"
                                    style="min-width: 250px !important; width: 250px !important;">Họ và tên</th>
                                <th class="text-center sticky left-[310px] bg-white dark:bg-gray-800 z-10"
                                    style="width: 80px;">Tổng</th>
                                <th class="text-center sticky left-[390px] bg-white dark:bg-gray-800 z-10"
                                    style="width: 80px;">Vắng(%)</th>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $classScheduleDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <th class="text-center text-xs" style="width: 60px;">
                                        <?php echo e(\Carbon\Carbon::parse($date)->format('d/m')); ?>

                                    </th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </tr>
                        </thead>
                        <tbody>
                            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $attendanceHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center sticky left-0 bg-white dark:bg-gray-800 z-10"
                                        style="width: 60px;"><?php echo e($i + 1); ?></td>
                                    <td class="sticky left-[60px] bg-white dark:bg-gray-800 z-10"
                                        style="min-width: 250px !important; width: 250px !important;">
                                        <div class="flex items-center gap-3">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="<?php echo e($attendance['student']->detail?->avatar ?? asset('images/default-avatar.png')); ?>"
                                                alt="<?php echo e($attendance['student']->name); ?>">
                                            <div>
                                                <div class="font-medium text-sm"><?php echo e($attendance['student']->name); ?>

                                                </div>
                                                <div class="text-xs text-gray-500 dark:text-gray-400">ID:
                                                    <?php echo e($attendance['student']->account_code); ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center sticky left-[310px] bg-white dark:bg-gray-800 z-10"
                                        style="width: 80px;"><?php echo e($attendance['attendance_count']); ?>/24</td>
                                    <td class="text-center sticky left-[390px] bg-white dark:bg-gray-800 z-10"
                                        style="width: 80px;">
                                        <span
                                            class="px-2 py-1 text-xs rounded-full <?php echo e($attendance['absent_percentage'] > 20 ? 'bg-red-100 text-red-800' : ($attendance['absent_percentage'] > 10 ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800')); ?>">
                                            <?php echo e($attendance['absent_percentage']); ?>%
                                        </span>
                                    </td>
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $classScheduleDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <td class="text-center">
                                            <!--[if BLOCK]><![endif]--><?php if($attendance['attendances'][$date] !== null): ?>
                                                <!--[if BLOCK]><![endif]--><?php if($attendance['attendances'][$date] === 'present'): ?>
                                                    <span
                                                        class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-700  rounded-full">
                                                        P
                                                    </span>
                                                <?php else: ?>
                                                    <span
                                                        class="inline-flex items-center px-2 py-1 text-xs font-medium text-rose-500  rounded-full">
                                                        A
                                                    </span>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            <?php else: ?>
                                                <span
                                                    class="inline-flex items-center px-2 py-1 text-xs font-medium text-gray-800 rounded-full">
                                                    <?php if (isset($component)) { $__componentOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.minus','data' => ['class' => 'w-3 h-3 mr-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.minus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 mr-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50)): ?>
<?php $attributes = $__attributesOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50; ?>
<?php unset($__attributesOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50)): ?>
<?php $component = $__componentOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50; ?>
<?php unset($__componentOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50); ?>
<?php endif; ?>
                                                </span>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="<?php echo e(5 + count($classScheduleDates)); ?>" class="text-center py-8">
                                        <div class="flex flex-col items-center space-y-2">
                                            <?php if (isset($component)) { $__componentOriginaldeeed84ca4f29f425b89c454233ef87a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldeeed84ca4f29f425b89c454233ef87a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.user-group','data' => ['class' => 'w-12 h-12 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.user-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldeeed84ca4f29f425b89c454233ef87a)): ?>
<?php $attributes = $__attributesOriginaldeeed84ca4f29f425b89c454233ef87a; ?>
<?php unset($__attributesOriginaldeeed84ca4f29f425b89c454233ef87a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldeeed84ca4f29f425b89c454233ef87a)): ?>
<?php $component = $__componentOriginaldeeed84ca4f29f425b89c454233ef87a; ?>
<?php unset($__componentOriginaldeeed84ca4f29f425b89c454233ef87a); ?>
<?php endif; ?>
                                            <p class="text-gray-500">Chưa có dữ liệu điểm danh</p>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                </div>

                
                <div class="md:hidden space-y-3">
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $attendanceHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm" 
                             x-data="{ expanded: false }" 
                             wire:key="attendance-mobile-<?php echo e($attendance['student']->id); ?>">
                            
                            
                            <div class="p-4 flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="<?php echo e($attendance['student']->detail?->avatar ?? asset('images/default-avatar.png')); ?>"
                                        alt="<?php echo e($attendance['student']->name); ?>">
                                    <div>
                                        <div class="font-medium text-gray-900 dark:text-white"><?php echo e($attendance['student']->name); ?></div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">ID: <?php echo e($attendance['student']->account_code); ?></div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-2">
                                    <div class="text-right">
                                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                                            <?php echo e($attendance['attendance_count']); ?>/24 buổi
                                        </div>
                                        <span class="px-2 py-1 text-xs rounded-full <?php echo e($attendance['absent_percentage'] > 20 ? 'bg-red-100 text-red-800' : ($attendance['absent_percentage'] > 10 ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800')); ?>">
                                            <?php echo e($attendance['absent_percentage']); ?>% vắng
                                        </span>
                                    </div>
                                    
                                    <button @click="expanded = !expanded" 
                                            class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg class="w-5 h-5 text-gray-400" 
                                             :class="{ 'rotate-180': expanded }" 
                                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            
                            <div x-show="expanded" 
                                 class="border-t border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
                                
                                <div class="p-4">
                                    <div class="mb-3">
                                        <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Chi tiết điểm danh:</h4>
                                    </div>
                                    
                                    <div class="grid grid-cols-4 gap-2">
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $classScheduleDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="text-center">
                                                <div class="text-xs text-gray-500 dark:text-gray-400 mb-1">
                                                    <?php echo e(\Carbon\Carbon::parse($date)->format('d/m')); ?>

                                                </div>
                                                <!--[if BLOCK]><![endif]--><?php if($attendance['attendances'][$date] !== null): ?>
                                                    <!--[if BLOCK]><![endif]--><?php if($attendance['attendances'][$date] === 'present'): ?>
                                                        <span class="inline-flex items-center justify-center w-6 h-6 text-xs text-green-800 bg-green-100 rounded-full">
                                                            <?php if (isset($component)) { $__componentOriginal9c2dfd6cb98f4df18e26d1694500af11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c2dfd6cb98f4df18e26d1694500af11 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.check','data' => ['class' => 'w-3 h-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3']); ?>
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
                                                        </span>
                                                    <?php else: ?>
                                                        <span class="inline-flex items-center justify-center w-6 h-6 text-xs text-red-800 bg-red-100 rounded-full">
                                                            <?php if (isset($component)) { $__componentOriginal155e76c41fe51242bc25d269fabf82f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal155e76c41fe51242bc25d269fabf82f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.x-mark','data' => ['class' => 'w-3 h-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.x-mark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3']); ?>
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
                                                        </span>
                                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                <?php else: ?>
                                                    <span class="inline-flex items-center justify-center w-6 h-6 text-xs text-gray-800 bg-gray-100 rounded-full">
                                                        <?php if (isset($component)) { $__componentOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.minus','data' => ['class' => 'w-3 h-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.minus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50)): ?>
<?php $attributes = $__attributesOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50; ?>
<?php unset($__attributesOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50)): ?>
<?php $component = $__componentOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50; ?>
<?php unset($__componentOriginal01ef35ccfb2d03cc6412dbe2dc9e1a50); ?>
<?php endif; ?>
                                                    </span>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-8">
                            <div class="empty-state flex flex-col items-center">
                                <?php if (isset($component)) { $__componentOriginaldeeed84ca4f29f425b89c454233ef87a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldeeed84ca4f29f425b89c454233ef87a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.user-group','data' => ['class' => 'w-12 h-12 mb-4 text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.user-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mb-4 text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldeeed84ca4f29f425b89c454233ef87a)): ?>
<?php $attributes = $__attributesOriginaldeeed84ca4f29f425b89c454233ef87a; ?>
<?php unset($__attributesOriginaldeeed84ca4f29f425b89c454233ef87a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldeeed84ca4f29f425b89c454233ef87a)): ?>
<?php $component = $__componentOriginaldeeed84ca4f29f425b89c454233ef87a; ?>
<?php unset($__componentOriginaldeeed84ca4f29f425b89c454233ef87a); ?>
<?php endif; ?>
                                <h3 class="text-lg font-medium mb-2 text-gray-500">
                                    Chưa có dữ liệu điểm danh
                                </h3>
                                <p class="text-gray-400">
                                    Hiện tại chưa có dữ liệu điểm danh cho lớp học này
                                </p>
                            </div>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    </div>

</div>
<?php /**PATH /Users/smyth/Herd/ap.icy.edu.vn/resources/views/livewire/back/general/course/layout-course.blade.php ENDPATH**/ ?>